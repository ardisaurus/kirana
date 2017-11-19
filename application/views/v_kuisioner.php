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
          <h1>Daftar Kuisioner</h1>
          <hr>          
          <?php if ($datakuisioner) { ?>
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Kuisioner</th>
                  <th width="15%">Opsi</th>
                </tr>
              </thead>
              <tbody>
                	<?php 
                		$x=0;
                		foreach ($datakuisioner as $kuisioner) {
                		$x++;
                	?>
	                <tr>
	                	<td><?php echo $kuisioner->nama_kuisioner; ?></td>
		                <td align="center">
		                	<?php if ($kuisioner->id_kuisioner==$this->session->userdata('id_kuisioner')){ ?>
		                		<a class="mr-3 d-inline-block" href="<?php echo site_url('kuisioner/mulai/'.$this->session->userdata('id_kuisioner'));?>"">
			                  <i class="fa fa-fw fa-repeat"></i> Lanjutkan</a>
		                	<?php }else{ ?>
			            	<a class="mr-3 d-inline-block" href="#" data-toggle="modal" data-target="#Modalmulai<?php echo $x; ?>">
			                  <i class="fa fa-fw fa-play"></i> Mulai</a>
			                <?php } ?>
					    </td>                 
	                </tr>
			          <!-- Ubah Modal-->
					    <div class="modal fade" id="Modalmulai<?php echo $x; ?>" tabindex="-1" role="dialog" aria-labelledby="Modalmulai<?php echo $x; ?>Label" aria-hidden="true">
					      <div class="modal-dialog" role="document">
					        <div class="modal-content">
					          <div class="modal-header">
					            <h5 class="modal-title" id="Modalmulai<?php echo $x; ?>Label">Responden</h5>
					            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
					              <span aria-hidden="true">×</span>
					            </button>
					          </div>
					          <div class="modal-body">
			                  <form class="form-horizontal" role="form"  action="<?php echo site_url('kuisioner/prosesmulai');?>" method="post">
					            <input class="form-control" id="id_kuisioner" type="hidden" aria-describedby="id_kuisioner" name="id_kuisioner" value="<?php echo $kuisioner->id_kuisioner; ?>">
					          <div class="form-group">
					            <label for="no_id">Nomor Identitas</label>
					            <input class="form-control" id="no_id" type="text" aria-describedby="no_id" name="no_id" placeholder="Masukan Nomor Identitas Anda">
					          </div>
					          <div class="form-group">
					            <label for="nama">Nama</label>
					            <input class="form-control" id="namaresponden" type="text" aria-describedby="namaresponden" name="namaresponden" placeholder="Masukan Nama Anda">
					          </div>
					      	  </div>
					          <div class="modal-footer">
					            <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
					            <button type="submit" class="btn btn-primary" name='simpan' value='simpan'><i class="fa fa-fw fa-play"></i> Mulai</button>
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