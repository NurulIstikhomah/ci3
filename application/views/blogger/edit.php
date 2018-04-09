<div class="container">
<?php 
	echo validation_errors();
	echo form_open('blogger/edit/'.$show_artikel['id']);
?>
Judul : <input type="text" class="form-control" name="judul" value="<?php echo $show_artikel['judul'] ?>"><br>
Artikel : <textarea name="artikel" class="form-control" style="height:400px;"><?php echo $show_artikel['artikel']?></textarea><br>
<input type="submit" class="btn btn-defaule" value="Edit">
</div>