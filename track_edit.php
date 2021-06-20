<?php
$track = new App\Track();
$artis = new App\Artis();
$album = new App\Album();

$id = $_GET['id'];

$row1 = $track->edit($id);
$rows = $artis->tampil($id);
$rows2 = $album->tampil($id);

?>

<h2>Edit Daftar Judul Lagu</h2>

<p>
	<a href="index.php?page=track_tampil">Kembali</a>
</p>

<form action="track_proses.php" method="POST">
	<input type="hidden" name="track_id" value="<?php echo $id; ?>">  <!--dalam bentuk input tetapi tidak ditampilkan dalam browser-->
	<table>
        <tr>
			<td>Judul Lagu</td>
			<td><input type="text" name="i_nama" value="<?php echo $row1['track_name'] ?>"></td>
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
                    <?php foreach ($rows2 as $row) { ?>
                        <option value="<?php echo $row['album_id']; ?>"><?php echo $row['album_name']; ?></option>
                    <?php } ?>
                </select>
            </td>
		</tr>
        <tr>
			<td>Durasi</td>
			<td><input type="text" name="i_waktu" value="<?php echo $row1['waktu'] ?>"></td>
		</tr>
		<tr>
        <td></td>
        <td><input type="submit" name="btn_edit" value="UPDATE"></td>
    </tr>
	</table>
</form>