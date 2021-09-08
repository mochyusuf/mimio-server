
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
		
		<div class="col-md-12">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user-2">
					<div class="bg-aqua text-center">
					  <h1 class="">Konsumen</h1>
          </div>
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-aqua">
              <!-- /.widget-user-image -->
              <h3 class="widget-user-username"><?=$konsumen[0]['nama_konsumen']?></h3>
            </div>
            <div class="box-footer no-padding">
              <ul class="nav nav-stacked">
								<li><a>
									Nomor Telepon 
									<span class="pull-right ">
										<?=$konsumen[0]['nomor_telepon_konsumen']?>
									</span></a>
								</li>
								<li><a>
									Email
									<span class="pull-right ">
										<?=$konsumen[0]['email_konsumen']?>
									</span></a>
								</li>
              </ul>
            </div>
          </div>
          <!-- /.widget-user -->
					
        <!-- Widget: pemesanan widget style 1 -->
        <div class="box box-widget widget-user-2">
					<div class="bg-yellow-active text-center">
					  <h1 class="">Restoran</h1>
          </div>
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-yellow-active">
              <div class="widget-user-image">
                <img class="img-circle" src="<?=base_url().$restoran[0]['image_restoran']?>" alt="Foto Restoran">
              </div>
              <!-- /.widget-user-image -->
              <h3 class="widget-user-username"><?=$restoran[0]['nama_restoran']?></h3>
            </div>
            <div class="box-footer no-padding">
						<ul class="nav nav-stacked">
                <li><a>
									Alamat
									<span class="pull-right ">
										<?=$restoran[0]['alamat_restoran']?>
									</span></a>
								</li>
								<li><a>
									Nomor Telepon 
									<span class="pull-right ">
										<?=$restoran[0]['nomor_telepon_restoran']?>
									</span></a>
								</li>
								<li><a>
									Latitude, Longitude
									<span class="pull-right ">
										<?=$restoran[0]['latitude']?>, <?=$restoran[0]['longitude']?>
									</span></a>
								</li>
              </ul>
            </div>
          </div>
          <!-- /.widget-user -->

					<!-- Widget: pemesanan widget style 1 -->
					<div class="box box-widget widget-user-2">
					<div class="bg-light-blue text-center">
					  <h1 class="">Makanan</h1>
          </div>
					<!-- <?=print_r($makanan)?> -->
            <!-- Add the bg color to the header using any of the bg-* classes -->
						<?php
						if(isset($makanan)){
							foreach ($makanan as $row) {?>
								<div class="widget-user-header bg-light-blue">
									<!-- /.widget-user-image -->
									<h4 class="widget-user-username "><?=$row[0]['nama_makanan']?></h4>
									<h4 class="widget-user-username "><?=$row[0]['harga_makanan']?></h4>
								</div>
							<?php }
						}else{?>
							<div class="widget-user-header bg-light-blue">
									<h4 class="widget-user-username ">Makanan Kosong</h4>
							</div>
						<?php } ?>
							
          </div>
          <!-- /.widget-user -->

					<!-- Widget: total harga widget style 1 -->
					<div class="box box-widget widget-user-2">
					<div class="bg-red text-center">
					  <h1 class="">Total Harga</h1>
          </div>
					<!-- <?=print_r($makanan)?> -->
            <!-- Add the bg color to the header using any of the bg-* classes -->
								<div class="widget-user-header bg-red text-center">
									<!-- /.widget-user-image -->
									<h2><?=$total_harga?></h2>
								</div>
          </div>
          <!-- /.widget-user -->

					<!-- Widget: total dibayar widget style 1 -->
					<div class="box box-widget widget-user-2">
					<div class="bg-black text-center">
					  <h1 class="">Total Dibayar</h1>
          </div>
					<!-- <?=print_r($makanan)?> -->
            <!-- Add the bg color to the header using any of the bg-* classes -->
								<div class="widget-user-header bg-black text-center">
									<!-- /.widget-user-image -->
									<h2><?=$total_harga + 7000?></h2>
								</div>
          </div>
          <!-- /.widget-user -->
        </div>
    	</div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
