<div class="owl-carousel owl-theme">
    <?php foreach ($paket_lengkap as $paket) : ?>
        <div class="item">
            <div class="card card-all-produk" data-idproduk="<?= $paket['id_produk']; ?>">
                <img src="<?= base_url(); ?>assets/vendors/img/gambar_produk/bridal/<?= $paket['gambar_tumbnail'] ?>" alt="">
                <?php
                $promo = $this->db->get_where('tb_diskon_produk', ['id_produk' => $paket['id_produk']])->row_array();
                if ($paket['id_diskon'] != null) :
                ?>
                    <div class="img-style">
                        <span class="span-disc-1">Hemat</span>
                        <span class="span-disc-2"><?= $promo['persentase_diskon'] ?>%</span>
                    </div>
                <?php endif; ?>
                <span class="kota"><i class="fas fa-map-marker-alt"></i> <?= $paket['kota'] ?>. ID</span>
                <div class="info-paket">
                    <h4 class="desktop-v">
                        <?php
                        echo strlen($paket['nama_produk']) > 28 ? substr($paket['nama_produk'], 0, 28) . '...' : substr($paket['nama_produk'], 0, 28);
                        ?>
                    </h4>
                    <h4 class="mobile-v">
                        <?php
                        echo strlen($paket['nama_produk']) > 20 ? substr($paket['nama_produk'], 0, 20) . '...' : substr($paket['nama_produk'], 0, 20);
                        ?>
                    </h4>
                    <span class="vendor vendor-d-v">
                        <?php
                        $vendor = "by <b>" . $paket['nama_bisnis'] . "</b> — " . $paket['nama_kategori'];
                        echo strlen($vendor) > 43 ? substr($vendor, 0, 43) . '...' : substr($vendor, 0, 43);
                        ?>
                    </span>
                    <span class="vendor vendor-m-v">
                        <?php
                        $vendor = "by <b>Sanggar Wulandari</b> — Wedding Package";
                        echo strlen($vendor) > 33 ? substr($vendor, 0, 33) . '...' : substr($vendor, 0, 33);
                        ?>
                    </span>
                    <div class="paket-harga">
                        <?php if ($paket['id_diskon'] != null) : ?>
                            <small class="before-price"><?= format_idr($paket['harga']); ?></small><br>
                            <span class="after-price"><?= format_idr($promo['harga_setelah_diskon']); ?></span>
                        <?php else : ?>
                            <span class="after-price"><?= format_idr($paket['harga']); ?></span>
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

    $('#store-paket .owl-carousel').owlCarousel({
        loop: false,
        margin: 10,
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