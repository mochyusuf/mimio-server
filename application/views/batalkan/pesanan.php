<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

	<!-- Main content -->
	<section class="content">

		<div class="col-md-12">
			<!-- general form elements -->
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Batalkan Pesanan</h3>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form role="form" novalidate enctype="multipart/form-data" action="<?=base_url()."pemesanan/batalkan"?>" method="post">
					<input type="hidden" name="id" value="<?=$id?>">
					<div class="box-body">
						<div class="form-group">
							<label for="">Pesan Pembatalan</label>
							<div class="form-group">
								<div class="row container">
									<label class="">
										<div class="iradio_flat-green" aria-checked="false" aria-disabled="false" style="position: relative;">
											<input type="radio" name="pesan" class="flat-red" checked="checked" style="position: absolute; opacity: 0;" value='Admin_Batalkan_Pesanan_Dibatalkan'>
											<ins class="iCheck-helper icheck-radio">
											</ins>
										</div> Pesanan Dibatalkan
									</label>
								</div>
								<div class="row container">
									<label class="">
										<div class="iradio_flat-green" aria-checked="false" aria-disabled="false" style="position: relative;">
											<input type="radio" name="pesan" class="flat-red" style="position: absolute; opacity: 0;" value='Admin_Batalkan_Pesanan_Makanan_Habis'>
											<ins class="iCheck-helper icheck-radio">
											</ins>
										</div> Makanan Habis
									</label>
								</div>
								<div class="row container">
									<label class="">
										<div class="iradio_flat-green" aria-checked="false" aria-disabled="false" style="position: relative;">
											<input type="radio" name="pesan" class="flat-red" style="position: absolute; opacity: 0;" value='Admin_Batalkan_Pesanan_Restoran_Tutup'>
											<ins class="iCheck-helper icheck-radio">
											</ins>
										</div> Restoran Tutup
									</label>
								</div>
              				</div>
						</div>
					</div>
					<!-- /.box-body -->

					<div class="box-footer">
						<button type="submit" class="btn btn-primary bg-olive">Pilih</button>
					</div>
				</form>
			</div>
			<!-- /.box -->
		</div>
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->
