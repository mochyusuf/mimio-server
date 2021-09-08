
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
		
		<div class="col-md-12">
				<div class="box">
            <div class="box-header">
							<div class="row">
								<div class="col-md-12 text-center">
									<h1 class="box-title ">Data Pemesanan</h1>
								</div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="DataTable" class="table table-bordered table-striped" style="width:100%">
                <thead>
                <tr>
                  <th>Nomor</th>
                  <th>Nama Restoran</th>
                  <th>Konsumen</th>
                  <th>Status</th>
                  <th>Lokasi</th>
                  <th>Harga</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
								<?php
                  $i = 1;
                  foreach($pemesanan as $row){?>
                  <tr>
                    <td><?=$i;?></td>
                    <td><?=$row['nama_restoran'];?></td>
                    <td><?=$row['nama_konsumen'];?></td>
                    <td><?=$row['status_pemesanan'];?></td>
                    <td><?=$row['latitude']." , ".$row['longitude']?></td>
                    <td><?=$row['harga_makanan']+7000?></td>
                    <td class="inline">
											<?php
												if (($row['id_pengendara'] == null || $row['id_pengendara'] == '') && ($row['status_pemesanan'] == 'dipesan')) {?>
													<a class="btn btn-primary bg-purple btn-flat" href="?laman=pemesanan|pilih&id=<?=$row["id_pemesanan"];?>">Pilih</a>
													<?php }else if($row['status_pemesanan'] == 'dibatalkan') { ?>
                      		<a class="btn btn-primary bg-gray btn-flat">Pengendara</a>
												<?php }else{ ?>
                      		<a class="btn btn-primary bg-orange btn-flat" href="?laman=pemesanan|pengendara&id=<?=$row["id_pengendara"];?>">Pengendara</a>
												<?php }
											?>
											<?php 
												if ($row['status_pemesanan'] == 'dipesan' || $row['status_pemesanan'] == 'diantar') {?>
													<a class="btn btn-primary bg-maroon btn-flat" href="?laman=batalkan|pesanan&id=<?=$row["id_pemesanan"];?>">Batalkan</a>
												<?php }else{ ?>
													<a class="btn btn-primary bg-gray btn-flat">Batalkan</a>
												<?php }
											?>
                      <a class="btn btn-primary bg-navy btn-flat" href="?laman=pemesanan|detail&id=<?=$row["id_pemesanan"];?>">Detail</a>
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
