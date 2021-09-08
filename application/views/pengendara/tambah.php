<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

	<!-- Main content -->
	<section class="content">

		<div class="col-md-12">
			<!-- general form elements -->
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Tambah Pengendara</h3>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form role="form" novalidate enctype="multipart/form-data" action="<?=base_url()."pengendara/add"?>" method="post">
					<div class="box-body">
						<div class="form-group">
							<label for="">ID Number</label>
							<input type="text" class="form-control" id="id_nomor_pengendara" placeholder="Masukkan ID Number" name="id_nomor_pengendara" required="required" data-validation="server" data-validation-url="<?=base_url()?>pengendara/validate_id">
						</div>
						<div class="form-group">
							<label for="">Username</label>
							<input type="text" class="form-control" id="username_pengendara" placeholder="Masukkan Username" name="username_pengendara" required="required" data-validation="server" data-validation-url="<?=base_url()?>pengendara/validate_username">
						</div>
						<div class="form-group">
							<label for="">Password</label>
							<input type="password" class="form-control" id="password_pengendara" placeholder="Masukkan Password" name="password_pengendara" required="required">
						</div>
						<div class="form-group">
							<label for="">Nama</label>
							<input type="text" class="form-control" id="nama_pengendara" placeholder="Masukkan Nama" name="nama_pengendara" required="required">
						</div>
						<div class="form-group">
							<label for="">Alamat</label>
							<textarea class="form-control" rows="5" id="alamat_pengendara" placeholder="Masukkan Alamat" name="alamat_pengendara" required="required"></textarea>
						</div>
						<div class="form-group">
							<label for="">Nomor Telepon</label>
							<input type="number" class="form-control" id="nomor_telepon_pengendara" placeholder="Masukkan Nomor Telepon" name="nomor_telepon_pengendara" required="required">
						</div>
						<div class="form-group">
							<div class="row container">
								<label for="file-input">Foto</label>
							</div>
							<div class="fileinput fileinput-new center" data-provides="fileinput">
								<div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"></div>
								<div>
									<span class="btn btn-default btn-file">
										<input type="file" name="image_pengendara"
										data-validation="mime size" data-validation-allowing="jpg, png, gif" data-validation-max-size="1024kb"
										data-validation-error-msg-size="Gambar lebih dari 1024kb" data-validation-error-msg-mime="File Harus berformat jpg, png dan gif" required="required">
										<span class="fileinput-new">
											<div class="text-primary">Pilih Gambar</div>
										</span>
										<p> </p>
										<span class="fileinput-exists">
											<div class="text-primary">Ganti
											</div>
										</span>
									</span>
									<a href="#" class="btn btn-default btn-file fileinput-exists" data-dismiss="fileinput">Hapus</a>
								</div>
							</div>
						</div>
					</div>
					<!-- /.box-body -->

					<div class="box-footer">
						<button type="submit" class="btn btn-primary bg-olive">Tambah</button>
					</div>
				</form>
			</div>
			<!-- /.box -->
		</div>
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->
