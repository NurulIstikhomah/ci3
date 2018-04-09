<section class="bg-light" id="insert">
	<div class="container"> </div>

	<div class="row">
		<div class="col-lg-3"></div>

		<div class="col-lg-6">
			<div class="jumbotron">
			<center><h2 class="section-heading text-uppercase"><font face="One Stroke Script LET">Insert</font></h2>
			<font class="section-subheading text-muted">Insert Blog Baru</font></center>
			<br>

			<?php echo form_open_multipart('ci3/insert'); ?>
			<div class="form-group">
				<p>
					<input type="text" class="from-control ins" name="judul" placeholder="Judul" id="judul" required data-validation-required-message="Please enter title."></p>
					<p class="help-block text-danger"></p>
				<p>
					<input type="text" class="from-control ins" name="tgl" placeholder="Tanggal" id="tgl" required data-validation-required-message="Please enter title."></p>
					<p class="help-block text-danger"></p>

				<p>
					<input type="text" class="from-control ins" name="author" placeholder="Author" id="author" required data-validation-required-message="Please enter title."></p>
					<p class="help-block text-danger"></p>

				<p>
					<input type="text" class="from-control ins" name="konten" placeholder="Konten" id="konten" required data-validation-required-message="Please enter title."></p>
					<p class="help-block text-danger"></p>

				<p>
					<input type="file" class="form-control ins" name="userfile" placeholder="Image" id="image"></p>


				<button type="submit" class="btn btn-primary">Insert</button>
				<button type="reset" class="btn btn-primary">Cancel</button>

			</div>
			</div>
		</div>

	</div>


</section>