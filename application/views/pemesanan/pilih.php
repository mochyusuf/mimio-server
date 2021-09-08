<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

	<!-- Main content -->
	<section class="content">

		<div class="col-md-12">
			<!-- general form elements -->
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Pilih Pengendara</h3>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form role="form" novalidate enctype="multipart/form-data" action="<?=base_url()."pemesanan/pilih_pengendara"?>" method="post">
					<input type="hidden" name="id" value="<?=$id?>">
					<div class="box-body">
						<div class="form-group">
							<label for="">Pengendara</label>
							<?php
								if (count($pengendara) == 0) { ?>
									<select class="form-control" name="id_pengendara" required="required">
										<option value=''>Pengendara Kosong</option>
									</select>
								<?php }
								else { ?>
									<select class="form-control" name="id_pengendara" required="required">
										<option value=''>Pilih Pengendara</option>
										<?php 
											foreach ($pengendara as $row) { ?>
												<option value='<?=$row['id_pengendara']?>'><?=$row['id_nomor_pengendara']?></option>
											<?php }
										?>
									</select>
								<?php }
							?>
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
