<?php
$album = new App\Album();
$artis = new App\Artis();

$id = $_GET['id'];

$row1 = $album->edit($id);
$rows2 = $artis->tampil($id);

?>

<h2>Edit Daftar Album</h2>

<p>
	<a href="index.php?page=album_tampil">Kembali</a>
</p>

<form action="album_proses.php" method="POST">
	<input type="hidden" name="album_id" value="<?php echo $id; ?>">  <!--dalam bentuk input tetapi tidak ditampilkan dalam browser-->
	<table>
		<tr>
			<td>Nama Artis</td>
			<td>
                <select name="i_id_artis">
                    <?php foreach ($rows2 as $row) { ?>
                        <option value="<?php echo $row['artist_id']; ?>"><?php echo $row['artist_name']; ?></option>
                    <?php } ?>
                </select>
            </td>
		</tr>
        <tr>
			<td>Nama Album</td>
			<td><input type="text" name="i_nama" value="<?php echo $row1['album_name'] ?>"></td>
		</tr>
		<tr>
        <td></td>
        <td><input type="submit" name="btn_edit" value="UPDATE"></td>
    </tr>
	</table>

	
</form>