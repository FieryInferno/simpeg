<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<title><?= $this->input->post('no_surat'); ?></title>
  <link rel="stylesheet" href="<?= base_url(); ?>assets/print.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
  <table width="100%">
    <tr>
      <td width="50%"></td>
      <td width="50%">
        <div>SURAT EDARAN KEPALA</div>
        <div>BADAN ADMINISTRASI</div>
        <div>KEPEGAWAIAN NEGARA</div>
        <div>NOMOR : 01/Surat Edaran/1977</div>
        <div>TANGGAL : 25 PEBRUARI 1977</div>
        <hr>
        <div class="text-right">Subang, tanggal 
          <?php
            function tgl_indo($tanggal){
              $bulan = array (
                1 =>   'Januari',
                'Februari',
                'Maret',
                'April',
                'Mei',
                'Juni',
                'Juli',
                'Agustus',
                'September',
                'Oktober',
                'November',
                'Desember'
              );
              $pecahkan = explode('-', $tanggal);
              return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
            }
            echo tgl_indo(date('Y-m-d'));
          ?>
        </div>
        <br>
      </td>
    </tr>
  </table>
  <div class="text-center">SURAT IZIN CUTI KARENA ALASAN PENTING</div>
  <div class="text-center">NOMOR : <?= $no_surat; ?></div>
  <ol type="1">
    <li>
      <div>Diberikan cuti karena alasan penting kepada Pegawai Negeri Sipil :</div>
      <table width="100%">
        <tr>
          <td width="30%">Nama</td>
          <td width="1%">:</td>
          <td width="69%"><?= $pegawai['nama_lengkap']; ?></td>
        </tr>
        <tr>
          <td>NIP</td>
          <td>:</td>
          <td><?= $pegawai['nip']; ?></td>
        </tr>
        <tr>
          <td>Pangkat/golongan ruang</td>
          <td>:</td>
          <td><?= $pegawai['pangkat_golongan']; ?></td>
        </tr>
        <tr>
          <td>Jabatan</td>
          <td>:</td>
          <td></td>
        </tr>
        <tr>
          <td>Satuan Organisasi</td>
          <td>:</td>
          <td><?= $pegawai['bidang']; ?></td>
        </tr>
      </table>
      <br>
      <p>Selama <?= $pegawai['jumlah_hari']; ?> hari kerja, terhitung mulai tanggal <?= tgl_indo($pegawai['tanggal_mulai']); ?> sampai dengan tanggal <?= tgl_indo($pegawai['tanggal_selesai']); ?> dengan ketentuan sebagai berikut:</p>
      <ol type="a">
        <li>Sebelum menjalankan cuti karena alasan penting menyerahkan pekerjaannya kepada atasan langsungnya.</li>
        <li>Setelah selesai menjalankan cuti karena alasan penting melaporkan diri kepada atasan langsungnya dan bekerja kembali sebagaimana biasa.</li>
      </ol>
    </li>
    <li>Demikianlah surat izin cuti karena alasan penting ini dibuat untuk dapat digunakan sebagaimana mestinya.</li>
  </ol>
  <table width="100%">
    <tr>
      <td width="60%">&nbsp;</td>
      <td width="40%">
        <div class="text-center">Hormat saya,</div>
        <br><br><br>
        <div class="text-center">(<?= $pegawai['nama_lengkap']; ?>)</div>
        <div class="text-center">(NIP. <?= $pegawai['nip']; ?>)</div>
      </td>
    </tr>
  </table>
  <br><br><br>
  <p><strong>TEMBUSAN:</strong></p>
  <ol type="1">
    <li>..........................</li>
    <li>.......................... dan seterusnya.</li>
    <li>Pertinggal</li>
  </ol>
</body>
</html>