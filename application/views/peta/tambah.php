<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

	<!-- Main content -->
	<section class="content">

		<div class="col-md-12">
			<!-- general form elements -->
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Tambah Titik Peta</h3>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form role="form" novalidate enctype="multipart/form-data" action="<?=base_url()."peta/add"?>" method="post">
					<div class="box-body">
						<div class="form-group">
							<label for="">Latitude</label>
							<input type="number" class="form-control" id="latitude" placeholder="Masukkan Latitude" name="latitude" required="required" data-validation="longlat">
						</div>
						<div class="form-group">
							<label for="">Longitude</label>
							<input type="number" class="form-control" id="longitude" placeholder="Masukkan Longitude" name="longitude" required="required" data-validation="longlat">
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
