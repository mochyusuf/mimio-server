
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
		
				<div class="col-md-12">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user-2">					
					<div class="bg-aqua text-center">
					  <h1 class="">Restoran</h1>
          </div>
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-aqua">
              <div class="widget-user-image">
                <img class="img-circle" src="<?=base_url().$restoran_edit[0]['image_restoran']?>" alt="Foto Restoran">
              </div>
              <!-- /.widget-user-image -->
              <h3 class="widget-user-username"><?=$restoran_edit[0]['nama_restoran']?></h3>
            </div>
            <div class="box-footer no-padding">
              <ul class="nav nav-stacked">
                <li><a>
									Alamat
									<span class="pull-right ">
										<?=$restoran_edit[0]['alamat_restoran']?>
									</span></a>
								</li>
								<li><a>
									Nomor Telepon 
									<span class="pull-right ">
										<?=$restoran_edit[0]['nomor_telepon_restoran']?>
									</span></a>
								</li>
								<li><a>
									Latitude, Longitude
									<span class="pull-right ">
										<?=$restoran_edit[0]['latitude']?>, <?=$restoran_edit[0]['longitude']?>
									</span></a>
								</li>
              </ul>
            </div>
          </div>
          <!-- /.widget-user -->
        </div>

		<div class="col-md-12">
			<div class="box">
				<div class="box-header">
					<div class="row">
						<div class="col-md-6 text-center">
							<h1 class="box-title ">Data Makanan</h1>
						</div>
						<div class="col-md-6">
							<a href="?laman=makanan|tambah&id=<?=$id?>" class="btn bg-navy btn-flat margin pull-right">Tambah</a>
						</div>
								</div>
							<!-- /.box-header -->
							<div class="box-body">
								<table id="DataTable" class="table table-bordered table-striped" style="width:100%">
									<thead>
									<tr>
										<th>Nomor</th>
										<th>Nama</th>
										<th>Harga</th>
										<th>Aksi</th>
									</tr>
									</thead>
									<tbody>
					<?php
										$i = 1;
										foreach($makanan as $row){?>
										<tr>
											<td><?=$i;?></td>
											<td><?=$row['nama_makanan'];?></td>
											<td><?=$row['harga_makanan'];?></td>
											<td class="inline">
												<a class="btn btn-primary bg-orange btn-flat" href="?laman=makanan|edit&id=<?=$row["id_makanan"];?>">Sunting</a>
												<a class="btn btn-danger bg-maroon btn-flat" href="makanan/delete?id=<?=$row["id_makanan"];?>" onclick="return konfirmasi()">Hapus</a>
											</td>
										</tr>
										<?php 
									$i++;}?>
								</table>
							</div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
    	</div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
