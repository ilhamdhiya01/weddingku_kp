<?php if (!$this->session->userdata('email_member')) : ?>
    <a href="#" class="btn btn-block btn-primary pesan" id="belum-login">Pesan Sekarang</a>
<?php else : ?>
    <a href="#" class="btn btn-block btn-primary pesan" data-idmember="<?= $id_member['id']; ?>" data-idproduk="<?= $id_produk; ?>" data-idvendor="<?= $id_vendor; ?>" id="sudah-login">Pesan Sekarang</a>
<?php endif; ?>

<script>
    $("#belum-login").click(function() {
        $.ajax({
            url: "<?= base_url(); ?>ui/auth/load_login_member",
            type: "get",
            success: function(data) {
                $("#modal-auth").modal('show');
                $("#modal-dialog").addClass("modal-xl");
                $(".modal-footer").attr("style", "display:none;")
                $("#modal-dialog").attr("style", "width:75%;")
                $(".auth-vendor").html(data);
            }
        })
    });

    $("#sudah-login").click(function() {
        $.ajax({
            url: "<?= base_url(); ?>ui/store/keranjang",
            type: "post",
            data: {
                id_member: $(this).data("idmember"),
                id_vendor: $(this).data("idvendor"),
                id_produk: $(this).data("idproduk")
            },
            dataType: "json",
            success: function(data) {
                $(".keranjang-produk").html(data.keranjang.length);
                if (data.status == 201) {
                    iziToast.success({
                        title: 'Success',
                        timeout: 3000,
                        message: data.message,
                        position: 'topCenter',
                        transitionIn: 'flipInX',
                        transitionOut: 'flipOutX'
                    });
                } else {
                    iziToast.error({
                        title: 'Error',
                        timeout: 3000,
                        message: 'Gagal menambahkan produk',
                        position: 'topCenter',
                        transitionIn: 'flipInX',
                        transitionOut: 'flipOutX'
                    });
                }

            }
        });
    });
</script>