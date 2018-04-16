<?php

echo form_open_multipart('blogger/create')
?>

<div class="container">
<!-- <?php 
	/*echo validation_errors();
	echo form_open('Blog/create')*/
?> -->
<h3 align="center">Tambah Data </h3><br>
Judul : <input type="text" class="form-control" name="judul"><br>
Tanggal : <input type="date" class="form-control" name="tgl"><br>
Author : <input type="text" class="form-control" name="author"><br>
Konten : <textarea name="konten" class="form-control" style="height:400px;"></textarea><br>
Image : <input type="file" class="form-control" name="Image"><br>
<input type="submit" class="btn btn-defaule" value="add">
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
