<section class="produk-profile-vendor">
    <?php
    $this->db->select('id_diskon');
    $this->db->where('id_vendor', $id_vendor);
    $result = $this->db->get('tb_produk')->row_array();
    if ($result['id_diskon'] != null) :
    ?>
        <div class="title-promo">
            <div class="row">
                <div class="col-9">
                    <h4>Produk Promo</h4>
                </div>
                <div class="col-3 desktop-v">
                    <a href="">Lihat Semua (<?= count($total_produk_promo); ?>)</a>
                </div>
                <div class="col-3 mobile-v">
                    <a href=""><i class="fas fa-ellipsis-h"></i></a>
                </div>
            </div>
        </div>
        <section id="promo-profile-vendor" class="promo-profile-vendor">
        </section>
        <script>
            $.ajax({
                url: "<?= base_url(); ?>ui/produk/promo_produk_vendor",
                type: "get",
                data: {
                    id_vendor: "<?= $id_vendor; ?>"
                },
                success: function(data) {
                    $("#promo-profile-vendor").html(data);
                }
            });
        </script>
    <?php endif; ?>
    <div class="title-all">
        <div class="row">
            <div class="col-9">
                <h4>Semua Produk</h4>
            </div>
            <div class="col-3 desktop-v">
                <a href="#" class="show-semua-produk" data-idvendor="<?= $id_vendor; ?>">Lihat Semua (<?= count($total_produk); ?>)</a>
            </div>
            <script>
                $(".show-semua-produk").click(function() {
                    window.open("<?= base_url(); ?>ui/produk/semua_produk/<?= $id_vendor ?>");
                });
            </script>
            <div class="col-3 mobile-v">
                <a href=""><i class="fas fa-ellipsis-h"></i></a>
            </div>
        </div>
    </div>
    <section id="all-produk-profile">
    </section>
    <script>
        $.ajax({
            url: "<?= base_url(); ?>ui/produk/semua_produk_vendor",
            type: "get",
            data: {
                id_vendor: "<?= $id_vendor; ?>"
            },
            success: function(data) {
                $("#all-produk-profile").html(data)
            }
        });
    </script>
</section>