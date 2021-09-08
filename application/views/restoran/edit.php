<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

	<!-- Main content -->
	<section class="content">

		<div class="col-md-12">
			<!-- general form elements -->
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Sunting Restoran</h3>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form role="form" novalidate enctype="multipart/form-data" action="<?=base_url()."restoran/edit"?>" method="post">
					<div class="box-body">
						<input type="hidden" name="id" required="required" value="<?=$restoran_edit[0]['id_restoran']?>">
						<div class="form-group">
							<label for="">Nama</label>
							<input type="text" class="form-control" id="nama_restoran" placeholder="Masukkan Nama" name="nama_restoran" required="required" value="<?=$restoran_edit[0]['nama_restoran']?>">
						</div>
						<div class="form-group">
							<label for="">Alamat</label>
							<textarea class="form-control" rows="5" id="alamat_restoran" placeholder="Masukkan Alamat" name="alamat_restoran" required="required"><?=$restoran_edit[0]['alamat_restoran']?></textarea>
						</div>
						<div class="form-group">
							<label for="">Nomor Telepon</label>
							<input type="number" class="form-control" id="nomor_telepon_restoran" placeholder="Masukkan Nomor Telepon" name="nomor_telepon_restoran" required="required" value="<?=$restoran_edit[0]['nomor_telepon_restoran']?>">
						</div>
						<div class="form-group">
							<label for="">Latitude</label>
							<input type="number" class="form-control" id="latitude" placeholder="Masukkan Latitude" name="latitude" required="required" value="<?=$restoran_edit[0]['latitude']?>" data-validation="longlat">
						</div>
						<div class="form-group">
							<label for="">Longitude</label>
							<input type="number" class="form-control" id="longitude" placeholder="Masukkan Longitude" name="longitude" required="required" value="<?=$restoran_edit[0]['longitude']?>" data-validation="longlat">
						</div>
						<div class="form-group">
							<div class="row container">
								<label for="file-input">Foto</label>
							</div>
							
							<div class="row">
								<div class="col-sm-6">
									<img class="img-responsive center" style="max-height:150px" src="<?=base_url().$restoran_edit[0]['image_restoran']?>" alt="Photo">
								</div>
								<div class="col-sm-6">
									<div class="fileinput fileinput-new center" data-provides="fileinput">
										<div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"></div>
									<div>
									<span class="btn btn-default btn-file">
										<input type="file" name="image_restoran" 
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
