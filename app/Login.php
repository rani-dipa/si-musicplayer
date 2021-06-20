<?php

namespace App;

class Login extends Koneksi {

    public function __construct ()
    {
        parent::__construct();
    }

    public function proses()
    {
        $i_username = $_POST['i_username'];
        $i_password = $_POST['i_password'];

        $sql = "SELECT * FROM tb_user WHERE user_nama=:user_nama AND user_password=:user_password";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":user_nama", $i_username);
        $stmt->bindParam(":user_password", $i_password);
        $stmt->execute();

        $row = $stmt->fetch();

        if (!empty($row)) {
            $_SESSION['user_nama'] = $row['user_nama'];
        } else {
            $_SESSION['error'] = "Login error";
        }
    }
}