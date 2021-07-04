<section class="banner">
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <div class="banner-title">
                        <h2>Weddingku : Sumber Inspirasi Rencana Pernikahan Anda</h2>
                    </div>
                    <p>10.000+ calon pengantin merencanakan pernikahan-nya bersama kami setiap hari! </p>
                    <p>Baca wedding ideas, temukan direktori wedding vendor terlengkap, nikmati cerita real wedding kami, lihat inspiration board serta temukan best deal paket di weddingku store & honeymoon sekarang juga!</p>
                    <a href="" class="btn-signup">sign up</a>
                </div>
            </div>
        </div>
    </div>
    <div class="mobile-v container">
        <div class="banner-title">
            <h2>Weddingku : Sumber Inspirasi Rencana Pernikahan Anda</h2>
        </div>
        <p>10.000+ calon pengantin merencanakan pernikahan-nya bersama kami setiap hari! </p>
        <p>Baca wedding ideas, temukan direktori wedding vendor terlengkap, nikmati cerita real wedding kami, lihat inspiration board serta temukan best deal paket di weddingku store & honeymoon sekarang juga!</p>
    </div>
</section>
<section id="promo">
    <div class="owl-carousel owl-theme promo">
        <?php for ($i = 1; $i <= 10; $i++) : ?>
            <div class="item">
                <a href=""><img src="<?= base_url(); ?>assets/vendors/img/news/<?= $i ?>.png" class="img-promo" alt=""></a>
            </div>
        <?php endfor; ?>
    </div>
</section>
<section id="vaforite" class="section-vaforite" style="background-image:url('<?= base_url(); ?>assets/vendors/img/news/bg-disc.jpg'); background-size:100% 100%;">
    <div class="vaforite container">
        <div class="vaforite-title">
            <div class="row">
                <div class="col-10">
                    <h3>Produk Diskon Minggu Ini</h3>
                </div>
                <div class="col-2">
                    <a href="" class="float-right lihat-semua">Lihat Semua</a>
                </div>
            </div>
        </div>
        <div class="owl-carousel owl-theme vaforite-slider">
            <?php for ($i = 1; $i <= 8; $i++) : ?>
                <div class="item">
                    <a href="">
                        <div class="card">
                            <div class="img">
                                <img src="<?= base_url(); ?>assets/vendors/img/news/disc<?= $i; ?>.webp" alt="">
                            </div>
                            <div class="img-style">
                                <span class="span-disc-1">Hemat</span>
                                <span class="span-disc-2">8%</span>
                            </div>
                            <span class="kota"><i class="fas fa-map-marker-alt"></i> Jakarta. ID</span>
                            <div class="disc disc-desktop-v">
                                <h4>
                                    <?php
                                    $namaPromo = "Paket Antara Softcover Lipat ilham";
                                    echo strlen($namaPromo) >27 ? substr($namaPromo, 0,27) . '...' : substr($namaPromo, 0,27);
                                    ?>
                                </h4>
                                <span class="span-1">
                                    <?php
                                    $span1 = "by <b>sedhahankenes</b> —  Invitation Printing";
                                    echo strlen($span1) >45 ? substr($span1, 0,45) . '...' : substr($span1, 0,45);
                                    ?>
                                </span><br>
                                <div class="harga">
                                    <span class="span-2">IDR 20.000</span><br>
                                    <span class="span-3">IDR 15.000</span>
                                </div>
                            </div>
                            <div class="disc disc-mobile-v">
                                <h4>
                                    <?php
                                    $namaPromo = "Paket Antara Softcover Lipat";
                                    echo strlen($namaPromo) >22 ? substr($namaPromo, 0,22) . '...' : substr($namaPromo, 0,22);
                                    ?>
                                </h4>
                                <span class="span-1">
                                    <?php
                                    $span1 = "by <b>sedhahankenes</b> —  Invitation Printing";
                                    echo strlen($span1) >35 ? substr($span1, 0,35) . '...' : substr($span1, 0,35);
                                    ?>
                                </span><br>
                                <div class="harga">
                                    <span class="span-2">IDR 20.000</span><br>
                                    <span class="span-3">IDR 15.000</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endfor; ?>
        </div>
        <div class="btn-lihat-semua">
            <a href="" class="btn">Lihat Semua</a>
        </div>
    </div>
