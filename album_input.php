<?php

$artis = new App\Artis();
$rows = $artis->tampil();

?>

<h2>Tambah Daftar Album</h2>

<p>
	<a href="index.php?page=album_tampil">Kembali</a>
</p>

<form action="album_proses.php" method="POST">
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
            <td><input type="text" name="i_nama"></td>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_input" value="SIMPAN"></td>
        </tr>
    </table>
</form>