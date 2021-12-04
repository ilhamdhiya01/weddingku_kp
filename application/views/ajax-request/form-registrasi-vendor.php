<form id="form-registrasi-vendor">
    <div class="form-group">
        <label for="">Nama</label>
        <input type="text" class="form-control" name="nama" id="nama">
        <div class="invalid-feedback nama_error">
        </div>
    </div>
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
    <div class="form-group">
        <label for="">Konfirmasi Kata Sandi</label>
        <input type="password" class="form-control" name="konfirmasi_kata_sandi" id="konfirmasi_kata_sandi">
        <div class="invalid-feedback konfirmasi_kata_sandi_error">
        </div>
    </div>
    <button type="submit" class="btn btn-block btn-primary">Registrasi</button>
</form>

<script>
    $("#form-registrasi-vendor").submit(function(e) {
        $.ajax({
            url: "<?= base_url(); ?>ui/auth/proses_registrasi_vendor",
            type: "post",
            dataType: "json",
            data: $(this).serialize(),
            success: function(data) {
                if (data.error) {
                    if (data.error.nama) {
                        $("[name='nama']").addClass('is-invalid');
                        $(".nama_error").html(data.error.nama);
                    } else {
                        $("[name='nama']").removeClass('is-invalid');
                        $(".nama_error").html("");
                    }

                    if (data.error.email) {
                        $("[name='email']").addClass('is-invalid');
                        $(".email_error").html(data.error.email);
                    } else {
                        $("[name='email']").removeClass('is-invalid');
                        $(".email_error").html("");
                    }

                    if (data.error.kata_sandi) {
                        $("[name='kata_sandi']").addClass('is-invalid');
                        $(".kata_sandi_error").html(data.error.kata_sandi);
                    } else {
                        $("[name='kata_sandi']").removeClass('is-invalid');
                        $(".kata_sandi_error").html("");
                    }

                    if (data.error.konfirmasi_kata_sandi) {
                        $("[name='konfirmasi_kata_sandi']").addClass('is-invalid');
                        $(".konfirmasi_kata_sandi_error").html(data.error.konfirmasi_kata_sandi);
                    } else {
                        $("[name='konfirmasi_kata_sandi']").removeClass('is-invalid');
                        $(".konfirmasi_kata_sandi_error").html("");
                    }
                } else {
                    $("[name='nama']").removeClass('is-invalid');
                    $("[name='nama']").val('');
                    $(".nama_error").html("");
                    $("[name='email']").removeClass('is-invalid');
                    $("[name='email']").val('');
                    $(".email_error").html("");
                    $("[name='kata_sandi']").removeClass('is-invalid');
                    $("[name='kata_sandi']").val('');
                    $(".kata_sandi_error").html("");
                    $("[name='konfirmasi_kata_sandi']").removeClass('is-invalid');
                    $("[name='konfirmasi_kata_sandi']").val('');
                    $(".konfirmasi_kata_sandi_error").html("");
                    if (data.status == 201) {
                        iziToast.success({
                            title: 'Success',
                            timeout: 3000,
                            message: data.message,
                            position: 'topRight',
                            transitionIn: 'flipInX',
                            transitionOut: 'flipOutX'
                        });
                    } else {
                        iziToast.error({
                            title: 'Error',
                            timeout: 3000,
                            message: 'Registrasi gagal',
                            position: 'topRight',
                            transitionIn: 'flipInX',
                            transitionOut: 'flipOutX'
                        });
                    }
                }
            }
        });
        e.preventDefault();
    });
</script>