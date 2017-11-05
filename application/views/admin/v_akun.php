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
          <h1>Akun</h1>
          <hr>
        <div class="row">
        <div class="col-xl-12 col-sm-12 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-user"></i>
              </div>
              <div class="mr-5">Nama :  <?php echo $userdetail[0]->nama; ?></div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#" data-toggle="modal" data-target="#exampleModal" >
              <span class="float-left">Ubah</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <!-- Nama Modal-->
		    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		      <div class="modal-dialog" role="document">
		        <div class="modal-content">
		          <div class="modal-header">
		            <h5 class="modal-title" id="exampleModalLabel">Ubah Nama</h5>
		            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
		              <span aria-hidden="true">×</span>
		            </button>
		          </div>
		          <div class="modal-body">
                  <form class="form-horizontal" role="form"  action="<?php echo site_url('akun/ubahNama');?>" method="post">
		          <div class="form-group">
		            <label for="nama">Nama Baru</label>
		            <input class="form-control" id="nama" type="text" aria-describedby="nama" name="nama" placeholder="Masukan Nama Baru">
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
        <div class="col-xl-12 col-sm-12 mb-3">
          <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-credit-card"></i>
              </div>
              <div class="mr-5">Email : <?php echo $userdetail[0]->email; ?></div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#" data-toggle="modal" data-target="#exampleModal2" >
              <span class="float-left">Ubah</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <!-- Email Modal-->
		    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
		      <div class="modal-dialog" role="document">
		        <div class="modal-content">
		          <div class="modal-header">
		            <h5 class="modal-title" id="exampleModalLabel2">Ubah Email</h5>
		            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
		              <span aria-hidden="true">×</span>
		            </button>
		          </div>
		          <div class="modal-body">
                  <form class="form-horizontal" role="form"  action="<?php echo site_url('akun/ubahEmail');?>" method="post">
		          <div class="form-group">
		            <label for="email">Email Baru</label>
		            <input class="form-control" id="email" type="email" aria-describedby="email" name="email" placeholder="Masukan Email Baru">
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
        <div class="col-xl-12 col-sm-12 mb-3">
          <div class="card text-white bg-warning o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-key"></i>
              </div>
              <div class="mr-5">Kata Sandi</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#" data-toggle="modal" data-target="#exampleModal3" >
              <span class="float-left">Ubah</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <!-- kata Sandi Modal-->
		    <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3" aria-hidden="true">
		      <div class="modal-dialog" role="document">
		        <div class="modal-content">
		          <div class="modal-header">
		            <h5 class="modal-title" id="exampleModalLabel3">Ubah Kata Sandi</h5>
		            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
		              <span aria-hidden="true">×</span>
		            </button>
		          </div>
		          <div class="modal-body">
                  <form class="form-horizontal" role="form"  action="<?php echo site_url('akun/ubahPassword');?>" method="post">
		          <div class="form-group">
		            <label for="passwordlama">Kata Sandi Lama</label>
		            <input class="form-control" id="passwordlama" type="password" aria-describedby="passwordlama" name="passwordlama" placeholder="Masukan Kata Sandi Lama">
		          </div>
		          <div class="form-group">
		            <label for="passwordbaru">Kata Sandi Baru</label>
		            <input class="form-control" id="passwordbaru" type="password" aria-describedby="passwordbaru" name="passwordbaru" placeholder="Masukan Kata Sandi Baru">
		          </div>
		          <div class="form-group">
		            <label for="passwordbaru2"></label>
		            <input class="form-control" id="passwordbaru2" type="password" aria-describedby="passwordbaru2" name="passwordbaru2" placeholder="Masukan Kembali Kata Sandi Baru">
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
        <?php 
        $this->db->select('level');		
		$this->db->where('level', 0);
		$hasilquery=$this->db->get('user');		
        if ($hasilquery->num_rows() > 1): ?>      
        <div class="col-xl-12 col-sm-12 mb-3">
          <div class="card text-white bg-danger o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-remove"></i>
              </div>
              <div class="mr-5">Hapus Akun</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#" data-toggle="modal" data-target="#exampleModal4" >
              <span class="float-left">Hapus</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <!-- Email Modal-->
		    <div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel4" aria-hidden="true">
		      <div class="modal-dialog" role="document">
		        <div class="modal-content">
		          <div class="modal-header">
		            <h5 class="modal-title" id="exampleModalLabel4">Hapus Akun</h5>
		            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
		              <span aria-hidden="true">×</span>
		            </button>
		          </div>
		          <div class="modal-body" align="center">
		          	Apakah anda yakin?
		      	  </div>
		          <div class="modal-footer">
		            <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
		            <a class="btn btn-danger" href="<?php echo site_url('akun/hapus');?>">Hapus</a>
		          </div>
		        </div>
		      </div>
		    </div>
		<!-- Modal --> 	
        <?php endif ?> 
      </div>
    </div>
        </div>
    </div>
</div>
<!-- /.container-fluid-->