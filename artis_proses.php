<?php

require_once "inc/config.php";

$artis = new App\Artis();

if (isset($_POST['btn_input'])) {
    $artis->input();
    header("location:index.php?page=artis_tampil");
}

if (isset($_POST['btn_edit'])) {
    $artis->update();
    header("location:index.php?page=artis_tampil");
}

if (isset($_GET['hapus_data'])) {
    $artis->delete();
    header("location:index.php?page=artis_tampil");
}