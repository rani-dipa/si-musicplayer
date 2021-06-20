<?php

namespace App;

class Album extends Koneksi{

    public function __construct ()
    {
        parent::__construct();
    }

    public function tampil()
    {
        $sql = "SELECT tb_album.*, tb_artist.* FROM tb_album, tb_artist WHERE tb_album.artist_id=tb_artist.artist_id";
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
        $id_artis = $_POST['i_id_artis'];
        $nama = $_POST['i_nama'];

        $sql = "INSERT INTO tb_album VALUES(NULL, :artist_id, :album_name)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":artist_id", $id_artis);
        $stmt->bindParam(":album_name", $nama);
        $stmt->execute();
    }

    public function edit($id){

        $stmt = $this->db->prepare("SELECT tb_artist.*, tb_album.* FROM tb_artist, tb_album WHERE album_id=:album_id");
        $stmt->bindParam(":album_id", $id);
        $stmt->execute();

        $row = $stmt->fetch();
        return $row;
    }

    public function update(){

        $id_artis = $_POST['i_id_artis'];
        $nama = $_POST['i_nama'];
        $album_id = $_POST['album_id'];

       $sql = "UPDATE tb_album SET artist_id=:artist_id, album_name=:album_name WHERE album_id=:album_id";

        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":artist_id", $id_artis);
        $stmt->bindParam(":album_name", $nama);
        $stmt->bindParam(":album_id", $album_id);
        $stmt->execute();

    }

    public function delete(){
 		
        $delete = $_GET['hapus_data'];
        $stmt = $this->db->prepare("DELETE FROM tb_album WHERE album_id=:album_id");

        $stmt->bindParam(":album_id", $delete);
        $stmt->execute();
    }

}