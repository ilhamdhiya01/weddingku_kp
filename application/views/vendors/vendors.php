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
                        <option>Semua Kategori</option>
                        <option>Audi</option>
                        <option>BMW</option>
                        <option>Citroen</option>
                        <option>Fiat</option>
                        <option>Ford</option>
                        <option>Jaguar</option>
                        <option>Jeep</option>
                        <option>Lancia</option>
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
                    <div class="btn-cari">
                        <a href="">Cari Vendor</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- Daftar vendor -->
<div class="daftar-vendor">
    <div class="container">
        <div class="text-daftar-vendor">
            <a href="">Home</a>
            <span class="span-1">></span>
            <span class="span-2">Daftar Vendor</span>
        </div>
    </div>
</div>
<!-- akhir -->

<!-- Card vendor -->
<section class="section-card-vendor">
    <div class="content-vendor container">
        <div class="title-vendor">
            <span>Menampilkan Hasil Untuk <b>Semua Kategori</b> di <b>Semua Kota</b>, <b>Semua Harga</b>.</span>
        </div>
        <div class="card-vendor">
            <div class="row">
                <?php for ($i = 1; $i <= 20; $i++) : ?>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="image-vendor">
                                <a href="<?= base_url('login/vendors/profile_vendor'); ?>"><img src="<?= base_url(); ?>assets/vendors/img/news/vendor4.webp" class="card-img-top" alt="..."></a>
                            </div>
                            <div class="img-style-vendor">
                                <span class="text-dark"><i class="fas fa-check-circle"></i> Weddingku</span>
                            </div>
                            <div class="flex-icon-vendor">
                                <img src="<?= base_url(); ?>assets/vendors/img/news/flex-icon.webp" alt="">
                            </div>
                            <div class="card-body name-vendor-text">
                                <a href="<?= base_url('login/vendors/profile_vendor'); ?>">
                                    <p class="card-text text-center">
                                        <?php
                                        $namaVendorT = "BALI LIVE ENTERTAINMENT";
                                        echo strlen($namaVendorT) > 24 ? substr($namaVendorT, 0, 24) . '...' : substr($namaVendorT, 0, 24);
                                        ?>
                                    </p>
                                </a>
                                <div class="kategori-lokasi">
                                    <span class="kategori">
                                        <?php
                                        $kategori = "Entertainment (Music) ilham dhiya";
                                        echo strlen($kategori) > 28 ? substr($kategori, 0, 28) . '...' : substr($kategori, 0, 28);
                                        ?>
                                    </span>
                                    <br>
                                    <span class="lokasi">Jakarta, ID</span>
                                    <div class="rating-star-vendor">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <small class="small-1"><i class="fas fa-hourglass-half"></i> Cicilan 0% hingga 24 bulan</small><br>
                                <small class="small-2"><i class="far fa-credit-card"></i> Opsi pembayaran lebih banyak</small><br>
                                <small class="small-3"><i class="fas fa-file-invoice"></i> Pembayaran aman & mudah</small>
                            </div>
                        </div>
                    </div>
                    <!-- mobile version -->
                    <div class="col-6">
                        <div class="card">
                            <div class="image-vendor">
                                <a href="<?= base_url('login/vendors/profile_vendor'); ?>"><img src="<?= base_url(); ?>assets/vendors/img/news/vendor4.webp" class="card-img-top" alt="..."></a>
                            </div>
                            <div class="img-style-vendor">
                                <span class="text-dark"><i class="fas fa-check-circle"></i> Weddingku</span>
                            </div>
                            <div class="flex-icon-vendor">
                                <img src="<?= base_url(); ?>assets/vendors/img/news/flex-icon.webp" alt="">
                            </div>
                            <div class="card-body name-vendor-text">
                                <a href="<?= base_url('login/vendors/profile_vendor'); ?>">
                                    <p class="card-text text-center">
                                        <?php
                                        $namaVendorT = "BALI LIVE ENTERTAINMENT";
                                        echo strlen($namaVendorT) > 18 ? substr($namaVendorT, 0, 18) . '...' : substr($namaVendorT, 0, 18);
                                        ?>
                                    </p>
                                </a>
                                <div class="kategori-lokasi">
                                    <span class="kategori">
                                        <?php
                                        $kategori = "Entertainment (Music) ilham dhiya";
                                        echo strlen($kategori) > 23 ? substr($kategori, 0, 23) . '...' : substr($kategori, 0, 23);
                                        ?>
                                    </span><br>
                                    <span class="lokasi">Jakarta, ID</span>
                                    <div class="rating-star-vendor">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <small class="small-1"><i class="fas fa-hourglass-half"></i> Cicilan 0% hingga 24 bulan</small><br>
                                <small class="small-2"><i class="far fa-credit-card"></i> Opsi pembayaran lebih banyak</small><br>
                                <small class="small-3"><i class="fas fa-file-invoice"></i> Pembayaran aman & mudah</small>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
            <!-- <div class="row">
                
            </div> -->
            <!-- akhir -->
        </div>
    </div>
</section>
<!-- / -->
<div class="chat-fixed">
    <a href="" class="chat"><i class="fab fa-whatsapp"></i> chat</a>
</div>