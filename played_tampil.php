<?php

$played = new App\Played();

$rows = $played->tampil();


?>

<h2>Daftar Pemutaran Lagu</h2>

<p>
    <tr>
        <th>
		    <a href="index.php?page=played_input"><input type="button" value="Tambah"></a>
	    </th>
    </tr>
</p>
    <table>
        <tr>
            <th>NO</th>
            <th>Nama Artis</th>
            <th>Album</th>
            <th>Judul Lagu</th>
        </tr>
        <?php foreach ($rows as $row) { ?>
        <tr>
            <td><?php echo $row['played_id']; ?></td>
            <td><?php echo $row['artist_id']; ?> - <?php echo $row['artist_name']; ?></td>
            <td><?php echo $row['album_id']; ?> - <?php echo $row['album_name']; ?></td>
            <td><?php echo $row['track_id']; ?> - <?php echo $row['track_name']; ?></td>
        </tr>
<?php } ?>
    </table>