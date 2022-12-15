<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>

    <link rel="icon" href="<?= base_url('assets/dist/img/favicon.ico'); ?>" type="image/x-icon" />
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('assets/plugins/fontawesome-free/css/all.min.css'); ?>">
    <!-- Select2 -->
    <link rel="stylesheet" href="<?= base_url('assets/plugins/select2/css/select2.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css'); ?>">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="<?= base_url('assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css'); ?>">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?= base_url('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css'); ?>">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?= base_url('assets/plugins/jqvmap/jqvmap.min.css'); ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('assets/dist/css/adminlte.min.css'); ?>">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= base_url('assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css'); ?>">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?= base_url('assets/plugins/daterangepicker/daterangepicker.css'); ?>">
    <!-- summernote -->
    <link rel="stylesheet" href="<?= base_url('assets/plugins/summernote/summernote-bs4.min.css'); ?>">
    <!-- mystyle -->
    <link rel="stylesheet" href="<?= base_url('assets/dist/css/style.css'); ?>">
    <!-- jQuery -->
    <script src="<?= base_url('assets/plugins/jquery/jquery.min.js'); ?>"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?= base_url('assets/plugins/jquery-ui/jquery-ui.min.js'); ?>"></script>
    <!-- load jokul doku -->
    <script src="https://sandbox.doku.com/jokul-checkout-js/v1/jokul-checkout-1.0.0.js"></script>

    <style>
        .div {
            position: absolute;
        }

        .blue {
            right: 32px;
        }

        .red {
            right: 64px;
            z-index: -1;
        }

        .green {
            right: 0;
        }
    </style>
</head>

