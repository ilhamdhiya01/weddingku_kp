<style>
    .produk-lain-vendor-ini .flex-icon {
        background-color: #ffffff;
        position: absolute;
        top: 10px;
        right: 10px;
        padding: 5px 5px;
        border-radius: 6px;
    }
</style>
<section class="produk-info">
    <div class="smooth-slider mt-4">
        <div class="container">
            <div class="row">
                <div class="col-6 smooth-d-v">
                    <div class="row">
                        <div class="col-2">
                            <a href="#overview" class="page-scroll">Overview</a>
                        </div>
                        <div class="col-2 text-center">
                            <a href="#detail" class="page-scroll">Detail</a>
                        </div>
                        <div class="col-2 text-center">
                            <a href="#lokasi" class="page-scroll">Lokasi</a>
                        </div>
                        <div class="col-5">
                            <a href="#syarat" class="page-scroll">Syarat & Ketentuan</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 smooth-m-v">
                    <div class="menu-link">
                        <ul>
                            <li><a href="#overview" class="mobile-scroll">Overview</a></li>
                            <li><a href="#detail" class="mobile-scroll">Detail</a></li>
                            <li><a href="#lokasi" class="mobile-scroll">Lokasi</a></li>
                            <li><a href="#syarat" class="mobile-scroll">Syarat & Ketentuan</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="produk-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="logo-name-kategori" id="overview">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-2">
                                        <img style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;" src="<?= base_url(); ?>assets/vendors/img/profile_vendor/<?= $detail_produk['foto_profile']; ?>" alt="">
                                    </div>
                                    <div class="col-10">
                                        <h4>
                                            <?php
                                            echo strlen($detail_produk['nama_produk']) > 38 ? substr($detail_produk['nama_produk'], 0, 38) . '...' : substr($detail_produk['nama_produk'], 0, 38);
                                            ?>
                                        </h4>
                                        <p>by <span><?= $detail_produk['nama_bisnis']; ?></span> — <?= $detail_produk['nama_kategori']; ?></p>
                                        <span class="dikelola">Dikelola oleh Weddingku</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <section id="gambar-lain" class="gambar-lain">
                        <div class="owl-carousel owl-theme  thumbnail">
                            <?php
                            $this->db->select('gambar_produk');
                            $this->db->where('id_vendor', $detail_produk['id_vendor']);
                            $this->db->where('id_produk', $detail_produk['id_produk']);
                            $this->db->order_by('id_produk', 'DESC');
                            $gambar_lain = $this->db->get('tb_gambar_produk')->result_array();
                            foreach ($gambar_lain as $gambar) :
                            ?>
                                <a class="lightbox" href="<?= base_url(); ?>assets/vendors/img/gambar_produk/bridal/<?= $gambar['gambar_produk']; ?>" data-at-450="">
                                    <div class="item">
                                        <img src="<?= base_url(); ?>assets/vendors/img/gambar_produk/bridal/<?= $gambar['gambar_produk']; ?>"" class=" thumb img-fluid" alt="">
                                    </div>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    </section>
                    <div class="detail-produk">
                        <div class="detail-produk-inner">
                            <h4 id="detail">Detail</h4>
                            <p>
                                <?= $detail_produk['detail_produk']; ?>
                            </p>
                        </div>
                    </div>
                    <div class="selengkapnya">
                        <span id="btn-selengkapnya">Lihat Selengkapnya</span>
                    </div>
                    <div class="vendor" id="lokasi">
                        <div class="row">
                            <div class="col-8">
                                <div>
                                    <div class="row">
                                        <div class="col-2">
                                            <img style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;" src="<?= base_url(); ?>assets/vendors/img/profile_vendor/<?= $detail_produk['foto_profile']; ?>" alt="">
                                        </div>
                                        <div class="col-10">
                                            <h4><?= $detail_produk['nama_bisnis']; ?></h4>
                                            <span><?= $detail_produk['nama_kategori']; ?> - <?= $detail_produk['kota']; ?>.ID</span>
                                            <div class="rating-vendor">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <span>5/5</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 btn-d-v">
                                <div class="btn-show-vendor">
                                    <a href="#" class="btn btn-block btn-primary profile-vendor" data-idvendor="<?= $detail_produk['id_vendor']; ?>">Kunjungi Profil Vendor</a>
                                </div>
                                <script>
                                    $(".profile-vendor").click(function() {
                                        window.location.href = "<?= base_url(); ?>ui/vendors/profile_vendor/" + $(this).data('idvendor');
                                    });
                                </script>
                            </div>
                            <div class="col-md-12 btn-m-v">
                                <div class="btn-show-vendor">
                                    <a href="#" class="btn btn-block btn-primary profile-vendor" data-idvendor="<?= $detail_produk['id_vendor']; ?>">Kunjungi Profil Vendor</a>
                                </div>
                                <script>
                                    $(".profile-vendor").click(function() {
                                        window.location.href = "<?= base_url(); ?>ui/vendors/profile_vendor/" + $(this).data('idvendor');
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                    <div class="lokasi">
                        <h4>Lokasi : <?= $detail_produk['kota']; ?>, ID</h4>
                    </div>
                    <div class="syarat-ketentuan" id="syarat">
                        <div class="syarat-ketentuan-inner">
                            <h4>Syarat & Ketentuan</h4>
                            <p>
                                <?= $detail_produk['syarat_ketentuan']; ?>
                            </p>
                        </div>
                    </div>
                    <div class="selengkapnya">
                        <span id="btn-selengkapnya-syarat">Lihat Selengkapnya</span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="left-card-1">
                        <div class="card">
                            <span class="harga-title">Harga</span>
                            <div class="body">
                                <div class="row">
                                    <div class="col-md-11">
                                        <div class="row">
                                            <?php
                                            $diskon = $this->db->get_where('tb_diskon_produk', ['id_produk' => $detail_produk['id_produk']])->row_array();
                                            $nilai = 0;
                                            $kapasitas = 'ada';
                                            $jumlah = 1;
                                            if ($detail_produk['id_diskon'] != null) :
                                            ?>
                                                <div class="col-3">
                                                    <div class="promo-icon">
                                                        <span class="span-1">Hemat</span><br>
                                                        <span class="span-2"><?= $diskon['persentase_diskon']; ?>%</span>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                            <div class="col-9">
                                                <div class="harga">
                                                    <?php if ($detail_produk['id_diskon'] != null) : ?>
                                                        <span class="before-price"><?= format_idr($detail_produk['harga']); ?></span><br>
                                                        <span class="after-price"><?= format_idr($diskon['harga_setelah_diskon']); ?></span>
                                                    <?php else : ?>
                                                        <span class="after-price"><?= format_idr($detail_produk['harga']); ?></span>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="kapasitas mt-2">
                                            <span>Kapasitas</span>
                                            <h4>100 Pax</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php if ($detail_produk['flexible_vendor'] == 1) : ?>
                        <div class="left-card-2 mt-3">
                            <div class="card">
                                <div class="body">
                                    <img src="<?= base_url(); ?>assets/vendors/img/news/new_flex_icon.png" class="vendor-flex" alt="">
                                    <p>
                                        Anda dapat mengubah tanggal layanan (reschedule) menjadi tanggal lain yang tersedia di tahun 2020.
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                    <form action="" method="">
                        <div class="qty mt-3">
                            <div class="card">
                                <div class="row">
                                    <div class="col-7">
                                        <span>Jumlah</span>
                                    </div>
                                    <div class="col-5">
                                        <button id="dec">-</button>
                                        <input type="text" class="qtyinput" value="<?= $jumlah; ?>" readonly>
                                        <button id="inc">+</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tombol">
                            <div class="row">
                                <div class="col-6">
                                    <a href="" class="btn btn-block btn-primary chat"><i class="far fa-comment-dots"></i> Chat</a>
                                </div>
                                <div class="col-6">
                                    <a href="" class="btn btn-block btn-primary pesan">Pesan Sekarang</a>
                                </div>
                            </div>
                            <span>Chat untuk informasi lebih lanjut & kustomisasi produk</span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="produk-lain">
    <div class="container">
        <div class="produk-lain-title">
            <h4>Produk Lain oleh Vendor Ini</h4>
            <a href="" class="d-v">Lihat Semua</a>
            <a href="" class="m-v"><i class="fas fa-ellipsis-h"></i></a>
        </div>
        <section id="produk-lain-vendor-ini" class="produk-lain-vendor-ini">
            <div class="owl-carousel owl-theme">
                <?php
                $this->db->select('tb_produk.gambar_tumbnail, tb_produk.harga, tb_produk.id as id_produk, tb_produk.id_diskon, tb_produk.id_vendor, tb_produk.nama_produk, tb_kategori_service.nama_kategori, tb_data_lengkap_vendor.nama_bisnis, tb_data_lengkap_vendor.kota, flexible_vendor');
                $this->db->join('tb_data_lengkap_vendor', 'tb_produk.id_data_lengkap_vendor = tb_data_lengkap_vendor.id');
                $this->db->join('tb_kategori_service', 'tb_produk.id_kategori_service = tb_kategori_service.id');
                $this->db->where('tb_produk.id !=', $detail_produk['id_produk']);
                $this->db->where('tb_produk.id_vendor', $detail_produk['id_vendor']);
                $this->db->order_by('tb_produk.id', 'DESC');
                $produk_lain = $this->db->get('tb_produk')->result_array();
                foreach ($produk_lain as $produk) :
                ?>
                    <div class="item">
                        <div class="card card-produk-lain" data-idproduk="<?= $produk['id_produk']; ?>" style="box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;">
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
                                    <img style="width:90px; height:28px;" src="<?= base_url(); ?>assets/vendors/img/news/flex-icon.webp" alt="">
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
                                        <small class="before-price"><?= format_idr($produk['harga']); ?></small><br>
                                        <span class="after-price"><?= format_idr($diskon['harga_setelah_diskon']); ?></span>
                                    <?php else : ?>
                                        <span class="after-price"><?= format_idr($produk['harga']); ?></span>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
    </div>
</section>
<script>
    $(".card-produk-lain").css("cursor", "pointer");
    $(".card-produk-lain").click(function() {
        const id_produk = $(this).data("idproduk");
        window.location.href = "<?= base_url(); ?>ui/produk/detail_produk/" + id_produk;
    });
    // detail
    let detailProduk = $('.detail-produk');
    $('#btn-selengkapnya').click(function() {
        detailProduk.toggleClass('detail-produk-height');
        // alert('ok');
    });
    // syarat dan ketentuan
    let syaratKetentuan = $('.syarat-ketentuan');
    $('#btn-selengkapnya-syarat').click(function() {
        syaratKetentuan.toggleClass('syarat-ketentuan-height');
        // alert('ok');
    });
</script>