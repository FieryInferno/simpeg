<?php $this->load->view('_template/header'); ?>
<?php $this->load->view('_template/sidebar'); ?>
<?php $this->load->view('_template/navbar'); ?>
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-success">
            <h4 class="card-title ">Pengajuan Pindah</h4>
          </div>
          <div class="card-body">
            <?php
              if (isset($surat_permohonan)) { ?>
                <embed src="<?= base_url('assets/' . $surat_permohonan); ?>" width = "100%" height = "600px" />
              <?php } else { ?>
                <?= $this->session->alert ? $this->session->alert : '' ; ?>
                <form action="<?= base_url('pegawai/pengajuan_pindah') ?>" method="post" enctype="multipart/form-data">
                  <div class="form-groupn col-6 mb-3">
                    <label for="">SK CPNS</label>
                    <input type="file" class="form-control" name="sk_cpns" id="sk_cpns" aria-describedby="helpId" placeholder="">
                  </div>
                  <div class="form-groupn col-6 mb-3">
                    <label for="">SK Pangkat</label>
                    <input type="file" class="form-control" name="sk_pangkat" id="sk_pangkat" aria-describedby="helpId" placeholder="">
                  </div>
                  <div class="form-groupn col-6 mb-3">
                    <label for="">Kartu Pegawai</label>
                    <input type="file" class="form-control" name="kartu_pegawai" id="kartu_pegawai" aria-describedby="helpId" placeholder="">
                  </div>
                  <div class="form-groupn col-6 mb-3">
                    <label for="">Penilaian Kinerja PNS DP3</label>
                    <input type="file" class="form-control" name="penilaian_kerja" id="penilaian_kerja" aria-describedby="helpId" placeholder="">
                  </div>
                  <input type="hidden" name="a" value="a">
                  <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
                </form>
              <?php }
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $this->load->view('_template/footer'); ?>