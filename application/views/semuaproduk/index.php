<section id="banner-promo" class="banner-promo">
    <div class="owl-carousel owl-theme">
        <?php for ($i = 1; $i <= 10; $i++) : ?>
            <div class="item">
                <a href=""><img src="<?= base_url(); ?>assets/vendors/img/news/<?= $i ?>.png" class="img-banner-promo" alt=""></a>
            </div>
        <?php endfor; ?>
    </div>
</section>
<section id="store-all-produk" class="store-all-produk">
    <div class="container">
        <div class="owl-carousel owl-theme">
            <?php
            $subkategori = [
                'Aksesoris Pernikahan',
                'Souvenir & Seserahan',
                'Gaun & Pakaian Wanita',
                'Bridal',
                'Jas & Pakaian Pria',
                'Wedding Palnning',
                'Rias Rambut & Makeup',
                'Fotografi',
                'Dekorasi & Pencahayaan',
                'Hiburan / Entertainment',
                'Videografi',
                'Makanan & Minuman',
                'Undangan',
                'Venue',
                'Aksesoris Pria',
                'Perhiasan',
                'Bulan Madu',
                'Perawatan & Kecantikan',
                'Jasa Pernikahan',
                'Paket Lengkap'
            ];
            for ($j = 0; $j < count($subkategori); $j++) :
            ?>
                <div class="item">
                    <a href="">
                        <div class="card">
                            <img src="<?= base_url(); ?>assets/vendors/img/news/subkategori<?= $j; ?>.png" alt="">
                            <span class="text-dark"><?= $subkategori[$j]; ?></span>
                        </div>
                    </a>
                </div>
            <?php endfor; ?>
        </div>
    </div>
</section>


<section class="all-produk">
    <div class="all-produk-title">
        <div class="row">
            <div class="col-12 search search-m-v">
                <i class="fas fa-sort-amount-up-alt"></i>
                <select>
                    <option>Rekomendasi</option>
                    <option>Harga (Tertinggi - Terendah)</option>
                    <option>Harga (Terendah - Tertinggi)</option>
                </select>
                <a href="">Cari</a>
            </div>
            <div class="col-9">
                <h4>Produk Lainnya yang Mungkin Anda Suka</h4>
            </div>
            <div class="col-3 search search-d-v">
                <i class="fas fa-sort-amount-up-alt"></i>
                <select>
                    <option>Rekomendasi</option>
                    <option>Harga (Tertinggi - Terendah)</option>
                    <option>Harga (Terendah - Tertinggi)</option>
                </select>
                <a href="">Cari</a>
            </div>
        </div>
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