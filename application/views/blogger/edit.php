<div class="container">
<?php echo (isset( $upload_error)) ? '<div class="alert alert-warning" role="alert">' .$upload_error. '</div>' : ''; ?>
<?php 
	echo validation_errors();
	echo form_open_multipart('blogger/edit/'.$show_article['id']);
?>
<table class="table table-hover">
	<h2>Post Artikel</h2><br><br>
<tr>
Judul : <input type="text" class="form-control" name="title" value="<?php echo $show_article['title'] ?>"><br><br>
Artikel : <textarea name="artikel" class="form-control" style="height:400px;"><?php echo $show_article['artikel']?></textarea><br><br>
<b>Kategori : <div class="section_room">
                            <select id="country" onchange="change_country(this.value)" class="frm-field required">
                              <option value="null">Pilih Kategori</option>
                              <option value="null">Fiksi</option>         
                              <option value="AX">Non Fiksi</option>
                              <option value="AX">Budaya</option>
                            </select> 
                         </div> <br><br>
<b>File : <input type="file" name="gambar" id="submitBtn"><br><br>
<br>
</tr>
<br>
<input type="submit" class="btn btn-defaule" value="OK">
</div>