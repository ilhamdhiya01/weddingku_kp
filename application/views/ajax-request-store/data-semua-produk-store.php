<div class="row">
    <?php foreach ($store_produk as $all_produk) : ?>
        <div class="col-md-3 all-produk-d-v">
            <div class="card card-all-produk" data-idproduk="<?= $all_produk['id_produk']; ?>">
                <img src="<?= base_url(); ?>assets/vendors/img/gambar_produk/bridal/<?= $all_produk['gambar_tumbnail'] ?>" alt="">
                <?php
                $promo = $this->db->get_where('tb_diskon_produk', ['id_produk' => $all_produk['id_produk']])->row_array();
                if ($all_produk['id_diskon'] != null) :
                ?>
                    <div class="img-style">
                        <span class="span-disc-1">Hemat</span>
                        <span class="span-disc-2"><?= $promo['persentase_diskon'] ?>%</span>
                    </div>
                <?php endif; ?>
                <span class="kota"><i class="fas fa-map-marker-alt"></i> <?= $all_produk['kota'] ?>. ID</span>
                <div class="info-produk">
                    <h4>
                        <?php
                        echo strlen($all_produk['nama_produk']) > 25 ? substr($all_produk['nama_produk'], 0, 25) . '...' : substr($all_produk['nama_produk'], 0, 28);
                        ?>
                    </h4>
                    <span class="vendor">
                        <?php
                        $vendor = "by <b>" . $all_produk['nama_bisnis'] . "</b> — " . $all_produk['nama_kategori'];
                        echo strlen($vendor) > 43 ? substr($vendor, 0, 43) . '...' : substr($vendor, 0, 43);
                        ?>
                    </span>
                    <div class="produk-harga">
                        <?php if ($all_produk['id_diskon'] != null) : ?>
                            <small class="before-price"><?= format_idr($all_produk['harga']); ?></small><br>
                            <span class="after-price"><?= format_idr($promo['harga_setelah_diskon']); ?></span>
                        <?php else : ?>
                            <span class="after-price"><?= format_idr($all_produk['harga']); ?></span>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 all-produk-m-v">
            <div class="card" data-idproduk="<?= $all_produk['id_produk']; ?>">
                <img src="<?= base_url(); ?>assets/vendors/img/gambar_produk/bridal/<?= $all_produk['gambar_tumbnail'] ?>" alt="">
                <?php
                $promo = $this->db->get_where('tb_diskon_produk', ['id_produk' => $all_produk['id_produk']])->row_array();
                if ($all_produk['id_diskon'] != null) :
                ?>
                    <div class="img-style">
                        <span class="span-disc-1">Hemat</span>
                        <span class="span-disc-2"><?= $promo['persentase_diskon'] ?>%</span>
                    </div>
                <?php endif; ?>
                <span class="kota"><i class="fas fa-map-marker-alt"></i> <?= $all_produk['kota'] ?>. ID</span>
                <div class="info-produk">
                    <h4>
                        <?php
                        echo strlen($all_produk['nama_produk']) > 25 ? substr($all_produk['nama_produk'], 0, 25) . '...' : substr($all_produk['nama_produk'], 0, 28);
                        ?>
                    </h4>
                    <span class="vendor">
                        <?php
                        $vendor = "by <b>" . $all_produk['nama_bisnis'] . "</b> — " . $all_produk['nama_kategori'];
                        echo strlen($vendor) > 43 ? substr($vendor, 0, 43) . '...' : substr($vendor, 0, 43);
                        ?>
                    </span>
                    <div class="produk-harga">
                        <?php if ($all_produk['id_diskon'] != null) : ?>
                            <small class="before-price"><?= format_idr($all_produk['harga']); ?></small><br>
                            <span class="after-price"><?= format_idr($promo['harga_setelah_diskon']); ?></span>
                        <?php else : ?>
                            <span class="after-price"><?= format_idr($all_produk['harga']); ?></span>
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