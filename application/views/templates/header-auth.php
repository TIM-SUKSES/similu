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
    <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/bootstrap.min.css" >
    <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/style.css" >
    <script src="<?php echo base_url('assets/'); ?>js/Chart.min.js"></script>
    <title><?php echo $title ?></title>
  </head>
  <style>
    .logo {
      margin-left: -20px;
      width: 100px;
    }

    .btn-top {
      border: solid white;
      color: white;
      
    }

    a:hover {
      background-color: white;
      color: black;
    }
  </style>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark shadow-5-strong">
    <div class="container">
      <div>
        <img class="logo" src="<?php echo base_url('assets/img/Logo SIMILU transparan.png'); ?>">
      </div>
      <div>
        <a href="" class="btn btn-top" data-toggle="modal" data-target="#modalLogin"> Login / Masuk </a>
      </div>
    </div>
  
  </nav>