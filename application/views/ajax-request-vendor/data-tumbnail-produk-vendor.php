<?php foreach ($kategori_service as $kategori) : ?>
    <div class="content-vendors">
        <div class="vendor-title">
            <div class="row">
                <div class="col-lg-8">
                    <h2><?= $kategori['nama_kategori']; ?> di Indonesia</h2>
                    <span>Lihat Rekomendasi dengan semua budget</span><a href="" class="mobile-v float-right"><i class="fas fa-ellipsis-h"></i></a>
                </div>
                <div class="col-lg-4">
                    <a href="" class="lihat-semua float-right">Lihat semua <?= $kategori['nama_kategori']; ?> di Indonesia</a>
                </div>
            </div>
        </div>
        <div class="owl-carousel owl-theme vendor-indonesia-slider">
            <?php
            $this->db->select('tb_data_lengkap_vendor.tumbnail_vendor, tb_data_lengkap_vendor.nama_bisnis, tb_data_lengkap_vendor.id_vendor, tb_data_lengkap_vendor.id_kategori_service');
            $this->db->where('id_kategori_service', $kategori['id']);
            $this->db->order_by('id_vendor', 'DESC');
            $data_tumbnail_vendor = $this->db->get('tb_data_lengkap_vendor')->result_array();
            foreach ($data_tumbnail_vendor as $tumbnail_vendor) :
            ?>
                <div class="item">
                    <a href="#" class="tumbnail-vendor" data-idvendor="<?= $tumbnail_vendor['id_vendor']; ?>">
                        <div class="card">
                            <img src="<?= base_url(); ?>assets/vendors/img/produk/<?= $tumbnail_vendor['tumbnail_vendor']; ?>" style="object-fit:cover;" class="img-vendor" alt="">
                            <div class="img-style">
                                <span><i class="fas fa-check-circle"></i> Weddingku</span>
                            </div>
                            <div class="card-body">
                                <div class="nama-vendor nama-vendor-d-v">
                                    <h4>
                                        <?php
                                        echo strlen($tumbnail_vendor['nama_bisnis']) > 24 ? substr($tumbnail_vendor['nama_bisnis'], 0, 24) . '...' : substr($tumbnail_vendor['nama_bisnis'], 0, 24);
                                        ?>
                                    </h4>
                                </div>
                                <div class="nama-vendor nama-vendor-m-v">
                                    <h4>
                                        <?php
                                        echo strlen($tumbnail_vendor['nama_bisnis']) > 16 ? substr($tumbnail_vendor['nama_bisnis'], 0, 16) . '...' : substr($tumbnail_vendor['nama_bisnis'], 0, 16);
                                        ?>
                                    </h4>
                                </div>
                                <div class="rating-star">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
<?php endforeach; ?>

<script>
    $(".tumbnail-vendor").click(function() {
        window.open("<?= base_url(); ?>ui/vendors/profile_vendor/" + $(this).data("idvendor"));
    });

    // owl carousel
    $('#vendor-indonesia .owl-carousel').owlCarousel({
        loop: false,
        margin: 10,
        nav: true,
        dots: false,
        responsive: {
            0: {
                items: 2,
                nav: false,
                margin: 15
            },
            600: {
                items: 3
            },
            1000: {
                items: 4,
            }
        }
    });
</script>