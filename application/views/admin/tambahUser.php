<?php $this->load->view('_template/header'); ?>
<?php $this->load->view('_template/sidebar'); ?>
<?php $this->load->view('_template/navbar'); ?>
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Tambah User</h4>
          </div>
          <div class="card-body">
            <form action="<?= base_url(); ?>admin/data_user/tambah" method="post" enctype="multipart/form-data">
              <div class="form-groupn col-6 mb-3">
                <label for="">Nama Lengkap</label>
                <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" aria-describedby="helpId" placeholder="">
              </div>
              <div class="form-groupn col-6 mb-3">
                <label for="">Email</label>
                <input type="email" class="form-control" name="email" id="email" aria-describedby="helpId" placeholder="">
              </div>
              <div class="form-groupn col-6 mb-3">
                <label for="">NIP</label>
                <input type="text" class="form-control" name="nip" id="nip" aria-describedby="helpId" placeholder="">
              </div>
              <div class="form-groupn col-6 mb-3">
                <label for="">Bagian</label>
                <select name="bagian" id="bagian" class="form-control">
                  <option disabled selected>Pilih Bagian</option>
                  <option value="umum_dan_kepegawaian">Umum dan Kepegawaian</option>
                  <option value="perencanaan_evaluasi_dan_pelaporan">perencanaan_evaluasi_dan_pelaporan</option>
                  <option value="keuangan_dan_asset">Keuangan dan Asset</option>
                </select>
              </div>
              <div class="form-groupn col-6 mb-3">
                <label for="">Bidang</label>
                <select name="bidang" id="bidang" class="form-control">
                  <option disabled selected>Pilih Bidang</option>
                  <option value="pendanaan_dan_pemerintahan">Pendanaan dan Pemerintahan</option>
                  <option value="sosial_budaya">Sosial Budaya</option>
                  <option value="ekonomi">Ekonomi</option>
                  <option value="prasarana_dan_tata_ruang">Prasarana dan Tata Ruang</option>
                  <option value="penelitian_dan_pengembangan">Penelitian dan Pengembangan</option>
                </select>
              </div>
              <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $this->load->view('_template/footer'); ?>