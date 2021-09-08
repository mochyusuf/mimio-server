<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

	<!-- Main content -->
	<section class="content">

		<div class="col-md-12">
			<!-- general form elements -->
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Sunting Kendaraan</h3>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form role="form" novalidate enctype="multipart/form-data" action="<?=base_url()."kendaraan/edit"?>" method="post">
					<input type="hidden" name="id" value="<?=$kendaraan_edit[0]['id_kendaraan']?>">
					<input type="hidden" name="id_pengendara" value="<?=$kendaraan_edit[0]['id_pengendara']?>">
					<div class="box-body">
						<div class="form-group">
							<label for="">Nomor Polisi</label>
							<input type="text" class="form-control" id="nomor_kendaraan" placeholder="Masukkan Nomor Polisi" name="nomor_kendaraan" required="required" value="<?=$kendaraan_edit[0]['nomor_kendaraan']?>">
						</div>
						<div class="form-group">
							<label for="">Merk</label>
							<input type="text" class="form-control" id="merk_kendaraan" placeholder="Masukkan Merk" name="merk_kendaraan" required="required" value="<?=$kendaraan_edit[0]['merk_kendaraan']?>">
						</div>
						<div class="form-group">
							<label for="">Jenis</label>
							<input type="text" class="form-control" id="jenis_kendaraan" placeholder="Masukkan Jenis" name="jenis_kendaraan" required="required" value="<?=$kendaraan_edit[0]['jenis_kendaraan']?>">
						</div>
						<!-- Date -->
						<div class="form-group">
							<label>Tahun </label>
							<div class="input-group date">
								<div class="input-group-addon">
									<i class="fa fa-calendar"></i>
								</div>
								<input type="text" class="form-control pull-right" id="datepickerYear" name="tahun_kendaraan" required="required" value="<?=$kendaraan_edit[0]['tahun_kendaraan']?>">
							</div>
							<!-- /.input group -->
						</div>
						<div class="form-group">
							<div class="row container">
								<label for="file-input">Foto</label>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<img class="img-responsive center" style="max-height:150px" src="<?=base_url().$kendaraan_edit[0]['image_kendaraan']?>" alt="Photo">
								</div>
								<div class="col-sm-6">
									<div class="fileinput fileinput-new center" data-provides="fileinput">
										<div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"></div>
									<div>
									<span class="btn btn-default btn-file">
										<input type="file" name="image_kendaraan" 
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
