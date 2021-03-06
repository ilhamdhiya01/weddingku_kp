<section class="banner">
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <div class="card btn-auth">
            </div>
            <script>
                $.ajax({
                    url: "<?= base_url(); ?>ui/home/load_btn_auth",
                    type: "get",
                    success: function(data) {
                        $(".btn-auth").html(data);
                    }
                });
            </script>
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
                    <h3>Produk Diskon</h3>
                </div>
                <div class="col-2">
                    <a href="<?= base_url(); ?>ui/promo" class="float-right lihat-semua">Lihat Semua</a>
                </div>
            </div>
        </div>
        <div class="vaforite-slider">
        </div>
        <script>
            $.ajax({
                url: "<?= base_url(); ?>ui/home/home_all_produk_diskon",
                type: "get",
                success: function(data) {
                    $(".vaforite-slider").html(data);
                }
            })
        </script>
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
        <div class="flexsible-slider">
        </div>
        <script>
            $.ajax({
                url: "<?= base_url(); ?>ui/home/home_all_vendor_flexible",
                type: "get",
                success: function(data) {
                    $(".flexsible-slider").html(data);
                }
            })
        </script>
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
</section>
<script>
    $(document).ready(function() {
        $.ajax({
            url: "<?= base_url(); ?>ui/home/load_tumbnail_produk_vendor",
            type: "get",
            success: function(data) {
                $("#vendor-indonesia").html(data);
            }
        });
    });
</script>
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
                                                <small>September</small>
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
                                                echo strlen($namaEvent) > 20 ? substr($namaEvent, 0, 20) . '...' : substr($namaEvent, 0, 20);
                                                ?>
                                            </span><br>
                                            <span class="event-jl">
                                                <i class="fas fa-map-marker-alt"></i>
                                                <?php
                                                $eventJl = "Jl. Karang Jangkang Bukit cemara permai indah";
                                                echo strlen($eventJl) > 30 ? substr($eventJl, 0, 30) . '...' : substr($eventJl, 0, 30);
                                                ?>
                                            </span>
                                        </div>
                                        <div class="col-10 grid-card-calender calender-m-v">
                                            <span class="event-nama-event">
                                                <?php
                                                $namaEvent = "Financial Hall Ballroom Tour ilham dhiya ulhaq";
                                                echo strlen($namaEvent) > 30 ? substr($namaEvent, 0, 30) . '...' : substr($namaEvent, 0, 30);
                                                ?>
                                            </span><br>
                                            <span class="event-jl">
                                                <i class="fas fa-map-marker-alt"></i>
                                                <?php
                                                $eventJl = "Jl. Karang Jangkang Bukit cemara permai indah ilham dhiya ulhaq";
                                                echo strlen($eventJl) > 40 ? substr($eventJl, 0, 40) . '...' : substr($eventJl, 0, 40);
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