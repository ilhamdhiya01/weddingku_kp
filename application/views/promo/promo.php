<section class="section-promo">
    <section id="promo-paket">
        <div class="owl-carousel owl-theme promo-paket">
            <div class="item">

            </div>
        </div>
    </section>
    <div class="promo-container">
        <div class="promo-title">
            <h2>Promo & Diskon</h2>
            <p>Nikmati beragam promo & diskon berikut ini untuk membuat persiapan pernikahan Anda lebih mudah & hemat!</p>
        </div>
        <div class="find-kategori">
            <form action="">
                <div class="row">
                    <div class="col-1">
                        <div class="icon-find">
                            <i class="fab fa-buffer"></i>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="form-group kategori-option">
                            <select class="form-control" id="kategori">
                                <option>Semua Kategori</option>
                                <?php for ($i = 1; $i <= 10; $i++) : ?>
                                    <option>Decoratin</option>
                                <?php endfor; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-9">
                        <div class="btn-find-kategori">
                            <a href="">Cari Vendor</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="card-promo">
            <div class="row">
                <?php for ($i = 1; $i <= 9; $i++) : ?>
                    <div class="col-md-3 promo-desktop-v">
                        <a href="">
                            <div class="card">
                                <img src="<?= base_url(); ?>assets/vendors/img/news/paket<?= $i; ?>.webp" alt="">
                                <div class="img-style">
                                    <span class="span-disc-1">Hemat</span>
                                    <span class="span-disc-2">8%</span>
                                </div>
                                <span class="kota"><i class="fas fa-map-marker-alt"></i> Jakarta. ID</span>
                                <div class="info-promo">
                                    <h4>
                                        <?php
                                        $namaPromo = "Paket Lengkap Pasadenia location";
                                        echo strlen($namaPromo) >30 ? substr($namaPromo, 0,30) . '...' : substr($namaPromo, 0,30);
                                        ?>
                                    </h4>
                                    <span class="vendor">
                                        <?php
                                        $vendor = "by <b>Sanggar Wulandari</b> — Wedding Package milah";
                                        echo strlen($vendor) > 45 ? substr($vendor, 0,45) . '...' : substr($vendor, 0,45);
                                        ?>
                                    </span>
                                    <div class="promo-harga">
                                        <small class="before-price">IDR 111,800,000</small><br>
                                        <span class="after-price">IDR 106,210,000</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 promo-mobile-v">
                        <a href="">
                            <div class="card">
                                <img src="<?= base_url(); ?>assets/vendors/img/news/paket<?= $i; ?>.webp" alt="">
                                <div class="img-style">
                                    <span class="span-disc-1">Hemat</span>
                                    <span class="span-disc-2">8%</span>
                                </div>
                                <span class="kota"><i class="fas fa-map-marker-alt"></i> Jakarta. ID</span>
                                <div class="info-promo">
                                    <h4>
                                        <?php
                                        $namaPromo = "Paket Lengkap Pasadenia Sportclub";
                                        echo strlen($namaPromo) > 20 ? substr($namaPromo, 0, 20) . '...' : substr($namaPromo, 0, 20);
                                        ?>
                                    </h4>
                                    <span class="vendor">
                                        <?php
                                        $vendor = "by <b>Sanggar Wulandari</b> — Wedding Package";
                                        echo strlen($vendor) > 33 ? substr($vendor, 0, 33) . '...' :  substr($vendor, 0, 33);
                                        ?>
                                    </span>
                                    <div class="promo-harga">
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
    </div>
</section>
<div class="chat-fixed">
    <a href="" class="chat"><i class="fab fa-whatsapp"></i> chat</a>
</div>