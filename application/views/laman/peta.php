
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
		
		<div class="col-md-12">
		<div class="box">
         <div class="box-header">
				<div class="row">
					<div class="col-md-6 text-center">
						<h1 class="box-title ">Data Peta</h1>
					</div>
						<div class="col-md-6">
							<a href="?laman=peta|tambah" class="btn bg-navy btn-flat margin pull-right">Tambah</a>
						</div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="DataTable" class="table table-bordered table-striped" style="width:100%">
                <thead>
                <tr>
                  <th>Nomor</th>
                  <th>Lokasi</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
					<?php
                  $i = 1;
                  foreach($peta as $row){?>
                  <tr>
                    <td><?=$i;?></td>
                    <td><?=$row['latitude']." , ".$row['longitude']?></td>
										<td class="inline">
                      <a class="btn btn-primary bg-orange btn-flat" href="?laman=peta|edit&id=<?=$row["id_peta"];?>">Sunting</a>
                      <a class="btn btn-danger bg-maroon btn-flat" href="peta/delete?id=<?=$row["id_peta"];?>" onclick="return konfirmasi()">Hapus</a>
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
