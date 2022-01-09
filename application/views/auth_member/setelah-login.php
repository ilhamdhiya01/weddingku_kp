<?php if (!$this->session->userdata('email_member')) : ?>
    <a href="" class="btn-daftar ml-auto">Daftar</a>
    <span class="desktop-v-span">join member ? <a href="">sign in </a></span>
<?php else : ?>
    <div class="profile" onclick="menuToggle();">
        <img style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;" src="<?= base_url(); ?>assets/vendors/img/news/profile-pic.png">
    </div>
    <div class="menu-profile">
        <img src="<?= base_url(); ?>assets/vendors/img/news/profile-pic.png" class="img-profile">
        <h3 style="font-size:12px;"><?= $member['nama_member']; ?> <br><span style="font-size:10px;">Weddingku Member</span></h3>
        <hr>
        <ul>
            <li><img src="<?= base_url(); ?>assets/vendors/img/icons/choices.png"><a href="#">Produk Pilihan</a><span style="position:relative; left:65px;" class="badge badge-danger keranjang-produk"><?= count($keranjang) ?></span></li>
            <li><img src="<?= base_url(); ?>assets/vendors/img/icons/settings.png"><a href="#">Pengaturan User</a></li>
            <li><img src="<?= base_url(); ?>assets/vendors/img/icons/resume.png"><a href="#">Edit Profile</a></li>
            <li id="logout-member"><img src="<?= base_url(); ?>assets/vendors/img/icons/power-button.png"><a href="#">Keluar</a></li>
        </ul>
    </div>
<?php endif; ?>


<script>
    $("#logout-member").click(function(e) {
        $.ajax({
            url: "<?= base_url(); ?>ui/auth/logout_member",
            type: "post",
            dataType: "json",
            success: function(data) {
                if (data.status == 200) {
                    $.ajax({
                        url: "<?= base_url(); ?>ui/auth/setelah_login",
                        type: "get",
                        success: function(data) {
                            $(".action").html(data);
                        }
                    });

                    $.ajax({
                        url: "<?= base_url(); ?>ui/home/load_btn_auth",
                        type: "get",
                        success: function(data) {
                            $(".btn-auth").html(data);
                        }
                    });

                    keranjang();
                }
            }
        });
        e.preventDefault();
    });

    $(".desktop-v-span").click(function(e) {
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

    function menuToggle() {
        const toggleMenu = document.querySelector(".menu-profile");
        toggleMenu.classList.toggle("active");
    }
</script>