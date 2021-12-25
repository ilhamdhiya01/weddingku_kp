<div class="owl-carousel owl-theme">
    <?php foreach ($venue_deals as $venue) : ?>
        <div class="item">
            <div class="card card-all-produk" data-idproduk="<?= $venue['id_produk']; ?>">
                <img src="<?= base_url(); ?>assets/vendors/img/gambar_produk/bridal/<?= $venue['gambar_tumbnail'] ?>" alt="">
                <?php
                $promo = $this->db->get_where('tb_diskon_produk', ['id_produk' => $venue['id_produk']])->row_array();
                if ($venue['id_diskon'] != null) :
                ?>
                    <div class="img-style">
                        <span class="span-disc-1">Hemat</span>
                        <span class="span-disc-2"><?= $promo['persentase_diskon'] ?>%</span>
                    </div>
                <?php endif; ?>
                <span class="kota"><i class="fas fa-map-marker-alt"></i> <?= $venue['kota'] ?>. ID</span>
                <div class="info-venue">
                    <h4 class="desktop-v">
                        <?php
                        echo strlen($venue['nama_produk']) > 28 ? substr($venue['nama_produk'], 0, 28) . '...' : substr($venue['nama_produk'], 0, 28);
                        ?>
                    </h4>
                    <h4 class="mobile-v">
                        <?php
                        echo strlen($venue['nama_produk']) > 20 ? substr($venue['nama_produk'], 0, 20) . '...' : substr($venue['nama_produk'], 0, 20);
                        ?>
                    </h4>
                    <span class="vendor vendor-d-v">
                        <?php
                        $vendor = "by <b>" . $venue['nama_bisnis'] . "</b> — " . $venue['nama_kategori'];
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
                        <?php if ($venue['id_diskon'] != null) : ?>
                            <small class="before-price"><?= format_idr($venue['harga']); ?></small><br>
                            <span class="after-price"><?= format_idr($promo['harga_setelah_diskon']); ?></span>
                        <?php else : ?>
                            <span class="after-price"><?= format_idr($venue['harga']); ?></span>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<script>
    $(".card-all-produk").css("cursor", "pointer");
    $(".card-all-produk").click(function() {
        const id_produk = $(this).data("idproduk");
        window.location.href = "<?= base_url(); ?>ui/produk/detail_produk/" + id_produk;
    });

    $('#store-venue .owl-carousel').owlCarousel({
        loop: false,
        margin: 10,
        nav: true,
        dots: false,
        responsive: {
            0: {
                items: 2
            },
            600: {
                items: 3
            },
            1000: {
                items: 4
            }
        }
    })
</script>