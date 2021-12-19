<div class="owl-carousel owl-theme">
    <?php foreach ($vendor_flexible as $flexible) : ?>
        <div class="item">
            <div class="card bg-transparent">
                <img src="<?= base_url(); ?>assets/vendors/img/produk/<?= $flexible['tumbnail_vendor']; ?>" style="object-fit:cover;" class="img-vendor" alt="">
                <div class="img-style">
                    <span><i class="fas fa-check-circle"></i> Weddingku</span>
                </div>
                <div class="flex-icon">
                    <img src="<?= base_url(); ?>assets/vendors/img/news/flex-icon.webp" alt="">
                </div>
                <div class="card-body-desktop">
                    <div class="nama-vendor nama-vendor-d-v">
                        <h4>
                            <?php
                            echo strlen($flexible['nama_bisnis']) > 26 ? substr($flexible['nama_bisnis'], 0, 26) . '...' : substr($flexible['nama_bisnis'], 0, 26);
                            ?>
                        </h4>
                    </div>
                    <div class="nama-vendor nama-vendor-m-v">
                        <h4>
                            <?php
                            echo strlen($flexible['nama_bisnis']) > 20 ? substr($flexible['nama_bisnis'], 0, 20) . '...' : substr($flexible['nama_bisnis'], 0, 20);
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
        </div>
    <?php endforeach; ?>
</div>
<script>
    $('#flexsible .owl-carousel').owlCarousel({
        loop: false,
        margin: 20,
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