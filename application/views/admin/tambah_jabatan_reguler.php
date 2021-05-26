<?php $this->load->view('_template/header'); ?>
<?php $this->load->view('_template/sidebar'); ?>
<?php $this->load->view('_template/navbar'); ?>
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Data Jabatan Reguler</h4>
          </div>
          <div class="card-body">
            <form action="<?php base_url('admin/tambah_jabatan_reguler') ?>" method="post" enctype="multipart/form-data">
              <div class="form-group col-6">
                <label for="">Pilih Pegawai</label>
                <select class="form-control" name="pegawai" id="pegawai" aria-describedby="helpId" placeholder="">
                  <option>Pilih Pegawai</option>
                  <?php
                    foreach ($pegawai as $key) { ?>
                      <option value="<?= $key['id_pegawai']; ?>"><?= $key['nama_lengkap']; ?></option>
                    <?php }
                  ?>
                </select>
              </div>
              <div class="form-groupn col-6 mb-3">
                <label for="">Pangkat yang Diajukan</label>
                <input type="text" class="form-control" name="pangkat" id="pangkat" aria-describedby="helpId" placeholder="">
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