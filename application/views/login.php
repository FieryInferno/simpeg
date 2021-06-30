<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
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
        <div class="container-login100" style="background-image: url('<?= base_url(); ?>assets/Gedung BP4D.JPG');background-repeat: round;background-size: cover;">
            <div class="wrap-login100" style="background: none;padding-top: 25px;">
              <!-- <div class=row>
                <div class="col-12">
                  <div class="row"> -->
                    <!-- <div class="col-3"></div> -->
                    <div>
                        <div class="card" style="background-color: #efd80d;padding-left: 50px;padding-right: 50px;">
                            <div class="card-body">
                              <h3 class="text-center mt-2"><strong>SIMPEG BP4D</strong></h1>
                              <h3 class="text-center mb-2"><strong>Kabupaten Subang</strong></h2>
                              <div class="js-tilt text-center" data-tilt>
                                <img src="<?= base_url(); ?>assets/Logo_Bsr.png" alt="IMG" width="100px">
                              </div>
                                <form class="login100-form validate-form" method="post" action="<?= base_url('Login'); ?>" style="width: 100%;">
                                  <span class="login100-form-title" style="padding-bottom: 10px;">login</span>
                                <?php 
                                    if ($this->session->error) { ?>
                                        <div class="alert alert-danger" role="alert">
                                            <?= $this->session->error; ?>
                                        </div>
                                    <?php } ?>

                                    <div class="wrap-input100 validate-input">
                                        <input class="input100" type="text" name="email" placeholder="Email">
                                        <span class="focus-input100"></span>
                                        <span class="symbol-input100">
                                            <i class="fa fa-envelope" aria-hidden="true"></i>
                                        </span>
                                    </div>

                                    <div class="wrap-input100 validate-input" data-validate = "Password is required">
                                        <input class="input100" type="password" name="password" placeholder="Password">
                                        <span class="focus-input100"></span>
                                        <span class="symbol-input100">
                                            <i class="fa fa-lock" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    
                                    <div class="container-login100-form-btn">
                                        <button class="login100-form-btn" type="submit">
                                            Login
                                        </button>
                                    </div>

                                    <div class="text-center p-t-12">
                                        <a class="txt2" href="<?= base_url(); ?>daftar">
                                          Daftar
                                        </a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-3"></div> -->
                  <!-- </div>
                </div>
              </div> -->
                
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