<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daftar</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="<?= base_url(); ?>images/icons/favicon.ico"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/vendor/animate/animate.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/vendor/select2/select2.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/util.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/main.css">
<!--===============================================================================================-->
</head>
<body>
    <div class="limiter">
        <div class="container-login100"  style="background-image: url('<?= base_url(); ?>assets/Gedung BP4D.JPG');background-repeat: round;background-size: cover;">
            <div class="wrap-login100" style="background: none;padding-top: 25px;">
              <div class=row>
                <div class="col-12">
                  <h1 class="text-center mb-5 pb-5">Sistem Informasi Manajemen Kepegawaian BP4D Kabupaten Subang</h1>
                </div>
                <div class="card col-12">
                  <div class="card-body col-12">
                    <form class="validate-form" method="post" action="<?= base_url('Daftar'); ?>" enctype="multipart/form-data">
                      <span class="login100-form-title">Daftar</span>
                      <?php 
                        if ($this->session->alert) { ?>
                          <div class="alert alert-success" role="alert">
                            <?= $this->session->alert; ?>
                          </div>
                        <?php } ?>
                      <div class="wrap-input100 validate-input">
                        <input class="input100" type="text" name="nama_lengkap" placeholder="Nama Lengkap" value="<?= set_value('nama_lengkap'); ?>">
                        <span class="focus-input100"></span>
                      </div>
                      <div class="wrap-input100 validate-input">
                        <input class="input100" type="text" name="email" placeholder="Email" value="<?= set_value('email'); ?>">
                        <span class="focus-input100"></span>
                      </div>
                      <div class="wrap-input100 validate-input">
                        <input class="input100" type="text" name="nip" placeholder="nip" value="<?= set_value('nip'); ?>">
                        <span class="focus-input100"></span>
                      </div>
                      <div class="wrap-input100 validate-input">
                        <select name="bidang" id="bidang" class="input100">
                          <option>Pilih Bidang</option>
                          <option value="pendanaan_dan_pemerintahan">Pendanaan dan Pemerintahan</option>
                          <option value="sosial_budaya">Sosial Budaya</option>
                          <option value="ekonomi">Ekonomi</option>
                          <option value="prasarana_dan_tata_ruang">Prasarana dan Tata Ruang</option>
                          <option value="penelitian_dan_pengembangan">Penelitian dan Pengembangan</option>
                        </select>
                        <span class="focus-input100"></span>
                      </div>
                      <div class="container-login100-form-btn">
                        <button class="login100-form-btn" type="submit">Daftar</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    

    
<!--===============================================================================================-->  
    <script src="<?= base_url(); ?>assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="<?= base_url(); ?>assets/vendor/bootstrap/js/popper.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="<?= base_url(); ?>assets/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
    <script src="<?= base_url(); ?>assets/vendor/tilt/tilt.jquery.min.js"></script>
    <script >
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
<!--===============================================================================================-->
    <script src="js/main.js"></script>

</body>
</html>