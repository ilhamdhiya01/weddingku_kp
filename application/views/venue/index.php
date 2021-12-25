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

    #active-sub {
        background: linear-gradient(to right, #e46d6b, #daa7a5);
        color: #FFFFFF !important;
    }
</style>
<div class="daftar-venue">
    <div class="container-venue">
        <div class="text-daftar-venue">
            <a href="">Home</a>
            <span class="span-1">></span>
            <span class="span-2">Venue Deals</span>
        </div>
    </div>
</div>
<section class="venue">
    <div class="venue-title">
        <h2>Venue <a href="" data-toggle="modal" id="store-venue" data-target="#venue"><i class="fas fa-pencil-alt"></i></a></h2>
    </div>
    <section id="jenis-venue" class="jenis-venue">
        <div class="owl-carousel owl-theme">
            <div class="item">
                <div class="btn-venue text-center" id="active-sub">
                    Semua
                </div>
            </div>
            <?php
            $this->db->select('sub_kategori, tb_kategori_service.nama_kategori');
            $this->db->join('tb_kategori_service', 'tb_sub_kategori.id_kategori_service = tb_kategori_service.id');
            // $this->db->order_by('tb_sub_kategori.id','DESC');
            $this->db->where('id_kategori_service', 16);
            $data = $this->db->get('tb_sub_kategori')->result_array();
            foreach ($data as $sub_kategori) :
            ?>
                <div class="item">
                    <div class="btn-venue text-center" data-subkategori="<?= $sub_kategori['sub_kategori']; ?>">
                        <?= $sub_kategori['sub_kategori']; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
    <div class="card-promo card-venue">
    </div>
</section>
<div class="chat-fixed">
    <a href="" class="chat"><i class="fab fa-whatsapp"></i> chat</a>
</div>
<script>
    $.ajax({
        url: "<?= base_url(); ?>ui/store/data_venue",
        type: "get",
        dataType: "html",
        beforeSend: function() {
            const html = '<div class="loading overlay"><img src="<?= base_url(); ?>assets/vendors/img/loader.gif" alt=""></div>';
            $(".load").html(html);
        },
        success: function(data) {
            $(".card-venue").html(data)
            $(".loading").fadeOut('slow');
        }
    });

    const active = document.querySelectorAll(".btn-venue");

    $(active).css("cursor", "pointer");

    $(active[0]).click(function() {
        $(this).attr("id", "active-sub");
        active[1].removeAttribute("id");
        active[2].removeAttribute("id");
        active[3].removeAttribute("id");
        active[4].removeAttribute("id");

        $.ajax({
            url: "<?= base_url(); ?>ui/store/data_venue",
            type: "get",
            dataType: "html",
            beforeSend: function() {
                const html = '<div class="loading overlay"><img src="<?= base_url(); ?>assets/vendors/img/loader.gif" alt=""></div>';
                $(".load").html(html);
            },
            success: function(data) {
                $(".card-venue").html(data)
                $(".loading").fadeOut('slow');
            }
        });
    });

    $(active[1]).click(function() {
        $(this).attr("id", "active-sub");
        active[0].removeAttribute("id");
        active[2].removeAttribute("id");
        active[3].removeAttribute("id");
        active[4].removeAttribute("id");

        $.ajax({
            url: "<?= base_url(); ?>ui/store/filter_sub_kategori",
            type: "get",
            dataType: "html",
            data: {
                sub_kategori: $(this).data("subkategori")
            },
            beforeSend: function() {
                const html = '<div class="loading overlay"><img src="<?= base_url(); ?>assets/vendors/img/loader.gif" alt=""></div>';
                $(".load").html(html);
            },
            success: function(data) {
                $(".card-venue").html(data)
                $(".loading").fadeOut('slow');
            }
        });
    });

    $(active[2]).click(function() {
        $(this).attr("id", "active-sub");
        active[0].removeAttribute("id");
        active[3].removeAttribute("id");
        active[1].removeAttribute("id");
        active[4].removeAttribute("id");

        $.ajax({
            url: "<?= base_url(); ?>ui/store/filter_sub_kategori",
            type: "get",
            dataType: "html",
            data: {
                sub_kategori: $(this).data("subkategori")
            },
            beforeSend: function() {
                const html = '<div class="loading overlay"><img src="<?= base_url(); ?>assets/vendors/img/loader.gif" alt=""></div>';
                $(".load").html(html);
            },
            success: function(data) {
                $(".card-venue").html(data)
                $(".loading").fadeOut('slow');
            }
        });
    });

    $(active[3]).click(function() {
        $(this).attr("id", "active-sub");
        active[0].removeAttribute("id");
        active[1].removeAttribute("id");
        active[2].removeAttribute("id");
        active[4].removeAttribute("id");

        $.ajax({
            url: "<?= base_url(); ?>ui/store/filter_sub_kategori",
            type: "get",
            dataType: "html",
            data: {
                sub_kategori: $(this).data("subkategori")
            },
            beforeSend: function() {
                const html = '<div class="loading overlay"><img src="<?= base_url(); ?>assets/vendors/img/loader.gif" alt=""></div>';
                $(".load").html(html);
            },
            success: function(data) {
                $(".card-venue").html(data)
                $(".loading").fadeOut('slow');
            }
        });
    });

    $(active[4]).click(function() {
        $(this).attr("id", "active-sub");
        active[0].removeAttribute("id");
        active[1].removeAttribute("id");
        active[2].removeAttribute("id");
        active[3].removeAttribute("id");

        $.ajax({
            url: "<?= base_url(); ?>ui/store/filter_sub_kategori",
            type: "get",
            dataType: "html",
            data: {
                sub_kategori: $(this).data("subkategori")
            },
            beforeSend: function() {
                const html = '<div class="loading overlay"><img src="<?= base_url(); ?>assets/vendors/img/loader.gif" alt=""></div>';
                $(".load").html(html);
            },
            success: function(data) {
                $(".card-venue").html(data)
                $(".loading").fadeOut('slow');
            }
        });
    });
</script>