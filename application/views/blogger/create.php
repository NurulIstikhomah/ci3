<div class="container">
<?php 
	echo validation_errors();
	echo form_open('blog/create')
?>
Title : <input type="text" class="form-control" name="judul"><br>
Artikel : <textarea name="artikel" class="form-control" style="height:400px;"></textarea><br>
<input type="submit" class="btn btn-defaule" value="add">
</div>