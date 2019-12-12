<!DOCTYPE html>
<html lang="en">

<head>
    <title>Infinity CCTV </title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="#">
    <meta name="keywords" content="flat ui, admin Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">
    <!-- Favicon icon -->
    <link rel="icon" href="<?php echo base_url();?>assets/images/favicon.ico" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/bower_components/bootstrap/css/bootstrap.min.css">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/icon/themify-icons/themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/icon/icofont/css/icofont.css">
    <!-- feather Awesome -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/icon/feather/css/feather.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/scss/partials/menu/_pcmenu.htm">
</head>

<body>
<!-- Pre-loader start -->
<div class="theme-loader">
    <div class="ball-scale">
        <div class='contain'>
            <div class="ring">
                <div class="frame"></div>
            </div>
        </div>
    </div>
</div>
<!-- Pre-loader end -->
<div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
    <div class="pcoded-container navbar-wrapper">
        <nav class="navbar header-navbar pcoded-header">
            <div class="navbar-wrapper">
                <div class="navbar-logo">
                    <a class="mobile-menu" id="mobile-collapse" href="#!">
                        <i class="feather icon-menu"></i>
                    </a>
                    <a href="index-1.htm">
                        <img class="img-fluid" src="<?php echo base_url();?>assets/images/logo.png" alt="Theme-Logo">
                    </a>
                    <a class="mobile-options">
                        <i class="feather icon-more-horizontal"></i>
                    </a>
                </div>
                <div class="navbar-container container-fluid">
                    <ul class="nav-left">
                        <li class="header-search">
                            <div class="main-search morphsearch-search">
                                <div class="input-group">
                                    <span class="input-group-addon search-close"><i class="feather icon-x"></i></span>
                                    <input type="text" class="form-control">
                                    <span class="input-group-addon search-btn"><i class="feather icon-search"></i></span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#!" onclick="javascript:toggleFullScreen()">
                                <i class="feather icon-maximize full-screen"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav-right">
                        <li class="header-notification">
                            <div class="dropdown-primary dropdown">
                                <div class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="feather icon-bell"></i>
                                    <span class="badge bg-c-pink">5</span>
                                </div>
                                <ul class="show-notification notification-view dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                    <li>
                                        <h6>Notifications</h6>
                                        <label class="label label-danger">New</label>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <img class="d-flex align-self-center img-radius" src="<?php echo base_url();?>assets/images/logo.png" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">John Doe</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <img class="d-flex align-self-center img-radius" src="<?php echo base_url();?>assets/images/avatar-3.jpg" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">Joseph William</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <img class="d-flex align-self-center img-radius" src="<?php echo base_url();?>assets/images/avatar-4.jpg" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">Sara Soudein</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="user-profile header-notification">
                            <div class="dropdown-primary dropdown">
                                <div class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="<?php echo base_url();?>assets/images/avatar-4.jpg" class="img-radius" alt="User-Profile-Image">
                                    <span>Administrator</span>
                                    <i class="feather icon-chevron-down"></i>
                                </div>
                                <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                    <li>
                                        <a href="#!">
                                            <i class="feather icon-settings"></i> Settings
                                        </a>
                                    </li>
                                    <li>
                                        <a href="user-profile.htm">
                                            <i class="feather icon-user"></i> Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="email-inbox.htm">
                                            <i class="feather icon-mail"></i> My Messages
                                        </a>
                                    </li>
                                    <li>
                                        <a href="auth-lock-screen.htm">
                                            <i class="feather icon-lock"></i> Lock Screen
                                        </a>
                                    </li>
                                    <li>
                                        <a href="auth-normal-sign-in.htm">
                                            <i class="feather icon-log-out"></i> Logout
                                        </a>
                                    </li>
                                </ul>

                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Sidebar chat start -->
        <div class="pcoded-main-container">
            <div class="pcoded-wrapper">
                <nav class="pcoded-navbar">
                    <div class="pcoded-inner-navbar main-menu">
                        <div class="pcoded-navigatio-lavel">Navigation</div>
                        <ul class="pcoded-item pcoded-left-item">
                            <li class="">
                                    <a href="navbar-light.htm">
                                        <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                                        <span class="pcoded-mtext">Dashboard</span>
                                    </a>
                            </li>
                            <li class="pcoded-hasmenu">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="feather icon-sidebar"></i></span>
                                    <span class="pcoded-mtext">Master Data</span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class=" ">
                                        <a href="menu-bottom.htm">
                                            <span class="pcoded-mtext">Customer</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="box-layout.htm" target="_blank">
                                            <span class="pcoded-mtext">Suplier</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="menu-rtl.htm" target="_blank">
                                            <span class="pcoded-mtext">Barang</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="pcoded-hasmenu">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="feather icon-package"></i></span>
                                    <span class="pcoded-mtext">Pembelian</span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class=" ">
                                        <a href="menu-bottom.htm">
                                            <span class="pcoded-mtext">Penerimaan Barang</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="box-layout.htm" target="_blank">
                                            <span class="pcoded-mtext">Pelunasan Piutang</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="box-layout.htm" target="_blank">
                                            <span class="pcoded-mtext">Retur Pembelian</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="menu-rtl.htm" target="_blank">
                                            <span class="pcoded-mtext">Minimum Hutang</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="pcoded-hasmenu">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="feather icon-clipboard"></i></span>
                                    <span class="pcoded-mtext">Penjualan</span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class=" ">
                                        <a href="menu-bottom.htm">
                                            <span class="pcoded-mtext">Faktur</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="box-layout.htm" target="_blank">
                                            <span class="pcoded-mtext">Penawaran</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="menu-rtl.htm" target="_blank">
                                            <span class="pcoded-mtext">Pemasangan</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="menu-rtl.htm" target="_blank">
                                            <span class="pcoded-mtext">Surat Jalan</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="menu-rtl.htm" target="_blank">
                                            <span class="pcoded-mtext">Pelunasan Piutang</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="menu-rtl.htm" target="_blank">
                                            <span class="pcoded-mtext">Retur Penjualan</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="pcoded-hasmenu">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="feather icon-tv"></i></span>
                                    <span class="pcoded-mtext">Monitoring</span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class=" ">
                                        <a href="menu-bottom.htm">
                                            <span class="pcoded-mtext">Penerimaan Barang</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="box-layout.htm" target="_blank">
                                            <span class="pcoded-mtext">Pelunasan Hutang Pembelian</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="menu-rtl.htm" target="_blank">
                                            <span class="pcoded-mtext">Minimum Hutang</span>
                                        </a>
                                    </li>
                                </ul>
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-file"></i></span>
                                        <span class="pcoded-mtext">Laporan</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="menu-bottom.htm">
                                                <span class="pcoded-mtext">Penerimaan Barang</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="box-layout.htm" target="_blank">
                                                <span class="pcoded-mtext">Pelunasan Hutang Pembelian</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="menu-rtl.htm" target="_blank">
                                                <span class="pcoded-mtext">Minimum Hutang</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-user"></i></span>
                                        <span class="pcoded-mtext">Manajemen User</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="menu-bottom.htm">
                                                <span class="pcoded-mtext">Data Karyawan</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="box-layout.htm" target="_blank">
                                                <span class="pcoded-mtext">Pengelola User</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-settings"></i></span>
                                        <span class="pcoded-mtext">Setup</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="menu-bottom.htm">
                                                <span class="pcoded-mtext">Penerimaan Barang</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="box-layout.htm" target="_blank">
                                                <span class="pcoded-mtext">Pelunasan Hutang Pembelian</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="menu-rtl.htm" target="_blank">
                                                <span class="pcoded-mtext">Minimum Hutang</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="pcoded-content">
                    <div class="pcoded-inner-content">
                        <!-- Main-body start -->
                        <div class="main-body">
                            <div class="page-wrapper">
                                <!-- Page-header start -->
                                <div class="page-header">
                                    <div class="row align-items-end">
                                        <div class="col-lg-8">
                                            <div class="page-header-title">
                                                <div class="d-inline">
                                                    <h4>Dasboard</h4>
                                                    <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="page-header-breadcrumb">
                                                <ul class="breadcrumb-title">
                                                    <li class="breadcrumb-item">
                                                        <a href="index-1.htm"> <i class="feather icon-home"></i> </a>
                                                    </li>
                                                    <li class="breadcrumb-item"><a href="#!">Widget</a> </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Page-header end -->

                                <div class="page-body">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5>Hello Card</h5>
                                                    <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                                                    <div class="card-header-right">
                                                        <ul class="list-unstyled card-option">
                                                            <li><i class="feather icon-maximize full-card"></i></li>
                                                            <li><i class="feather icon-minus minimize-card"></i></li>
                                                            <li><i class="feather icon-trash-2 close-card"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="card-block">
                                                    <p>
                                                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                                                        enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                                        nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                                        in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                                        nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                                                        sunt in culpa qui officia deserunt mollit anim id est laborum."
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="styleSelector">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('footer')?>