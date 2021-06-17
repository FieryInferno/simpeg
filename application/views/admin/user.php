<?php $this->load->view('_template/header'); ?>
<?php $this->load->view('_template/sidebar'); ?>
<?php $this->load->view('_template/navbar'); ?>
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <h4 class="card-title ">Data User</h4>
        <div class="card">
          <div class="card-header card-header-success text-center">
            <a href="<?= base_url(); ?>admin/data_user/tambah" class="btn btn-primary" style="background-color: #0e0495;">Tambah</a>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <?php 
                if ($this->session->alert) { ?>
                  <div class="alert alert-success" role="alert">
                    <?= $this->session->alert; ?>
                  </div>
                <?php } 
              ?>
              <table class="table" id="table" width="100%" cellspacing="0">
                <thead class="text-success">
                  <th>Nama Lengkap</th>
                  <th>Email</th>
                  <th>NIP</th>
                  <th>Bidang</th>
                  <th>Aksi</th>
                </thead>
                <tbody>
                  <?php
                    foreach ($user as $key) { ?>
                      <tr>
                        <td><?= $key['nama_lengkap']; ?></td>
                        <td><?= $key['email']; ?></td>
                        <td><?= $key['nip']; ?></td>
                        <td><?= $key['bidang']; ?></td>
                        <td>
                          <?php
                            if ($key['status'] == 'sudah') { ?>
                              <button class="btn btn-success btn-round">Sudah diverifikasi</button>
                            <?php } else if ($key['status'] == 'belum') { ?>
                              <a href="<?= base_url('admin/verifikasi_pegawai/' . $key['id_pegawai']); ?>">Verifikasi</a>
                            <?php } ?>
                        </td>
                      </tr>
                    <?php } ?>
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