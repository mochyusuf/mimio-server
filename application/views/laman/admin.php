
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
		
	<div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Data Admin</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" novalidate  enctype="multipart/form-data"  action="<?=base_url()."admin/edit"?>" method="post">
              <input type="hidden" name="id_admin" value="<?=$admin[0]['id_admin']?>">
							<div class="box-body">
                <div class="form-group">
                  <label for="">Username</label>
                  <input type="text" class="form-control" id="username" placeholder="Masukkan Username" name="username_admin" required="required" value="<?=$admin[0]['username_admin']?>">
                </div>
								<div class="form-group">
									<label for="">Password</label>
									<input type="password" class="form-control" id="password_admin" placeholder="Masukkan Username" name="password_admin">
									<p class="text-light-blue">Kosongkan jika tidak Mengubah Password</p>
								</div>
                <div class="form-group">
                  <label for="">Nama</label>
                  <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama_admin" required="required" value="<?=$admin[0]['nama_admin']?>">
                </div>
                <div class="form-group">
                  <label for="">Nomor KTP</label>
                  <input type="text" class="form-control" id="nama" placeholder="Masukkan Nomor KTP" name="nomor_ktp_admin" required="required" value="<?=$admin[0]['nomor_ktp_admin']?>">
                </div>
                <div class="form-group">
                  <label for="">Tempat Lahir</label>
                  <input type="text" class="form-control" id="tempat_lahir" placeholder="Masukkan Tempat lahir" name="tempat_lahir_admin" required="required" value="<?=$admin[0]['tempat_lahir_admin']?>">
                </div>
								<!-- Date -->
								<div class="form-group">
									<label>Tanggal Lahir:</label>

									<div class="input-group date">
									<div class="input-group-addon">
										<i class="fa fa-calendar"></i>
									</div>
									<input type="text" class="form-control pull-right" id="datepicker" name="tanggal_lahir_admin" required="required" value="<?=$admin[0]['tanggal_lahir_admin']?>">
									</div>
									<!-- /.input group -->
								</div>
                <div class="form-group">
                  <label for="">Email</label>
                  <input type="email" class="form-control" id="email" placeholder="Masukkan Email" name="email_admin" required="required" value="<?=$admin[0]['email_admin']?>">
                </div>
                <div class="form-group">
									<div class="row container">
                  	<label for="file-input">Foto</label>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<input type="hidden" name="image_kosong" value="<?=$admin[0]['image_admin']?>">
											<img class="img-responsive center" style="max-height:150px" src="<?=base_url().$admin[0]['image_admin']?>" alt="Photo">
										</div>
										<div class="col-sm-6">
											<div class="fileinput fileinput-new center" data-provides="fileinput">
												<div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"></div>
												<div>
												<span class="btn btn-default btn-file">
													<input type="file" name="image_admin" 
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
