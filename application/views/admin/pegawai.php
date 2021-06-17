<?php $this->load->view('_template/header'); ?>
<?php $this->load->view('_template/sidebar'); ?>
<?php $this->load->view('_template/navbar'); ?>
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-success">
            <h4 class="card-title ">Data Pegawai</h4>
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
                  <th>NIP</th>
                  <!-- <th>NIP Lama</th> -->
                  <th>Tempat Lahir</th>
                  <th>Tanggal Lahir</th>
                  <!-- <th>Jenis Kelamin</th> -->
                  <!-- <th>Agama</th> -->
                  <!-- <th>Status Perkawinan</th> -->
                  <!-- <th>Suku Bangsa</th> -->
                  <!-- <th>Golongan Darah</th> -->
                  <!-- <th width="200px">Alamat</th> -->
                  <th>No. Telpon</th>
                  <!-- <th>Foto</th> -->
                  <!-- <th>No. KARPEG</th> -->
                  <!-- <th>No. KARIS/KARSU</th> -->
                  <!-- <th>No. KTP</th> -->
                  <!-- <th>NPWP</th> -->
                  <!-- <th>No. Peserta Askes</th> -->
                  <!-- <th>No. Peserta Taspen</th> -->
                  <!-- <th>Status Pegawai</th> -->
                  <th>Aksi</th>
                </thead>
                <tbody>
                  <?php
                    foreach ($pegawai as $key) { ?>
                      <tr>
                        <td><?= $key['nama_lengkap']; ?></td>
                        <td><?= $key['nip']; ?></td>
                        <!-- <td><?= $key['nip_lama']; ?></td> -->
                        <td><?= $key['tempat_lahir']; ?></td>
                        <td><?= $key['tanggal_lahir']; ?></td>
                        <!-- <td><?= $key['jenis_kelamin']; ?></td> -->
                        <!-- <td><?= $key['agama']; ?></td> -->
                        <!-- <td><?= $key['status_perkawinan']; ?></td> -->
                        <!-- <td><?= $key['suku_bangsa']; ?></td> -->
                        <!-- <td><?= $key['golongan_darah']; ?></td> -->
                        <!-- <td><?= $key['jalan'] . ' RT/RW ' . $key['rt/rw'] . ' desa ' . $key['desa'] . ' kecamatan ' . $key['kecamatan'] . ' kabupaten ' . $key['kabupaten'] . ' provinsi ' . $key['provinsi']; ?></td> -->
                        <td><?= $key['no_telp']; ?></td>
                        <!-- <td><img src="<?= base_url('assets/' . $key['foto']); ?>" alt="" width="150px" height="150px"></td> -->
                        <!-- <td><?= $key['no_karpeg']; ?></td> -->
                        <!-- <td><?= $key['no_karis']; ?></td> -->
                        <!-- <td><?= $key['no_ktp']; ?></td> -->
                        <!-- <td><?= $key['npwp']; ?></td> -->
                        <!-- <td><?= $key['no_peserta_askes']; ?></td> -->
                        <!-- <td><?= $key['no_peserta_taspen']; ?></td> -->
                        <!-- <td><?= $key['status']; ?></td> -->
                        <td>
                          <a href="<?= base_url('admin/verifikasi_pegawai/' . $key['id_pegawai']); ?>" class="btn btn-success">Edit</a>
                          <!-- Button trigger modal -->
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                            Detail
                          </button>

                          <!-- Modal -->
                          <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <div class="row">
                                    <div class="col-9">
                                      <div class="form-groupn">
                                        <label for="">NIP Lama</label>
                                        <input type="text" class="form-control" value="<?= $key['nip_lama']; ?>" disabled>
                                      </div>
                                      <div class="form-groupn">
                                        <label for="">Tempat Lahir</label>
                                        <input type="text" class="form-control" value="<?= $key['tempat_lahir']; ?>" disabled>
                                      </div>
                                      <div class="form-groupn">
                                        <label for="">Status Perkawinan</label>
                                        <input type="text" class="form-control" value="<?= $key['status_perkawinan']; ?>" disabled>
                                      </div>
                                      <div class="form-groupn">
                                        <label for="">Jenis Kelamin</label>
                                        <input type="text" class="form-control" value="<?= $key['jenis_kelamin']; ?>" disabled>
                                      </div>
                                      <div class="form-groupn">
                                        <label for="">Agama</label>
                                        <input type="text" class="form-control" value="<?= $key['agama']; ?>" disabled>
                                      </div>
                                      <div class="form-groupn">
                                        <label for="">Alamat</label>
                                        <textarea disabled class="form-control" rows="5" cols="20"><?= $key['jalan'] . ' RT/RW ' . $key['rt/rw'] . ' desa ' . $key['desa'] . ' kecamatan ' . $key['kecamatan'] . ' kabupaten ' . $key['kabupaten'] . ' provinsi ' . $key['provinsi']; ?></textarea>
                                      </div>
                                    </div>
                                    <div class="col-3">
                                      <img src="<?= base_url('assets/' . $key['foto']); ?>" alt="" width="150px" height="150px">  
                                    </div>
                                  </div>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                  <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                              </div>
                            </div>
                          </div>
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