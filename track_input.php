<?php

$artis = new App\Artis();
$album = new App\Album();
$rows = $artis->tampil();
$rows2 = $album->tampil();

?>

<h2>Tambah Judul Lagu</h2>

<p>
	<a href="index.php?page=track_tampil">Kembali</a>
</p>

<form action="track_proses.php" method="POST">
    <table>
        <tr>
            <td>Judul Lagu</td>
            <td><input type="text" name="i_nama"></td>
        </tr>
        <tr>
            <td>Nama Artis</td>
            <td>
                <select name="i_id_artis">
                    <?php foreach ($rows as $row) { ?>
                        <option value="<?php echo $row['artist_id']; ?>"><?php echo $row['artist_name']; ?></option>
                    <?php } ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Nama Album</td>
            <td>
                <select name="i_id_album">
                    <?php foreach ($rows2 as $row2) { ?>
                        <option value="<?php echo $row2['album_id']; ?>"><?php echo $row2['album_name']; ?></option>
                    <?php } ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Durasi</td>
            <td><input type="text" name="i_waktu"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_input" value="SIMPAN"></td>
        </tr>
    </table>
</form>