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
            <a class="btn btn-primary text-light" style="background-color: #fc9309;" href="<?= base_url(); ?>pegawai/tambah_pengajuan_cuti"><i class="material-icons">add</i>Tambah Pengajuan</a>
            <div class="table-responsive">
              <?php 
                if ($this->session->alert) { ?>
                  <div class="alert alert-success" role="alert">
                    <?= $this->session->alert; ?>
                  </div>
                <?php } 
              ?>
              <div class="table-responsive">
                <table class="table" id="table" width="100%" cellspacing="0">
                  <thead class="text-success">
                    <th>Tanggal Pengajuan Cuti</th>
                    <th>Jenis Cuti</th>
                    <th>Jumlah Hari</th>
                    <th>Tanggal Mulai</th>
                    <th>Tanggal Selesai</th>
                    <th>Alamat Selama Cuti</th>
                    <th>Surat Pengajuan</th>
                    <th>Status</th>
                  </thead>
                  <tbody>
                    <?php
                      foreach ($cuti as $key) { ?>
                        <tr>
                          <td><?= $key['tanggal_pengajuan']; ?></td>
                          <td><?= str_replace('_', ' ', $key['jenis_cuti']); ?></td>
                          <td><?= $key['jumlah_hari']; ?></td>
                          <td><?= $key['tanggal_mulai']; ?></td>
                          <td><?= $key['tanggal_selesai']; ?></td>
                          <td><?= $key['alamat_cuti']; ?></td>
                          <td>
                            <?= '<a class="btn btn-primary" href="' . base_url('assets/' . $key['surat_pengajuan']) . '">Lihat Surat Pengajuan</a>'; ?>
                          </td>
                          <td>
                            <?php
                              switch ($key['status_cuti']) {
                                case '0': ?>
                                  <button class="btn btn-danger">Menunggu Verifikasi Kasubag</button>
                                  <?php break;
                                case '1': ?>
                                  <button class="btn btn-primary">Pengajuan Disetujui Kasubag</button>
                                  <?php break;
                                case '2': ?>
                                  <button class="btn btn-primary">Pengajuan Ditolak Kasubag</button>
                                  <?php break;
                                case '3': ?>
                                  <button class="btn btn-success">Menunggu Verifikasi Surat Izin oleh Kasubag</button>
                                  <?php break;
                                case '4': ?>
                                  <button class="btn btn-success">Surat Izin Disetujui Kasubag</button>
                                  <?php break;
                                case '5': ?>
                                  <button class="btn btn-success">Surat Izin Ditolak Kasubag</button>
                                  <?php break;
                                case '6': ?>
                                  <button class="btn btn-success">Cuti Disetujui</button>
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
</div>
<?php $this->load->view('_template/footer'); ?>