<style>
    .card-all-produk:hover,
    .promo-profile-vendor .card:hover {
        box-shadow: 5px 5px 5px rgba(102, 68, 0, 0.3);
    }

    .card-all-produk,
    .promo-profile-vendor .card {
        box-shadow: 5px 5px 5px rgba(102, 68, 0, 0.1);
    }
</style>
<section class="produk-profile-vendor">
    <div class="title-promo">
        <div class="row">
            <div class="col-9">
                <h4>Produk Promo</h4>
            </div>
            <div class="col-3 desktop-v">
                <a href="" class="show-semua-produk-promo">Lihat Semua (<?= count($total_produk_promo); ?>)</a>
            </div>
            <script>
                $(".show-semua-produk-promo").click(function() {
                    window.open("<?= base_url(); ?>ui/produk/semua_produk_promo/<?= $id_vendor ?>");
                });
            </script>
            <div class="col-3 mobile-v">
                <a href=""><i class="fas fa-ellipsis-h"></i></a>
            </div>
        </div>
    </div>
    <section id="promo-profile-vendor" class="promo-profile-vendor">
        <div class="owl-carousel owl-theme">
            <?php foreach ($produk_promo as $promo) : ?>
                <div class="item">
                    <a href="<?= base_url(); ?>ui/produk">
                        <div class="card">
                            <img src="<?= base_url(); ?>assets/vendors/img/gambar_produk/bridal/<?= $promo['gambar_tumbnail']; ?>" alt="">
                            <?php
                            $diskon = $this->db->get_where('tb_diskon_produk', ['id_produk' => $promo['id_produk']])->row_array();
                            if ($promo['id_diskon'] != null) :
                            ?>
                                <div class="img-style">
                                    <span class="span-disc-1">Hemat</span>
                                    <span class="span-disc-2"><?= $diskon['persentase_diskon'] . "%" ?></span>
                                </div>
                            <?php
                            endif;
                            ?>
                            <span class="kota"><i class="fas fa-map-marker-alt"></i> <?= $promo['kota']; ?>. ID</span>
                            <div class="info-promo">
                                <h4 class="desktop-v">
                                    <?php
                                    echo strlen($promo['nama_produk']) > 27 ? substr($promo['nama_produk'], 0, 27) . '...' : substr($promo['nama_produk'], 0, 27);
                                    ?>
                                </h4>
                                <span class="vendor vendor-d-v">
                                    <?php
                                    $vendor = "by <b>" . $promo['nama_bisnis'] . "</b> — " . $promo['nama_kategori'];
                                    echo strlen($vendor) > 43 ? substr($vendor, 0, 43) . '...' : substr($vendor, 0, 43);
                                    ?>
                                </span>
                                <div class="promo-harga">
                                    <?php if ($promo['id_diskon'] != null) : ?>
                                        <small class="before-price"><?= format_idr($promo['harga']); ?></small>
                                        <br>
                                        <span class="after-price"><?= format_idr($diskon['harga_setelah_diskon']); ?></span>
                                    <?php else : ?>
                                        <span class="after-price"><?= format_idr($promo['harga']); ?></span>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
</section>

<script>
    $('#promo-profile-vendor .owl-carousel').owlCarousel({
        loop: false,
        margin: 10,
        nav: true,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 3
            }
        }
    })
</script>