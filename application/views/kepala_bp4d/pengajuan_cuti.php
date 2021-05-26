<?php $this->load->view('_template/header'); ?>
<?php $this->load->view('_template/sidebar'); ?>
<?php $this->load->view('_template/navbar'); ?>
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-success">
            <h4 class="card-title ">Data Pengajuan Cuti</h4>
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
                  <th>Nama Pegawai</th>
                  <th>Tanggal Pengajuan Cuti</th>
                  <th>Jenis Cuti</th>
                  <th>Jumlah Hari</th>
                  <th>Tanggal Mulai</th>
                  <th>Tanggal Selesai</th>
                  <th>Alamat Selama Cuti</th>
                  <th>Aksi</th>
                </thead>
                <tbody>
                  <?php
                    foreach ($cuti as $key) { ?>
                      <tr>
                        <td><?= $key['nama_lengkap']; ?></td>
                        <td><?= $key['tanggal_pengajuan']; ?></td>
                        <td><?= $key['jenis_cuti']; ?></td>
                        <td><?= $key['jumlah_hari']; ?></td>
                        <td><?= $key['tanggal_mulai']; ?></td>
                        <td><?= $key['tanggal_selesai']; ?></td>
                        <td><?= $key['alamat_cuti']; ?></td>
                        <td>
                          <?php
                            switch ($key['status_cuti']) {
                              case 'verifikasi_admin': ?>
                                <a href="<?= base_url('kepala_bp4d/verifikasi_cuti/' . $key['id_cuti']); ?>" class="btn btn-warning">Verifikasi</a>
                                <?php break;
                              case 'verifikasi_kepala': ?>
                                <button class="btn btn-success">Cuti disetujui</button>
                                <?php break;
                              
                              default:
                                # code...
                                break;
                            }
                          ?>
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