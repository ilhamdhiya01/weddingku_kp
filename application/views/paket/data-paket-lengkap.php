<div class="row">
    <?php foreach ($paket_lengkap as $paket) : ?>
        <div class="col-md-3 promo-desktop-v">
            <div class="card card-all-produk" data-idproduk="<?= $paket['id_produk']; ?>">
                <img src="<?= base_url(); ?>assets/vendors/img/gambar_produk/bridal/<?= $paket['gambar_tumbnail']; ?>" alt="">
                <?php
                $diskon = $this->db->get_where('tb_diskon_produk', ['id_produk' => $paket['id_produk']])->row_array();
                if ($paket['id_diskon'] != null) :
                ?>
                    <div class="img-style">
                        <span class="span-disc-1">Hemat</span>
                        <span class="span-disc-2"><?= $diskon['persentase_diskon']; ?>%</span>
                    </div>
                <?php endif; ?>
                <?php if ($paket['flexible_vendor'] == 1) : ?>
                    <div class="flex-icon">
                        <img src="<?= base_url(); ?>assets/vendors/img/news/flex-icon.webp" alt="">
                    </div>
                <?php endif; ?>
                <span class="kota"><i class="fas fa-map-marker-alt"></i> <?= $paket['kota']; ?>. ID</span>
                <div class="info-promo">
                    <h4>
                        <?php
                        echo strlen($paket['nama_produk']) > 25 ? substr($paket['nama_produk'], 0, 25) . '...' : substr($paket['nama_produk'], 0, 25);
                        ?>
                    </h4>
                    <span class="vendor">
                        <?php
                        $vendor = "by <b>" . $paket['nama_bisnis'] . "</b> — " . $paket['sub_kategori'];
                        echo strlen($vendor) > 52 ? substr($vendor, 0, 52) . '...' : substr($vendor, 0, 52);
                        ?>
                    </span>
                    <div class="promo-harga">
                        <?php if ($paket['id_diskon'] != null) : ?>
                            <small class="before-price"><?= format_idr($paket['harga']); ?></small><br>
                            <span class="after-price"><?= format_idr($diskon['harga_setelah_diskon']); ?></span>
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
</script>