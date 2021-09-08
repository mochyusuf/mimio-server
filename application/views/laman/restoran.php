
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
		
		<div class="col-md-12">
		<div class="box">
            <div class="box-header">
				<div class="row">
					<div class="col-md-6 text-center">
						<h1 class="box-title ">Data Restoran</h1>
					</div>
					<div class="col-md-6">
						<a href="?laman=restoran|tambah" class="btn bg-navy btn-flat margin pull-right">Tambah</a>
					</div>
            	</div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="DataTable" class="table table-bordered table-striped" style="width:100%">
                <thead>
                <tr>
                  <th>Nomor</th>
                  <th>Nama Restoran</th>
                  <th>Nomor Telepon</th>
                  <th>Alamat</th>
                  <th>Foto</th>
                  <th>Lokasi</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
				<?php
                  $i = 1;
                  foreach($restoran as $row){?>
                  <tr>
                    <td><?=$i;?></td>
                    <td><?=$row['nama_restoran'];?></td>
                    <td><?=$row['nomor_telepon_restoran'];?></td>
                    <td><?=cutText(strip_tags(html_entity_decode($row["alamat_restoran"])),20);?></td>
                    <td><img class="img-responsive" src="<?=base_url().$row["image_restoran"];?>" alt="" width="100px" height="50px"></td>
                    <td><?=$row['latitude']." , ".$row['longitude']?></td>
                    <td class="inline">
                      <a class="btn btn-primary bg-orange btn-flat" href="?laman=restoran|edit&id=<?=$row["id_restoran"];?>">Sunting</a>
                      <a class="btn bg-purple btn-flat margin" href="?laman=makanan&id=<?=$row["id_restoran"];?>">Makanan</a>
                      <a class="btn btn-danger bg-maroon btn-flat" href="restoran/delete?id=<?=$row["id_restoran"];?>" onclick="return konfirmasi()">Hapus</a>
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
