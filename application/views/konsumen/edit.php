<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

	<!-- Main content -->
	<section class="content">

		<div class="col-md-12">
			<!-- general form elements -->
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Sunitng Konsumen</h3>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form role="form" novalidate enctype="multipart/form-data" action="<?=base_url()."konsumen/edit"?>" method="post">
					<input type="hidden" name="id" value="<?=$konsumen_edit[0]['id_konsumen']?>">
					<div class="box-body">
						<div class="form-group">
							<label for="">Nama</label>
							<input type="text" class="form-control" id="nama_konsumen" placeholder="Masukkan Nama" name="nama_konsumen" required="required" value="<?=$konsumen_edit[0]['nama_konsumen']?>">
						</div>
						<div class="form-group">
							<label for="">Password</label>
							<input type="password" class="form-control" id="password_konsumen" placeholder="Masukkan Password" name="password_konsumen">
							<p class="text-light-blue">Kosongkan jika tidak Mengubah Password</p>
						</div>
						<div class="form-group">
							<label for="">Nomor Telepon</label>
							<input type="number" class="form-control" id="nomor_telepon_konsumen" placeholder="Masukkan Nomor Telepon" name="nomor_telepon_konsumen" required="required" value="<?=$konsumen_edit[0]['nomor_telepon_konsumen']?>">
						</div>
						<div class="form-group">
							<label for="">Email</label>
							<input type="email" class="form-control" id="email_konsumen" placeholder="Masukkan Email" name="email_konsumen" required="required" value="<?=$konsumen_edit[0]['email_konsumen']?>">
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
