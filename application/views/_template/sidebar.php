<body class="">
  <div class="wrapper ">
    <div class="sidebar" style="background-color: #070495;">
      <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal text-white">
          SIMPEG
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item
            <?php
              if ($title == 'Dashboard') {
                echo 'active';
              }
            ?>">
            <a style="background-color: #fc9309;" class="nav-link" href="<?= base_url(); ?>">
              <i class="material-icons text-white">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <?php
          switch ($this->session->level) {
            case 'admin': ?>
              <li class="nav-item 
                <?php
                  if ($title == 'Data User') {
                    echo 'active';
                  }
                ?>">
                <a class="nav-link text-white" href="<?= base_url(); ?>admin/data_user">
                  <i class="material-icons text-white">person</i>
                  <p>Data User</p>
                </a>
              </li>
              <li class="nav-item 
                <?php
                  if ($title == 'Data Pegawai') {
                    echo 'active';
                  }
                ?>">
                <a class="nav-link text-white" href="<?= base_url(); ?>admin/data_pegawai">
                  <i class="material-icons text-white">people</i>
                  <p>Data Pegawai</p>
                </a>
              </li>

              <li class="nav-item
                <?php
                  if ($title == 'Data Jabatan Reguler') {
                    echo 'active';
                  }
                ?>">
                <a class="nav-link collapsed text-white" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                      <i class="material-icons text-white">assessment</i>
                  <span>Data Kenaikan Jabatan</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                  <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item nav-link" href="<?= base_url(); ?>admin/jabatan_reguler"> 
                      <i class="material-icons">panorama_fish_eye</i>Kenaikan Jabatan Reguler
                    </a>
                    <a class="collapse-item nav-link" href="<?= base_url(); ?>admin/jabatan_pilihan">
                      <i class="material-icons">panorama_fish_eye</i>Kenaikan Jabatan Pilihan
                    </a>
                  </div>
                </div>
              </li>
              <li class="nav-item 
                <?php
                  if ($title == 'Pengajuan Cuti') {
                    echo 'active';
                  }
                ?>">
                <a class="nav-link text-white" href="<?= base_url(); ?>admin/pengajuan_cuti.html">
                  <i class="material-icons text-white">person</i>
                  <p>Pengajuan Cuti</p>
                </a>
              </li>
              <?php break;

            case 'pegawai': ?>
              <li class="nav-item 
                <?php
                  if ($title == 'Pengajuan Cuti') {
                    echo 'active';
                  }
                ?>">
                <a class="nav-link text-white" href="<?= base_url(); ?>pegawai/pengajuan_cuti">
                  <i class="material-icons text-white">person</i>
                  <p>Pengajuan Cuti</p>
                </a>
              </li>
              <?php break;

            case 'kepala_bp4d': ?>
              <li class="nav-item 
                <?php
                  if ($title == 'Pengajuan Cuti') {
                    echo 'active';
                  }
                ?>">
                <a class="nav-link text-white" href="<?= base_url(); ?>kepala_bp4d/pengajuan_cuti.html">
                  <i class="material-icons text-white">person</i>
                  <p>Pengajuan Cuti</p>
                </a>
              </li>
              <?php break;
            case 'kasubag': ?>
              <li class="nav-item 
                <?php
                  if ($title == 'Pengajuan Cuti') {
                    echo 'active';
                  }
                ?>">
                <a class="nav-link text-white" href="<?= base_url(); ?>kasubag/pengajuan_cuti.html">
                  <i class="material-icons text-white">person</i>
                  <p>Pengajuan Cuti</p>
                </a>
              </li>
              <?php break;
            case 'sekretaris': ?>
              <li class="nav-item 
                <?php
                  if ($title == 'Pengajuan Cuti') {
                    echo 'active';
                  }
                ?>">
                <a class="nav-link text-white" href="<?= base_url(); ?>sekretaris/pengajuan_cuti.html">
                  <i class="material-icons text-white">person</i>
                  <p>Pengajuan Cuti</p>
                </a>
              </li>
              <?php break;
            
            default:
              # code...
              break;
          } ?>
        </ul>
      </div>
    </div>