<body class="asd hold-transition layout-footer-fixed layout-fixed layout-navbar-fixed sidebar-open">
    <div class="cover-progress">
        <div class="progress-container-body mt-2">
            <div class="loadingio-spinner-dual-ball-63b0a1oronu">
                <div class="ldio-9vvnzibl3ia">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light border-bottom-0" style="background-color: transparent;">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars" style="padding-top: 1rem !important"></i></a>
            </li>

            <li class="nav-item d-none d-sm-inline-block">
                <p class="nav-link mb-0" style="padding-top: .85rem !important; font-size: 1.5rem !important;">Basic Intensive Care Course</p>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
                    <div class="pt-1" style="font-size: 1.5rem !important;">
                        <span>Testimonials</span>
                    </div>
                </a>
            </li>
            <li class="nav-item" style="width: 110px;">
                <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
                    <div class="div blue">
                        <div class="user-panel">
                            <div class="image">
                                <img src="<?= base_url('assets/dist/img/profile/user-1.png'); ?>" class="img-circle elevation-1" />
                            </div>
                        </div>
                    </div>
                    <div class="div red">
                        <div class="user-panel">
                            <div class="image">
                                <img src="<?= base_url('assets/dist/img/profile/user-2.png'); ?>" class="img-circle elevation-1" />
                            </div>
                        </div>
                    </div>
                    <div class="div green">
                        <div class="user-panel">
                            <div class="image">
                                <img src="<?= base_url('assets/dist/img/profile/user-3.png'); ?>" class="img-circle elevation-1" />
                            </div>
                        </div>
                    </div>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <style>
        .bicc {
            max-width: 65%;
        }
    </style>
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-light-info elevation-4 h-auto">
        <!-- Brand Logo -->
        <a href="<?= base_url(); ?>" class="brand-link load-progress pl-4 pr-5">
            <div class="row">
                <div class="col-4 col-md-4">
                    <img src="<?= base_url('assets/dist/img/logo.png') ?>" class="brand-image w-100" alt="Perdici BICC" style="opacity: .8;">
                </div>
                <div class="col-8 col-md-8 pl-0" style="margin-top: 1.4rem !important;">
                    <p class="brand-text font-weight-bold mb-0 text-md">INDONESIAN SOCIETY OF</p>
                    <p class="brand-text font-weight-bold mb-2 text-md">INTENSIVE CARE MEDICINE</p>
                    <div class="text-center p-1" style="background-color: #3366CB;">
                        <p class="brand-text font-weight-semi-bold mb-0" style="color: #FEFF32; font-size: .50rem !important">PERHIMPUNAN DOKTER INTENSIVE CARE INDONESIA</p>
                    </div>
                </div>
            </div>
        </a>

        <!-- Sidebar -->
        <div class="sidebar pl-5 pr-5">
            <div class="w-100 text-center mt-0">
                <img src="<?= base_url('assets/dist/img/Basic Intensive.png'); ?>" class="bicc" />
            </div>
            <div class="text-center text-danger" style="font-size: 1.1rem !important;">
                <p>Basic Intensive Care Course</p>
            </div>
            <div class="text-justify pt-1" style="font-size: 1.1rem !important;">
                <p>Kursus ini ditujukan bagi dokter umum atau dokter spesialis yang bekerja di IGD/HCU/ICU, yang dibawakan oleh team guru pengajar Intensivist.</p>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-3" style="padding-bottom: 100px;">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <div class="row">
                        <div class="col-lg-1 col-md-1 col-sm-12">

                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-12">
                            <li class="nav-item mb-2">
                                <a href="#" role="button" class="btn btn-md btn-primary nav-link text-white" data-widget="control-sidebar" data-controlsidebar-slide="true" style="border-radius: 50px;">
                                    <p>Testimonial</p>
                                </a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="<?= base_url('detail'); ?>" type="button" class="btn btn-md btn-primary nav-link text-white load-progress" style="border-radius: 50px;">

                                    <p>See Details</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('terms'); ?>" type="button" class="btn btn-md btn-primary nav-link text-white load-progress <?= ($this->uri->segment(1) == "registration" ? "active" : ""); ?>" style="border-radius: 50px;">

                                    <p>Registration</p>
                                </a>
                            </li>
                        </div>
                        <div class="col-lg-1 col-md-1 col-sm-12">

                        </div>
                    </div>
                </ul>
            </nav>
        </div>
        <!-- /.sidebar -->
        <div class="my-footer text-center bg-white">
            <strong>Powered by MeetMed
                <a href="https://adminlte.io">
                    <img src="<?= base_url('assets/dist/img/mainlogo.svg') ?>" alt="User Image" style="width: 30px; height: auto;" />
                </a>
            </strong>
        </div>
    </aside>


    <div class="wrapper">

        <div class="bg-white mt-0 pb-0" style="min-height: 100%">
            <!-- <section class="content-header">

            </section> -->
            <section class="content">
                <div class="bottom">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12 my-position pr-0">
                            <img src="<?= base_url('assets/dist/img/instructor.png') ?>" class="img-width" alt="Instructor Image" />
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 my-position my-padding my-font-size">
                            <div>
                                <div class="tx-content text-bold" style="line-height: 1;">
                                    <p class="mb-0">Basic Intensive Care Course</p>
                                </div>
                                <div class="introduction" style="line-height: 2.5rem;">
                                    <p>Introduction</p>
                                </div>
                                <div class="introduction text-danger text-center" style="font-size: 1.5rem; margin-bottom: 5rem">
                                    <p>Untuk melihat testimonial klik sudut kanan atas</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="container-fluid p-0">
            <img src="<?= base_url("assets/dist/img/Home_BG.png"); ?>" class="w-100" />
        </div> -->


                    <a href="https://api.whatsapp.com/send?phone=62895326089574" target="_blank" class='blantershow-chat' href='javascript:void' title='Show Chat'>
                        <svg viewBox="0 0 32 32" class="whatsapp-ico">
                            <path d=" M19.11 17.205c-.372 0-1.088 1.39-1.518 1.39a.63.63 0 0 1-.315-.1c-.802-.402-1.504-.817-2.163-1.447-.545-.516-1.146-1.29-1.46-1.963a.426.426 0 0 1-.073-.215c0-.33.99-.945.99-1.49 0-.143-.73-2.09-.832-2.335-.143-.372-.214-.487-.6-.487-.187 0-.36-.043-.53-.043-.302 0-.53.115-.746.315-.688.645-1.032 1.318-1.06 2.264v.114c-.015.99.472 1.977 1.017 2.78 1.23 1.82 2.506 3.41 4.554 4.34.616.287 2.035.888 2.722.888.817 0 2.15-.515 2.478-1.318.13-.33.244-.73.244-1.088 0-.058 0-.144-.03-.215-.1-.172-2.434-1.39-2.678-1.39zm-2.908 7.593c-1.747 0-3.48-.53-4.942-1.49L7.793 24.41l1.132-3.337a8.955 8.955 0 0 1-1.72-5.272c0-4.955 4.04-8.995 8.997-8.995S25.2 10.845 25.2 15.8c0 4.958-4.04 8.998-8.998 8.998zm0-19.798c-5.96 0-10.8 4.842-10.8 10.8 0 1.964.53 3.898 1.546 5.574L5 27.176l5.974-1.92a10.807 10.807 0 0 0 16.03-9.455c0-5.958-4.842-10.8-10.802-10.8z" fill-rule="evenodd"></path>
                        </svg>
                        <div class="mt-1">Bantuan</div>
                    </a>
                </div>
            </section>
        </div>