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
          <h1>Responden</h1>
          <hr>
          <br><br>
          <?php if ($datakuisioner) { ?>
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Kuisioner</th>
                  <th width="10%">Opsi</th>
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
		                	<a class="mr-3 d-inline-block" href="<?php echo site_url('responden/kuisioner/'.$kuisioner->id_kuisioner);?>">
			                	<i class="fa fa-fw fa-users"></i> Lihat</a>
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
          <br>
        </div>
    </div>
</div>
<!-- /.container-fluid-->