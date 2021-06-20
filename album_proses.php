<?php

require_once "inc/config.php";

$album = new App\Album();

if (isset($_POST['btn_input'])) {
    $album->input();
    header("location:index.php?page=album_tampil");
}

if (isset($_POST['btn_edit'])) {
    $album->update();
    header("location:index.php?page=album_tampil");
}

if (isset($_GET['hapus_data'])) {
    $album->delete();
    header("location:index.php?page=album_tampil");
}