<div class="cari-vendor">
    <div class="search-option">
        <form action="">
            <div class="row form-cari">
                <div class="col-4">
                    <select class="option-cari kategori" id="kategori" style="outline:none;">
                        <option value="Semua Kategori" class="text-center">Semua Kategori</option>
                        <?php foreach ($semua_kategori as $kategori) : ?>
                            <option value="<?= $kategori['nama_kategori'] ?>"><?= $kategori['nama_kategori']; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <script>
                        $(".kategori").change(function() {
                            $("#filter-kategori").val($(this).val());
                            let kategori = $("#filter-kategori").val()
                            let kota = $("#filter-kota").val()
                            let harga = $("#filter-harga").val();

                            if (kategori == "Semua Kategori") {
                                $.ajax({
                                    url: "<?= base_url(); ?>ui/vendors/load_data_vendor",
                                    type: "get",
                                    success: function(data) {
                                        $("#semua-kategori").html(kategori);
                                        $(".card-vendor").html(data);
                                        $(".loading").fadeOut('slow');
                                        // console.log(data);
                                    }
                                });
                            } else {
                                $.ajax({
                                    url: "<?= base_url(); ?>ui/vendors/cari_kategori",
                                    type: "get",
                                    data: {
                                        kategori: kategori,
                                        kota: kota,
                                        harga: harga
                                    },
                                    dataType: "html",
                                    beforeSend: function() {
                                        const html = '<div class="loading overlay"><img src="<?= base_url(); ?>assets/vendors/img/loader.gif" alt=""></div>';
                                        $(".load").html(html);
                                    },
                                    success: function(data) {
                                        $("#semua-kategori").html(kategori);
                                        $(".card-vendor").html(data);
                                        $(".loading").fadeOut('slow');
                                    }
                                });
                            }
                        });
                    </script>
                </div>
                <div class="col-4">
                    <select class="option-cari kota" style="outline:none;">
                        <option value="Semua Kota" class="text-center">Semua Kota</option>
                        <?php foreach ($semua_kota as $kota) :
                            $nama_kota = strtolower($kota['city_name']);
                        ?>
                            <option value="<?= $kota['city_name'] ?>"><?= ucwords($nama_kota); ?></option>
                        <?php endforeach; ?>
                    </select>
                    <script>
                        $(".kota").change(function() {
                            $("#filter-kota").val($(this).val());
                            let kategori = $("#filter-kategori").val()
                            let kota = $("#filter-kota").val()
                            let harga = $("#filter-harga").val();

                            if (kota == "Semua Kota") {
                                $.ajax({
                                    url: "<?= base_url(); ?>ui/vendors/load_data_vendor",
                                    type: "get",
                                    success: function(data) {
                                        $("#semua-kategori").html(kategori);
                                        $(".card-vendor").html(data);
                                        $(".loading").fadeOut('slow');
                                        // console.log(data);
                                    }
                                });
                            } else {
                                $.ajax({
                                    url: "<?= base_url(); ?>ui/vendors/cari_kota",
                                    type: "get",
                                    data: {
                                        kota: kota,
                                        kategori: kategori,
                                        harga: harga
                                    },
                                    dataType: "html",
                                    beforeSend: function() {
                                        const html = '<div class="loading overlay"><img src="<?= base_url(); ?>assets/vendors/img/loader.gif" alt=""></div>';
                                        $(".load").html(html);
                                    },
                                    success: function(data) {
                                        $("#semua-kota").html(kota);
                                        $(".card-vendor").html(data);
                                        $(".loading").fadeOut('slow');
                                    }
                                });
                            }
                        });
                    </script>
                </div>
                <div class="col-4">
                    <select class="option-cari harga" style="outline:none;">
                        <option class="text-center">Semua Harga</option>
                        <option value="$">$</option>
                        <option value="$$">$$</option>
                        <option value="$$$">$$$</option>
                    </select>
                    <script>
                        $(".harga").change(function() {
                            $("#filter-harga").val($(this).val());
                            let kategori = $("#filter-kategori").val()
                            let kota = $("#filter-kota").val()
                            let harga = $("#filter-harga").val();

                            if (kota == "Semua Harga") {
                                $.ajax({
                                    url: "<?= base_url(); ?>ui/vendors/load_data_vendor",
                                    type: "get",
                                    success: function(data) {
                                        $("#semua-kategori").html(kategori);
                                        $(".card-vendor").html(data);
                                        $(".loading").fadeOut('slow');
                                        // console.log(data);
                                    }
                                });
                            } else {
                                $.ajax({
                                    url: "<?= base_url(); ?>ui/vendors/cari_harga",
                                    type: "get",
                                    data: {
                                        kota: kota,
                                        kategori: kategori,
                                        harga: harga
                                    },
                                    dataType: "html",
                                    beforeSend: function() {
                                        const html = '<div class="loading overlay"><img src="<?= base_url(); ?>assets/vendors/img/loader.gif" alt=""></div>';
                                        $(".load").html(html);
                                    },
                                    success: function(data) {
                                        $("#semua-kota").html(kota);
                                        $(".card-vendor").html(data);
                                        $(".loading").fadeOut('slow');
                                    }
                                });
                            }
                        });
                    </script>
                </div>
                <!-- <div class="col-3">
                    <div class="btn-cari">
                        <a href="" id="cari">Cari Vendor</a>
                    </div>
                </div> -->
                <input type="hidden" id="filter-kategori" value="">
                <input type="hidden" id="filter-kota" value="">
                <input type="hidden" id="filter-harga" value="">
            </div>
        </form>
    </div>
