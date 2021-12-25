<section id="banner-promo" class="banner-promo">
    <div class="owl-carousel owl-theme">
        <?php for ($i = 1; $i <= 10; $i++) : ?>
            <div class="item">
                <a href=""><img src="<?= base_url(); ?>assets/vendors/img/news/<?= $i ?>.png" class="img-banner-promo" alt=""></a>
            </div>
        <?php endfor; ?>
    </div>
</section>
<section class="store-option store-desktop-v">
    <div class="options">
        <div class="row justify-content-center">
            <div class="col-5">
                <div class="row">
                    <div class="col-md-4">
                        <div class="content">
                            <a href="<?= base_url(); ?>ui/store/paket_lengkap">
                                <div class="card content-1">
                                    <img src="<?= base_url(); ?>assets/vendors/img/news/store1.png" alt="">
                                    <div class="card-body">
                                        Paket Lengkap
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="content">
                            <a href="<?= base_url(); ?>ui/store/store_vanue">
                                <div class="card">
                                    <img src="<?= base_url(); ?>assets/vendors/img/news/store2.png" alt="">
                                    <div class="card-body">
                                        Venue Deals
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="content">
                            <a href="<?= base_url(); ?>ui/store/store_all_produk">
                                <div class="card content-2">
                                    <img src="<?= base_url(); ?>assets/vendors/img/news/store3.png" alt="">
                                    <div class="card-body">
                                        Semua Produk
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="store-option store-mobile-v">
    <div class="options">
        <div class="row">
            <div class="col-10">
                <div class="row">
                    <div class="col-4">
                        <div class="content">
                            <a href="<?= base_url(); ?>ui/StorePaket">
                                <div class="card content-1">
                                    <img src="<?= base_url(); ?>assets/vendors/img/news/store1.png" alt="">
                                    <small>
                                        Paket Lengkap
                                    </small>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="content">
                            <a href="<?= base_url(); ?>ui/StoreVenue">
                                <div class="card">
                                    <img src="<?= base_url(); ?>assets/vendors/img/news/store2.png" alt="">
                                    <small>
                                        Venue Deals
                                    </small>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="content">
                            <a href="<?= base_url(); ?>ui/Store/store_all_produk">
                                <div class="card content-2">
                                    <img src="<?= base_url(); ?>assets/vendors/img/news/store3.png" alt="">
                                    <small>
                                        Semua Produk
                                    </small>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="paket-store">
    <div class="judul">
        <div class="row">
            <div class="col-10">
                <h4>Paket Lengkap</h4>
                <span>Paket yang sudah termasuk beragam jasa untuk mewujudkan pernikahan impian Anda</span>
            </div>
            <div class="col-2">
                <a href="<?= base_url(); ?>ui/store/paket_lengkap" class="desktop-v">Lihat Semua</a>
                <a href="" class="mobile-v"><i class="fas fa-ellipsis-h"></i></a>
            </div>
        </div>
    </div>
    <section id="store-paket">
    </section>
    <script>
        $.ajax({
            url: "<?= base_url(); ?>ui/store/load_paket_lengkap",
            type: "get",
            dataType: "html",
            success: function(data) {
                $("#store-paket").html(data);
            }
        });
    </script>
</section>

<section class="venue-store">
    <div class="judul">
        <div class="row">
            <div class="col-10">
                <h4>Venue Deals</h4>
                <span>Paket yang sudah termasuk beragam jasa untuk mewujudkan pernikahan impian Anda</span>
            </div>
            <div class="col-2">
                <a href="<?= base_url(); ?>ui/store/store_vanue" class="desktop-v">Lihat Semua</a>
                <a href="" class="mobile-v"><i class="fas fa-ellipsis-h"></i></a>
            </div>
        </div>
    </div>
    <section id="store-venue">
    </section>
    <script>
        $.ajax({
            url: "<?= base_url(); ?>ui/store/load_venue_deals",
            type: "get",
            dataType: "html",
            success: function(data) {
                $("#store-venue").html(data);
                console.log(data);
            }
        });
    </script>
</section>

<section class="all-produk">
    <div class="all-produk-title">
        <h4>Produk Lainnya yang Mungkin Anda Suka</h4>
    </div>
    <div class="produk">
    </div>
    <script>
        $.ajax({
            url: "<?= base_url(); ?>ui/store/load_semua_produk_store",
            type: "get",
            dataType: "html",
            success: function(data) {
                $(".produk").html(data);
                console.log(data);
            }
        });
    </script>
</section>
<div class="chat-fixed">
    <a href="" class="chat"><i class="fab fa-whatsapp"></i> chat</a>
</div>