</section>
<br>
<section id="flexsible" class="section-flexsible" style="background-image:url('<?= base_url(); ?>assets/vendors/img/news/bg-disc.jpg'); background-size:100% 100%;">
    <div class="content-flexsible container">
        <div class="flexsible-title">
            <div class="row">
                <div class="col-lg-8">
                    <h2>Pesan Vendor dengan Tanggal Fleksibel </h2>
                    <span>Tak perlu khawatir, sekarang Anda dapat mengubah tanggal layanan sesuai ketentuan vendor.</span>
                </div>
                <div class="col-lg-4">
                    <a href="" class="lihat-semua float-right">Lihat Semua</a>
                </div>
            </div>
        </div>
        <div class="owl-carousel owl-theme flexsible-slider">
            <?php for ($i = 1; $i <= 10; $i++) : ?>
                <div class="item">
                    <a href="">
                        <div class="card bg-transparent">
                            <img src="<?= base_url(); ?>assets/vendors/img/news/flex<?= $i; ?>.webp" class="img-vendor" alt="">
                            <div class="img-style">
                                <span><i class="fas fa-check-circle"></i> Weddingku</span>
                            </div>
                            <div class="flex-icon">
                                <img src="<?= base_url(); ?>assets/vendors/img/news/flex-icon.webp" alt="">
                            </div>
                            <div class="card-body-desktop">
                                <div class="nama-vendor nama-vendor-d-v">
                                    <h4>
                                        <?php
                                        $namaVendorFlex = "Hardpaper Double ilham dhiya ulhaq";
                                        echo strlen($namaVendorFlex) > 26 ? substr($namaVendorFlex, 0,26) . '...' : substr($namaVendorFlex, 0,26);
                                        ?>
                                    </h4>
                                </div>
                                <div class="nama-vendor nama-vendor-m-v">
                                    <h4>
                                        <?php
                                        $namaVendorFlex = "Hardpaper Double ilham dhiya";
                                        echo strlen($namaVendorFlex) > 20 ? substr($namaVendorFlex, 0,20) . '...' : substr($namaVendorFlex, 0,20);
                                        ?>
                                    </h4>
                                </div>
                                <div class="rating-star">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endfor; ?>
        </div>
        <div class="btn-lihat-semua">
            <a href="" class="">Lihat Semua</a>
        </div>
    </div>
</section>
<section class="container content">
    <div class="section-body">
        <h2 class="vendor-header">Semua Vendor di Indonesia</h2>
        <div class="card card-pilihan">
            <div class="card-body">
                <img src="<?= base_url(); ?>assets/vendors/img/news/wedding-couple.png" class="card-icon" alt="">
                <span class="span-1">Wujudkan Pernikahan Impianmu Bersama <span class="span-2">Weddingku</span>Tentukan pilihan anda dengan vendor yang terbaik <a href="">Lihat sekarang</a></span>
            </div>
        </div>
    </div>
</section>
<section id="vendor-indonesia" class="section-vendor-indonesia container">
    <?php for ($i = 1; $i < 4; $i++) : ?>
        <div class="content-vendors">
            <div class="vendor-title">
                <div class="row">
                    <div class="col-lg-8">
                        <h2>Bridal & Salon di Indonesia</h2>
                        <span>Lihat Rekomendasi dengan semua budget</span><a href="" class="mobile-v float-right"><i class="fas fa-ellipsis-h"></i></a>
                    </div>
                    <div class="col-lg-4">
                        <a href="" class="lihat-semua float-right">Lihat semua Bridal & Salon di Indonesia</a>
                    </div>
                </div>
            </div>
            <div class="owl-carousel owl-theme vendor-indonesia-slider">
                <?php for ($j = 1; $j <= 7; $j++) : ?>
                    <div class="item">
                        <a href="">
                            <div class="card">
                                <img src="<?= base_url(); ?>assets/vendors/img/news/produk<?= $j; ?>.webp" class="img-vendor" alt="">
                                <div class="img-style">
                                    <span><i class="fas fa-check-circle"></i> Weddingku</span>
                                </div>
                                <div class="card-body">
                                    <div class="nama-vendor nama-vendor-d-v">
                                        <h4>
                                            <?php
                                            $namaVendor = "Hardpaper Double Indonesia ilham";
                                            echo strlen($namaVendor) > 24 ? substr($namaVendor, 0,24) .'...' : substr($namaVendor, 0,24);
                                            ?>
                                        </h4>
                                    </div>
                                    <div class="nama-vendor nama-vendor-m-v">
                                        <h4>
                                            <?php
                                            $namaVendor = "Hardpaper Double Indonesia";
                                            echo strlen($namaVendor) > 16 ? substr($namaVendor, 0,16) .'...' : substr($namaVendor, 0,16);
                                            ?>
                                        </h4>
                                    </div>
                                    <div class="rating-star">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    <?php endfor; ?>
