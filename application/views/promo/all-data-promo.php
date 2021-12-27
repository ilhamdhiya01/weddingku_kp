<div class="row">
    <?php foreach ($produk_promo as $promo) : ?>
        <div class="col-md-3 promo-desktop-v">
            <div class="card card-produk-promo" data-idproduk="<?= $promo["id_produk"]; ?>">
                <img src=" <?= base_url(); ?>assets/vendors/img/gambar_produk/bridal/<?= $promo['gambar_tumbnail']; ?>" alt="">
                <?php
                $diskon = $this->db->get_where('tb_diskon_produk', ['id_produk' => $promo['id_produk']])->row_array();
                if ($promo['id_diskon'] != null) :
                ?>
                    <div class="img-style">
                        <span class="span-disc-1">Hemat</span>
                        <span class="span-disc-2"><?= $diskon['persentase_diskon']; ?>%</span>
                    </div>
                <?php endif; ?>
                <?php if ($promo['flexible_vendor'] == 1) : ?>
                    <div class="flex-icon">
                        <img src="<?= base_url(); ?>assets/vendors/img/news/flex-icon.webp" alt="">
                    </div>
                <?php endif; ?>
                <span class="kota"><i class="fas fa-map-marker-alt"></i> <?= $promo['kota']; ?>. ID</span>
                <div class="info-promo">
                    <h4>
                        <?php
                        echo strlen($promo['nama_produk']) > 20 ? substr($promo['nama_produk'], 0, 20) . '...' : substr($promo['nama_produk'], 0, 20);
                        ?>
                    </h4>
                    <span class="vendor">
                        <?php
                        $vendor = "by <b>" . $promo['nama_bisnis'] . "</b> — " . $promo['nama_kategori'];
                        echo strlen($vendor) > 45 ? substr($vendor, 0, 45) . '...' : substr($vendor, 0, 45);
                        ?>
                    </span>
                    <div class="promo-harga">
                        <?php if ($promo['id_diskon'] != null) : ?>
                            <small class="before-price"><?= format_idr($promo['harga']); ?></small><br>
                            <span class="after-price"><?= format_idr($diskon['harga_setelah_diskon']); ?></span>
                        <?php else : ?>
                            <span class="after-price"><?= format_idr($promo['harga']); ?></span>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 promo-mobile-v">
            <div class="card card-produk-promo" data-idproduk="<?= $promo["id_produk"]; ?>">
                <img src=" <?= base_url(); ?>assets/vendors/img/gambar_produk/bridal/<?= $promo['gambar_tumbnail']; ?>" alt="">
                <?php
                $diskon = $this->db->get_where('tb_diskon_produk', ['id_produk' => $promo['id_produk']])->row_array();
                if ($promo['id_diskon'] != null) :
                ?>
                    <div class="img-style">
                        <span class="span-disc-1">Hemat</span>
                        <span class="span-disc-2"><?= $diskon['persentase_diskon']; ?>%</span>
                    </div>
                <?php endif; ?>
                <span class="kota"><i class="fas fa-map-marker-alt"></i> <?= $promo['kota']; ?>. ID</span>
                <div class="info-promo">
                    <h4>
                        <?php
                        echo strlen($promo['nama_produk']) > 20 ? substr($promo['nama_produk'], 0, 20) . '...' : substr($promo['nama_produk'], 0, 20);
                        ?>
                    </h4>
                    <span class="vendor">
                        <?php
                        $vendor = "by <b>" . $promo['nama_bisnis'] . "</b> — " . $promo['nama_kategori'];
                        echo strlen($vendor) > 30 ? substr($vendor, 0, 30) . '...' : substr($vendor, 0, 30);
                        ?>
                    </span>
                    <div class="promo-harga">
                        <?php if ($promo['id_diskon'] != null) : ?>
                            <small class="before-price"><?= format_idr($promo['harga']); ?></small><br>
                            <span class="after-price"><?= format_idr($diskon['harga_setelah_diskon']); ?></span>
                        <?php else : ?>
                            <span class="after-price"><?= format_idr($promo['harga']); ?></span>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<script>
    $(".card-produk-promo").css("cursor", "pointer");
    $(".card-produk-promo").click(function() {
        const id_produk = $(this).data("idproduk");
        window.location.href = "<?= base_url(); ?>ui/produk/detail_produk/" + id_produk;
    });
</script>