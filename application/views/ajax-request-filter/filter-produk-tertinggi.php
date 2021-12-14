<div class="row" class="">
    <?php foreach ($semua_produk as $produk) : ?>
        <div class="col-md-3 promo-desktop-v">
            <div class="card card-all-produk" data-idproduk="<?= $produk['id_produk']; ?>">
                <img src="<?= base_url(); ?>assets/vendors/img/gambar_produk/bridal/<?= $produk['gambar_tumbnail']; ?>" alt="">
                <?php
                $diskon = $this->db->get_where('tb_diskon_produk', ['id_produk' => $produk['id_produk']])->row_array();
                if ($produk['id_diskon'] != null) :
                ?>
                    <div class="img-style">
                        <span class="span-disc-1">Hemat</span>
                        <span class="span-disc-2"><?= $diskon['persentase_diskon']; ?>%</span>
                    </div>
                <?php endif; ?>
                <?php if ($produk['flexible_vendor'] == 1) : ?>
                    <div class="flex-icon">
                        <img src="<?= base_url(); ?>assets/vendors/img/news/flex-icon.webp" alt="">
                    </div>
                <?php endif; ?>
                <span class="kota"><i class="fas fa-map-marker-alt"></i> <?= $produk['kota']; ?>. ID</span>
                <div class="info-promo">
                    <h4>
                        <?php
                        echo strlen($produk['nama_produk']) > 25 ? substr($produk['nama_produk'], 0, 25) . '...' : substr($produk['nama_produk'], 0, 25);
                        ?>
                    </h4>
                    <span class="vendor">
                        <?php
                        $vendor = "by <b>" . $produk['nama_bisnis'] . "</b> — " . $produk['nama_kategori'];
                        echo strlen($vendor) > 45 ? substr($vendor, 0, 45) . '...' : substr($vendor, 0, 45);
                        ?>
                    </span>
                    <div class="promo-harga">
                        <?php if ($produk['id_diskon'] != null) : ?>
                            <small class="before-price"><?= format_idr(intval($produk['harga'])); ?></small><br>
                            <span class="after-price"><?= format_idr(intval($diskon['harga_setelah_diskon'])); ?></span>
                        <?php else : ?>
                            <span class="after-price"><?= format_idr(intval($produk['harga'])); ?></span>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
    <?php foreach ($semua_produk as $produk) : ?>
        <div class="col-6 promo-mobile-v">
            <div class="card card-all-produk" data-idproduk="<?= $produk['id_produk']; ?>">
                <img src="<?= base_url(); ?>assets/vendors/img/gambar_produk/bridal/<?= $produk['gambar_tumbnail']; ?>" alt="">
                <?php
                $diskon = $this->db->get_where('tb_diskon_produk', ['id_produk' => $produk['id_produk']])->row_array();
                if ($produk['id_diskon'] != null) :
                ?>
                    <div class="img-style">
                        <span class="span-disc-1">Hemat</span>
                        <span class="span-disc-2"><?= $diskon['persentase_diskon']; ?>%</span>
                    </div>
                <?php endif; ?>
                <?php if ($produk['flexible_vendor'] == 1) : ?>
                    <div class="flex-icon">
                        <img src="<?= base_url(); ?>assets/vendors/img/news/flex-icon.webp" alt="">
                    </div>
                <?php endif; ?>
                <span class="kota"><i class="fas fa-map-marker-alt"></i> <?= $produk['kota']; ?>. ID</span>
                <div class="info-promo">
                    <h4>
                        <?php
                        echo strlen($produk['nama_produk']) > 20 ? substr($produk['nama_produk'], 0, 20) . '...' : substr($produk['nama_produk'], 0, 20);
                        ?>
                    </h4>
                    <span class="vendor">
                        <?php
                        $vendor = "by <b>" . $produk['nama_bisnis'] . "</b> — " . $produk['nama_kategori'];
                        echo strlen($vendor) > 33 ? substr($vendor, 0, 33) . '...' :  substr($vendor, 0, 33);
                        ?>
                    </span>
                    <?php if ($produk['id_diskon'] != null) : ?>
                        <small class="before-price"><?= format_idr(intval($produk['harga'])); ?></small><br>
                        <span class="after-price"><?= format_idr(intval($diskon['harga_setelah_diskon'])); ?></span>
                    <?php else : ?>
                        <span class="after-price"><?= format_idr(intval($produk['harga'])); ?></span>
                    <?php endif; ?>
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
</script>