<?php $this->load->view('_template/header'); ?>
<?php $this->load->view('_template/sidebar'); ?>
<?php $this->load->view('_template/navbar'); ?>
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-success">
            <h4 class="card-title ">Tambah Pengajuan Cuti</h4>
          </div>
          <div class="card-body">
            <form action="<?php base_url('pegawai/tambah_pengajuan_cuti') ?>" method="post" enctype="multipart/form-data">
              <div class="form-group col-6">
                <label for="">Jenis Cuti</label>
                <select class="form-control" name="jenis_cuti" id="jenis_cuti" aria-describedby="helpId" placeholder="" onchange="jenisCuti(this)">
                  <option>Pilih Jenis Cuti</option>
                  <option value="cuti_tahunan">Cuti Tahunan</option>
                  <option value="cuti_besar">Cuti Besar</option>
                  <option value="cuti_sakit">Cuti Sakit</option>
                  <option value="cuti_bersalin">Cuti Bersalin</option>
                  <option value="cuti_karena_alasan_penting">Cuti karena alasan penting</option>
                </select>
              </div>
              <div id="penyebabSakit"></div>
              <div class="form-groupn col-6 mb-3">
                <label for="">Tanggal Mulai</label>
                <input type="date" class="form-control" name="tanggal_mulai" id="tanggal_mulai" aria-describedby="helpId" placeholder="">
              </div>
              <div class="form-groupn col-6 mb-3">
                <label for="">Tanggal Selesai</label>
                <input type="date" class="form-control" name="tanggal_selesai" id="tanggal_selesai" aria-describedby="helpId" placeholder="">
              </div>
              <div class="form-groupn col-6 mb-3">
                <label for="">Alamat Selama Cuti</label>
                <input type="text" class="form-control" name="alamat_cuti" id="alamat_cuti" aria-describedby="helpId" placeholder="">
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