<?php $this->load->view('_template/header'); ?>
<?php $this->load->view('_template/sidebar'); ?>
<?php $this->load->view('_template/navbar'); ?>
    
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="card">
            <div class="card-header"></div>
            <div class="card-body">
              <form action="<?= base_url(); ?>Pegawai/ubah_profile" method="post" enctype="multipart/form-data">
                <div class="form-groupn col-6 mb-3">
                  <label for="">NIP</label>
                  <input type="text" class="form-control" name="nip" id="nip" aria-describedby="helpId" placeholder="" value="<?= $nip; ?>">
                </div>
                <div class="form-groupn col-6 mb-3">
                  <label for="">Nama Lengkap</label>
                  <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" aria-describedby="helpId" placeholder="" value="<?= $nama_lengkap; ?>">
                </div>
                <div class="form-groupn col-6 mb-3">
                  <label for="">Email</label>
                  <input type="text" class="form-control" name="email" id="email" aria-describedby="helpId" placeholder="" value="<?= $email; ?>">
                </div>
                <div class="form-groupn col-6 mb-3">
                  <label for="">Tempat</label>
                  <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" aria-describedby="helpId" placeholder="" value="<?= $tempat_lahir; ?>">
                </div>
                <div class="form-groupn col-6 mb-3">
                  <label for="">Tanggal Lahir</label>
                  <input type="text" class="form-control" name="tanggal_lahir" id="tanggal_lahir" aria-describedby="helpId" placeholder="" value="<?= $tanggal_lahir; ?>">
                </div>
                <!-- <div class="form-groupn col-6 mb-3">
                  <label for="">Alamat</label>
                  <input type="text" class="form-control" name="pangkat" id="pangkat" aria-describedby="helpId" placeholder="" value="<?= $nip; ?>">
                </div> -->
                <div class="form-groupn col-6 mb-3">
                  <label for="">No. Hp</label>
                  <input type="text" class="form-control" name="no_telp" id="no_telp" aria-describedby="helpId" placeholder="" value="<?= $no_telp; ?>">
                </div>
                <div class="form-groupn col-6 mb-3">
                  <label for="">Jenis Kelamin</label>
                  <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                    <option value="laki-laki" <?php $jenis_kelamin == 'laki-laki' ? 'selected' : '' ; ?>>Laki - Laki</option>
                    <option value="perempuan" <?php $jenis_kelamin == 'perempuan' ? 'selected' : '' ; ?>>Perempuan</option>
                  </select>
                </div>
                <div class="form-groupn col-6 mb-3">
                  <label for="">Agama</label>
                  <select name="agama" id="agama" class="form-control">
                    <option value="islam" <?php $agama == 'islam' ? 'selected' : '' ; ?>>Islam</option>
                    <option value="kristen" <?php $agama == 'kristen' ? 'selected' : '' ; ?>>Kristen</option>
                    <option value="katolik" <?php $agama == 'katolik' ? 'selected' : '' ; ?>>Katolik</option>
                    <option value="hindu" <?php $agama == 'hindu' ? 'selected' : '' ; ?>>Hindu</option>
                    <option value="buddha" <?php $agama == 'buddha' ? 'selected' : '' ; ?>>Buddha</option>
                    <option value="konghucu" <?php $agama == 'konghucu' ? 'selected' : '' ; ?>>Konghucu</option>
                  </select>
                </div>
                <div class="form-groupn col-6 mb-3">
                  <label for="">Status Perkawinan</label>
                  <select name="status_perkawinan" id="status_perkawinan" class="form-control">
                    <option value="menikah" <?php $status_perkawinan == 'menikah' ? 'selected' : '' ; ?>>Menikah</option>
                    <option value="belummenikah" <?php $status_perkawinan == 'belummenikah' ? 'selected' : '' ; ?>>Belum Menikah</option>
                  </select>
                </div>
                <div class="form-groupn col-6 mb-3">
                  <label for="">Suku Bangsa</label>
                  <select name="suku_bangsa" id="suku_bangsa" class="form-control">
                    <option value="sunda" <?php $jenis_kelamin == 'subang' ? 'selected' : '' ; ?>>Sunda</option>
                    <option value="batak" <?php $jenis_kelamin == 'batak' ? 'selected' : '' ; ?>>Batak</option>
                    <option value="betawi" <?php $jenis_kelamin == 'betawi' ? 'selected' : '' ; ?>>Betawi</option>
                    <option value="bugis" <?php $jenis_kelamin == 'bugis' ? 'selected' : '' ; ?>>Bugis</option>
                    <option value="dayak" <?php $jenis_kelamin == 'dayak' ? 'selected' : '' ; ?>>Dayak</option>
                  </select>
                </div>
                <button type="submit" class="btn btn-primary"><i class="fas fa-pencil"></i> Ubah Profile</button>
              </form>
            </div>
            <div class="card-footer"></div>
          </div>
        </div>
      </div>
<?php $this->load->view('_template/footer'); ?>