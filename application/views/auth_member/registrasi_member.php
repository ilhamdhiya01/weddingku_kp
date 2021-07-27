<div class="style-bg"></div>
<div class="registrasi">
    <div class="row judul justify-content-center">
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
                        <form action="">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Depan">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Belakang">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Alamat Email">
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-11">
                                        <input type="password" class="form-control" id="pass" aria-describedby="emailHelp" placeholder="Kata Sandi">
                                    </div>
                                    <div class="col-1">
                                        <span id="show-password" onclick="show()">
                                            <i class="fas fa-eye"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-11">
                                        <input type="password" class="form-control" id="konfirmasi-pass" aria-describedby="emailHelp" placeholder="Konfirmasi Kata Sandi">
                                    </div>
                                    <div class="col-1">

                                        <i class="fas fa-eye fa-eye-2" id="show-password-2"></i>

                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-block">Lanjutkan</button>
                            <p class="p1">Dengan mendaftar, saya menyetujui Syarat<br> dan Ketentuan Bridestory</p>
                            <p class="p2">Sudah punya akun ? <a href="">Masuk</a></p>
                        </form>
                    </div>
                </div>
                <div class="card-footer">
                    <span>Punya bisnis terkait pernikahan ? <a href="">Bergabung sebagai vendor</a></span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="chat-fixed">
    <a href="" class="chat"><i class="fab fa-whatsapp"></i> chat</a>
</div>
<!-- show password -->
<script>
    function show() {
        let x = document.getElementById('pass').type;
        if (x == 'password') {
            document.getElementById('pass').type = 'text';
            document.getElementById('show-password').innerHTML = `<i class="fas fa-eye-slash"></i>`;
        } else {
            document.getElementById('pass').type = 'password';
            document.getElementById('show-password').innerHTML = `<i class="fas fa-eye"></i>`;
        }
    }

    $('#show-password-2').click(function() {
        let x = $('#konfirmasi-pass').attr('type');
        let icon2 = '<i class="fas fa-eye-slash"></i>';
        if (x == 'password') {
            $('#konfirmasi-pass').attr('type', 'text');
            $('#show-password-2 i').addClass('fas fa-eye-slash');
        } else {
            $('#konfirmasi-pass').attr('type', 'password');
        }
    });
</script>