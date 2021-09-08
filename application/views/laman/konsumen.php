
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
		
		<div class="col-md-12">
		<div class="box">
						<div class="box-header">
							<div class="row">
								<div class="col-md-6 text-center">
									<h1 class="box-title ">Data Konsumen</h1>
								</div>
								<div class="col-md-6">
									<a href="?laman=konsumen|tambah" class="btn bg-navy btn-flat margin pull-right">Tambah</a>
							</div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="DataTable" class="table table-bordered table-striped" style="width:100%">
                <thead>
                <tr>
                  <th>Nomor</th>
                  <th>Nama</th>
                  <th>Telepon</th>
                  <th>Email</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
					<?php
                  $i = 1;
                  foreach($konsumen as $row){?>
                  <tr>
                    <td><?=$i;?></td>
                    <td><?=$row['nama_konsumen'];?></td>
                    <td><?=$row['nomor_telepon_konsumen'];?></td>
                    <td><?=$row['email_konsumen'];?></td>
										<td class="inline">
                      <a class="btn btn-primary bg-orange btn-flat" href="?laman=konsumen|edit&id=<?=$row["id_konsumen"];?>">Sunting</a>
                      <a class="btn btn-danger bg-maroon btn-flat" href="konsumen/delete?id=<?=$row["id_konsumen"];?>" onclick="return konfirmasi()">Hapus</a>
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