</section>
<br>
<section id="event" class="section-event" style="background-image:url('<?= base_url(); ?>assets/vendors/img/news/bg-event.jpg'); background-size:100% 100%;">
    <div class="event container">
        <h3 class="event-title">
            Event Mendatang
        </h3>
        <div class="owl-carousel owl-theme event-slider">
            <?php for ($i = 1; $i <= 7; $i++) : ?>
                <div class="item">
                    <div class="row">
                        <div class="col-md-5">
                            <a href=""><img src="<?= base_url(); ?>assets/vendors/img/news/event<?= $i; ?>.webp" alt=""></a>
                        </div>
                        <div class="col-md-7">
                            <div class="row">
                                <div class="col-sm-12 info-event">
                                    <div class="row">
                                        <div class="col-2 grid-card-calender">
                                            <div class="bulan">
                                                <small>Mei</small>
                                            </div>
                                            <div class="calender">
                                                <span>29</span><br>
                                                <small>2021</small>
                                            </div>
                                        </div>
                                        <div class="col-10 grid-card-calender calender-d-v">
                                            <span class="event-nama-event">
                                                <?php
                                                $namaEvent = "Financial Hall Ballroom Tour";
                                                echo strlen($namaEvent) > 20 ? substr($namaEvent, 0,20) .'...' : substr($namaEvent, 0,20);
                                                ?>
                                            </span><br>
                                            <span class="event-jl">
                                                <i class="fas fa-map-marker-alt"></i>
                                                <?php
                                                $eventJl = "Jl. Karang Jangkang Bukit cemara permai indah";
                                                echo strlen($eventJl) > 30 ? substr($eventJl, 0,30) .'...' : substr($eventJl, 0,30);
                                                ?>
                                            </span>
                                        </div>
                                        <div class="col-10 grid-card-calender calender-m-v">
                                            <span class="event-nama-event">
                                                <?php
                                                $namaEvent = "Financial Hall Ballroom Tour ilham dhiya ulhaq";
                                                echo strlen($namaEvent) > 30 ? substr($namaEvent, 0,30) .'...' : substr($namaEvent, 0,30);
                                                ?>
                                            </span><br>
                                            <span class="event-jl">
                                                <i class="fas fa-map-marker-alt"></i>
                                                <?php
                                                $eventJl = "Jl. Karang Jangkang Bukit cemara permai indah ilham dhiya ulhaq";
                                                echo strlen($eventJl) > 40 ? substr($eventJl, 0,40) .'...' : substr($eventJl, 0,40);
                                                ?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 info-event">
                                    <div class="btn-selengkapnya">
                                        <a href="" class="button">Selengkapanya</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
    </div>
</section>
<br>
<section id="persiapan" class="section-persiapan" style="background-image:url('<?= base_url(); ?>assets/vendors/img/news/bg2.webp'); background-size:100% 100%;">
    <div class="contents container">
        <div class="persiapan-title">
            <h2>Persiapkan Pernikahan dengan Beragam Kemudahan & Penawaran Ekslusif</h2>
        </div>
        <div class="row">
            <div class="col content">
                <img src="<?= base_url(); ?>assets/vendors/img/news/icon1.png" alt="">
                <span>
                    Sesuaikan Pesanan dengan Impian Anda
                </span>
            </div>
            <div class="col content">
                <img src="<?= base_url(); ?>assets/vendors/img/news/icon2.png" alt="">
                <span>
                    Sesuaikan Pesanan dengan Impian Anda
                </span>
            </div>
            <div class="col content">
                <img src="<?= base_url(); ?>assets/vendors/img/news/icon3.png" alt="">
                <span>
                    Sesuaikan Pesanan dengan Impian Anda
                </span>
            </div>
            <div class="col content">
                <img src="<?= base_url(); ?>assets/vendors/img/news/icon4.png" alt="">
                <span>
                    Sesuaikan Pesanan dengan Impian Anda
                </span>
            </div>
        </div>
        <div class="daftar">
            <a href="" class="btn">Daftar Sekarang</a>
        </div>
    </div>
</section>
<div class="chat-fixed">
    <a href="" class="chat"><i class="fab fa-whatsapp"></i> chat</a>
</div>