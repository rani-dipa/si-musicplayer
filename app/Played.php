<?php

namespace App;

class Played extends Koneksi{

    public function __construct ()
    {
        parent::__construct();
    }

    public function tampil()
    {
        $sql = "SELECT tb_played.*, tb_artist.*, tb_album.*, tb_track.* FROM tb_played, tb_artist, tb_album, tb_track WHERE tb_played.artist_id=tb_artist.artist_id AND tb_played.album_id=tb_album.album_id AND tb_played.track_id=tb_track.track_id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $data = [];
        while ($rows = $stmt->fetch()) {
            $data[] = $rows;
        }
        return $data;
    }


}