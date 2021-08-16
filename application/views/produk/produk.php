<section class="produk-info">
    <div class="smooth-slider mt-4">
        <div class="container">
            <div class="row">
                <div class="col-6 smooth-d-v">
                    <div class="row">
                        <div class="col-2">
                            <a href="#overview" class="page-scroll">Overview</a>
                        </div>
                        <div class="col-2 text-center">
                            <a href="#detail" class="page-scroll">Detail</a>
                        </div>
                        <div class="col-2 text-center">
                            <a href="#lokasi" class="page-scroll">Lokasi</a>
                        </div>
                        <div class="col-5">
                            <a href="#syarat" class="page-scroll">Syarat & Ketentuan</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 smooth-m-v">
                    <div class="menu-link">
                        <ul>
                            <li><a href="#overview" class="mobile-scroll">Overview</a></li>
                            <li><a href="#detail" class="mobile-scroll">Detail</a></li>
                            <li><a href="#lokasi" class="mobile-scroll">Lokasi</a></li>
                            <li><a href="#syarat" class="mobile-scroll">Syarat & Ketentuan</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="produk-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="logo-name-kategori" id="overview">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-2">
                                        <img src="<?= base_url(); ?>assets/vendors/img/news/vendor4.webp" alt="">
                                    </div>
                                    <div class="col-10">
                                        <h4>
                                            <?php
                                            $namaVendor = ' Hardpaper Double';
                                            echo strlen($namaVendor) > 38 ? substr($namaVendor, 0, 38) . '...' : substr($namaVendor, 0, 38);
                                            ?>
                                        </h4>
                                        <p>by <span>sedhahankenes</span> — Invitation Printing</p>
                                        <span class="dikelola">Dikelola oleh Weddingku</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <section id="gambar-lain" class="gambar-lain">
                        <div class="owl-carousel owl-theme  thumbnail">
                            <?php for ($i = 1; $i <= 3; $i++) : ?>
                                <a class="lightbox" href="<?= base_url(); ?>assets/vendors/img/news/paket<?= $i; ?>.webp" data-at-450="">
                                    <div class="item">
                                        <img src="<?= base_url(); ?>assets/vendors/img/news/paket<?= $i; ?>.webp" class="thumb img-fluid" alt="">
                                    </div>
                                </a>
                            <?php endfor; ?>
                        </div>
                    </section>
                    <div class="detail-produk">
                        <div class="detail-produk-inner">
                            <h4 id="detail">Detail</h4>
                            <p>
                                Everything we do, we believe in making a better life for the better future. One of our ways to make that possible is through weddings. Through Vowever, we serve people with a full heart, being transparent and loyal, and always giving our best service, we believe Vowever can be a helping hand to establish a better life for you and your partner. It begins with designing your dream wedding that we believe will carry your happiness to your new family<span id="titikTiga">...</span>

                                Inclusion
                                ___

                                - Full Service Wedding Planner
                                - Full Service Wedding Organizer
                                - Venue at The Ungasan Clifftop Resort
                                - 2 Night Stay at Ambar Villa (5 Bedroom Villa) at The Ungasan Clifftop
                                - 2 Night Stay at Pawana Villa (5 Bedroom Villa) at The Ungasan Clifftop
                                - Food and beverages by Ungasan Clifftop
                                - Decoration for Ceremony and Reception
                                - 8 Hours service of Photographer and Videographer
                                - Entertainment
                                - Celebrant
                                - MC
                                - 3 Tier Cake
                                - Sound system, Lighting, and many more.

                            </p>
                        </div>
                    </div>
                    <div class="selengkapnya">
                        <span id="btn-selengkapnya">Lihat Selengkapnya</span>
                    </div>
                    <div class="vendor" id="lokasi">
                        <div class="row">
                            <div class="col-8">
                                <div>
                                    <div class="row">
                                        <div class="col-2">
                                            <img src="<?= base_url(); ?>assets/vendors/img/news/vendor4.webp" alt="">
                                        </div>
                                        <div class="col-10">
                                            <h4>Vowever Wedding Planner</h4>
                                            <span>Wedding Planning - Bali.ID</span>
                                            <div class="rating-vendor">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <span>5/5</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 btn-d-v">
                                <div class="btn-show-vendor">
                                    <a href="" class="btn btn-block btn-primary">Kunjungi Profil Vendor</a>
                                </div>
                            </div>
                            <div class="col-md-12 btn-m-v">
                                <div class="btn-show-vendor">
                                    <a href="" class="btn btn-block btn-primary">Kunjungi Profil Vendor</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lokasi">
                        <h4>Lokasi : Bali, ID</h4>
                    </div>
                    <div class="syarat-ketentuan" id="syarat">
                        <div class="syarat-ketentuan-inner">
                            <h4>Syarat & Ketentuan</h4>
                            <p>
                                We can’t wait to be your partner !!
                                However, to secure our service and book us on preferred date, here are our terms and conditions:<span id="titikTiga-syarat">...</span>

                                • The price includes government tax & service.
                                • The price includes delivery, set up, and dismantle fee.
                                • Payments made to Vowever Wedding Planner will be non-refundable. Deposit & balance payment schedules will be agreed in the Services Contract.
                                • The client remains responsible for fee payment as well as costs of repairs or replacement of supplier services and/or products.
                                • Third party contracts remain independent between supplier and client, and are in no way the responsibility of Vowever Wedding Planner.
                                • Adjustments of detailed arrangement can be made not later than 45 days before the wedding date.
                            </p>
                        </div>
                    </div>
                    <div class="selengkapnya">
                        <span id="btn-selengkapnya-syarat">Lihat Selengkapnya</span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="left-card-1">
                        <div class="card">
                            <span class="harga-title">Harga</span>
                            <div class="body">
                                <div class="row">
                                    <div class="col-md-11">
                                        <div class="row">
                                            <?php
                                            $nilai = 1;
                                            $kapasitas = 'ada';
                                            $jumlah = 100;
                                            if ($nilai == 1) :
                                            ?>
                                                <div class="col-3">
                                                    <div class="promo-icon">
                                                        <span class="span-1">Hemat</span><br>
                                                        <span class="span-2">8%</span>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                            <div class="col-9">
                                                <div class="harga">
                                                    <?php if ($nilai == 1) : ?>
                                                        <span class="before-price">IDR 12.750</span><br>
                                                    <?php endif; ?>
                                                    <span class="after-price">IDR 11.793.000</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php if ($kapasitas != null) : ?>
                                        <div class="col-md-12">
                                            <div class="kapasitas mt-2">
                                                <span>Kapasitas</span>
                                                <h4>100 Pax</h4>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php if ($nilai == 1) : ?>
                        <div class="left-card-2 mt-3">
                            <div class="card">
                                <div class="body">
                                    <img src="<?= base_url(); ?>assets/vendors/img/news/new_flex_icon.png" class="vendor-flex" alt="">
                                    <p>
                                        Anda dapat mengubah tanggal layanan (reschedule) menjadi tanggal lain yang tersedia di tahun 2020.
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                    <form action="" method="">
                        <div class="qty mt-3">
                            <div class="card">
                                <div class="row">
                                    <div class="col-7">
                                        <span>Jumlah</span>
                                    </div>
                                    <div class="col-5">
                                        <button id="dec">-</button>
                                        <input type="text" class="qtyinput" value="<?= $jumlah; ?>" readonly>
                                        <button id="inc">+</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tombol">
                            <div class="row">
                                <div class="col-6">
                                    <a href="" class="btn btn-block btn-primary chat"><i class="far fa-comment-dots"></i> Chat</a>
                                </div>
                                <div class="col-6">
                                    <a href="" class="btn btn-block btn-primary pesan">Pesan Sekarang</a>
                                </div>
                            </div>
                            <span>Chat untuk informasi lebih lanjut & kustomisasi produk</span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="produk-lain">
    <div class="container">
        <div class="produk-lain-title">
            <h4>Produk Lain oleh Vendor Ini</h4>
            <a href="" class="d-v">Lihat Semua</a>
            <a href="" class="m-v"><i class="fas fa-ellipsis-h"></i></a>
        </div>
        <section id="produk-lain-vendor-ini" class="produk-lain-vendor-ini">
            <div class="owl-carousel owl-theme">
                <?php for ($i = 1; $i <= 10; $i++) : ?>
                    <div class="item">
                        <a href="<?= base_url(); ?>ui/produk">
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
    </div>
</section>
<script>
    // detail
    let detailProduk = $('.detail-produk');
    $('#btn-selengkapnya').click(function() {
        detailProduk.toggleClass('detail-produk-height');
        // alert('ok');
    });
    // syarat dan ketentuan
    let syaratKetentuan = $('.syarat-ketentuan');
    $('#btn-selengkapnya-syarat').click(function() {
        syaratKetentuan.toggleClass('syarat-ketentuan-height');
        // alert('ok');
    });
</script>