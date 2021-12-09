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
            width: 15%;
            height: 100px;
        }

        .box-filter {
            position: relative;
            top: 25px;
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
            border-radius: 8px;
            height: 45px;
            width: 87%;
            padding: 5px 10px;
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
            right: 15px;
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
    }
</style>

<section class="show-all-produk">
    <h5 class="show-all-title">Produk dari <?= $nama_vendor['nama_bisnis']; ?></h5>
    <div class="filter-wrapper">
        <div class="filter">
            <div class="filter-left">
                <div class="box-filter">
                    <i class="fas fa-percent"></i>
                    <label class="deals">Deals</label>
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="customSwitch1">
                        <label class="custom-control-label" for="customSwitch1"></label>
                    </div>
                </div>
            </div>
        </div>
        <div class="filter">
            <div class="filter-right">
                <div class="box-filter">
                    <i class="fas fa-sort-amount-up-alt"></i>
                    <label class="deals">Terbaru</label>
                    <i class="fas fa-chevron-down"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="card-promo show-all-produk-vendor pt-3">
    </div>
    <script>
        $("#title").html("<?= $nama_vendor['nama_bisnis']; ?> | Semua produk");
        const id_vendor = "<?= $id_vendor; ?>";
        $.ajax({
            url: "<?= base_url(); ?>ui/produk/show_all_produk_vendor",
            type: "get",
            data: {
                id_vendor: id_vendor
            },
            success: function(data) {
                $(".show-all-produk-vendor").html(data);
                console.log(data);
            }
        });
    </script>
</section>
<!-- <section class="section-promo"> -->
<!-- <div class="promo-container"> -->
<!-- </div> -->
<!-- </section> -->