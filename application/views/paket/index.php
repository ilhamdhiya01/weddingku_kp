<div class="daftar-paket">
    <div class="container-paket">
        <div class="text-daftar-paket">
            <a href="">Home</a>
            <span class="span-1">></span>
            <span class="span-2">Paket</span>
        </div>
    </div>
</div>
<section class="paket">
    <div class="paket-title">
        <h2>Paket Lengkap <a href="" data-toggle="modal" id="store-paket" data-target="#paket"><i class="fas fa-pencil-alt"></i></a></h2>
    </div>
    <section id="jenis-paket" class="jenis-paket">
        <div class="owl-carousel owl-theme">
            <?php
            $data = ['Semua', 'Paket Lamaran', 'Paket Pernikahan'];
            foreach ($data as $kategori) :
            ?>
                <div class="item">
                    <a href="">
                        <div class="btn-paket text-center">
                            <?= $kategori; ?>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
    <div class="card-paket">
        <div class="row">
            <?php for ($i = 1; $i <= 10; $i++) : ?>
                <div class="col-md-3">
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
                                <h4>
                                    <?php
                                    $namaPaket = "Paket Lengkap Pasadenia Sportc ilham";
                                    echo strlen($namaPaket) > 28 ? substr($namaPaket, 0, 28) . '...' : substr($namaPaket, 0, 28);
                                    ?>
                                </h4>
                                <span class="vendor">
                                    <?php
                                    $vendor = "by <b>Sanggar Wulandari</b> — Wedding Package ilham dhiya ulhaq";
                                    echo strlen($vendor) > 40 ? substr($vendor, 0, 40) . '...' : substr($vendor, 0, 40);
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
                <div class="col-6">
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
                                <h4>
                                    <?php
                                    $namaPaket = "Paket Lengkap Pasadenia Sportc";
                                    echo strlen($namaPaket) > 20 ? substr($namaPaket, 0, 20) . '...' : substr($namaPaket, 0, 20);
                                    ?>
                                </h4>
                                <span class="vendor">
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
    </div>
</section>
<div class="chat-fixed">
    <a href="" class="chat"><i class="fab fa-whatsapp"></i> chat</a>
</div>