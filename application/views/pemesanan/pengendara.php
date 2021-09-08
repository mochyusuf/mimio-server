
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
		
		<div class="col-md-12">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-aqua">
              <div class="widget-user-image">
                <img class="img-circle" src="<?=base_url().$pengendara[0]['image_pengendara']?>" alt="Foto Pengendara">
              </div>
              <!-- /.widget-user-image -->
              <h3 class="widget-user-username"><?=$pengendara[0]['nama_pengendara']?></h3>
              <h5 class="widget-user-desc"><?=$pengendara[0]['id_nomor_pengendara']?></h5>
            </div>
            <div class="box-footer no-padding">
              <ul class="nav nav-stacked">
								<li><a>
									Nomor Telepon 
									<span class="pull-right ">
										<?=$pengendara[0]['nomor_telepon_pengendara']?>
									</span></a>
								</li>
                <li><a>
									Alamat
									<span class="pull-right ">
										<?=$pengendara[0]['alamat_pengendara']?>
									</span></a>
								</li>
								<li><a>
									Status
									<span class="pull-right ">
										<?=$pengendara[0]['status_pengendara']?>
									</span></a>
								</li>
              </ul>
            </div>
          </div>
          <!-- /.widget-user -->
        </div>
    	</div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
