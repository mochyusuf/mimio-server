<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

	<!-- Main content -->
	<section class="content">

		<div class="col-md-12">
			<!-- general form elements -->
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Sunting Pengendara</h3>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form role="form" novalidate enctype="multipart/form-data" action="<?=base_url()."pengendara/edit"?>" method="post">
					<div class="box-body">
						<input type="hidden" name="id" value="<?=$pengendara_edit[0]['id_pengendara']?>">
						<div class="form-group">
							<label for="">ID Number</label>
							<input type="text" class="form-control" id="username_pengendara" required="required" value="<?=$pengendara_edit[0]['id_nomor_pengendara']?>" disabled readonly>
						</div>
						<div class="form-group">
							<label for="">Password</label>
							<input type="password" class="form-control" id="password_pengendara" placeholder="Masukkan Username" name="password_pengendara">
							<p class="text-light-blue">Kosongkan jika tidak Mengubah Password</p>
						</div>
						<div class="form-group">
							<label for="">Nama</label>
							<input type="text" class="form-control" id="nama_pengendara" placeholder="Masukkan Nama" name="nama_pengendara" required="required" value="<?=$pengendara_edit[0]['nama_pengendara']?>">
						</div>
						<div class="form-group">
							<label for="">Alamat</label>
							<textarea class="form-control" rows="5" id="alamat_pengendara" placeholder="Masukkan Alamat" name="alamat_pengendara" required="required"><?=$pengendara_edit[0]['alamat_pengendara']?></textarea>
						</div>
						<div class="form-group">
							<label for="">Nomor Telepon</label>
							<input type="number" class="form-control" id="nomor_telepon_pengendara" placeholder="Masukkan Nomor Telepon" name="nomor_telepon_pengendara" required="required" value="<?=$pengendara_edit[0]['nomor_telepon_pengendara']?>">
						</div>
						<div class="form-group">
							<div class="row container">
								<label for="file-input">Foto</label>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<img class="img-responsive center" style="max-height:150px" src="<?=base_url().$pengendara_edit[0]['image_pengendara']?>" alt="Photo">
								</div>
								<div class="col-sm-6">
									<div class="fileinput fileinput-new center" data-provides="fileinput">
										<div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"></div>
									<div>
									<span class="btn btn-default btn-file">
										<input type="file" name="image_pengendara" 
											data-validation="mime size"
											data-validation-allowing="jpg, png, gif"
											data-validation-max-size="1024kb"
											data-validation-error-msg-size="Gambar lebih dari 1024kb"
											data-validation-error-msg-mime="File Harus berformat jpg, png dan gif">
										<span class="fileinput-new">
											<div class="text-primary">Pilih Gambar</div>
										</span><p> </p>
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
						</div>
					</div>
					<!-- /.box-body -->

					<div class="box-footer">
						<button type="submit" class="btn btn-primary bg-olive">Sunting</button>
					</div>
				</form>
			</div>
			<!-- /.box -->
		</div>
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->
