<style>
    /* mobile */
    @media (min-width: 576px) {}

    /* desktop */
    @media (min-width: 992px) {
        .show-all-produk {
            /* height: 100vh; */
            padding: 70px 70px;
            width: 100%;
        }

        .show-all-title {
            font-size: 25px;
            font-weight: bold;
        }

        .filter-wrapper {
            display: flex;
            justify-content: space-between;
        }

        .filter-wrapper .filter {
            width: 14%;
            height: 100px;
        }

        .box-filter {
            position: relative;
            top: 25px;
            box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.14) 0px 1px 3px 1px;
            border-radius: 8px;
            height: 45px;
            width: 87%;
            padding: 5px 10px;
        }

        .filter-right,
        .deals {
            cursor: pointer;
            font-size: 12px;
        }

        .filter {
            position: relative;
        }

        .fa-percent,
        .fa-chevron-down,
        .fa-sort-amount-up-alt,
        .deals {
            display: inline-block;
            margin-top: 8px;
            font-size: 13px;
        }

        .fa-chevron-down {
            display: inline-block;
            position: absolute;
            right: 14px;
            top: 9px;
        }

        .custom-switch {
            display: inline-block;
            position: absolute;
            right: 3px;
            top: 11px;
        }

        .promo-desktop-v .flex-icon {
            background-color: #ffffff;
            position: absolute;
            top: 10px;
            right: 10px;
            padding: 5px 5px;
            border-radius: 6px;
        }

        .promo-desktop-v .flex-icon img {
            width: 90px;
            height: 23px;
        }

        .dropdown-filter {
            position: absolute;
            right: 17px;
            width: 240px;
            height: 140px;
            /* margin-top: -35px; */
            top: 300px;
            transition: 0.5s;
            box-sizing: 0 5px 25px rgba(0, 0, 0, 0.1);
            border-radius: 7px;
            box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.14) 0px 1px 3px 1px;
            visibility: hidden;
            opacity: 0;
            z-index: 1;
            background: #ffffff;
        }

        .dropdown-filter.active {
            top: 320px;
            visibility: visible;
            opacity: 1;
        }

        .dropdown-filter ul li a {
            font-size: 13px;
            position: relative;
            color: black;
            text-decoration: none;
        }

        .dropdown-filter ul {
            width: 260px;
            position: relative;
            right: 30px;
            top: 8px;
        }

        .dropdown-filter ul li {
            list-style: none;
            padding: 8px;
            cursor: pointer;
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
        }

        .dropdown-filter ul li:first-child {
            border-top: 1px solid rgba(0, 0, 0, 0.1);
        }


        .dropdown-filter ul li:hover {
            background: #EBA1A1;
            display: block;
        }

        .dropdown-filter ul li i {
            font-size: 12px;
            color: #EB8B8D;
        }
    }
</style>
<section id="banner-promo" class="banner-promo">
    <div class="owl-carousel owl-theme">
        <?php for ($i = 1; $i <= 10; $i++) : ?>
            <div class="item">
                <a href=""><img src="<?= base_url(); ?>assets/vendors/img/news/<?= $i ?>.png" class="img-banner-promo" alt=""></a>
            </div>
        <?php endfor; ?>
    </div>
</section>
<section class="all-produk">
    <section id="store-all-produk" class="store-all-produk">
        <div class="container">
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <a href="" id="all" data-toggle="modal" data-target="#all-kategori">
                        <div class="card">
                            <img src="<?= base_url(); ?>assets/vendors/img/news/all.webp" alt="">
                            <span class="text-dark">Semua Kategori</span>
                        </div>
                    </a>
                </div>
                <?php
                $subkategori = [
                    'Aksesoris Pernikahan',
                    'Souvenir & Seserahan',
                    'Gaun & Pakaian Wanita',
                    'Bridal',
                    'Jas & Pakaian Pria',
                    'Wedding Palnning',
                    'Rias Rambut & Makeup',
                    'Fotografi',
                    'Dekorasi & Pencahayaan',
                    'Hiburan / Entertainment',
                    'Videografi',
                    'Makanan & Minuman',
                    'Undangan',
                    'Venue',
                    'Aksesoris Pria',
                    'Perhiasan',
                    'Bulan Madu',
                    'Perawatan & Kecantikan',
                    'Jasa Pernikahan',
                    'Paket Lengkap'
                ];

                for ($j = 0; $j < count($subkategori); $j++) :
                ?>
                    <div class="item">
                        <a href="">
                            <div class="card">
                                <img src="<?= base_url(); ?>assets/vendors/img/news/subkategori<?= $j; ?>.png" alt="">
                                <span class="text-dark"><?= $subkategori[$j]; ?></span>
                            </div>
                        </a>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </section>
    <div class="produk">
        <div class="filter-wrapper">
            <div class="filter">
            </div>
            <div class="filter">
                <div class="filter-right">
                    <div class="box-filter" onclick="">
                        <i class="fas fa-sort-amount-up-alt"></i>
                        <label class="deals label-filter">
                            Choice
                        </label>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="dropdown-filter hover">
            <ul>
                <li class="filter-choice" id="terbaru"><a href="">Terbaru</a><i class="fas float-right terbaru"></i></li>
                <li class="filter-choice" id="tertinggi-terendah"><a href="">Harga (Tertinggi - Terendah)</a><i class="fas float-right tertinggi-terendah"></i></li>
                <li class="filter-choice" id="terendah-tertinggi"><a href="">Harga (Terendah - Tertinggi)</a><i class="fas float-right terendah-tertinggi"></i></li>
            </ul>
        </div>
        <div class="row store-all">
        </div>
    </div>
