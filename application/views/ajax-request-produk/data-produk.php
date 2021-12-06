<div class="owl-carousel owl-theme">
    <?php foreach ($semua_produk as $produk) : ?>
        <div class="item">
            <a href="<?= base_url(); ?>ui/produk">
                <div class="card">
                    <img src="<?= base_url(); ?>assets/vendors/img/gambar_produk/bridal/<?= $produk['gambar_tumbnail']; ?>" alt="">
                    <?php
                    $diskon = $this->db->get_where('tb_diskon_produk', ['id_produk' => $produk['id_produk']])->row_array();
                    if ($produk['id_diskon'] != null) :
                    ?>
                        <div class="img-style">
                            <span class="span-disc-1">Hemat</span>
                            <span class="span-disc-2"><?= $diskon['persentase_diskon'] . "%"; ?></span>
                        </div>
                    <?php
                    endif;
                    ?>
                    <span class="kota"><i class="fas fa-map-marker-alt"></i> <?= $produk['kota']; ?>. ID</span>
                    <div class="info-allProduk">
                        <h4 class="desktop-v">
                            <?php
                            echo strlen($produk['nama_produk']) > 24 ? substr($produk['nama_produk'], 0, 24) . '...' : substr($produk['nama_produk'], 0, 24);
                            ?>
                        </h4>
                        <span class="vendor vendor-d-v">
                            <?php
                            $vendor = "by <b>" . $produk['nama_bisnis'] . "</b> — " . $produk['nama_kategori'];
                            echo strlen($vendor) > 43 ? substr($vendor, 0, 43) . '...' : substr($vendor, 0, 43);
                            ?>
                        </span>
                        <div class="allProduk-harga">
                            <?php if ($produk['id_diskon'] != null) : ?>
                                <small class="before-price"><?= format_idr($produk['harga']); ?></small>
                                <br>
                                <span class="after-price"><?= format_idr($diskon['harga_setelah_diskon']); ?></span>
                            <?php else : ?>
                                <span class="after-price"><?= format_idr($produk['harga']); ?></span>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    <?php endforeach; ?>
</div>

<script>
    $('.owl-carousel').owlCarousel({
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