<div class="cari-vendor">
    <div class="search-option">
        <form action="">
            <div class="row form-cari">
                <div class="col-3">
                    <select class="option-cari">
                        <option>Semua Kategori</option>
                        <option>Audi</option>
                        <option>BMW</option>
                        <option>Citroen</option>
                        <option>Fiat</option>
                        <option>Ford</option>
                        <option>Jaguar</option>
                        <option>Jeep</option>
                        <option>Lancia</option>
                    </select>
                </div>
                <div class="col-3">
                    <select class="option-cari">
                        <option>Semua Kota</option>
                        <option>Audi</option>
                        <option>BMW</option>
                        <option>Citroen</option>
                        <option>Fiat</option>
                        <option>Ford</option>
                        <option>Jaguar</option>
                        <option>Jeep</option>
                        <option>Lancia</option>
                    </select>
                </div>
                <div class="col-3">
                    <select class="option-cari">
                        <option>Semua Harga</option>
                        <option>Audi</option>
                        <option>BMW</option>
                        <option>Citroen</option>
                        <option>Fiat</option>
                        <option>Ford</option>
                        <option>Jaguar</option>
                        <option>Jeep</option>
                        <option>Lancia</option>
                    </select>
                </div>
                <div class="col-3">
                    <div class="btn-cari">
                        <a href="">Cari Vendor</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<section class="section-profile-vendor">
    <div class="container">
        <div class="top-menu">
            <div class="container-paket">
                <div class="text-top-menu">
                    <a href="">Home</a>
                    <span class="span-1">></span>
                    <span class="span-2">Paket</span>
                </div>
            </div>
        </div>
        <div class="card-profile-vendor">
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-right-1">
                            <!-- img dan name vendor -->
                            <div class="row .img-nama">
                                <div class="col-3">
                                    <img src="<?= base_url(); ?>assets/vendors/img/news/vendor4.webp" class="img-vendor" alt="...">
                                </div>
                                <div class="col-9">
                                    <span class="nama-vendor">Lumiere Bridal Shoes</span>
                                </div>
                            </div>
                            <!-- / -->
                            <!-- kategori dan kota -->
                            <div class="row kategori-kota">
                                <div class="col-sm-12">
                                    <span class="kategori-vendor">Sepati Pengantin</span>
                                </div>
                                <div class="col-sm-12">
                                    <span class="kota">Jakarta - ID</span>
                                </div>
                            </div>
                            <!-- / -->
                            <!-- rating start -->
                            <div class="rating-star-profile">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <!-- / -->
                        </div>
                        <div class="card-right-2">
                            <div class="chat">
                                <a href="">
                                    <div class="chat-vendor">
                                        <i class="fab fa-whatsapp"></i> <span>Chat Vendor</span>
                                    </div>
                                </a>
                            </div>
                            <div class="price">
                                <a href="">
                                    <div class="price-list">
                                        <i class="fas fa-tags"></i> <span>Pricelist</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="card-right-3">
                            <div class="website">
                                <div class="row">
                                    <div class="col-2">
                                        <i class="fas fa-desktop"></i>
                                    </div>
                                    <div class="col-10">
                                        <a href="">
                                            <?php
                                            $website = "http://www.facebook.com/ilhamDhiyaUlhaq";
                                            echo strlen($website) > 28 ? substr($website, 0, 28) . '...' : substr($website, 0, 28);
                                            ?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="email">
                                <div class="row">
                                    <div class="col-2">
                                        <i class="far fa-envelope"></i>
                                    </div>
                                    <div class="col-10">
                                        <span class="text-dark">ulhaqilhamdhiya@gmail.com</span>
                                    </div>
                                </div>
                            </div>
                            <div class="phone">
                                <div class="row">
                                    <div class="col-2">
                                        <i class="fas fa-phone-alt"></i>
                                    </div>
                                    <div class="col-10">
                                        <span class="text-dark">081239438228</span>
                                    </div>
                                </div>
                            </div>
                            <div class="social-media">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-2">
                                                <i class="fas fa-user-friends"></i>
                                            </div>
                                            <div class="col-10">
                                                <span class="text-dark">Social Media</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="icon">
                                    <a href=""><i class="fab fa-facebook-square"></i></a>
                                    <a href=""><i class="fab fa-twitter-square"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-3">
                        <div class="card-body">
                            This is some text within a card body.
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <!-- flex card -->
                    <?php
                    $ada = 1;
                    if ($ada == 1) :
                    ?>
                        <div class="card card-left mb-3">
                            <div class="card-left-1">
                                <img src="<?= base_url(); ?>assets/vendors/img/news/new_flex_icon.png" class="vendor-flex" alt="">
                                <p>Vendor ini menyediakan fitur Flexi Reschedule. Hubungi sekarang untuk informasi lebih lanjut!</p>
                            </div>
                        </div>
                    <?php endif; ?>
                    <!-- / -->
                    <!-- pembayaran -->
                    <div class="card mb-3">
                        <div class="card-left-2">
                            <div class="img-style-vendor">
                                <span><i class="fas fa-check-circle"></i> Weddingku</span>
                            </div>
                            <div class="pay">
                                <div class="icon-text">
                                    <span class="span-1"><i class="fas fa-hourglass-half"></i> Cicilan 0% hingga 24 bulan</span> <small>|</small> <span class="span-2"><i class="far fa-credit-card"></i> Opsi pembayaran lebih banyak</span> <small>|</small> <span class="span-3"><i class="fas fa-file-invoice"></i> Pembayaran aman & mudah</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- / -->
                    <!--  -->
                    <div class="card">
                        <div class="card-left-3">
                            <div class="top-menu">
                                <div class="row justify-content-center">
                                    <div class="col-8">
                                        <div class="row">
                                            <div class="col-3">
                                                <a href="" class="active"><i class="fas fa-shopping-bag"></i> Produk</a>
                                            </div>
                                            <div class="col-3">
                                                <a href=""><i class="fas fa-tags"></i> Harga</a>
                                            </div>
                                            <div class="col-3">
                                                <a href=""><i class="fas fa-address-card"></i> Tentang Kami</a>
                                            </div>
                                            <div class="col-3">
                                                <a href=""><i class="fas fa-percent"></i> Promo</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <section class="produk-profile-vendor">
                                <div class="title-promo">
                                    <div class="row">
                                        <div class="col-9">
                                            <h4>Penawaran Terbaik</h4>
                                        </div>
                                        <div class="col-3">
                                            <a href="">Lihat Semua (15)</a>
                                        </div>
                                    </div>
                                </div>
                                <section id="promo-profile-vendor" class="promo-profile-vendor">
                                    <div class="owl-carousel owl-theme">
                                        <?php for ($i = 1; $i <= 10; $i++) : ?>
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
                                                        <div class="info-promo">
                                                            <h4 class="desktop-v">
                                                                <?php
                                                                $namapromo = "promo Lengkap Pasadenia Sportc ilhm dhiya";
                                                                echo strlen($namapromo) > 27 ? substr($namapromo, 0, 27) . '...' : substr($namapromo, 0, 27);
                                                                ?>
                                                            </h4>
                                                            <span class="vendor vendor-d-v">
                                                                <?php
                                                                $vendor = "by <b>Sanggar Wulandari</b> — Wedding Package";
                                                                echo strlen($vendor) > 43 ? substr($vendor, 0, 43) . '...' : substr($vendor, 0, 43);
                                                                ?>
                                                            </span>
                                                            <div class="promo-harga">
                                                                <small class="before-price">IDR 111,800,000</small>
                                                                <br>
                                                                <span class="after-price">IDR 106,210,000</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        <?php endfor; ?>
                                    </div>
                                </section>

                                <div class="title-all">
                                    <div class="row">
                                        <div class="col-9">
                                            <h4>Semua Produk</h4>
                                        </div>
                                        <div class="col-3">
                                            <a href="">Lihat Semua (15)</a>
                                        </div>
                                    </div>
                                </div>
                                <section id="all-produk-profile">
                                    <div class="owl-carousel owl-theme">
                                        <?php for ($i = 1; $i <= 10; $i++) : ?>
                                            <div class="item">
                                                <a href="">
                                                    <div class="card">
                                                        <img src="<?= base_url(); ?>assets/vendors/img/news/paket<?= $i; ?>.webp" alt="">
                                                        <?php
                                                        $disc = 0;
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
                                                        <div class="info-allProduk">
                                                            <h4 class="desktop-v">
                                                                <?php
                                                                $allProduk = "allProduk Lengkap Pasadenia Sportc ilhm dhiya";
                                                                echo strlen($allProduk) > 27 ? substr($allProduk, 0, 27) . '...' : substr($allProduk, 0, 27);
                                                                ?>
                                                            </h4>
                                                            <span class="vendor vendor-d-v">
                                                                <?php
                                                                $vendor = "by <b>Sanggar Wulandari</b> — Wedding Package";
                                                                echo strlen($vendor) > 43 ? substr($vendor, 0, 43) . '...' : substr($vendor, 0, 43);
                                                                ?>
                                                            </span>
                                                            <div class="allProduk-harga">
                                                                <small class="before-price">IDR 111,800,000</small>
                                                                <br>
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
                        </div>
                    </div>
                    <!-- / -->
                </div>
            </div>
        </div>
    </div>
</section>