<div class="style-bg"></div>
<div class="registrasi">
    <div class="row judul">
        <div class="col-md-7">
            <h4>Persiapkan Pernikahan dengan Beragam Kemudahan & Penawaran Eksklusif</h4>
            <p>Daftar sekarang & dapatkan harga terbaik untuk<br>lengkapi kebutuhan pernikahan Anda</p>
            <div class="icon-info">
                <div class="row">
                    <div class="col-md-6 info">
                        <img src="<?= base_url(); ?>assets/vendors/img/news/register1.png" class="icon" alt="">
                        <div class="h5-p">
                            <h5>Vendor & Produk Pernikahan Terlengkap</h5>
                            <p>Lengkapi kebutuhan pernikahan Anda dengan <b>5.000+ pilihan produk dari 20.000</b> vendor pernikahan profesional</p>
                        </div>
                    </div>
                    <div class="col-md-6 info">
                        <img src="<?= base_url(); ?>assets/vendors/img/news/register2.png" class="icon" alt="">
                        <div class="h5-p">
                            <h5>Sesuaikan Pesanan dengan Impian Anda</h5>
                            <p>Ingin menyesuaikan pesanan dengan kebutuhan? <b>Konsultasikan</b> bersama vendor & <b>pesan produk</b> sesuai keinginan Anda</p>
                        </div>
                    </div>
                    <div class="col-md-6 info">
                        <img src="<?= base_url(); ?>assets/vendors/img/news/register3.png" class="icon" alt="">
                        <div class="h5-p">
                            <h5>Promo Eksklusif & Hadiah Menarik</h5>
                            <p>Jangan lewatkan kesempatan untuk memesan vendor dengan promo eksklusif di Bridestory & beragam hadiah menarik <b>selama online event!</b></p>
                        </div>
                    </div>
                    <div class="col-md-6 info">
                        <img src="<?= base_url(); ?>assets/vendors/img/news/register4.png" class="icon" alt="">
                        <div class="h5-p">
                            <h5>Cicilan 0% hingga 24 bulan</h5>
                            <p>Nikmati opsi pembayaran dengan cicilan 0% hingga 24 bulan serta <b>lebih dari 30 metode</b> lainnya menggunakan Bridestory Pay</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="card form-register">
                <div class="card-body">
                    <div class="form-header">
                        <div class="row">
                            <div class="col-6">
                                <h5>Daftar</h5>
                            </div>
                            <div class="col-6">
                                <a href="">Masuk</a>
                            </div>
                        </div>
                    </div>
                    <div class="form-input">
                        <form action="" id="form-registrasi-member">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1" id="label-nama-depan">Nama</label>
                                        <input type="text" name="nama_member" value="" class="form-control" id="input-nama-depan" placeholder="Nama">
                                        <div class="invalid-feedback nama_member_error text-sm" style="margin-top: -13px; color:red;">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1" id="label-nama-belakang">Nomor Tlp</label>
                                        <input type="text" name="no_tlp" value="" class="form-control" id="input-nama-belakang" placeholder="Nomor Tlp">
                                        <div class="invalid-feedback no_tlp_error text-sm" style="margin-top: -13px; color:red;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1" id="label-email">Alamat Email</label>
                                <input type="text" name="email" value="" class="form-control" id="input-email" placeholder="Alamat Email">
                                <div class="invalid-feedback email_error text-sm" style="margin-top: -13px; color:red;">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1" id="label-pass">Kata Sandi</label>
                                <i class="fas fa-eye-slash" id="show-password-1"></i>
                                <input type="password" name="kata_sandi" class="form-control" id="kata_sandi" placeholder="Kata Sandi">
                                <div class="invalid-feedback kata_sandi_error text-sm" style="margin-top: -13px; color:red;">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1" id="label-konfirmasi-pass">Konfirmasi Kata Sandi</label>
                                <i class="fas fa-eye-slash" id="show-password-2"></i>
                                <input type="password" name="konfirmasi_sandi" class="form-control" id="konfirmasi-pass" placeholder="Konfirmasi Kata Sandi">
                                <div class="invalid-feedback konfirmasi_sandi_error text-sm" style="margin-top: -13px; color:red;">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-block" id="btn-registrasi">Lanjutkan</button>
                            <p class="p1">Dengan mendaftar, saya menyetujui Syarat<br> dan Ketentuan Bridestory</p>
                            <p class="p2">Sudah punya akun ? <a href="<?= base_url(); ?>ui/auth">Masuk</a></p>
                        </form>
                    </div>
                </div>
                <div class="card-footer">
                    <small>Punya bisnis terkait pernikahan ? <a href="">Bergabung sebagai vendor</a></small>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="chat-fixed">
    <a href="" class="chat"><i class="fab fa-whatsapp"></i> chat</a>
