<style>
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
</style>
<section class="section-promo">
    <section id="promo-paket">
        <div class="owl-carousel owl-theme promo-paket">
            <div class="item">

            </div>
        </div>
    </section>
    <div class="promo-container">
        <div class="promo-title">
            <h2>Promo & Diskon</h2>
            <p>Nikmati beragam promo & diskon berikut ini untuk membuat persiapan pernikahan Anda lebih mudah & hemat!</p>
        </div>
        <div class="find-kategori">
            <form action="">
                <div class="row">
                    <div class="col-1">
                        <div class="icon-find">
                            <i class="fab fa-buffer"></i>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="form-group kategori-option">
                            <select class="form-control" id="kategori">
                                <option value="Semua Kategori">Semua Kategori</option>
                                <?php
                                $icon_kategori = $this->db->get('tb_kategori_service')->result_array();
                                foreach ($icon_kategori as $icon) :
                                ?>
                                    <option value="<?= $icon['nama_kategori']; ?>"><?= $icon['nama_kategori']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="card-promo">
        </div>
        <script>
            $.ajax({
                url: "<?= base_url(); ?>ui/promo/load_all_promo",
                type: "get",
                dataType: "html",
                beforeSend: function() {
                    const html = '<div class="loading overlay"><img src="<?= base_url(); ?>assets/vendors/img/loader.gif" alt=""></div>';
                    $(".load").html(html);
                },
                success: function(data) {
                    $(".card-promo").html(data);
                    $(".loading").fadeOut('slow');
                }
            });

            $("#kategori").change(function() {
                if ($(this).val() == "Semua Kategori") {
                    $.ajax({
                        url: "<?= base_url(); ?>ui/promo/load_all_promo",
                        type: "get",
                        dataType: "html",
                        beforeSend: function() {
                            const html = '<div class="loading overlay"><img src="<?= base_url(); ?>assets/vendors/img/loader.gif" alt=""></div>';
                            $(".load").html(html);
                        },
                        success: function(data) {
                            $(".card-promo").html(data);
                            $(".loading").fadeOut('slow');
                        }
                    });
                } else {
                    $.ajax({
                        url: "<?= base_url(); ?>ui/promo/filter_kategori_promo",
                        type: "get",
                        dataType: "html",
                        data: {
                            kategori: $(this).val()
                        },
                        beforeSend: function() {
                            const html = '<div class="loading overlay"><img src="<?= base_url(); ?>assets/vendors/img/loader.gif" alt=""></div>';
                            $(".load").html(html);
                        },
                        success: function(data) {
                            $(".card-promo").html(data);
                            $(".loading").fadeOut('slow');
                        }
                    });
                }
            });
        </script>
    </div>
</section>
<div class="chat-fixed">
    <a href="" class="chat"><i class="fab fa-whatsapp"></i> chat</a>
</div>