</section>
<div class="chat-fixed">
    <a href="" class="chat"><i class="fab fa-whatsapp"></i> chat</a>
</div>

<script>
    $.ajax({
        url: "<?= base_url(); ?>ui/store/load_store_all_produk",
        type: "get",
        beforeSend: function() {
            const html = '<div class="loading overlay"><img src="<?= base_url(); ?>assets/vendors/img/loader.gif" alt=""></div>';
            $(".load").html(html);
        },
        success: function(data) {
            $(".store-all").html(data);
            $(".loading").fadeOut('slow');
        }
    });

    $(".filter-right").click(function() {
        $(".dropdown-filter").toggleClass('active');
    });

    $(".dropdown-filter").mouseleave(function() {
        $(this).removeClass('active');
    });

    $(".card-all-produk").css("cursor", "pointer");
    $(".card-all-produk").click(function() {
        const id_produk = $(this).data("idproduk");
        window.location.href = "<?= base_url(); ?>ui/produk/detail_produk/" + id_produk;
    });

    $("#terbaru").click(function(e) {
        $(".dropdown-filter").removeClass("active");
        $(".terbaru").addClass("fa-check");
        $(".tertinggi-terendah").removeClass("fa-check");
        $(".terendah-tertinggi").removeClass("fa-check");
        $(".label-filter").html("Terbaru")

        $.ajax({
            url: "<?= base_url(); ?>ui/store/filter_produk_terbaru",
            type: "get",
            beforeSend: function() {
                const html = '<div class="loading overlay"><img src="<?= base_url(); ?>assets/vendors/img/loader.gif" alt=""></div>';
                $(".load").html(html);
            },
            success: function(data) {
                $(".store-all").html(data);
                $(".loading").fadeOut('slow');
            }
        });
        e.preventDefault();
    });

    $("#tertinggi-terendah").click(function(e) {
        $(".dropdown-filter").removeClass("active");
        $(".tertinggi-terendah").addClass("fa-check");
        $(".terbaru").removeClass("fa-check");
        $(".terendah-tertinggi").removeClass("fa-check");
        $(".label-filter").html("<?php echo strlen("Harga (Tertinggi - Terendah)") > 14 ? substr("Harga (Tertinggi - Terendah)", 0, 14) . '...' : substr("Harga (Tertinggi - Terendah)", 0, 14); ?>");

        $.ajax({
            url: "<?= base_url(); ?>ui/store/filter_produk_tertinggi",
            type: "get",
            beforeSend: function() {
                const html = '<div class="loading overlay"><img src="<?= base_url(); ?>assets/vendors/img/loader.gif" alt=""></div>';
                $(".load").html(html);
            },
            success: function(data) {
                $(".store-all").html(data);
                $(".loading").fadeOut('slow');
            }
        });
        e.preventDefault();
    });

    $("#terendah-tertinggi").click(function(e) {
        $(".dropdown-filter").removeClass("active");
        $(".terbaru").removeClass("fa-check");
        $(".tertinggi-terendah").removeClass("fa-check");
        $(".terendah-tertinggi").addClass("fa-check");
        $(".label-filter").html("<?php echo strlen("Harga (Terendah - Tertinggi)") > 14 ? substr("Harga (Terendah - Tertinggi)", 0, 14) . '...' : substr("Harga (Terendah - Tertinggi)", 0, 14); ?>");

        $.ajax({
            url: "<?= base_url(); ?>ui/store/filter_produk_terendah",
            type: "get",
            beforeSend: function() {
                const html = '<div class="loading overlay"><img src="<?= base_url(); ?>assets/vendors/img/loader.gif" alt=""></div>';
                $(".load").html(html);
            },
            success: function(data) {
                $(".store-all").html(data);
                $(".loading").fadeOut('slow');
            }
        });
        e.preventDefault();
    });
</script>