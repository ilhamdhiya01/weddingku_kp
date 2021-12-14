<style>
    h5 {
        font-size: 15px;
        text-align: center;
        font-weight: bold;
        color: #5A555F;
    }

    masuk {
        color: #EBA1A6;
        cursor: pointer;
    }
</style>
<h5>ANDA HARUS <masuk id="login-member">MASUK</masuk> UNTUK MELIHAT HALAMAN INI</h5>

<script>
    $("#login-member").click(function(e) {
        $("#modal-auth").modal('show');
        $("#modal-dialog").addClass("modal-xl");
        $(".modal-footer").attr("style", "display:none;")
        $("#modal-dialog").attr("style", "width:75%;")
        $.ajax({
            url: "<?= base_url(); ?>ui/auth/load_login_member",
            type: "get",
            success: function(data) {
                $(".auth-vendor").html(data);
            }
        })
        e.preventDefault();
    });
</script>