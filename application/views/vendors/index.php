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
                                    data: {
                                        kategori: kategori,
                                        kota: kota
                                    },
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
                                        harga : harga
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
                        <?php foreach ($semua_kota as $kota) : ?>
                            <option value="<?= $kota['city_name'] ?>"><?= $kota['city_name'] ?></option>
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
                                    data: {
                                        kota: kota,
                                        kategori: kategori
                                    },
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
                                    data: {
                                        kota: kota,
                                        kategori: kategori
                                    },
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
        <div class="text-daftar-vendor">
            <a href="">Home</a>
            <span class="span-1">></span>
            <span class="span-2">Daftar Vendor</span>
        </div>
    </div>
</div>
<!-- akhir -->

<!-- Card vendor -->
<section class="section-card-vendor">
    <div class="content-vendor container">
        <div class="title-vendor">
            <span>Menampilkan Hasil Untuk <b id="semua-kategori"></b> di <b id="semua-kota"></b>, <b>Semua Harga</b>.</span>
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