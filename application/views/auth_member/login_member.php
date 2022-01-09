<style>
    @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+Display&display=swap');

    .content-wrapper {
        display: flex;
        justify-content: space-between;
    }

    .box:first-child {
        width: 68%;
        height: 85vh;
        padding: 10px 0;
    }

    .box:not(:first-child) {
        flex: 1;
        background-image: url('<?= base_url(); ?>assets/vendors/img/gambar-login.jpg');
        object-fit: cover;
        background-size: cover;
        padding: 0 20px;
    }

    .box {
        position: relative;
    }

    .logo {
        display: block;
    }

    .header-member {
        max-width: 350px;
        margin-left: 27%;
    }

    .header-member p:first-child {
        font-size: 14px;
        font-family: 'Noto Sans Display', sans-serif;
        font-weight: 500;
    }

    .header-member p:last-child {
        font-size: 14px;
        font-weight: 200;
        font-family: 'Noto Sans Display', sans-serif;
    }

    .other-login {
        display: flex;
        width: 100%;
        justify-content: center;
    }

    .login {
        box-shadow: rgba(67, 71, 85, 0.27) 0px 0px 0.25em, rgba(90, 125, 188, 0.05) 0px 0.25em 1em;
        width: 250px;
        height: 38px;
        position: relative;
        border-radius: 5px;
    }

    .login:first-child {
        background: #1877F2;
        cursor: pointer;
    }

    .login:first-child:hover {
        background: #174A96;
        transition: 0.5s;
    }

    .login:last-child {
        margin-left: 10px;
        background: #E94336;
        cursor: pointer;
    }

    .login:last-child:hover {
        background: #AF4228;
        transition: 0.5s;
    }

    .login .login-facebook,
    .login .login-google {
        position: absolute;
        right: 0;
        border-left: 1px solid rgba(0, 0, 0, 0.2);
        line-height: 35px;
        width: 220px;
        height: 35px;
        border-top-right-radius: 5px;
        border-bottom-right-radius: 5px;
    }

    .login .login-facebook small,
    .login .login-google small {
        font-weight: bold;
        position: absolute;
        right: 93px;
        color: #ffffff;
    }

    .login .login-facebook i,
    .login .login-google i {
        position: relative;
        right: 23px;
        color: #ffffff;
    }

    .form-login-header {
        display: flex;
        justify-content: center;
        margin-top: 8px;
    }

    .form-login-header h2 {
        padding: 0 20px;
        font-size: 12px;
        text-transform: uppercase;
        font-weight: bold;
        position: relative;
        top: 15px;
    }

    .garis {
        border-bottom: 1px solid rgba(0, 0, 0, 0.2);
        width: 220px;
        position: relative;
    }

    .form-login {
        display: flex;
        justify-content: center;
    }

    .box .form-group {
        display: flex;
        justify-content: center;
        padding: 5px 0;
    }

    .box input {
        max-width: 515px;
        font-size: 12px;
        padding: 20px 20px;
    }

    .box .btn {
        background: #EBA1A1;
        width: 220px;
        height: 38px;
        box-shadow: rgba(67, 71, 85, 0.27) 0px 0px 0.25em, rgba(90, 125, 188, 0.05) 0px 0.25em 1em;
        font-size: 12px;
        font-weight: bold;
        color: #ffffff;
        display: block;
    }

    .box .btn:hover {
        background: #D47D7D;
        transition: 0.5s;
    }

    .box form small {
        color: #D47D7D;
        border-bottom: 1px solid #D47D7D;
        position: relative;
        top: 10px;
    }

    .box form p {
        position: relative;
        top: 40px;
        font-size: 13px;
    }

    .box form p .a {
        color: #D47D7D;
        font-size: 13px;
    }

    .register-wrap {
        position: absolute;
        top: 200px;
        left: 5px;
    }

    .register-wrap h3 {
        font-size: 15px;
        font-weight: bold;
        text-align: center;
    }

    .register-wrap p {
        font-size: 13px;
        text-align: center;
    }

    .box .btn-register {
        background: black;
        opacity: 0.7;
        width: 220px;
        height: 38px;
        box-shadow: rgba(67, 71, 85, 0.27) 0px 0px 0.25em, rgba(90, 125, 188, 0.05) 0px 0.25em 1em;
        font-size: 12px;
        font-weight: bold;
        color: #ffffff;
        display: block;
    }
