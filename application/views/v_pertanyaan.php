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
          <p><?php echo $detail_kuisioner[0]->nama_kuisioner; ?>          	
          	<a class="btn btn-warning btn-sm pull-right text-white" href="#" data-toggle="modal" data-target="#Modalselesai">
            	<i class="fa fa-fw fa-remove"></i> Selesai
          	</a>
          	<!-- selesai Modal-->
		    <div class="modal fade" id="Modalselesai" tabindex="-1" role="dialog" aria-labelledby="ModalselesaiLabel" aria-hidden="true">
		      <div class="modal-dialog" role="document">
		        <div class="modal-content">
		          <div class="modal-header">
		            <h5 class="modal-title" id="ModalselesaiLabel">Tutup Kuisioner</h5>
		            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
		              <span aria-hidden="true">×</span>
		            </button>
		          </div>
		          <div class="modal-body">
                  <p>Pastikan semua pertanyaan telah terisi sebelum menutup kuisioner!</p>
		      	  </div>
		          <div class="modal-footer">
		            <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
		            <a class="btn btn-warning text-white" href="<?php echo site_url('kuisioner/kuisionerselesai');?>">
			            <i class="fa fa-fw fa-remove"></i> Selesai
			        </a>
		          </div>
		        </div>
		      </div>
		    </div>
		<!-- Modal --> 
          </p>
          <hr>
          <p class="text-primary">Keterangan : SS = Sangat Setuju, S = Setuju, TS = Tidak Setuju, STS = Sangat Tidak Setuju</p>
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Pertanyaan</th>
                  <th width="8%">SS</th>
                  <th width="8%">S</th>
                  <th width="8%">TS</th>
                  <th width="8%">STS</th>
                </tr>
              </thead>
              <tbody>
          			<?php
          				if ($datapertanyaan) {
                		$x=0;
                		foreach ($datapertanyaan as $pertanyaan) {
                		$x++;
                	?>
	                <tr>
	                	<td><?php echo $pertanyaan->pertanyaan; ?></td>
		                <td align="center">
		                	<?php
		                		$jawaban=0; 
		                		$query = $this->db->query("SELECT `jawaban` FROM `jawaban` WHERE `id_kuisioner` = '".$this->session->userdata('id_kuisioner')."' AND `id_res` = '".$this->session->userdata('id_res')."' AND `id_pertanyaan` = '".$pertanyaan->id_pertanyaan."'");
					            foreach ($query->result() as $row){
					                    $jawaban = $row->jawaban;
					            }
		                	if ($jawaban==4) { ?>   
		                		<form class="form-horizontal" role="form"  action="<?php echo site_url('kuisioner/tambahjawaban');?>" method="post">
							        <input class="form-control" id="id_pertanyaan" type="hidden" aria-describedby="id_pertanyaan" name="id_pertanyaan" value="<?php echo $pertanyaan->id_pertanyaan; ?>">
							        <input class="form-control" id="jawaban" type="hidden" aria-describedby="jawaban" name="jawaban" value="4">
							        <button type="submit" class="btn btn-primary btn-sm text-white" name='simpan' value='simpan'> <i class="fa fa-fw fa-check"></i> </button>
				                </form>
		                	<?php }else{ ?>
			                	<form class="form-horizontal" role="form"  action="<?php echo site_url('kuisioner/tambahjawaban');?>" method="post">
							        <input class="form-control" id="id_pertanyaan" type="hidden" aria-describedby="id_pertanyaan" name="id_pertanyaan" value="<?php echo $pertanyaan->id_pertanyaan; ?>">
							        <input class="form-control" id="jawaban" type="hidden" aria-describedby="jawaban" name="jawaban" value="4">
							        <button type="submit" class="btn btn-secondary btn-sm text-white" name='simpan' value='simpan'> <i class="fa fa-fw fa-check"></i> </button>
				                </form>		 		                	
		                	<?php } ?>
					    </td>
		                <td align="center">
			            	<?php if ($jawaban==3) { ?>   
		                		<form class="form-horizontal" role="form"  action="<?php echo site_url('kuisioner/tambahjawaban');?>" method="post">
							        <input class="form-control" id="id_pertanyaan" type="hidden" aria-describedby="id_pertanyaan" name="id_pertanyaan" value="<?php echo $pertanyaan->id_pertanyaan; ?>">
							        <input class="form-control" id="jawaban" type="hidden" aria-describedby="jawaban" name="jawaban" value="3">
							        <button type="submit" class="btn btn-primary btn-sm text-white" name='simpan' value='simpan'> <i class="fa fa-fw fa-check"></i> </button>
				                </form>
		                	<?php }else{ ?>
			                	<form class="form-horizontal" role="form"  action="<?php echo site_url('kuisioner/tambahjawaban');?>" method="post">
							        <input class="form-control" id="id_pertanyaan" type="hidden" aria-describedby="id_pertanyaan" name="id_pertanyaan" value="<?php echo $pertanyaan->id_pertanyaan; ?>">
							        <input class="form-control" id="jawaban" type="hidden" aria-describedby="jawaban" name="jawaban" value="3">
							        <button type="submit" class="btn btn-secondary btn-sm text-white" name='simpan' value='simpan'> <i class="fa fa-fw fa-check"></i> </button>
				                </form>		 		                	
		                	<?php } ?>
					    </td>
		                <td align="center">
			            	<?php if ($jawaban==2) { ?>   
		                		<form class="form-horizontal" role="form"  action="<?php echo site_url('kuisioner/tambahjawaban');?>" method="post">
							        <input class="form-control" id="id_pertanyaan" type="hidden" aria-describedby="id_pertanyaan" name="id_pertanyaan" value="<?php echo $pertanyaan->id_pertanyaan; ?>">
							        <input class="form-control" id="jawaban" type="hidden" aria-describedby="jawaban" name="jawaban" value="2">
							        <button type="submit" class="btn btn-primary btn-sm text-white" name='simpan' value='simpan'> <i class="fa fa-fw fa-check"></i> </button>
				                </form>
		                	<?php }else{ ?>
			                	<form class="form-horizontal" role="form"  action="<?php echo site_url('kuisioner/tambahjawaban');?>" method="post">
							        <input class="form-control" id="id_pertanyaan" type="hidden" aria-describedby="id_pertanyaan" name="id_pertanyaan" value="<?php echo $pertanyaan->id_pertanyaan; ?>">
							        <input class="form-control" id="jawaban" type="hidden" aria-describedby="jawaban" name="jawaban" value="2">
							        <button type="submit" class="btn btn-secondary btn-sm text-white" name='simpan' value='simpan'> <i class="fa fa-fw fa-check"></i> </button>
				                </form>		 		                	
		                	<?php } ?>
					    </td>
		                <td align="center">
			            	<?php if ($jawaban==1) { ?>   
		                		<form class="form-horizontal" role="form"  action="<?php echo site_url('kuisioner/tambahjawaban');?>" method="post">
							        <input class="form-control" id="id_pertanyaan" type="hidden" aria-describedby="id_pertanyaan" name="id_pertanyaan" value="<?php echo $pertanyaan->id_pertanyaan; ?>">
							        <input class="form-control" id="jawaban" type="hidden" aria-describedby="jawaban" name="jawaban" value="1">
							        <button type="submit" class="btn btn-primary btn-sm text-white" name='simpan' value='simpan'> <i class="fa fa-fw fa-check"></i> </button>
				                </form>
		                	<?php }else{ ?>
			                	<form class="form-horizontal" role="form"  action="<?php echo site_url('kuisioner/tambahjawaban');?>" method="post">
							        <input class="form-control" id="id_pertanyaan" type="hidden" aria-describedby="id_pertanyaan" name="id_pertanyaan" value="<?php echo $pertanyaan->id_pertanyaan; ?>">
							        <input class="form-control" id="jawaban" type="hidden" aria-describedby="jawaban" name="jawaban" value="1">
							        <button type="submit" class="btn btn-secondary btn-sm text-white" name='simpan' value='simpan'> <i class="fa fa-fw fa-check"></i> </button>
				                </form>		 		                	
		                	<?php } ?>
					    </td>                 
	                </tr>
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
        </div>
    </div>
</div>
<!-- /.container-fluid-->