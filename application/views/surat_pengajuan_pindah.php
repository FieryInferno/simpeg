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
  <table>
    <tr>
      <td width="450px">No. Surat &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 001/surat_pengajuan_pindah</td>
    </tr>
    <tr>
      <td>Lampiran &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: - </td>
    </tr>
    <tr>
      <td>Perihal &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Pengajuan Pindah</td>
    </tr>
  </table>
  <br>
  <div>Kepada</div>
  <div>Yth. Bupati Subang</div>
  <div>di</div>
  <div>Subang</div>
  <br>
  <div>Dengan hormat,</div>
  <div>Yang bertandatangan di bawah ini</div>
  <br>

  <table>
    <tbody>
      <tr>
        <td scope="row">Nama</td>
        <td>:</td>
        <td><?= $nama_lengkap; ?></td>
      </tr>
      <tr>
        <td scope="row">NIP</td>
        <td>:</td>
        <td><?= $nip; ?></td>
      </tr>
      <tr>
        <td scope="row">Tempat/Tanggal Lahir</td>
        <td>:</td>
        <td><?= $tempat_lahir . '/' . $tanggal_lahir; ?></td>
      </tr>
      <tr>
        <td scope="row">Alamat</td>
        <td>:</td>
        <td><?= $jalan . ' desa ' . $desa . ' kecamatan ' . $kecamatan . ' kabupaten ' . $kabupaten . ' provinsi ' . $provinsi; ?></td>
      </tr>
    </tbody>
  </table>
  
  <p>Dengan ini mengajukan permohonan kepada Bapak untuk pindah kerja.</p>
  <br>
  <p>Sebagai bahan pertimbangan, saya lampirkan : </p>
  <ol type="1">
    <li>Foto Copy SK PNS</li>
    <li>Foto Copy SK Pangkat</li>
    <li>Foto Copy Kartu Pegawai</li>
    <li>Daftar Penilaian Kinerja PNS DP3</li>
  </ol>
  <p>Demikian permohonan ini saya buat dengan sungguh - sungguh<, besar harapan saya kiranya Bapak dapat mengabulkannya, Atas perhatian dan kebijaksanaanya kami ucapkan terima kasih.</p>
  <table>
    <tr>
      <td width="450px"></td>
      <td class="text-center">Pemohon</td>
    </tr>
    <tr>
      <td></td>
      <td class="text-center">&nbsp;</td>
    </tr>
    <tr>
      <td></td>
      <td class="text-center">&nbsp;</td>
    </tr>
    <tr>
      <td></td>
      <td class="text-center">&nbsp;</td>
    </tr>
    <tr>
      <td></td>
      <td class="text-center">&nbsp;</td>
    </tr>
    <tr>
      <td></td>
      <td class="text-center"><strong><?= $nama_lengkap; ?></strong></td>
    </tr>
    <tr>
      <td></td>
      <td class="text-center"><strong>NIP. <?= $nip; ?></strong></td>
    </tr>
  </table>
</body>
</html>