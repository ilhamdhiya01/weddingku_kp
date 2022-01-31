<div class="owl-carousel owl-theme">
    <?php foreach ($produk_promo as $promo) : ?>
        <div class="item">
            <div class="card card-produk-promo" data-idproduk="<?= $promo['id_produk']; ?>">
                <div class="img">
                    <img src="<?= base_url(); ?>assets/vendors/img/gambar_produk/bridal/<?= $promo['gambar_tumbnail']; ?>" alt="">
                </div>
                <?php
                $diskon = $this->db->get_where('tb_diskon_produk', ['id_produk' => $promo['id_produk']])->row_array();
                ?>
                <div class="img-style">
                    <span class="span-disc-1">Hemat</span>
                    <span class="span-disc-2"><?= $diskon['persentase_diskon'] . "%"; ?></span>
                </div>
                <span class="kota"><i class="fas fa-map-marker-alt"></i> <?= $promo['kota']; ?>. ID</span>
                <div class="disc disc-desktop-v">
                    <h4>
                        <?php
                        echo strlen($promo['nama_produk']) > 27 ? substr($promo['nama_produk'], 0, 27) . '...' : substr($promo['nama_produk'], 0, 27);
                        ?>
                    </h4>
                    <span class="span-1">
                        <?php
                        $span1 = "by <b>" . $promo['nama_bisnis'] . "</b> — " . $promo['nama_kategori'];
                        echo strlen($span1) > 45 ? substr($span1, 0, 45) . '...' : substr($span1, 0, 45);
                        ?>
                    </span><br>
                    <div class="harga">
                        <span style="font-size:14px;" class="span-2"><?= format_idr($promo['harga']); ?></span><br>
                        <span style="font-size:17px;" class="span-3"><?= format_idr($diskon['harga_setelah_diskon']); ?></span>
                    </div>
                </div>
                <div class="disc disc-mobile-v">
                    <h4>
                        <?php
                        $namaPromo = "Paket Antara Softcover Lipat";
                        echo strlen($namaPromo) > 22 ? substr($namaPromo, 0, 22) . '...' : substr($namaPromo, 0, 22);
                        ?>
                    </h4>
                    <span class="span-1">
                        <?php
                        $span1 = "by <b>sedhahankenes</b> —  Invitation Printing";
                        echo strlen($span1) > 35 ? substr($span1, 0, 35) . '...' : substr($span1, 0, 35);
                        ?>
                    </span><br>
                    <div class="harga">
                        <span class="span-2">IDR 20.000</span><br>
                        <span class="span-3">IDR 15.000</span>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<script>
    $('#vaforite .owl-carousel').owlCarousel({
        loop: false,
        margin: 10,
        nav: true,
        dots: false,
        responsive: {
            0: {
                items: 2,
                nav: false
            },
            600: {
                items: 3
            },
            1000: {
                items: 4,
            }
        }
    });

    $(".card-produk-promo").css("cursor", "pointer");
    $(".card-produk-promo").click(function() {
        const id_produk = $(this).data("idproduk");
        window.location.href = "<?= base_url(); ?>ui/produk/detail_produk/" + id_produk;
    });
</script>