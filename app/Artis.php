<?php

namespace App;

class Artis extends Koneksi{

    public function __construct ()
    {
        parent::__construct();
    }

    public function tampil()
    {
        $sql = "SELECT * FROM tb_artist";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $data = [];
        while ($rows = $stmt->fetch()) {
            $data[] = $rows;
        }
        return $data;
    }

    public function input()
    {
        $nama = $_POST['i_nama'];

        $sql = "INSERT INTO tb_artist VALUES(NULL, :artist_name)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":artist_name", $nama);
        $stmt->execute();
    }

    public function edit($id){

        $stmt = $this->db->prepare("SELECT * FROM tb_artist WHERE artist_id=:artist_id");
        $stmt->bindParam(":artist_id", $id);
        $stmt->execute();

        $row = $stmt->fetch();
        return $row;
    }

    public function update(){

        $nama = $_POST['i_nama'];
        $artist_id = $_POST['artist_id'];

       $sql = "UPDATE tb_artist SET artist_name=:artist_name WHERE artist_id=:artist_id";

        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":artist_name", $nama);
        $stmt->bindParam(":artist_id", $artist_id);
        $stmt->execute();

    }

    public function delete(){
 		
        $delete = $_GET['hapus_data'];
        $stmt = $this->db->prepare("DELETE FROM tb_artist WHERE artist_id=:artist_id");

        $stmt->bindParam(":artist_id", $delete);
        $stmt->execute();

    }

}