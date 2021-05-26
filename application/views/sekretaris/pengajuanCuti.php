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
              <?= $this->session->pesan ? $this->session->pesan : '' ; ?>
              <table class="table" id="table" width="100%" cellspacing="0">
                <thead class="text-success">
                  <th>Tanggal Pengajuan Cuti</th>
                  <th>Jenis Cuti</th>
                  <th>Jumlah Hari</th>
                  <th>Tanggal Mulai</th>
                  <th>Tanggal Selesai</th>
                  <th>Alamat Selama Cuti</th>
                  <th>Surat Edaran</th>
                  <th>Aksi</th>
                </thead>
                <tbody>
                  <?php
                    foreach ($cuti as $key) { ?>
                      <tr>
                        <td><?= $key['tanggal_pengajuan']; ?></td>
                        <td><?= $key['jenis_cuti']; ?></td>
                        <td><?= $key['jumlah_hari']; ?></td>
                        <td><?= $key['tanggal_mulai']; ?></td>
                        <td><?= $key['tanggal_selesai']; ?></td>
                        <td><?= $key['alamat_cuti']; ?></td>
                        <td><a href="<?= base_url('assets/' . $key['surat_edaran']); ?>" class="btn btn-primary">Lihat File</a></td>
                        <td>
                          <a href="<?= base_url('sekretaris/pengajuan_cuti/verifikasi/' . $key['id_cuti']); ?>" class="btn btn-success">Verifikasi</a>
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