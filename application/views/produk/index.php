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
                                        <h4>Hardpaper Double</h4>
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
                </div>
            </div>
        </div>
    </div>
</section>