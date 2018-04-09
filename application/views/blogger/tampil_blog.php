<div class="container">
<a href="<?php echo site_url('blog/tampil')?>">Artikel Baru</a>
<table class="table table-hover">
	<tr>
		<td>ID</td>
		<td>Judul</td>
		<td>Tanggal</td>
		<td>Author</td>
		<td>Konten</td>
		<td>Gambar</td>
	</tr>
<?php
foreach ($artikel->result_array() as $row)
		{
			echo "<tr>";
        	echo "<td>".$row['id']."</td>";
        	echo "<td>".$row['judul']."</td>";
        	echo "<td>".$row['tgl']."</td>";
        	echo "<td>".$row['author']."</td>";
        	echo "<td>".$row['konten']."</td>";
        	echo "<td>".$row['gambar']."</td>";
        	echo "<td><a href='".site_url('blog/baca-artikel/'.$row['id'])."'>Tampil</a></td>";
          echo "<td><a href='".site_url('blog/edit/'.$row['id'])."'>Edit</a></td>";
          echo "<td><a href='".site_url('blog/delete/'.$row['id'])."'>Delete</a></td>";
        	echo "</tr>";
		}
?>
</table>
</div>
