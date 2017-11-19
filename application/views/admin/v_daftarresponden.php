<div class="container-fluid">
    <div class="row">
	    <div class="col-12">
          <h1>Daftar Responden</h1>
          <p><?php echo $detail_kuisioner[0]->nama_kuisioner; ?></p>
          <hr>
          <br>
          <?php if ($dataresponden) { ?>
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Responden</th>
                  <th width="20%">Opsi</th>
                </tr>
              </thead>
              <tbody>
                	<?php 
                		$x=0;
                		foreach ($dataresponden as $responden) {
                		$x++;
                	?>
	                <tr>
	                	<td><?php echo $responden->nama; ?></td>
		                <td align="center">
			            	<a class="mr-3 d-inline-block" href="<?php echo site_url('responden/jawaban/'.$responden->id_kuisioner.'/'.$responden->id_res);?>">
			                  <i class="fa fa-fw fa-check-square-o"></i> Lihat Jawaban</a>
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