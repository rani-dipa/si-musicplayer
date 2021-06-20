<?php

$artis = new App\Artis();
$album = new App\Album();
$track = new App\Track();
$rows = $artis->tampil();
$rows2 = $album->tampil();
$rows3 = $track->tampil();

?>

<h2>Played</h2>

<p>
	<a href="index.php?page=played_tampil">Kembali</a>
</p>

<form action="played_proses.php" method="POST">
    <table>
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
            <td>Judul Lagu</td>
            <td>
                <select name="i_id_lagu">
                    <?php foreach ($rows3 as $row3) { ?>
                        <option value="<?php echo $row3['track_id']; ?>"><?php echo $row3['track_name']; ?></option>
                    <?php } ?>
                </select>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_input" value="SIMPAN"></td>
        </tr>
    </table>
</form>