</div>
<script>
    $("#form-registrasi-member").submit(function(e) {
        // console.log($(this).serialize());
        $.ajax({
            url: "<?= base_url(); ?>ui/auth/proses_registrasi_member",
            type: "post",
            data: $(this).serialize(),
            dataType: "json",
            success: function(data) {
                if (data.error) {
                    if (data.error.nama_member) {
                        $("[name='nama_member']").addClass("is-invalid");
                        $(".nama_member_error").html(data.error.nama_member)
                    } else {
                        $("[name='nama_member']").removeClass("is-invalid");
                        $(".nama_member_error").html("");
                    }

                    if (data.error.no_tlp) {
                        $("[name='no_tlp']").addClass("is-invalid");
                        $(".no_tlp_error").html(data.error.no_tlp)
                    } else {
                        $("[name='no_tlp']").removeClass("is-invalid");
                        $(".no_tlp_error").html("");
                    }

                    if (data.error.email) {
                        $("[name='email']").addClass("is-invalid");
                        $(".email_error").html(data.error.email)
                    } else {
                        $("[name='email']").removeClass("is-invalid");
                        $(".email_error").html("");
                    }

                    if (data.error.kata_sandi) {
                        $("[name='kata_sandi']").addClass("is-invalid");
                        $(".kata_sandi_error").html(data.error.kata_sandi)
                    } else {
                        $("[name='kata_sandi']").removeClass("is-invalid");
                        $(".kata_sandi_error").html("");
                    }

                    if (data.error.konfirmasi_sandi) {
                        $("[name='konfirmasi_sandi']").addClass("is-invalid");
                        $(".konfirmasi_sandi_error").html(data.error.konfirmasi_sandi)
                    } else {
                        $("[name='konfirmasi_sandi']").removeClass("is-invalid");
                        $(".konfirmasi_sandi_error").html("");
                    }
                } else {
                    $("[name='nama_member']").removeClass("is-invalid");
                    $("[name='nama_member']").val("");
                    $(".nama_member_error").html("");
                    $("[name='no_tlp']").removeClass("is-invalid");
                    $("[name='no_tlp']").val("");
                    $(".no_tlp_error").html("");
                    $("[name='email']").removeClass("is-invalid");
                    $("[name='email']").val("");
                    $(".email_error").html("");
                    $("[name='kata_sandi']").removeClass("is-invalid");
                    $("[name='kata_sandi']").val("");
                    $(".kata_sandi_error").html("");
                    $("[name='konfirmasi_sandi']").removeClass("is-invalid");
                    $("[name='konfirmasi_sandi']").val("");
                    $(".konfirmasi_sandi_error").html("");
                    iziToast.success({
                        title: 'Registrasi success',
                        timeout: 3000,
                        message: 'Silahkan login',
                        position: 'topRight',
                        transitionIn: 'flipInX',
                        transitionOut: 'flipOutX'
                    });
                }
                // console.log(data);
            }
        });
        e.preventDefault();
    });

    $('#form-error').css('color', '#ff0000');
    $(document).ready(function() {
        // nama depan
        $('#label-nama-depan').css('color', '#979799');
        $('#label-nama-depan').css('display', 'none');
        $('#label-nama-depan').css('font-size', '12px');
        // nama belakang
        $('#label-nama-belakang').css('color', '#979799');
        $('#label-nama-belakang').css('display', 'none');
        $('#label-nama-belakang').css('font-size', '12px');
        // email
        $('#label-email').css('color', '#979799');
        $('#label-email').css('display', 'none');
        $('#label-email').css('font-size', '12px');
        // password
        $('#label-pass').css('color', '#979799');
        $('#label-pass').css('display', 'none');
        $('#label-pass').css('font-size', '12px');
        $('#label-pass').css('position', 'relative');
        $('#label-pass').css('top', '15px');
        // konfirmasi password
        $('#label-konfirmasi-pass').css('color', '#979799');
        $('#label-konfirmasi-pass').css('display', 'none');
        $('#label-konfirmasi-pass').css('font-size', '12px');
        $('#label-konfirmasi-pass').css('position', 'relative');
        $('#label-konfirmasi-pass').css('top', '15px');
    })
    // nama depan
    $('#input-nama-depan').focus(function() {
        $('#label-nama-depan').css('display', 'flex');
        $(this).attr('placeholder', '');
    })
    // nama belakang
    $('#input-nama-belakang').focus(function() {
        $('#label-nama-belakang').css('display', 'flex');
        $(this).attr('placeholder', '');
    })
    // email
    $('#input-email').focus(function() {
        $('#label-email').css('display', 'flex');
        $(this).attr('placeholder', '');
    })
    // password
    $('#kata_sandi').focus(function() {
        $('#label-pass').css('display', 'flex');
        $(this).attr('placeholder', '');
    })
    // konfirmasi password
    $('#konfirmasi-pass').focus(function() {
        $('#label-konfirmasi-pass').css('display', 'flex');
        $(this).attr('placeholder', '');
    })
    // show password
    $('#show-password-1').click(function() {
        let x = $('#kata_sandi').attr('type');
        if (x == 'password') {
            $('#kata_sandi').attr('type', 'text');
            $('#show-password-1').css('color', '#EBA1A1');
            $('#show-password-1').attr('class', 'fas fa-eye');
        } else {
            $('#kata_sandi').attr('type', 'password');
            $('#show-password-1').css('color', '#b6b4b4');
            $('#show-password-1').attr('class', 'fas fa-eye-slash');
        }
    });

    // show konfirmasi password
    $('#show-password-2').click(function() {
        let y = $('#konfirmasi-pass').attr('type');
        if (y == 'password') {
            $('#konfirmasi-pass').attr('type', 'text');
            $('#show-password-2').css('color', '#EBA1A1');
            $('#show-password-2').attr('class', 'fas fa-eye');
        } else {
            $('#konfirmasi-pass').attr('type', 'password');
            $('#show-password-2').css('color', '#b6b4b4');
            $('#show-password-2').attr('class', 'fas fa-eye-slash');
        }
    });
</script>