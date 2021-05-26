<?php $this->load->view('_template/header'); ?>
<?php $this->load->view('_template/sidebar'); ?>
<?php $this->load->view('_template/navbar'); ?>
    
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="card">
            <div class="card-header"></div>
            <div class="card-body">
              <form action="" method="post" enctype="multipart/form-data">
                <a href="<?= base_url(); ?>pegawai/ubah_profile" class="btn btn-primary"><i class="fas fa-pencil"></i> Ubah Profile</a>
              <?php
                if ($this->session->pesan) {
                  echo $this->session->pesan;
                }
              ?>
                <div class="form-groupn col-6 mb-3">
                  <label for="">NIP</label>
                  <input type="text" class="form-control" name="nip" id="nip" aria-describedby="helpId" placeholder="" value="<?= $nip; ?>" disabled>
                </div>
                <div class="form-groupn col-6 mb-3">
                  <label for="">Nama Lengkap</label>
                  <input type="text" class="form-control" name="pangkat" id="pangkat" aria-describedby="helpId" placeholder="" value="<?= $nama_lengkap; ?>" disabled>
                </div>
                <div class="form-groupn col-6 mb-3">
                  <label for="">Email</label>
                  <input type="text" class="form-control" name="pangkat" id="pangkat" aria-describedby="helpId" placeholder="" value="<?= $email; ?>" disabled>
                </div>
                <div class="form-groupn col-6 mb-3">
                  <label for="">Tempat</label>
                  <input type="text" class="form-control" name="pangkat" id="pangkat" aria-describedby="helpId" placeholder="" value="<?= $tempat_lahir; ?>" disabled>
                </div>
                <div class="form-groupn col-6 mb-3">
                  <label for="">Tanggal Lahir</label>
                  <input type="text" class="form-control" name="pangkat" id="pangkat" aria-describedby="helpId" placeholder="" value="<?= $tanggal_lahir; ?>" disabled>
                </div>
                <!-- <div class="form-groupn col-6 mb-3">
                  <label for="">Alamat</label>
                  <input type="text" class="form-control" name="pangkat" id="pangkat" aria-describedby="helpId" placeholder="" value="<?= $nip; ?>" disabled>
                </div> -->
                <div class="form-groupn col-6 mb-3">
                  <label for="">No. Hp</label>
                  <input type="text" class="form-control" name="pangkat" id="pangkat" aria-describedby="helpId" placeholder="" value="<?= $no_telp; ?>" disabled>
                </div>
                <div class="form-groupn col-6 mb-3">
                  <label for="">Jenis Kelamin</label>
                  <input type="text" class="form-control" name="pangkat" id="pangkat" aria-describedby="helpId" placeholder="" value="<?= $jenis_kelamin; ?>" disabled>
                </div>
                <div class="form-groupn col-6 mb-3">
                  <label for="">Agama</label>
                  <input type="text" class="form-control" name="pangkat" id="pangkat" aria-describedby="helpId" placeholder="" value="<?= $agama; ?>" disabled>
                </div>
                <div class="form-groupn col-6 mb-3">
                  <label for="">Status Perkawinan</label>
                  <input type="text" class="form-control" name="pangkat" id="pangkat" aria-describedby="helpId" placeholder="" value="<?= $status_perkawinan; ?>" disabled>
                </div>
                <div class="form-groupn col-6 mb-3">
                  <label for="">Suku Bangsa</label>
                  <input type="text" class="form-control" name="pangkat" id="pangkat" aria-describedby="helpId" placeholder="" value="<?= $suku_bangsa; ?>" disabled>
                </div>
              </form>
            </div>
            <div class="card-footer"></div>
          </div>
        </div>
      </div>
<?php $this->load->view('_template/footer'); ?>