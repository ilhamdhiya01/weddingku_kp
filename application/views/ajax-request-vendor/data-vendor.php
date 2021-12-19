<div class="row">
    <?php foreach ($data_vendor as $vendor) : ?>
        <div class="col-md-3">
            <div class="card">
                <div class="image-vendor">
                    <a href="#" class="profile" data-idvendor="<?= $vendor['id_vendor']; ?>"><img src="<?= base_url(); ?>assets/vendors/img/profile_vendor/<?= $vendor['foto_profile']; ?>" class="card-img-top" alt="..."></a>
                </div>
                <div class="img-style-vendor">
                    <span class="text-dark"><i class="fas fa-check-circle"></i> Weddingku</span>
                </div>
                <?php if ($vendor['flexible_vendor'] == 1) : ?>
                    <div class="flex-icon-vendor">
                        <img src="<?= base_url(); ?>assets/vendors/img/news/flex-icon.webp" alt="">
                    </div>
                <?php else : ?>
                <?php endif; ?>
                <div class="card-body name-vendor-text">
                    <a href="<?= base_url('ui/vendors/profile_vendor'); ?>">
                        <p class="card-text text-center">
                            <?php
                            echo strlen($vendor['nama_bisnis']) > 24 ? substr($vendor['nama_bisnis'], 0, 24) . '...' : substr($vendor['nama_bisnis'], 0, 24);
                            ?>
                        </p>
                    </a>
                    <div class="kategori-lokasi">
                        <span class="kategori">
                            <?php
                            echo strlen($vendor['nama_kategori']) > 28 ? substr($vendor['nama_kategori'], 0, 28) . '...' : substr($vendor['nama_kategori'], 0, 28);
                            ?>
                        </span>
                        <br>
                        <span class="lokasi"><?= $vendor['kota']; ?>, ID</span>
                        <div class="rating-star-vendor">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <small class="small-1"><i class="fas fa-hourglass-half"></i> Cicilan 0% hingga 24 bulan</small><br>
                    <small class="small-2"><i class="far fa-credit-card"></i> Opsi pembayaran lebih banyak</small><br>
                    <small class="small-3"><i class="fas fa-file-invoice"></i> Pembayaran aman & mudah</small>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
    <!-- mobile version -->
    <?php foreach ($data_vendor as $vendor) : ?>
        <div class="col-6">
            <div class="card">
                <div class="image-vendor">
                    <a href="<?= base_url('ui/vendors/profile_vendor'); ?>"><img src="<?= base_url(); ?>assets/vendors/img/profile_vendor/<?= $vendor['foto_profile']; ?>" class="card-img-top" alt="..."></a>
                </div>
                <div class="img-style-vendor">
                    <span class="text-dark"><i class="fas fa-check-circle"></i> Weddingku</span>
                </div>
                <?php if ($vendor['flexible_vendor'] == 1) : ?>
                    <div class="flex-icon-vendor">
                        <img src="<?= base_url(); ?>assets/vendors/img/news/flex-icon.webp" alt="">
                    </div>
                <?php else : ?>
                <?php endif; ?>
                <div class="card-body name-vendor-text">
                    <a href="<?= base_url('ui/vendors/profile_vendor'); ?>">
                        <p class="card-text text-center">
                            <?php
                            echo strlen($vendor['nama_bisnis']) > 18 ? substr($vendor['nama_bisnis'], 0, 18) . '...' : substr($vendor['nama_bisnis'], 0, 18);
                            ?>
                        </p>
                    </a>
                    <div class="kategori-lokasi">
                        <span class="kategori">
                            <?php
                            echo strlen($vendor['nama_kategori']) > 23 ? substr($vendor['nama_kategori'], 0, 23) . '...' : substr($vendor['nama_kategori'], 0, 23);
                            ?>
                        </span><br>
                        <span class="lokasi"><?= $vendor['kota']; ?>, ID</span>
                        <div class="rating-star-vendor">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <small class="small-1"><i class="fas fa-hourglass-half"></i> Cicilan 0% hingga 24 bulan</small><br>
                    <small class="small-2"><i class="far fa-credit-card"></i> Opsi pembayaran lebih banyak</small><br>
                    <small class="small-3"><i class="fas fa-file-invoice"></i> Pembayaran aman & mudah</small>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
<script>
    $(".profile").click(function() {
        window.open("<?= base_url(); ?>ui/vendors/profile_vendor/" + $(this).data('idvendor'));
    });
</script>