<div class="cari-vendor">
    <div class="search-option">
        <form action="">
            <div class="row form-cari">
                <div class="col-3">
                    <select class="option-cari">
                        <option>Semua Kategori</option>
                    </select>
                </div>
                <div class="col-3">
                    <select class="option-cari">
                        <option>Semua Kota</option>
                    </select>
                </div>
                <div class="col-3">
                    <select class="option-cari">
                        <option>Semua Harga</option>
                    </select>
                </div>
                <div class="col-3">
                    <div class="btn-cari">
                        <a href="">Cari Vendor</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<section class="section-profile-vendor">
    <div class="container">
        <div class="top-menu">
            <div class="container-paket">
                <div class="text-top-menu">
                    <a href="">Home</a>
                    <span class="span-1">></span>
                    <span class="span-2">Profile Vendor</span>
                </div>
            </div>
        </div>
        <div class="card-profile-vendor">
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-right-1">
                            <!-- img dan name vendor -->
                            <div class="row">
                                <div class="col-3">
                                    <img src="<?= base_url(); ?>assets/vendors/img/profile_vendor/<?= $data_vendor['foto_profile']; ?>" class="img-vendor" alt="...">
                                </div>
                                <div class="col-9 mt-2">
                                    <span class="nama-vendor"><?= $data_vendor['nama_bisnis']; ?></span>
                                </div>
                            </div>
                            <!-- / -->
                            <!-- kategori dan kota -->
                            <div class="row kategori-kota">
                                <div class="col-sm-12">
                                    <span class="kategori-vendor"><?= $data_vendor['nama_kategori']; ?></span>
                                </div>
                                <div class="col-sm-12">
                                    <span class="kota"><?= $data_vendor['kota']; ?> - ID</span>
                                </div>
                            </div>
                            <!-- / -->
                            <!-- rating start -->
                            <div class="rating-star-profile">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="text-dark">5/5</span>
                            </div>
                            <!-- / -->
                        </div>
                        <div class="card-right-2">
                            <div class="chat">
                                <a href="<?= 'https://wa.me/' . '62' . substr($data_vendor['no_wa_bisnis'], 1); ?>" class="chat-vendor">
                                    <div class="chat-vendor">
                                        <i class="fab fa-whatsapp"></i> <span>Chat Vendor</span>
                                    </div>
                                </a>
                            </div>
                            <div class="price">
                                <a href="#" class="pricelist">
                                    <div class="price-list">
                                        <i class="fas fa-tags"></i> <span>Pricelist</span>
                                    </div>
                                </a>
                                <script>
                                    $(".pricelist").click(function(e) {
                                        $("#menu-harga-d-v").addClass("active").attr("style", "color:#EBA1A1;");
                                        $("#all-produk").removeClass("active").removeAttr("style");
                                        $("#about-me-d-v").removeClass("active").removeAttr("style");
                                        $("#promo-produk").removeClass("active").removeAttr("style");

                                        $.ajax({
                                            url: "<?= base_url(); ?>ui/vendors/cek_harga_produk",
                                            type: "get",
                                            data: {
                                                id_vendor: id_vendor,
                                                nama_kategori: "<?= $data_vendor['nama_kategori']; ?>"
                                            },
                                            success: function(data) {
                                                $("#show-data").html(data);
                                            }
                                        });
                                        e.preventDefault();
                                    });
                                </script>
                            </div>
                        </div>
                        <div class="card-right-3">
                            <div class="website">
                                <div class="row">
                                    <div class="col-2">
                                        <i class="fas fa-desktop"></i>
                                    </div>
                                    <div class="col-10">
                                        <a href="" class="desktop-v situs-web-vendor">
                                            <?php
                                            echo strlen($data_vendor['situs_website']) > 26 ? substr($data_vendor['situs_website'], 0, 26) . '...' : substr($data_vendor['situs_website'], 0, 28);
                                            ?>
                                        </a>
                                        <a href="" class="mobile-v">
                                            <?php
                                            $website = "http://www.facebook.com/ilhamDhiyaUlhaq";
                                            echo $website;
                                            ?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="email">
                                <div class="row">
                                    <div class="col-2">
                                        <i class="far fa-envelope"></i>
                                    </div>
                                    <div class="col-10">
                                        <span>
                                            <?php
                                            echo strlen($data_vendor['email']) > 26 ? substr($data_vendor['email'], 0, 26) . '...' : substr($data_vendor['email'], 0, 26);
                                            ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="phone">
                                <div class="row">
                                    <div class="col-2">
                                        <i class="fas fa-phone-alt"></i>
                                    </div>
                                    <div class="col-10">
                                        <span><?= $data_vendor['no_tlp_bisnis']; ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="social-media">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-2">
                                                <i class="fas fa-user-friends"></i>
                                            </div>
                                            <div class="col-10">
                                                <span><b>Social Media</b></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="icon">
                                    <a href="<?= $data_vendor['facebook']; ?>" class="facebook-vendor"><i class="fab fa-facebook-square"></i></a>
                                    <a href="<?= $data_vendor['twitter']; ?>" class="twitter-vendor"><i class="fab fa-twitter-square"></i></a>
                                    <a href="<?= $data_vendor['instagram']; ?>" class="instagram-vendor"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-3 lokasi">
                        <div class="card-body">
                            <span>Lokasi Vendor</span>
                            <div class="google-map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.0382434928233!2d110.37401381407616!3d-7.004779670553886!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708ae24dfb7ce5%3A0xb0af18ad2051af96!2sPT%20Jasa%20Marga%20(Persero)%20Tbk%20Cabang%20Semarang!5e0!3m2!1sid!2sid!4v1624970283353!5m2!1sid!2sid" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <!-- flex card -->
                    <?php
                    if ($data_vendor['flexible_vendor'] == 1) :
                    ?>
                        <div class="card card-left mb-3">
                            <div class="card-left-1">
                                <img src="<?= base_url(); ?>assets/vendors/img/news/new_flex_icon.png" class="vendor-flex" alt="">
                                <p>Vendor ini menyediakan fitur Flexi Reschedule. Hubungi sekarang untuk informasi lebih lanjut!</p>
                            </div>
                        </div>
                    <?php else : ?>
                    <?php endif; ?>
                    <!-- / -->
                    <!-- pembayaran -->
                    <div class="card mb-3">
                        <div class="card-left-2">
                            <div class="img-style-vendor">
                                <span><i class="fas fa-check-circle"></i> Weddingku</span>
                            </div>
                            <div class="pay desktop-v ">
                                <div class="icon-text">
                                    <span class="span-1"><i class="fas fa-hourglass-half"></i> Cicilan 0% hingga 24 bulan</span> <small>|</small> <span class="span-2"><i class="far fa-credit-card"></i> Opsi pembayaran lebih banyak</span> <small>|</small> <span class="span-3"><i class="fas fa-file-invoice"></i> Pembayaran aman & mudah</span>
                                </div>
                            </div>
                            <div class="pay mobile-v">
                                <div class="icon-text">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <span class="span-1"><i class="fas fa-hourglass-half"></i> Cicilan 0% hingga 24 bulan</span>
                                        </div>
                                        <div class="col-md-4">
                                            <span class="span-2"><i class="far fa-credit-card"></i> Opsi pembayaran lebih banyak</span>
                                        </div>
                                        <div class="col-md-4">
                                            <span class="span-3"><i class="fas fa-file-invoice"></i> Pembayaran aman & mudah
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- / -->
                    <!--  -->
                    <div class="card">
                        <div class="card-left-3">
                            <div class="top-menu desktop-v">
                                <div class="row justify-content-center">
                                    <div class="col-8">
                                        <div class="row">
                                            <div class="col-3">
                                                <a href="#" class="active" id="all-produk"><i class="fas fa-shopping-bag"></i> Produk (<?= count($total_produk); ?>)</a>
                                            </div>
                                            <script>
                                                $("#all-produk").addClass("active").attr("style", "color:#EBA1A1;");
                                                $("#all-produk").click(function(e) {
                                                    $(this).addClass("active").attr("style", "color:#EBA1A1;");
                                                    $("#menu-harga-d-v").removeClass("active").removeAttr("style");
                                                    $("#about-me-d-v").removeClass("active").removeAttr("style");
                                                    $("#promo-produk").removeClass("active").removeAttr("style");

                                                    $.ajax({
                                                        url: "<?= base_url(); ?>ui/produk/load_semua_produk",
                                                        type: "get",
                                                        data: {
                                                            id_vendor: id_vendor
                                                        },
                                                        success: function(data) {
                                                            $("#show-data").html(data);
                                                        }
                                                    });
                                                    e.preventDefault();
                                                });
                                            </script>
                                            <div class="col-3">
                                                <a href="" id="menu-harga-d-v" class="disabled"><i class="fas fa-tags"></i> Harga</a>
                                            </div>
                                            <script>
                                                $("#menu-harga-d-v").click(function(e) {
                                                    $(this).addClass("active").attr("style", "color:#EBA1A1;");
                                                    $("#all-produk").removeClass("active").removeAttr("style");
                                                    $("#about-me-d-v").removeClass("active").removeAttr("style");
                                                    $("#promo-produk").removeClass("active").removeAttr("style");

                                                    $.ajax({
                                                        url: "<?= base_url(); ?>ui/vendors/cek_harga_produk",
                                                        type: "get",
                                                        data: {
                                                            id_vendor: id_vendor,
                                                            nama_kategori: "<?= $data_vendor['nama_kategori']; ?>"
                                                        },
                                                        success: function(data) {
                                                            $("#show-data").html(data);
                                                        }
                                                    });
                                                    e.preventDefault();
                                                });
                                            </script>
                                            <div class="col-3">
                                                <a href="" id="about-me-d-v"><i class="fas fa-address-card"></i> Tentang Kami</a>
                                            </div>
                                            <script>
                                                $("#about-me-d-v").click(function(e) {
                                                    $(this).addClass("active").attr("style", "color:#EBA1A1;");
                                                    $("#menu-harga-d-v").removeClass("active").removeAttr("style");
                                                    $("#all-produk").removeClass("active").removeAttr("style");
                                                    $("#promo-produk").removeClass("active").removeAttr("style");

                                                    $.ajax({
                                                        url: "<?= base_url(); ?>ui/vendors/tentang_kami",
                                                        type: "get",
                                                        data: {
                                                            id_vendor: id_vendor
                                                        },
                                                        success: function(data) {
                                                            $("#show-data").html(data);
                                                        }
                                                    });
                                                    e.preventDefault();
                                                });
                                            </script>
                                            <div class="col-3">
                                                <a href="#" id="promo-produk"><i class="fas fa-percent"></i> Promo</a>
                                            </div>
                                            <script>
                                                $("#promo-produk").click(function(e) {
                                                    $(this).addClass("active").attr("style", "color:#EBA1A1;");
                                                    $("#menu-harga-d-v").removeClass("active").removeAttr("style");
                                                    $("#about-me-d-v").removeClass("active").removeAttr("style");
                                                    $("#all-produk").removeClass("active").removeAttr("style");

                                                    $.ajax({
                                                        url: "<?= base_url(); ?>ui/produk/menu_promo_produk",
                                                        type: "get",
                                                        data: {
                                                            id_vendor: id_vendor
                                                        },
                                                        success: function(data) {
                                                            $("#show-data").html(data);
                                                        }
                                                    });
                                                    e.preventDefault();
                                                });
                                            </script>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="top-menu mobile-v">
                                <div class="row justify-content-center">
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-3">
                                                <a href=""><i class="fas fa-shopping-bag"></i> Produk (21)</a>
                                            </div>
                                            <div class="col-3">
                                                <a href="" id="menu-harga" class="disabled"><i class="fas fa-tags"></i> Harga</a>
                                            </div>
                                            <div class="col-3">
                                                <a href="" id="menu-tentang-kami"><i class="fas fa-address-card"></i> Tentang Kami</a>
                                            </div>
                                            <div class="col-3">
                                                <a href=""><i class="fas fa-percent"></i> Promo</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body" id="show-data">
                        </div>
                        <script>
                            const id_vendor = "<?= $data_vendor['id_vendor']; ?>"
                            $.ajax({
                                url: "<?= base_url(); ?>ui/produk/load_semua_produk",
                                type: "get",
                                data: {
                                    id_vendor: id_vendor
                                },
                                success: function(data) {
                                    $("#show-data").html(data);
                                }
                            });
                        </script>
                    </div>
                    <!-- / -->
                </div>
            </div>
        </div>
        <section class="vendor-serupa">
            <div class="vendor-serupa-title">
                <h4>Vendor Lain Yang Mungkin Anda Suka</h4>
            </div>
            <section id="vendor-serupa">
                <div class="owl-carousel owl-theme">
                    <?php
                    $this->db->select('foto_profile, nama_kategori, kota, nama_bisnis, id_vendor');
                    $this->db->join('tb_kategori_service', 'tb_data_lengkap_vendor.id_kategori_service = tb_kategori_service.id');
                    $this->db->where('id_vendor !=', $data_vendor['id_vendor']);
                    $this->db->where('id_kategori_service', $data_vendor['id_kategori_service']);
                    $result = $this->db->get('tb_data_lengkap_vendor')->result_array();
                    foreach ($result as $vendor_serupa) :
                    ?>
                        <div class="item">
                            <div class="card card-vendor-serupa" data-idvendor="<?= $vendor_serupa['id_vendor']; ?>">
                                <div class="row">
                                    <div class="col-2">
                                        <img src="<?= base_url(); ?>assets/vendors/img/profile_vendor/<?= $vendor_serupa['foto_profile']; ?>" class="img-vendor-serupa" alt="...">
                                    </div>
                                    <div class="col-10">
                                        <div class="info-vendor">
                                            <div class="nama-vendor">
                                                <h5><?= $vendor_serupa['nama_bisnis']; ?></h5>
                                            </div>
                                            <div class="kategori">
                                                <span><?= $vendor_serupa['nama_kategori']; ?> - <?= $vendor_serupa['kota']; ?>.ID</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </section>
        </section>
    </div>
