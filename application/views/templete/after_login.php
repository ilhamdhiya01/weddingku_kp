<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/offcanvas/">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />

    <!-- Plugins -->
    <link rel="stylesheet" href="<?= base_url("assets/vendors/plugins/select-plugins/dist/jquery-editable-select.min.css"); ?>">
    <!-- Bootstrap core CSS -->
    <link href="<?= base_url("assets/vendors/vendor/bootstrap/dist/css/bootstrap.min.css") ?>" rel="stylesheet">
    <!-- My CSS -->
    <link rel="stylesheet" href="<?= base_url("assets/vendors/css/baguetteBox.min.css") ?>">
    <link rel="stylesheet" href="<?= base_url("assets/vendors/css/custom.css") ?>">
    <link rel="stylesheet" href="<?= base_url("assets/vendors/css/vendors.css") ?>">
    <link rel="stylesheet" href="<?= base_url("assets/vendors/css/events.css") ?>">
    <link rel="stylesheet" href="<?= base_url("assets/vendors/css/promo.css") ?>">
    <link rel="stylesheet" href="<?= base_url("assets/vendors/css/paket.css") ?>">
    <link rel="stylesheet" href="<?= base_url("assets/vendors/css/venue.css") ?>">
    <link rel="stylesheet" href="<?= base_url("assets/vendors/css/store.css") ?>">
    <link rel="stylesheet" href="<?= base_url("assets/vendors/css/allproduk.css") ?>">
    <link rel="stylesheet" href="<?= base_url("assets/vendors/css/produkInfo.css") ?>">
    <link rel="stylesheet" href="<?= base_url("assets/vendors/css/authMember.css") ?>">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="<?= base_url("assets/vendors/vendor/fontawesome-free/css/all.min.css") ?>">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .banner .jumbotron {
            background-image: url('<?= base_url(); ?>assets/vendors/img/news/banner.jpg');
            background-size: 100% 100%;
            object-fit: cover;
        }

        @media(max-width:600px) {
            .banner .jumbotron {
                background-image: url('<?= base_url(); ?>assets/vendors/img/news/mobile-banner.jpg');
                object-fit: cover;
            }

            .banner .mobile-v {
                padding: 0px 30px;
                padding-bottom: 20px;
            }

            .banner .mobile-v h2 {
                font-size: 26px;
                font-weight: bold;
                color: #555555;
                padding-bottom: 5px;
            }

            .banner .mobile-v p {
                color: #555555;
            }

            .banner .jumbotron .card {
                display: none;
            }

            .navbar-nav .login,
            .navbar-nav .register {
                border: 2px solid #EBA1A1;
                width: 60px;
                color: #FFFF;
                background-color: #EBA1A1;
                text-decoration: none;
                display: flex;
                justify-content: center;
                align-items: center;
                margin-right: 10px;
                font-weight: bold;
                border-radius: 20px;
                font-size: 12px;
                display: none;
            }

            .nav-scroller {
                display: none;
            }

            .lihat-semua {
                display: none;
            }

            .contents .row {
                grid-template-columns: repeat(2, 1fr);
            }

            /* Section persiapan */
            .section-persiapan {
                height: 300px;
            }

            .contents {
                max-width: 100%;
                padding: 0 10px;
                margin: 30px 0;
            }

            .contents .row {
                max-width: 100%;
                display: grid;
                grid-gap: 1rem;
            }

            .row .content img {
                float: left;
                width: 28px;
                height: 28px;
                /* display: block; */
                margin: 5px 5px;
            }

            .row .content span {
                font-size: 8px;
                color: #ffff;
                font-weight: bold;
                text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.3);
                font-family: 'Poppins', sans-serif;
                position: relative;
                top: -5px;
            }

            .row .content {
                margin: 0 20px;
                border-left: 3px solid white;
            }

            .persiapan-title {
                max-width: 85%;
            }

            .persiapan-title h2 {
                font-size: 18px;
                padding: 20px 0;
                font-weight: bold;
                color: #ffff;
                text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.3);
                font-family: 'Poppins', sans-serif;
            }

            .daftar a {
                border: 1px solid black;
                width: 90%;
                margin: 0 auto;
                background-color: #EBA1A1;
                border: unset;
                color: #FFFFFF;
                box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
                font-weight: bold;

            }

            .daftar a:hover {
                background-color: #EBA1A1 !important;
                color: #FFFFFF;

            }

            .daftar {
                display: flex;
                align-items: center;
                max-width: 100%;
                margin-top: 25px;
            }

            .daftar a {
                font-size: 12px;
            }

            .vaforite .btn-lihat-semua a {
                border: 1px solid black;
                width: 95%;
                margin: 0 auto;
                font-size: 12px;
                background-color: #EBA1A1;
                border: unset;
                color: #FFFFFF;
                box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
                font-weight: bold;
                position: relative;
                top: 15px;
            }

            .vaforite .btn-lihat-semua a:hover {
                background-color: #EBA1A1 !important;
                color: #FFFFFF;
            }

            .vaforite .btn-lihat-semua {
                display: flex;
                align-items: center;
                max-width: 100%;
            }

            .vendor-title .mobile-v {
                padding: 0 30px;
            }

            .vaforite-slider .img-style {
                border: 1px solid #f35a50;
                background: #f35a50;
                box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.5);
                border-top-right-radius: 25px;
                border-bottom-right-radius: 25px;
                max-width: 100%;
                width: 50px;
                height: 35px;
                /* padding: 5px 5px; */
                position: absolute;
                top: 8px;
            }

            .vaforite-slider .img-style .span-disc-1 {
                font-size: 9px;
                color: white;
                position: relative;
                top: -4px;
                left: 4px;
            }

            .vaforite-slider .img-style .span-disc-2 {
                font-size: 10px;
                color: white;
                position: relative;
                top: 10px;
                right: 27px;
                font-weight: bold;
            }

            .vaforite-slider .disc-desktop-v {
                display: none;
            }

            .vendor-indonesia-slider .nama-vendor-d-v {
                display: none;
            }

            .chat-fixed .chat {
                border: 1px solid #ec9090;
                padding: 10px 15px;
                font-size: 16px;
                border-radius: 30px;
                background-color: #ec9090;
                color: #FFFFFF;
                text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.2);
                text-decoration: none;
                position: relative;
                /* margin-left: 300px; */
                left: 280px;
                top: -20px;
                font-weight: bold;
            }

            .flexsible-slider .img-style {
                display: none;
            }

            .flexsible-slider .nama-vendor-d-v {
                display: none;
            }

            .content-flexsible .btn-lihat-semua a {
                border: 1px solid black;
                width: 95%;
                height: 30px;
                margin: 0 auto;
                font-size: 12px;
                background-color: #EBA1A1;
                border: unset;
                color: #FFFFFF;
                box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
                font-weight: bold;
                position: relative;
                top: 10px;
                display: flex;
                justify-content: center;
                align-items: center;
                z-index: 999;
                text-decoration: none;
            }

            .content-flexsible .btn-lihat-semua {
                display: flex;
                align-items: center;
                max-width: 100%;
            }

            /* .flexsible-slider .card-body-desktop {
                display: none;
            } */

            .desktop-v-span {
                display: none;
            }

            .desktop-v-a {
                display: none;
            }

            .footer-content .col-md-9 {
                display: none;
            }

            .logo-footer {
                display: none;
            }

            .link-logo {
                display: none;
            }

            .copyright-mobile {
                background-color: #ef7a7a;
                width: 100%;
                padding: 10px 10px;
            }

            .copyright-mobile span {
                font-size: 11px;
                display: flex;
                color: #FFFFFF;
                justify-content: center;
            }

            .footer-content .col-md-3 {
                padding: 20px 40px;
            }

            .logo-footer-mobile h2 {
                display: flex;
                justify-content: center;
                padding-bottom: 10px;
            }

            .sosmed {
                display: flex;
                justify-content: center;
                position: relative;
                top: 13px;
            }

            .link-logo-mobile-1 a,
            .link-logo-mobile-2 a {
                color: #FFFFFF;
                font-size: 11px;
                padding-left: 5px;
                text-decoration: none;
                text-align: center;
                position: relative;
                left: 40px;
            }

            /* footer mobile */
            .footer {
                background-color: #EBA1A1;
                margin-top: 50px;
            }

            .footer .logo-footer h2 {
                color: #FFFFFF !important;
                font-family: 'Great Vibes', cursive;
                font-size: 35px;
                text-decoration: none;
                /* font-weight: bold; */
                text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.2);
            }

            .footer .logo-footer-mobile h2 {
                color: #FFFFFF !important;
                font-family: 'Great Vibes', cursive;
                font-size: 35px;
                text-decoration: none;
                /* font-weight: bold; */
                text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.2);
            }

            .sosmed .icon-1 {
                width: 50px;
                height: 50px;
                font-size: 15px;
                border-radius: 100%;
                display: inline;
                text-align: center;
            }

            .sosmed .icon {
                font-size: 15px;
                display: inline;
                text-align: center;
                padding-left: 10px;
                position: relative;
                right: 10px;
            }

            .sosmed .icon a {
                border-radius: 100%;
                border: 1px solid #FFFFFF;
                padding: 4px 4px;
                color: #FFFFFF;
            }

            .sosmed .icon-1 a {
                border-radius: 100%;
                border: 1px solid #FFFFFF;
                padding: 4px 7px;
                color: #FFFFFF;
            }

            .info-event .calender-d-v {
                display: none;
            }

            /* / */
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="<?= base_url("assets/vendors/css/offcanvas.css"); ?>" rel="stylesheet">
    <title>Weddingku | <?= $judul; ?></title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top">
        <a class="navbar-brand mr-auto mr-lg-0 logo" href="#">Weddingku</a>
        <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
            <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
        </button>
        <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?= base_url('login/home'); ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('login/store'); ?>">Store</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Inspirations</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('login/vendors'); ?>">Vendors</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('login/events'); ?>">Events</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Blogs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('login/promo'); ?>">Promo</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0 ml-auto">
                <!-- <input class="form-control mr-sm-2 search-m-v" type="text" placeholder="Search" aria-label="Search"> -->
                <div class="search-box">
                    <img src="<?= base_url(); ?>assets/vendors/img/news/search.png">
                    <input type="text" placeholder="Search">
                </div>
                <div class="nav-user-icon online">
                    <img src="<?= base_url(); ?>assets/vendors/img/news/profile-pic.png">
                    <span>
                        <?php
                        $nama = $member_session['nama_depan'].$member_session['nama_belakang'];
                        echo strlen($nama) > 14 ? substr($nama, 0, 14) . '...' : substr($nama, 0, 14);
                        ?>
                        <i class="fas fa-sort-down ml-1"></i>
                    </span>
                </div>
                <div class="setting-menu">
                    <div class="setting-menu-inner">
                        <div class="user-profile">
                            <img src="<?= base_url(); ?>assets/vendors/img/news/profile-pic.png" alt="">
                            <div>
                                <span><?= $member_session['nama_depan'].$member_session['nama_belakang']; ?></span>
                            </div>
                        </div>
                        <hr>
                        <div class="settings-links">
                            <img src="<?= base_url(); ?>assets/vendors/img/news/setting.png" class="setting-icon">
                            <a href="">Pengaturan User</a>
                        </div>
                        <div class="settings-links">
                            <img src="<?= base_url(); ?>assets/vendors/img/news/user.png" class="setting-icon">
                            <a href="">Pengaturan User</a>
                        </div>
                        <div class="settings-links">
                            <img src="<?= base_url(); ?>assets/vendors/img/news/logout.png" class="setting-icon">
                            <a href="<?= base_url(); ?>ui/AuthMember/logout_member">Logout</a>
                        </div>
                    </div>
                </div>
            </form>
            <a href="" class="desktop-v-a"> are you a vendor ?</a>
        </div>
    </nav>

    <div class="nav-scroller bg-white shadow-sm">
        <nav class="nav nav-underline">
            <a class="nav-link" href="<?= base_url('login/home'); ?>">Home</a>
            <a class="nav-link" href="<?= base_url('login/store'); ?>">Store <span class="badge badge-pill badge-danger"><small>New</small></span></a>
            <a class="nav-link" href="#">Inspirations</a>
            <a class="nav-link" href="<?= base_url('login/vendors'); ?>">Vendors</a>
            <a class="nav-link" href="<?= base_url('login/events'); ?>">Events</a>
            <a class="nav-link" href="#">Blog</a>
            <a class="nav-link" href="<?= base_url('login/promo'); ?>">Promo <span class="badge badge-pill badge-danger"><small>New</small></span></a>
        </nav>
    </div>
    <main role="main">
        <script>
            let settingMenu = $('.setting-menu');
            $('.nav-user-icon').click(function() {
                settingMenu.toggleClass('setting-menu-height');
            });
        </script>