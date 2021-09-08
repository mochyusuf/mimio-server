<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

	<!-- Main content -->
	<section class="content">

		<div class="col-md-12">
			<!-- general form elements -->
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Tambah Makanan</h3>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form role="form" novalidate enctype="multipart/form-data" action="<?=base_url()."makanan/add"?>" method="post">
					<input type="hidden" name="id" value="<?=$id?>">
					<div class="box-body">
						<div class="form-group">
							<label for="">Nama</label>
							<input type="text" class="form-control" id="nama_makanan" placeholder="Masukkan Nama" name="nama_makanan" required="required">
						</div>
						<div class="form-group">
							<label for="">Harga</label>
							<input type="number" class="form-control" id="harga_makanan" placeholder="Masukkan Harga" name="harga_makanan" required="required">
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
