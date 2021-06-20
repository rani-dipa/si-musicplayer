<?php
$artis = new App\Artis();

$id = $_GET['id'];

$row = $artis->edit($id);

?>

<h2>Edit Daftar Artis</h2>

<p>
	<a href="index.php?page=artis_tampil">Kembali</a>
</p>

<form action="artis_proses.php" method="POST">
	<input type="hidden" name="artist_id" value="<?php echo $id; ?>">  <!--dalam bentuk input tetapi tidak ditampilkan dalam browser-->
	<table>
		<tr>
			<td>Nama Artis</td>
			<td><input type="text" name="i_nama" value="<?php echo $row['artist_name'] ?>"></td>
		</tr>
		<tr>
        <td></td>
        <td><input type="submit" name="btn_edit" value="UPDATE"></td>
    </tr>
	</table>

	
</form>