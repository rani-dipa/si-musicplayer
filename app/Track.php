<?php

namespace App;

class Track extends Koneksi{

    public function __construct ()
    {
        parent::__construct();
    }

    public function tampil()
    {
        $sql = "SELECT tb_track.*, tb_artist.*, tb_album.* FROM tb_track, tb_artist, tb_album WHERE tb_track.artist_id=tb_artist.artist_id AND tb_track.album_id=tb_album.album_id";
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
        $id_artis = $_POST['i_id_artis'];
        $id_album = $_POST['i_id_album'];
        $waktu = $_POST['i_waktu'];

        $sql = "INSERT INTO tb_track VALUES(NULL, track_name, :artist_id, :album_id, :waktu)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":track_name", $nama);
        $stmt->bindParam(":artist_id", $id_artis);
        $stmt->bindParam(":album_id", $id_album);
        $stmt->bindParam(":waktu", $waktu);
        $stmt->execute();
    }

    public function edit($id){

        $stmt = $this->db->prepare("SELECT tb_track.*, tb_artist.*, tb_album.* FROM tb_track, tb_artist, tb_album WHERE track_id=:track_id");
        $stmt->bindParam(":track_id", $id);
        $stmt->execute();

        $row = $stmt->fetch();
        return $row;
    }

    public function update(){

        $nama = $_POST['i_nama'];
        $id_artis = $_POST['i_id_artis'];
        $id_album = $_POST['i_id_album'];
        $waktu = $_POST['i_waktu'];
        $waktu = $_POST['i_waktu'];
        $track_id = $_POST['track_id'];

       $sql = "UPDATE tb_track SET track_name=:track_name, artist_id=:artist_id, album_id=:album_id, waktu=:waktu WHERE track_id=:track_id";

        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":track_name", $nama);
        $stmt->bindParam(":artist_id", $id_artis);
        $stmt->bindParam(":album_id", $id_album);
        $stmt->bindParam(":waktu", $waktu);
        $stmt->bindParam(":track_id", $track_id);
        $stmt->execute();

    }

    public function delete(){
 		
        $delete = $_GET['hapus_data'];
        $stmt = $this->db->prepare("DELETE FROM tb_track WHERE track_id=:track_id");

        $stmt->bindParam(":track_id", $delete);
        $stmt->execute();
    }

}