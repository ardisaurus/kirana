<div class="container-fluid">
    <div class="row">
	    <div class="col-12">
    		<?php if ($this->session->flashdata('warning')) { ?>
	    	<div class="alert alert-warning">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <i class="fa fa-exclamation-triangle"></i> <?php echo $this->session->flashdata('warning');?>                  
            </div>
            <?php } ?>
            <?php if ($this->session->flashdata('success')) { ?>
	    	<div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <i class="fa fa-check"></i> <?php echo $this->session->flashdata('success');?>                  
            </div>
            <?php } ?>
          <h1>Daftar Pertanyaan</h1>
          <p><?php echo $detail_kuisioner[0]->nama_kuisioner; ?></p>
          <hr>
          <a class="btn btn-success btn-flat pull-right" href="#" data-toggle="modal" data-target="#Modaltambah">
            <i class="fa fa-fw fa-plus"></i> Tambah
          </a>
          <!-- Tambah Modal-->
		    <div class="modal fade" id="Modaltambah" tabindex="-1" role="dialog" aria-labelledby="ModaltambahLabel" aria-hidden="true">
		      <div class="modal-dialog" role="document">
		        <div class="modal-content">
		          <div class="modal-header">
		            <h5 class="modal-title" id="ModaltambahLabel">Tambah Pertanyaan</h5>
		            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
		              <span aria-hidden="true">×</span>
		            </button>
		          </div>
		          <div class="modal-body">
                  <form class="form-horizontal" role="form"  action="<?php echo site_url('beranda/prosestambahpertanyaan');?>" method="post">
		            <input id="id_kuisioner" type="hidden" aria-describedby="id_kuisioner" name="id_kuisioner" value="<?php echo $id_kuisioner; ?>">
		          <div class="form-group">
		            <label for="pertanyaan">Pertanyaan</label>
		            <input class="form-control" id="pertanyaan" type="text" aria-describedby="pertanyaan" name="pertanyaan" placeholder="Masukan Pertanyaan Baru">
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
          <?php if ($datapertanyaan) { ?>
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Pertanyaan</th>
                  <th width="15%">Opsi</th>
                </tr>
              </thead>
              <tbody>
                	<?php 
                		$x=0;
                		foreach ($datapertanyaan as $pertanyaan) {
                		$x++;
                	?>
	                <tr>
	                	<td><?php echo $pertanyaan->pertanyaan; ?></td>
		                <td align="center">
			            	<a class="mr-3 d-inline-block" href="<?php echo site_url('beranda/hasil/'.$pertanyaan->id_pertanyaan);?>">
			                  <i class="fa fa-fw fa-bar-chart"></i></a>
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
					            <h5 class="modal-title" id="Modaledit<?php echo $x; ?>Label">Ubah pertanyaan</h5>
					            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
					              <span aria-hidden="true">×</span>
					            </button>
					          </div>
					          <div class="modal-body">
			                  <form class="form-horizontal" role="form"  action="<?php echo site_url('beranda/prosesubahpertanyaan');?>" method="post">
					            <input class="form-control" id="id_kuisioner" type="hidden" aria-describedby="id_kuisioner" name="id_kuisioner" value="<?php echo $pertanyaan->id_kuisioner; ?>">
					            <input class="form-control" id="id_pertanyaan" type="hidden" aria-describedby="id_pertanyaan" name="id_pertanyaan" value="<?php echo $pertanyaan->id_pertanyaan; ?>">
					          <div class="form-group">
					            <label for="pertanyaan">Pertanyaan</label>
					            <input class="form-control" id="pertanyaan" type="text" aria-describedby="pertanyaan" name="pertanyaan" value="<?php echo $pertanyaan->pertanyaan; ?>">
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
			        <!-- Hapus Modal-->
					    <div class="modal fade" id="Modalhapus<?php echo $x; ?>" tabindex="-1" role="dialog" aria-labelledby="Modalhapus<?php echo $x; ?>Label" aria-hidden="true">
					      <div class="modal-dialog" role="document">
					        <div class="modal-content">
					          <div class="modal-header">
					            <h5 class="modal-title" id="Modalhapus<?php echo $x; ?>Label">Hapus pertanyaan</h5>
					            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
					              <span aria-hidden="true">×</span>
					            </button>
					          </div>
					          <div class="modal-body">
			                  <form class="form-horizontal" role="form"  action="<?php echo site_url('beranda/proseshapuspertanyaan');?>" method="post">
					            <input class="form-control" id="id_kuisioner" type="hidden" aria-describedby="id_kuisioner" name="id_kuisioner" value="<?php echo $pertanyaan->id_kuisioner; ?>">
					            <input class="form-control" id="id_pertanyaan" type="hidden" aria-describedby="id_pertanyaan" name="id_pertanyaan" value="<?php echo $pertanyaan->id_pertanyaan; ?>">
					            Hapus pertanyaan <?php echo $pertanyaan->pertanyaan; ?>?
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
                	}else{
                	 ?> 
                	 <div class="alert alert-warning">
		                <i class="fa fa-exclamation-triangle"></i> Kosong                  
		            </div>
                	<?php } ?>
              </tbody>
            </table>
          </div>
          <br>
        </div>
    </div>
</div>
<!-- /.container-fluid-->