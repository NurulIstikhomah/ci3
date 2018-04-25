<div class="container">
<!-- <a href="<?php /*echo site_url*/(/*'blogger/tampil'*/)?>">Artikel Baru</a> -->
<table class="table table-hover">
<h2>Post Artikel</h2>
	<tr>
		<td><b>ID</b></td>
		<td><b>Judul</b></td>
		<td><b>Tanggal</b></td>
		<td><b>Author</b></td>
		<td><b>Konten</b></td>
		<td><b>Gambar</b></td>
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
        	/*echo "<td>".$row['gambar']."</td>";*/
        	echo "<td><img src='".base_url().'img/'.$row['gambar']."' width='50px' height='50px'></td>";
        	echo "<td><a href='".site_url('blogger/view/'.$row['id'])."'>Tampil</a></td>";
          echo "<td><a href='".site_url('blogger/edit/'.$row['id'])."'>Edit</a></td>";
          echo "<td><a href='".site_url('blogger/delete/'.$row['id'])."'>Delete</a></td>";
        	echo "</tr>";
        	echo "<td><a href='".site_url('home')."'>Home</a></td>";
		}
?>
</table>
</div>
