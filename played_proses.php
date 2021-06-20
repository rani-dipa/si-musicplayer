<?php

require_once "inc/config.php";

$played = new App\Played();

if (isset($_POST['btn_input'])) {
    $played->input();
    header("location:index.php?page=played_tampil");
}

//if (isset($_POST['btn_edit'])) {
  //  $played->update();
    //header("location:index.php?page=track_tampil");
//}

if (isset($_GET['hapus_data'])) {
    $played->delete();
    header("location:index.php?page=played_tampil");
}