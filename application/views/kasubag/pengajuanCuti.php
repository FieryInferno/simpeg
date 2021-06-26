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
                  <th>Surat Pengajuan Cuti</th>
                  <th>Surat Perizinan Cuti</th>
                  <th>Aksi</th>
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
                        <td><a href="<?= base_url('assets/' . $key['surat_pengajuan']); ?>" class="btn btn-primary">Lihat File</a></td>
                        <td>
                          <?php
                            if ($key['surat_izin']) { ?>
                              <a href="<?= base_url('assets/' . $key['surat_izin']); ?>" class="btn btn-primary">Lihat File</a></td>
                            <?php }
                          ?>
                        <td>
                          <?php
                            switch ($key['status_cuti']) {
                              case '0': ?>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalLong<?= $key['id_cuti']; ?>">
                                  Verifikasi
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModalLong<?= $key['id_cuti']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Konfirmasi Verifikasi</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">
                                        Anda yakin akan verifikasi pengajuan?
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <a href="<?= base_url('kasubag/pengajuan_cuti/verifikasi/' . $key['id_cuti']); ?>" class="btn btn-success">Verifikasi</a>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#tolakVerifikasi<?= $key['id_cuti']; ?>">
                                  Tolak Verifikasi
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="tolakVerifikasi<?= $key['id_cuti']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Konfirmasi Tolak Verifikasi</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">
                                        Anda yakin akan menolak verifikasi pengajuan?
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <a href="<?= base_url('kasubag/pengajuan_cuti/tolak_verifikasi/' . $key['id_cuti']); ?>" class="btn btn-danger">Tolak Verifikasi</a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <?php break;
                              case '1': ?>
                                <button class="btn btn-primary">Pengajuan Cuti Disetujui</button>
                                <?php break;
                              case '2': ?>
                                <button class="btn btn-primary">Pengajuan Cuti Ditolak</button>
                                <?php break;
                              case '3': ?>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalLong<?= $key['id_cuti']; ?>">
                                  Verifikasi Surat Izin
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModalLong<?= $key['id_cuti']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Konfirmasi Verifikasi</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">
                                        Anda yakin akan verifikasi Surat Izin?
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <a href="<?= base_url('kasubag/verifikasi_surat_izin/' . $key['id_cuti']); ?>" class="btn btn-success">Verifikasi</a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
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