</div>
<!-- Daftar vendor -->
<div class="daftar-vendor">
    <div class="container">
        <div class="daftar-vendor">
            <a href="">Home</a>
            <span class="span-1">></span>
            <span class="span-2">Daftar Vendor</span>
        </div>
    </div>
</div>
<style>
    .daftar-vendor a,
    .span-1,
    .span-2 {
        display: inline-block;
        font-size: 14px;
    }

    .daftar-vendor a {
        color: #EC9090;
    }

    .only-flexi-wrapper {
        display: flex;
        padding-bottom: 10px;
    }

    .only-flexi-1 {
        flex: 0 0 300px;
    }

    .only-flexi-2 {
        flex: 1;
        border: 1px solid rgba(0, 0, 0, 0.2);
        border-radius: 5px;
        /* padding: 8px 8px; */
    }

    .only-flexi-3 {
        flex: 0 0 300px;
    }

    .box-flexi {
        padding: 8px 8px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .box-flexi h4 {
        font-size: 14px;
        color: #555555;
    }

    .box-flexi .flex {
        margin-top: 5px;
    }
</style>
<!-- akhir -->

<!-- Card vendor -->
<section class="section-card-vendor">
    <div class="content-vendor container">
        <div class="title-vendor">
            <span>Menampilkan Hasil Untuk <b id="semua-kategori"></b> di <b id="semua-kota"></b>
        </div>
        <div class="only-flexi-wrapper">
            <div class="only-flexi-1"></div>
            <div class="only-flexi-2">
                <div class="box-flexi">
                    <div class="flex">
                        <h4>Hanya menampilkan vendor Flexi Reschedule</h4>
                    </div>
                    <div class="flex">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch1">
                            <label class="custom-control-label" for="customSwitch1"></label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="only-flexi-3"></div>
        </div>
        <div class="card-vendor">
        </div>
    </div>
</section>

<!-- / -->
<div class="chat-fixed">
    <a href="" class="chat"><i class="fab fa-whatsapp"></i> chat</a>
</div>

<script>
    $(".custom-control-input").click(function() {
        if (this.checked) {
            $.ajax({
                url: "<?= base_url(); ?>ui/vendors/vendor_flexible",
                type: "get",
                dataType: "html",
                beforeSend: function() {
                    const html = '<div class="loading overlay"><img src="<?= base_url(); ?>assets/vendors/img/loader.gif" alt=""></div>';
                    $(".load").html(html);
                },
                success: function(data) {
                    $(".card-vendor").html(data);
                    $(".loading").fadeOut('slow');
                }
            });
        } else {
            $.ajax({
                url: "<?= base_url(); ?>ui/vendors/load_data_vendor",
                type: "get",
                beforeSend: function() {
                    const html = '<div class="loading overlay"><img src="<?= base_url(); ?>assets/vendors/img/loader.gif" alt=""></div>';
                    $(".load").html(html);
                },
                success: function(data) {
                    $(".card-vendor").html(data);
                    $(".loading").fadeOut('slow');
                    // console.log(data);
                }
            });
        }
    });
    // load data vendor
    $(document).ready(function() {
        $("#semua-kategori").html("Semua Kategori");
        $("#semua-kota").html("Semua Kota");
        $.ajax({
            url: "<?= base_url(); ?>ui/vendors/load_data_vendor",
            type: "get",
            success: function(data) {
                $(".card-vendor").html(data);
                // console.log(data);
            }
        });
    });
</script>