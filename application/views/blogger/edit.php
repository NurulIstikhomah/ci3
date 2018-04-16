
<?php 
	echo form_open_multipart('blogger/edit/'.$show_article['id']);
?>

<div class="container">
<h3 align="center">Tambah Data </h3><br>
Judul : <input type="text" class="form-control" name="judul" value="<?php echo $show_artikel['judul'] ?>"><br>
Author : <input type="text" class="form-control" name="author" value="<?php echo $show_article['author'] ?>"><br>
Konten : <textarea name="artikel" class="form-control" style="height:400px;"><?php echo $show_artikel['artikel']?></textarea><br>
Gambar : <input type="file" name="userfile" required=""><br>
<input type="submit" class="btn btn-defaule" value="Edit">
</div>

<?php
	if(validation_errors()){
		echo "<div class='alert alert-danger'>
 			  <strong>Danger!</strong>".validation_errors()."
			  </div>"
			  ;
	}
?>
</div>