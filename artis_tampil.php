<?php

$artis = new App\Artis();

$rows = $artis->tampil();


?>

<h2>Daftar Artis</h2>

<p>
    <tr>
        <th>
		    <a href="index.php?page=artis_input"><input type="button" value="Tambah"></a>
	    </th>
    </tr>
</p>
    <table>
        <tr>
            <th>NO</th>
            <th>Nama Artis</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($rows as $row) { ?>
        <tr>
            <td><?php echo $row['artist_id']; ?></td>
            <td><?php echo $row['artist_name']; ?></td>
            <td><a href="index.php?page=artis_edit&id=<?php echo $row['artist_id']; ?>">Edit</a>
            <a href="artis_proses.php?hapus_data=<?php echo $row['artist_id']; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data?')">Hapus</a></td>
        </tr>
<?php } ?>
    </table>