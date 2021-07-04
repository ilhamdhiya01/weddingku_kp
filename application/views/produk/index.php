<section class="produk-info">
    <div class="smooth-slider mt-4">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="row">
                        <div class="col-2">
                            <a href="">Overview</a>
                        </div>
                        <div class="col-2 text-center">
                            <a href="">Detail</a>
                        </div>
                        <div class="col-2 text-center">
                            <a href="">Lokasi</a>
                        </div>
                        <div class="col-5">
                            <a href="">Syarat & Ketentuan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="produk-content">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="logo-name-kategori">
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <section id="gambar-lain" class="gambar-lain">
                        <div class="owl-carousel owl-theme  thumbnail">
                            <?php for ($i = 1; $i <= 10; $i++) : ?>
                                <a class="lightbox" href="<?= base_url(); ?>assets/vendors/img/news/paket<?= $i; ?>.webp" data-at-450="">
                                    <div class="item">
                                        <img src="<?= base_url(); ?>assets/vendors/img/news/paket<?= $i; ?>.webp" class="thumb img-fluid" alt="">
                                    </div>
                                </a>
                            <?php endfor; ?>
                        </div>
                    </section>
                    <div class="detail-produk">
                        <h4>Detail</h4>
                        <p>
                            Everything we do, we believe in making a better life for the better future. One of our ways to make that possible is through weddings. Through Vowever, we serve people with a full heart, being transparent and loyal, and always giving our best service, we believe Vowever can be a helping hand to establish a better life for you and your partner. It begins with designing your dream wedding that we believe will carry your happiness to your new family<span id="titikTiga">...</span>
                            <span id="selengkapnya">
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
                            </span>
                        </p>
                        <div class="selengkapnya">
                            <span id="btn-selengkapnya" onclick="selengkapnya()">Lihat Selengkapnya</span>
                        </div>
                    </div>
                    <div class="vendor">
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
                            <div class="col-4">
                                <div class="btn-show-vendor">
                                    <a href="" class="btn btn-block btn-primary">Kunjungi Profil Vendor</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lokasi">
                        <h4>Lokasi : Bali, ID</h4>
                    </div>
                    <div class="syarat-ketentuan">
                        <h4>Syarat & Ketentuan</h4>
                        <p>
                            We can’t wait to be your partner !!
                            However, to secure our service and book us on preferred date, here are our terms and conditions:<span id="titikTiga-syarat">...</span>
                            <span id="selengkapnya-syarat">
                            • The price includes government tax & service.
                            • The price includes delivery, set up, and dismantle fee.
                            • Payments made to Vowever Wedding Planner will be non-refundable. Deposit & balance payment schedules will be agreed in the Services Contract.
                            • The client remains responsible for fee payment as well as costs of repairs or replacement of supplier services and/or products.
                            • Third party contracts remain independent between supplier and client, and are in no way the responsibility of Vowever Wedding Planner.
                            • Adjustments of detailed arrangement can be made not later than 45 days before the wedding date.
                            </span>
                        </p>
                        <div class="selengkapnya">
                            <span id="btn-selengkapnya-syarat" onclick="selengkapnyaSyarat()">Lihat Selengkapnya</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>