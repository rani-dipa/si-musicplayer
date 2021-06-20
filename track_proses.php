<?php

require_once "inc/config.php";

$track = new App\Track();

if (isset($_POST['btn_input'])) {
    $track->input();
    header("location:index.php?page=track_tampil");
}

if (isset($_POST['btn_edit'])) {
    $track->update();
    header("location:index.php?page=track_tampil");
}

if (isset($_GET['hapus_data'])) {
    $track->delete();
    header("location:index.php?page=track_tampil");
}