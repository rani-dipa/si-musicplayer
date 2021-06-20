<?php

$album = new App\Album();

$rows = $album->tampil();


?>

<h2>Daftar Album</h2>

<p>
    <tr>
        <th>
		    <a href="index.php?page=album_input"><input type="button" value="Tambah"></a>
	    </th>
    </tr>
</p>
    <table>
        <tr>
            <th>NO</th>
            <th>Nama Artis</th>
            <th>Album</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($rows as $row) { ?>
        <tr>
            <td><?php echo $row['album_id']; ?></td>
            <td><?php echo $row['artist_id']; ?> - <?php echo $row['artist_name']; ?></td>
            <td><?php echo $row['album_name']; ?></td>
            <td><a href="index.php?page=album_edit&id=<?php echo $row['album_id']; ?>">Edit</a>
            <a href="album_proses.php?hapus_data=<?php echo $row['album_id']; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data?')">Hapus</a></td>
        </tr>
<?php } ?>
    </table>