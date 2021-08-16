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
                            <a href="<?= base_url(); ?>login/StorePaket">
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
                            <a href="<?= base_url(); ?>login/StoreVenue">
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
                            <a href="<?= base_url(); ?>login/StoreAllProduk">
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
                            <a href="<?= base_url(); ?>ui/StoreAllProduk">
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
                <a href="" class="desktop-v">Lihat Semua</a>
                <a href="" class="mobile-v"><i class="fas fa-ellipsis-h"></i></a>
            </div>
        </div>
    </div>
    <section id="store-paket">
        <div class="owl-carousel owl-theme">
            <?php for ($i = 1; $i <= 8; $i++) : ?>
                <div class="item">
                    <a href="">
                        <div class="card">
                            <img src="<?= base_url(); ?>assets/vendors/img/news/paket<?= $i; ?>.webp" alt="">
                            <?php
                            $disc = 1;
                            if ($disc == 1) :
                            ?>
                                <div class="img-style">
                                    <span class="span-disc-1">Hemat</span>
                                    <span class="span-disc-2">8%</span>
                                </div>
                            <?php
                            endif;
                            ?>
                            <span class="kota"><i class="fas fa-map-marker-alt"></i> Jakarta. ID</span>
                            <div class="info-paket">
                                <h4 class="desktop-v">
                                    <?php
                                    $namaPaket = "Paket Lengkap Pasadenia Sportc ilhm dhiya";
                                    echo strlen($namaPaket) > 30 ? substr($namaPaket, 0, 30) . '...' : substr($namaPaket, 0, 30);
                                    ?>
                                </h4>
                                <h4 class="mobile-v">
                                    <?php
                                    $namaPaket = "Paket Lengkap Pasadenia Sportc ilhm dhiya";
                                    echo strlen($namaPaket) > 20 ? substr($namaPaket, 0, 20) . '...' : substr($namaPaket, 0, 20);
                                    ?>
                                </h4>
                                <span class="vendor vendor-d-v">
                                    <?php
                                    $vendor = "by <b>Sanggar Wulandari</b> — Wedding Package";
                                    echo strlen($vendor) > 43 ? substr($vendor, 0, 43) . '...' : substr($vendor, 0, 43);
                                    ?>
                                </span>
                                <span class="vendor vendor-m-v">
                                    <?php
                                    $vendor = "by <b>Sanggar Wulandari</b> — Wedding Package";
                                    echo strlen($vendor) > 33 ? substr($vendor, 0, 33) . '...' : substr($vendor, 0, 33);
                                    ?>
                                </span>
                                <div class="paket-harga">
                                    <small class="before-price">IDR 111,800,000</small><br>
                                    <span class="after-price">IDR 106,210,000</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endfor; ?>
        </div>
    </section>
</section>

<section class="venue-store">
    <div class="judul">
        <div class="row">
            <div class="col-10">
                <h4>Venue Deals</h4>
                <span>Paket yang sudah termasuk beragam jasa untuk mewujudkan pernikahan impian Anda</span>
            </div>
            <div class="col-2">
                <a href="" class="desktop-v">Lihat Semua</a>
                <a href="" class="mobile-v"><i class="fas fa-ellipsis-h"></i></a>
            </div>
        </div>
    </div>
    <section id="store-venue">
        <div class="owl-carousel owl-theme">
            <?php for ($i = 1; $i <= 8; $i++) : ?>
                <div class="item">
                    <a href="">
                        <div class="card">
                            <img src="<?= base_url(); ?>assets/vendors/img/news/paket<?= $i; ?>.webp" alt="">
                            <?php
                            $disc = 1;
                            if ($disc == 1) :
                            ?>
                                <div class="img-style">
                                    <span class="span-disc-1">Hemat</span>
                                    <span class="span-disc-2">8%</span>
                                </div>
                            <?php
                            endif;
                            ?>
                            <span class="kota"><i class="fas fa-map-marker-alt"></i> Jakarta. ID</span>
                            <div class="info-venue">
                                <h4 class="desktop-v">
                                    <?php
                                    $namaPaket = "Paket Lengkap Pasadenia Sportc ilhm dhiya";
                                    echo strlen($namaPaket) > 30 ? substr($namaPaket, 0, 30) . '...' : substr($namaPaket, 0, 30);
                                    ?>
                                </h4>
                                <h4 class="mobile-v">
                                    <?php
                                    $namaPaket = "Paket Lengkap Pasadenia Sportc ilhm dhiya";
                                    echo strlen($namaPaket) > 20 ? substr($namaPaket, 0, 20) . '...' : substr($namaPaket, 0, 20);
                                    ?>
                                </h4>
                                <span class="vendor vendor-d-v">
                                    <?php
                                    $vendor = "by <b>Sanggar Wulandari</b> — Wedding Package";
                                    echo strlen($vendor) > 43 ? substr($vendor, 0, 43) . '...' : substr($vendor, 0, 43);
                                    ?>
                                </span>
                                <span class="vendor vendor-m-v">
                                    <?php
                                    $vendor = "by <b>Sanggar Wulandari</b> — Wedding Package";
                                    echo strlen($vendor) > 33 ? substr($vendor, 0, 33) . '...' : substr($vendor, 0, 33);
                                    ?>
                                </span>
                                <div class="venue-harga">
                                    <small class="before-price">IDR 111,800,000</small><br>
                                    <span class="after-price">IDR 106,210,000</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endfor; ?>
        </div>
    </section>
