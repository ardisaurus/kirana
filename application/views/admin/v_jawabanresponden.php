<div class="container-fluid">
    <div class="row">
	    <div class="col-12">    		
          <h1>Daftar Jawaban</h1>
          <p><?php echo $detail_kuisioner[0]->nama_kuisioner; ?></p>
          <p>Oleh : <?php echo $detail_responden[0]->nama; echo " - ".$detail_responden[0]->no_id; ?></p>
          <hr>
          <p class="text-primary">Keterangan : SS = Sangat Setuju, S = Setuju, TS = Tidak Setuju, STS = Sangat Tidak Setuju</p>
          <br>
          <?php if ($datajawaban) { ?>
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Pertanyaan</th>
                  <th width="15%">Jawaban</th>
                </tr>
              </thead>
              <tbody>
                	<?php 
                		$x=0;
                		foreach ($datajawaban as $jawaban) {
                		$x++;
                	?>
	                <tr>
	                	<td><?php echo $jawaban->pertanyaan; ?></td>
			           	<?php if ($jawaban->jawaban==1) { ?>
		                <td class="bg-danger text-white" align="center">
		                	STS
			           	</td>
			            <?php } ?>
			           	<?php if ($jawaban->jawaban==2) { ?>
		                <td class="bg-warning text-white" align="center">
		                	TS
			           	</td>
			            <?php } ?>
			           	<?php if ($jawaban->jawaban==3) { ?>
		                <td class="bg-success text-white" align="center">
		                	S
			           	</td>
			            <?php } ?>
			           	<?php if ($jawaban->jawaban==4) { ?>
		                <td class="bg-primary text-white" align="center">
		                	SS
			           	</td>
			            <?php } ?>     
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
          <a class="btn btn-warning pull-right text-white" href="<?php echo site_url('responden/kuisioner/'.$detail_kuisioner[0]->id_kuisioner);?>">
              <i class="fa fa-fw fa-arrow-left"></i> Kembali
            </a>
        </div>
    </div>
</div>
<!-- /.container-fluid-->