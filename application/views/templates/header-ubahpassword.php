<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="shortcut icon" href="<?php echo base_url('assets/img/Logo SIMILU transparan.png'); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>font-awesome-4.7.0/css/font-awesome.min.css" >
    <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/bootstrap.min.css" >
    <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/style.css" >
    <script src="<?php echo base_url('assets/'); ?>js/Chart.min.js"></script>
    <style>
      .img-circle {
        display: block;
        border-radius: 50%;
        margin: 20px auto;
        width: 300px;
      }
      
      .padding-top {
        padding-top: 100px;
      }

      .navbar {
        width: 100%;
        position: fixed;
        z-index: 1;
        background-color: rgba(255, 255, 255, 0.3);
        backdrop-filter: blur(5px);
      }

      .logo {
        width: 60px;
      }

      .title-home {
        font-size: 35px;
      }

      @media screen and (min-width:1024px) {
        .logo {
          width: 100px;
        }

        .navbar {
          height: 50px;
        }

        .title-home {
          font-size: 56px;
        }
      }
    </style>
    <title><?php echo $title ?></title>
  </head>
  <body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark shadow-5-strong">
      <div class="container">
        <div>
          <img class="logo" src="<?php echo base_url('assets/img/Logo SIMILU transparan.png'); ?>">
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <?php if($this->session->userdata('id_masyarakat') != NULL ) : ?>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link nav-active active" href="<?php echo site_url('home'); ?>">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link nav-active" href="<?php echo site_url('home/#sec2'); ?>">Pemilihan Suara</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-user"></i> <?php echo $this->session->userdata('nama');  ?>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="<?php echo site_url('home/ubahPassword') ?>"><i class="fa fa-gear"> </i> Pengaturan</a>
                  <a class="dropdown-item" href="<?php echo site_url('auth/logout') ?>"><i class="fa fa-sign-out"> </i> Keluar</a>
                </div>
              </li>
            </ul>
          </div>
        <?php endif; ?>
      </div>
    </nav>
  </header>