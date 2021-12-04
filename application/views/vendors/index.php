<div class="cari-vendor">
    <div class="search-option">
        <form action="">
            <div class="row form-cari">
                <div class="col-3">
                    <select class="option-cari">
                        <option>Semua Kategori</option>
                        <option>Audi</option>
                        <option>BMW</option>
                        <option>Citroen</option>
                        <option>Fiat</option>
                        <option>Ford</option>
                        <option>Jaguar</option>
                        <option>Jeep</option>
                        <option>Lancia</option>
                    </select>
                </div>
                <div class="col-3">
                    <select class="option-cari">
                        <option>Semua Kota</option>
                        <option>Audi</option>
                        <option>BMW</option>
                        <option>Citroen</option>
                        <option>Fiat</option>
                        <option>Ford</option>
                        <option>Jaguar</option>
                        <option>Jeep</option>
                        <option>Lancia</option>
                    </select>
                </div>
                <div class="col-3">
                    <select class="option-cari">
                        <option>Semua Harga</option>
                        <option>Audi</option>
                        <option>BMW</option>
                        <option>Citroen</option>
                        <option>Fiat</option>
                        <option>Ford</option>
                        <option>Jaguar</option>
                        <option>Jeep</option>
                        <option>Lancia</option>
                        <option>Semua Kategori</option>
                        <option>Audi</option>
                        <option>BMW</option>
                        <option>Citroen</option>
                        <option>Fiat</option>
                        <option>Ford</option>
                        <option>Jaguar</option>
                        <option>Jeep</option>
                        <option>Lancia</option>
                        <option>Semua Kategori</option>
                        <option>Audi</option>
                        <option>BMW</option>
                        <option>Citroen</option>
                        <option>Fiat</option>
                        <option>Ford</option>
                        <option>Jaguar</option>
                        <option>Jeep</option>
                        <option>Lancia</option>
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
            <span>Menampilkan Hasil Untuk <b>Semua Kategori</b> di <b>Semua Kota</b>, <b>Semua Harga</b>.</span>
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