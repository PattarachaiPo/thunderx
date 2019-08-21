<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="https://www.thunderxpay.com/assets/common/main/img/en_US/main/index/Logo%20thunderX%204.png">
  <link rel="icon" type="image/png" href="https://www.thunderxpay.com/assets/common/main/img/en_US/main/index/Logo%20thunderX%204.png">

  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  
  <title>CRM : ThunderX Pay</title>

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="<?php echo base_url()?>assets/theme/assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="<?php echo base_url()?>assets/theme/assets/css/now-ui-dashboard.css?v=2.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?php echo base_url()?>assets/theme/assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="orange">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="<?php echo base_url()?>" class="simple-text logo-normal">
          <img src="https://thunderxpay.com/assets/common/main/img/common/svg/Logo%20thunderX%202.png">
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li class="<?php echo $this->uri->segment(1)==''||$this->uri->segment(1)=='dashboard'?'active':''?> ">
            <a href="<?php echo base_url()?>">
              <i class="now-ui-icons design_app"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="<?php echo $this->uri->segment(1)=='deposit'?'active':''?> ">
            <a href="<?php echo base_url()?>deposit">
              <i class="now-ui-icons business_money-coins"></i>
              <p>Deposit</p>
            </a>
          </li>
          <li class="<?php echo $this->uri->segment(1)=='withdraw'?'active':''?> ">
            <a href="<?php echo base_url()?>withdraw">
              <i class="now-ui-icons business_money-coins"></i>
              <p>Withdraw</p>
            </a>
          </li>
          <li class="<?php echo $this->uri->segment(1)=='broker'?'active':''?> ">
            <a href="<?php echo base_url()?>broker">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Broker List</p>
            </a>
          </li>
        </ul>
      </div>
    </div>