</style>
<div class="modal-login-member">
    <div class="content-wrapper">
        <div class="box">
            <h1 class="logo text-center">Weddingku</h1>
            <div class="header-member">
                <p class="text-center">Mulai persiapan pernikahan Anda dengan penawaran terbaik & fitur eksklusif di Bridestory!</p>
                <p class="text-center">Daftar atau buat akun sekarang</p>
            </div>
            <div class="other-login">
                <div class="login">
                    <div class="login-facebook">
                        <i class="fab fa-facebook-f"></i>
                        <small>Facebook</small>
                    </div>
                </div>
                <div class="login">
                    <div class="login-google">
                        <i class="fab fa-google"></i>
                        <small>Google</small>
                    </div>
                </div>
            </div>
            <div class="form-login-header">
                <div class="garis"></div>
                <h2>Atau</h2>
                <div class="garis"></div>
            </div>
            <form action="" id="form-login-member" class="mt-4">
                <div class="form-group">
                    <input type="text" name="email" value="<?= set_value('email'); ?>" class="form-control" id="input-email" placeholder="Alamat Email">
                </div>
                <div class="form-group">
                    <input type="password" name="kata_sandi" class="form-control" id="pass" placeholder="Kata Sandi">
                </div>
                <center>
                    <button class="btn" id="login">Lanjutkan</button>
                    <small>Saya lupa kata sandi</small>
                    <p>Belum punya akun ? <a class="a">Daftar</a></p>
                </center>
            </form>
        </div>
        <div class="box">
            <div class="register-wrap">
                <center>
                    <h3>Punya bisnis terkait pernikahan?</h3>
                    <p>Bergabunglah dengan 20.000+ vendor lainnya dan jangkau jutaan calon pengantin di Bridestory!</p>
                    <button class="btn btn-register">Bergabung Sebagai Vendor</button>
                </center>
            </div>
        </div>
    </div>
</div>
<script>
    $("#login").click(function(e) {
        $.ajax({
            url: "<?= base_url(); ?>ui/auth/proses_login_member",
            type: "post",
            data: {
                email: $("[name='email']").val(),
                kata_sandi: $("[name='kata_sandi']").val()
            },
            dataType: "json",
            success: function(data) {
                if (data.error) {
                    if (data.error.email) {
                        $("[name='email']").addClass("is-invalid");
                        iziToast.error({
                            title: 'Error',
                            timeout: 3000,
                            message: data.error.email,
                            position: 'topCenter',
                            transitionIn: 'flipInX',
                            transitionOut: 'flipOutX'
                        });
                    } else {
                        $("[name='email']").removeClass("is-invalid");
                    }

                    if (data.error.kata_sandi) {
                        $("[name='kata_sandi']").addClass("is-invalid");
                        iziToast.error({
                            title: 'Error',
                            timeout: 3000,
                            message: data.error.kata_sandi,
                            position: 'topCenter',
                            transitionIn: 'flipInX',
                            transitionOut: 'flipOutX'
                        });
                    } else {
                        $("[name='kata_sandi']").removeClass("is-invalid");
                    }
                } else {
                    if (data.status == 'null_email') {
                        iziToast.error({
                            title: 'Error',
                            timeout: 3000,
                            message: data.message,
                            position: 'topCenter',
                            transitionIn: 'flipInX',
                            transitionOut: 'flipOutX'
                        });
                    } else {
                        if (data.cek_kata_sandi != false) {
                            iziToast.success({
                                title: 'Success',
                                timeout: 3000,
                                message: 'Login success',
                                position: 'topCenter',
                                transitionIn: 'flipInX',
                                transitionOut: 'flipOutX'
                            });

                            $("#modal-auth").modal('hide');

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
                        } else {
                            iziToast.error({
                                title: 'Error',
                                timeout: 3000,
                                message: 'Kata sandi yang anda masukan salah',
                                position: 'topCenter',
                                transitionIn: 'flipInX',
                                transitionOut: 'flipOutX'
                            });
                        }
                    }
                }
            }
        });
        e.preventDefault();
    });
</script>