
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
		
				<div class="col-md-12">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user-2">
					<div class="bg-aqua text-center">
					  <h1 class="">Pengendara</h1>
          </div>
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-aqua">
              <div class="widget-user-image">
                <img class="img-circle" src="<?=base_url().$pengendara_edit[0]['image_pengendara']?>" alt="Foto Pengendara">
              </div>
              <!-- /.widget-user-image -->
              <h3 class="widget-user-username"><?=$pengendara_edit[0]['nama_pengendara']?></h3>
              <h5 class="widget-user-desc"><?=$pengendara_edit[0]['id_nomor_pengendara']?></h5>
            </div>
            <div class="box-footer no-padding">
              <ul class="nav nav-stacked">
								<li><a>
									Nomor Telepon 
									<span class="pull-right ">
										<?=$pengendara_edit[0]['nomor_telepon_pengendara']?>
									</span></a>
								</li>
								<li><a>
									Alamat
									<span class="pull-right ">
										<?=$pengendara_edit[0]['alamat_pengendara']?>
									</span></a>
								</li>
								<li><a>
									Status
									<span class="pull-right ">
										<?=$pengendara_edit[0]['status_pengendara']?>
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
							<h1 class="box-title ">Data Kendaraan</h1>
						</div>
						<div class="col-md-6">
							<a href="?laman=kendaraan|tambah&id=<?=$id?>" class="btn bg-navy btn-flat margin pull-right">Tambah</a>
						</div>
								</div>
							<!-- /.box-header -->
							<div class="box-body">
								<table id="DataTable" class="table table-bordered table-striped" style="width:100%">
									<thead>
									<tr>
										<th>Nomor</th>
										<th>Nomor Polisi</th>
										<th>Merk</th>
										<th>Jenis</th>
										<th>Tahun</th>
										<th>Foto</th>
										<th>Aksi</th>
									</tr>
									</thead>
									<tbody>
					<?php
										$i = 1;
										foreach($kendaraan as $row){?>
										<tr>
											<td><?=$i;?></td>
											<td><?=$row['nomor_kendaraan'];?></td>
											<td><?=$row['merk_kendaraan'];?></td>
											<td><?=$row['jenis_kendaraan'];?></td>
											<td><?=$row['tahun_kendaraan'];?></td>
											<td><img class="img-responsive" src="<?=base_url().$row["image_kendaraan"];?>" alt="" width="100px" height="50px"></td>
											<td class="inline">
												<a class="btn btn-primary bg-orange btn-flat" href="?laman=kendaraan|edit&id=<?=$row["id_kendaraan"];?>">Sunting</a>
												<a class="btn btn-danger bg-maroon btn-flat" href="kendaraan/delete?id=<?=$row["id_kendaraan"];?>" onclick="return konfirmasi()">Hapus</a>
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
