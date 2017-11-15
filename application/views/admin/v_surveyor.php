<div class="container-fluid">
	    <div class="col-12">
          <h1>Surveyor</h1>
          <hr>
          <a class="btn btn-success btn-flat pull-right" href="<?php echo site_url('surveyor/tambah');?>">
            <i class="fa fa-fw fa-plus"></i> Tambah
          </a>
          <br><br>
	        <!-- Example DataTables Card-->
		    <div class="table-responsive">
		        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
		        	<thead>
		                <tr>
		                  <th>Nama</th>
		                  <th>Email</th>
		                </tr>
		            </thead>
		            <tbody>
		                <?php 
		                foreach ($datasurveyor as $surveyor) {
		                ?>
		                <tr>
		                  <td><?php echo $surveyor->nama ?></td>
		                  <td><?php echo $surveyor->email ?></td>
		                </tr>	                	
		                <?php
		                }
		                 ?>
		            </tbody>
		        </table>
		    </div>
        </div>
    </div>
</div>
<!-- /.container-fluid-->