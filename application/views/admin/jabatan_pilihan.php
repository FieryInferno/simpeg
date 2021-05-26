<?php $this->load->view('_template/header'); ?>
<?php $this->load->view('_template/sidebar'); ?>
<?php $this->load->view('_template/navbar'); ?>
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Data Jabatan Pilihan</h4>
          </div>
          <div class="card-body">
            <a class="btn btn-primary text-light" href="<?= base_url(); ?>admin/tambah_jabatan_pilihan"><i class="material-icons">add</i>Tambah</a>
            <div class="table-responsive">
              <?php 
                if ($this->session->pesan) { ?>
                  <div class="alert alert-success" role="alert">
                    <?= $this->session->pesan; ?>
                  </div>
                <?php } 
              ?>
              <table class="table" id="table" width="100%" cellspacing="0">
                <thead class="text-primary">
                  <th>Nama Pegawai</th>
                  <th>NIP</th>
                  <th>Tempat Lahir</th>
                  <th>Tanggal Lahir</th>
                  <th>Pangkat Sekarang</th>
                  <th>Masa Kepangkatan</th>
                  <th>Pangkat yang Diajukan</th>
                </thead>
                <tbody>
                  <?php
                    foreach ($jabatan_pilihan as $key) { ?>
                      <tr>
                        <td><?= $key['nama_lengkap']; ?></td>
                        <td><?= $key['nip']; ?></td>
                        <td><?= $key['tempat_lahir']; ?></td>
                        <td><?= $key['tanggal_lahir']; ?></td>
                        <td><?= $key['tanggal_lahir']; ?></td>
                        <td><?= $key['tanggal_lahir']; ?></td>
                        <td><?= $key['pangkat_diajukan']; ?></td>
                      </tr>
                    <?php }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $this->load->view('_template/footer'); ?>