</section>

<section class="all-produk">
    <div class="all-produk-title">
        <h4>Produk Lainnya yang Mungkin Anda Suka</h4>
    </div>
    <div class="produk">
        <div class="row justify-content-center">
            <?php for ($i = 1; $i <= 20; $i++) : ?>
                <div class="col-md-3 all-produk-d-v">
                    <a href="">
                        <div class="card">
                            <img src="<?= base_url(); ?>assets/vendors/img/news/paket1.webp" alt="">
                            <?php
                            $disc = 1;
                            if ($disc == 1) :
                            ?>
                                <div class="img-style">
                                    <span class="span-disc-1">Hemat</span>
                                    <span class="span-disc-2">8%</span>
                                </div>
                            <?php
                            endif;
                            ?>
                            <span class="kota"><i class="fas fa-map-marker-alt"></i> Jakarta. ID</span>
                            <div class="info-produk">
                                <h4>
                                    <?php
                                    $namaPaket = "Paket Lengkap Pasadenia Sportc ilhm dhiya";
                                    echo strlen($namaPaket) > 27 ? substr($namaPaket, 0, 27) . '...' : substr($namaPaket, 0, 27);
                                    ?>
                                </h4>
                                <span class="vendor">
                                    <?php
                                    $vendor = "by <b>Sanggar Wulandari</b> — Wedding Package";
                                    echo strlen($vendor) > 42 ? substr($vendor, 0, 42) . '...' : substr($vendor, 0, 42);
                                    ?>
                                </span>
                                <div class="produk-harga">
                                    <small class="before-price">IDR 111,800,000</small>
                                    <br>
                                    <span class="after-price">IDR 106,210,000</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-6 all-produk-m-v">
                    <a href="">
                        <div class="card">
                            <img src="<?= base_url(); ?>assets/vendors/img/news/paket1.webp" alt="">
                            <?php
                            $disc = 1;
                            if ($disc == 1) :
                            ?>
                                <div class="img-style">
                                    <span class="span-disc-1">Hemat</span>
                                    <span class="span-disc-2">8%</span>
                                </div>
                            <?php
                            endif;
                            ?>
                            <span class="kota"><i class="fas fa-map-marker-alt"></i> Jakarta. ID</span>
                            <div class="info-produk">
                                <h4>
                                    <?php
                                    $namaPaket = "Paket Lengkap Pasadenia Sportc ilhm dhiya";
                                    echo strlen($namaPaket) > 20 ? substr($namaPaket, 0, 20) . '...' : substr($namaPaket, 0, 20);
                                    ?>
                                </h4>
                                <span class="vendor">
                                    <?php
                                    $vendor = "by <b>Sanggar Wulandari</b> — Wedding Package";
                                    echo strlen($vendor) > 33 ? substr($vendor, 0, 33) . '...' : substr($vendor, 0, 33);
                                    ?>
                                </span>
                                <div class="produk-harga">
                                    <small class="before-price">IDR 111,800,000</small><br>
                                    <span class="after-price">IDR 106,210,000</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endfor; ?>
        </div>
    </div>
</section>
<div class="chat-fixed">
    <a href="" class="chat"><i class="fab fa-whatsapp"></i> chat</a>
</div>