</section>
<script>
    $("#title").html("<?= $data_vendor['nama_bisnis']; ?>")
    $(".situs-web-vendor").click(function(e) {
        window.open("<?= $data_vendor['situs_website']; ?>");
        e.preventDefault();
    });
    $(".facebook-vendor").click(function(e) {
        window.open("<?= $data_vendor['facebook']; ?>");
        e.preventDefault();
    });
    $(".twitter-vendor").click(function(e) {
        window.open("<?= $data_vendor['twitter']; ?>");
        e.preventDefault();
    });
    $(".instagram-vendor").click(function(e) {
        window.open("<?= $data_vendor['instagram']; ?>");
        e.preventDefault();
    });
    $(".chat-vendor").click(function(e) {
        window.open("<?= 'https://wa.me/' . '62' . substr($data_vendor['no_wa_bisnis'], 1); ?>");
        e.preventDefault();
    });

    // about me mobile v
    $('#menu-tentang-kami').on('click', function(e) {
        $.ajax({
            type: 'GET',
            url: '<?php echo base_url(); ?>ui/vendors/menu_ajax',
            dataType: 'JSON',
            success: function(data) {
                let p = '';
                p +=
                    '<div class="row justify-content-center">' +
                    '<div class="col-8">' +
                    '<div class="row">' +
                    '<div class="col-md-12">' +
                    '<p class="harga">' + data.about + '</p>' +
                    '</div>' +
                    '</div>' +
                    '</div>' +
                    '</div>';
                $('#show-data').html(p);
            }
        });
        e.preventDefault();
    });

    $(".card-vendor-serupa").css("cursor", "pointer");
    $(".card-vendor-serupa").click(function() {
        window.open("<?= base_url(); ?>ui/vendors/profile_vendor/" + $(this).data("idvendor"));
    });
</script>