<form id="form-login-vendor">
    <div class="form-group">
        <label for="">Email</label>
        <input type="text" class="form-control" name="email" id="email">
        <div class="invalid-feedback email_error">
        </div>
    </div>
    <div class="form-group">
        <label for="">Kata Sandi</label>
        <input type="password" class="form-control" name="kata_sandi" id="kata_sandi">
        <div class="invalid-feedback kata_sandi_error">
        </div>
    </div>
    <button type="submit" class="btn btn-block btn-primary">Login</button>
</form>

<script>
    $("#form-login-vendor").submit(function(e) {
        $.ajax({
            url: "<?= base_url(); ?>ui/auth/proses_login_vendor",
            type: "post",
            data: $(this).serialize(),
            dataType: "json",
            success: function(data) {
                if (data.error) {
                    if (data.error.email) {
                        $("[name='email']").addClass("is-invalid");
                        $(".email_error").html(data.error.email);
                    } else {
                        $("[name='email']").removeClass("is-invalid");
                        $(".email_error").html("");
                    }

                    if (data.error.kata_sandi) {
                        $("[name='kata_sandi']").addClass("is-invalid");
                        $(".kata_sandi_error").html(data.error.kata_sandi);
                    } else {
                        $("[name='kata_sandi']").removeClass("is-invalid");
                        $(".kata_sandi_error").html("");
                    }
                } else {
                    $("[name='email']").removeClass("is-invalid");
                    $(".email_error").html("");
                    $("[name='kata_sandi']").removeClass("is-invalid");
                    $(".kata_sandi_error").html("");
                    if (data.status == 'null_email') {
                        iziToast.error({
                            title: 'Error',
                            timeout: 3000,
                            message: data.message,
                            position: 'topRight',
                            transitionIn: 'flipInX',
                            transitionOut: 'flipOutX'
                        });
                    } else {
                        if (data.cek_password) {
                            if (data.vendor.is_active == 1) {
                                if (data.vendor.level_id == 1) {
                                    alert('Super Admin')
                                } else {
                                    alert('Vendor');
                                }
                            } else {
                                iziToast.error({
                                    title: 'Error',
                                    timeout: 3000,
                                    message: 'Akun belum aktif',
                                    position: 'topRight',
                                    transitionIn: 'flipInX',
                                    transitionOut: 'flipOutX'
                                });
                            }
                        } else {
                            iziToast.error({
                                title: 'Error',
                                timeout: 3000,
                                message: 'Password yang anda masukna salah',
                                position: 'topRight',
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