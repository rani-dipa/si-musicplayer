<?php

$track = new App\Track();

$rows = $track->tampil();


?>

<h2>Daftar Track</h2>

<p>
    <tr>
        <th>
		    <a href="index.php?page=track_input"><input type="button" value="Tambah"></a>
	    </th>
    </tr>
</p>
    <table>
        <tr>
            <th>NO</th>
            <th>Judul Lagu</th>
            <th>Artis</th>
            <th>Album</th>
            <th>Durasi</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($rows as $row) { ?>
        <tr>
            <td><?php echo $row['track_id']; ?></td>
            <td><?php echo $row['track_name']; ?></td>
            <td><?php echo $row['artist_id']; ?> - <?php echo $row['artist_name']; ?></td>
            <td><?php echo $row['album_id']; ?> - <?php echo $row['album_name']; ?></td>
            <td><?php echo $row['waktu']; ?></td>
            <td><a href="index.php?page=track_edit&id=<?php echo $row['track_id']; ?>">Edit</a>
            <a href="track_proses.php?hapus_data=<?php echo $row['track_id']; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data?')">Hapus</a></td>
        </tr>
<?php } ?>
    </table>