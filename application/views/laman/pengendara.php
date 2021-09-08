
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
		
		<div class="col-md-12">
		<div class="box">
            <div class="box-header">
							<div class="row">
								<div class="col-md-6 text-center">
									<h1 class="box-title ">Data Pengendara</h1>
								</div>
								<div class="col-md-6">
									<a href="?laman=pengendara|tambah" class="btn bg-navy btn-flat margin pull-right">Tambah</a>
							</div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="DataTable" class="table table-bordered table-striped" style="width:100%">
                <thead>
                <tr>
                  <th>Nomor</th>
                  <th>Status</th>
                  <th>Nama</th>
                  <th>ID Number</th>
                  <th>Alamat</th>
                  <th>Nomor Telepon</th>
                  <th>Foto</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
								<?php
                  $i = 1;
                  foreach($pengendara as $row){?>
                  <tr>
                    <td><?=$i;?></td>
                    <td><?=$row['status_pengendara'];?></td>
                    <td><?=$row['nama_pengendara'];?></td>
                    <td><?=$row['id_nomor_pengendara'];?></td>
                    <td><?=cutText(strip_tags(html_entity_decode($row["alamat_pengendara"])),20);?></td>
                    <td><?=$row['nomor_telepon_pengendara']?></td>
                    <td><img class="img-responsive" src="<?=base_url().$row["image_pengendara"];?>" alt="" width="100px" height="50px"></td>
                    <td class="inline">
                      <a class="btn btn-primary bg-orange btn-flat" href="?laman=pengendara|edit&id=<?=$row["id_pengendara"];?>">Sunting</a>
                      <a class="btn bg-purple btn-flat margin" href="?laman=kendaraan&id=<?=$row["id_pengendara"];?>">Kendaraan</a>
                      <a class="btn btn-danger bg-maroon btn-flat" href="pengendara/delete?id=<?=$row["id_pengendara"];?>" onclick="return konfirmasi()">Hapus</a>
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
