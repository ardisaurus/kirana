<div class="container-fluid">
    <div class="row">
	    <div class="col-12">
          <h1>Beranda</h1>
          <hr>
          <a class="btn btn-success btn-flat pull-right" href="#" data-toggle="modal" data-target="#Modaltambah">
            <i class="fa fa-fw fa-plus"></i> Tambah
          </a>
          <!-- Tambah Modal-->
		    <div class="modal fade" id="Modaltambah" tabindex="-1" role="dialog" aria-labelledby="ModaltambahLabel" aria-hidden="true">
		      <div class="modal-dialog" role="document">
		        <div class="modal-content">
		          <div class="modal-header">
		            <h5 class="modal-title" id="ModaltambahLabel">Tambah Kuisioner</h5>
		            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
		              <span aria-hidden="true">×</span>
		            </button>
		          </div>
		          <div class="modal-body">
                  <form class="form-horizontal" role="form"  action="" method="post">
		          <div class="form-group">
		            <label for="nama">Nama Kuisioner</label>
		            <input class="form-control" id="namakuisioner" type="text" aria-describedby="namakuisioner" name="namakuisioner" placeholder="Masukan Nama Kuisioner Baru">
		          </div>
		      	  </div>
		          <div class="modal-footer">
		            <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
		            <button type="submit" class="btn btn-success" name='simpan' value='simpan'>Tambah</button>
                   </form>
		          </div>
		        </div>
		      </div>
		    </div>
		<!-- Modal -->
          <br><br>
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Kuisioner</th>
                  <th width="15%">Status</th>
                  <th width="20%">Opsi</th>
                </tr>
              </thead>
              <tbody>
                	<?php 
                	if ($datakuisioner) {
                		$x=0;
                		foreach ($datakuisioner as $kuisioner) {
                		$x++;
                	?>
	                <tr>
	                	<td><?php echo $kuisioner->nama_kuisioner; ?></td>
	                	<?php if ($kuisioner->status==0) {?>
		                <td class="bg-warning text-white">Tutup</td>
		                <?php }else{ ?>
		                <td class="bg-info text-white">Buka</td>
		                <?php } ?>
		                <td align="center">
		                	<a class="mr-3 d-inline-block" href="#">
			                	<i class="fa fa-fw fa-comment"></i></a>
			                <?php if ($kuisioner->status==0) {?>
		                 	<a class="mr-3 d-inline-block" href="#" data-toggle="modal" data-target="#Modalbuka<?php echo $x; ?>">
			                	<i class="fa fa-fw fa-eye"></i></a>
			                <?php }else{ ?>
		                 	<a class="mr-3 d-inline-block" href="#" data-toggle="modal" data-target="#Modaltutup<?php echo $x; ?>">
			                	<i class="fa fa-fw fa-eye-slash"></i></a>
			                <?php } ?>
			            	<a class="mr-3 d-inline-block" href="#" data-toggle="modal" data-target="#Modaledit<?php echo $x; ?>">
			                  <i class="fa fa-fw fa-edit"></i></a>
			                <a class="d-inline-block text-danger" href="#" data-toggle="modal" data-target="#Modalhapus<?php echo $x; ?>">
			                  <i class="fa fa-fw fa-remove"></i></a>
					    </td>                 
	                </tr>
			          <!-- Ubah Modal-->
					    <div class="modal fade" id="Modaledit<?php echo $x; ?>" tabindex="-1" role="dialog" aria-labelledby="Modaledit<?php echo $x; ?>Label" aria-hidden="true">
					      <div class="modal-dialog" role="document">
					        <div class="modal-content">
					          <div class="modal-header">
					            <h5 class="modal-title" id="Modaledit<?php echo $x; ?>Label">Ubah Kuisioner</h5>
					            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
					              <span aria-hidden="true">×</span>
					            </button>
					          </div>
					          <div class="modal-body">
			                  <form class="form-horizontal" role="form"  action="" method="post">
					          <div class="form-group">
					            <label for="nama">Nama Kuisioner</label>
					            <input class="form-control" id="namakuisioner" type="text" aria-describedby="namakuisioner" name="namakuisioner" value="<?php echo $kuisioner->nama_kuisioner; ?>">
					          </div>
					      	  </div>
					          <div class="modal-footer">
					            <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
					            <button type="submit" class="btn btn-primary" name='simpan' value='simpan'>Ubah</button>
			                   </form>
					          </div>
					        </div>
					      </div>
					    </div>
					<!-- Modal -->
			        <!-- Buka Modal-->
					    <div class="modal fade" id="Modalbuka<?php echo $x; ?>" tabindex="-1" role="dialog" aria-labelledby="Modalbuka<?php echo $x; ?>Label" aria-hidden="true">
					      <div class="modal-dialog" role="document">
					        <div class="modal-content">
					          <div class="modal-header">
					            <h5 class="modal-title" id="Modalbuka<?php echo $x; ?>Label">Buka Kuisioner</h5>
					            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
					              <span aria-hidden="true">×</span>
					            </button>
					          </div>
					          <div class="modal-body">
			                  <form class="form-horizontal" role="form"  action="" method="post">
					            <input class="form-control" id="namakuisioner" type="hidden" aria-describedby="namakuisioner" name="namakuisioner" value="<?php echo $kuisioner->id_kuisioner; ?>">
					            Buka kuisioner <?php echo $kuisioner->nama_kuisioner; ?>?
					      	  </div>
					          <div class="modal-footer">
					            <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
					            <button type="submit" class="btn btn-primary" name='simpan' value='simpan'>Buka</button>
			                   </form>
					          </div>
					        </div>
					      </div>
					    </div>
					<!-- Modal -->
			        <!-- Tutup Modal-->
					    <div class="modal fade" id="Modaltutup<?php echo $x; ?>" tabindex="-1" role="dialog" aria-labelledby="Modaltutup<?php echo $x; ?>Label" aria-hidden="true">
					      <div class="modal-dialog" role="document">
					        <div class="modal-content">
					          <div class="modal-header">
					            <h5 class="modal-title" id="Modaltutup<?php echo $x; ?>Label">Tutup Kuisioner</h5>
					            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
					              <span aria-hidden="true">×</span>
					            </button>
					          </div>
					          <div class="modal-body">
			                  <form class="form-horizontal" role="form"  action="" method="post">
					            <input class="form-control" id="namakuisioner" type="hidden" aria-describedby="namakuisioner" name="namakuisioner" value="<?php echo $kuisioner->id_kuisioner; ?>">
					            Tutup kuisioner <?php echo $kuisioner->nama_kuisioner; ?>?
					      	  </div>
					          <div class="modal-footer">
					            <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
					            <button type="submit" class="btn btn-warning text-white" name='simpan' value='simpan'>Tutup</button>
			                   </form>
					          </div>
					        </div>
					      </div>
					    </div>
					<!-- Modal -->					
			        <!-- Tutup Modal-->
					    <div class="modal fade" id="Modalhapus<?php echo $x; ?>" tabindex="-1" role="dialog" aria-labelledby="Modalhapus<?php echo $x; ?>Label" aria-hidden="true">
					      <div class="modal-dialog" role="document">
					        <div class="modal-content">
					          <div class="modal-header">
					            <h5 class="modal-title" id="Modalhapus<?php echo $x; ?>Label">Hapus Kuisioner</h5>
					            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
					              <span aria-hidden="true">×</span>
					            </button>
					          </div>
					          <div class="modal-body">
			                  <form class="form-horizontal" role="form"  action="" method="post">
					            <input class="form-control" id="namakuisioner" type="hidden" aria-describedby="namakuisioner" name="namakuisioner" value="<?php echo $kuisioner->id_kuisioner; ?>">
					            Hapus kuisioner <?php echo $kuisioner->nama_kuisioner; ?>?
					      	  </div>
					          <div class="modal-footer">
					            <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
					            <button type="submit" class="btn btn-danger text-white" name='simpan' value='simpan'>Hapus</button>
			                   </form>
					          </div>
					        </div>
					      </div>
					    </div>
					<!-- Modal -->
                	<?php		
                		}
                	}
                	 ?> 
              </tbody>
            </table>
          </div>
          <br>
        </div>
    </div>
</div>
<!-- /.container-fluid-->