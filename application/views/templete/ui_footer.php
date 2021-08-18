<section class="footer">
    <div class="row footer-content">
        <div class="col-md-9">
            <div class="row">
                <div class="col-3">
                    <span>weddingku</span>
                    <div class="link">
                        <a href="">Tentang Kami</a><br>
                        <a href="">Vendors</a>
                        <a href="">Events</a>
                    </div>
                </div>
                <div class="col-3">
                    <span>calon pengantin</span>
                    <div class="link">
                        <a href="">Blog</a><br>
                        <a href="">Weddingku App</a>
                    </div>
                </div>
                <div class="col-3">
                    <span>bisnis</span>
                    <div class="link">
                        <a href="">Bergabung Sebagai Vendor</a><br>
                        <a href="">Business Blog</a><br>
                    </div>
                </div>
                <div class="col-3">
                    <span>layanan konsumen</span>
                    <div class="link">
                        <a href="">Pusat Bantuan</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="logo-footer-mobile">
                <h2>Weddingku</h2>
            </div>
            <div class="sosmed">
                <div class="icon-1">
                    <a href=""><i class="fab fa-facebook-f"></i></a>
                </div>
                <div class="icon">
                    <a href=""><i class="fab fa-instagram"></i></a>
                </div>
                <div class="icon">
                    <a href=""><i class="fab fa-twitter"></i></a>
                </div>
                <div class="icon">
                    <a href=""><i class="fab fa-pinterest"></i></a>
                </div>
                <div class="icon">
                    <a href=""><i class="fab fa-youtube-square"></i></a>
                </div>
            </div>
            <div class="link-logo-mobile-1">
                <a href="">VENDORS</a>
                <a href="">EVENTS</a>
                <a href="">BLOG</a>
                <a href="">PUSAT BANTUAN</a>
            </div>
            <div class="link-logo-mobile-2">
                <a href="">BECOME A VENDOR</a>
                <a href="">ABOUT US</a>
                <a href="">CONTACT US</a>
            </div>
        </div>
        <div class="copyright-mobile">
            <span>© 2002-2021 WEDDINGKU.COM. POWERED BY MENARAVISI</span>
        </div>
    </div>
    <div class="row footer-desktop">
        <div class="col-md-4">
            <div class="logo-footer">
                <h2>Weddingku</h2>
            </div>
        </div>
        <div class="col-md-8">
            <div class="link-logo">
                <a href="">Kebijakan Peivasi</a>
                <a href="">Syarat & Ketentuan</a>
                <a href="">Peta Situs</a>
                <span class="copy-right">Hak Cipta © 2021 Weddingku. Hak Cipta Dilindungi Undang-undang.</span>
            </div>
        </div>
    </div>
</section>
<!-- modal paket -->
<div class="modal fade venue-modal" id="paket" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <!-- <div class="modal-header"> -->
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><i class="fas fa-times"></i></span>
            </button>
            <!-- </div> -->
            <div class="modal-body">
                <div class="modal-title text-center">
                    <h3>Pilih Kategori</h3>
                </div>
                <div class="modal-icon">
                    <div class="row justify-content-center modal-d-v">
                        <div class="col-9">
                            <div class="row">
                                <?php
                                $subkategori = [
                                    'Aksesoris Pernikahan',
                                    'Souvenir & Seserahan',
                                    'Gaun & Pakaian Wanita',
                                    'Bridal',
                                    'Jas & Pakaian Pria',
                                    'Wedding Palnning',
                                    'Rias Rambut & Makeup',
                                    'Fotografi',
                                    'Dekorasi & Pencahayaan',
                                    'Hiburan / Entertainment',
                                    'Videografi',
                                    'Makanan & Minuman',
                                    'Undangan',
                                    'Venue',
                                    'Aksesoris Pria',
                                    'Perhiasan',
                                    'Bulan Madu',
                                    'Perawatan & Kecantikan',
                                    'Jasa Pernikahan',
                                    'Paket Lengkap'
                                ];
                                for ($i = 0; $i < count($subkategori); $i++) :
                                ?>
                                    <div class="col-md-2">
                                        <a href="">
                                            <div class="card">
                                                <img src="<?= base_url(); ?>assets/vendors/img/news/subkategori<?= $i; ?>.png" alt="">
                                                <span class="text-dark"><?= $subkategori[$i]; ?></span>
                                            </div>
                                        </a>
                                    </div>
                                <?php endfor; ?>
                            </div>
                        </div>
                    </div>
                    <div class="row modal-m-v justify-content-center">
                        <div class="col-12">
                            <div class="row">
                                <?php
                                $subkategori = [
                                    'Aksesoris Pernikahan',
                                    'Souvenir & Seserahan',
                                    'Gaun & Pakaian Wanita',
                                    'Bridal',
                                    'Jas & Pakaian Pria',
                                    'Wedding Palnning',
                                    'Rias Rambut & Makeup',
                                    'Fotografi',
                                    'Dekorasi & Pencahayaan',
                                    'Hiburan / Entertainment',
                                    'Videografi',
                                    'Makanan & Minuman',
                                    'Undangan',
                                    'Venue',
                                    'Aksesoris Pria',
                                    'Perhiasan',
                                    'Bulan Madu',
                                    'Perawatan & Kecantikan',
                                    'Jasa Pernikahan',
                                    'Paket Lengkap'
                                ];
                                for ($i = 0; $i < count($subkategori); $i++) :
                                ?>
                                    <div class="col-3">
                                        <a href="">
                                            <div class="card">
                                                <img src="<?= base_url(); ?>assets/vendors/img/news/subkategori<?= $i; ?>.png" alt="">
                                                <span class="text-dark"><?= $subkategori[$i]; ?></span>
                                            </div>
                                        </a>
                                    </div>
                                <?php endfor; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- modal store -->
<script>
    // store venue
    $('#store-venue').click(function(e){
        $('#paket').attr('id','venue');
        e.preventDefault();
    })
    // store all kategori
    $('#all').click(function(e){
        $('#paket').attr('id','all-kategori');
        e.preventDefault();
    });
</script>
<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
    window.jQuery || document.write('<script src="<?= base_url("assets/vendors/vendor/jquery/dist/jquery.min.js") ?>"><\/script>')
</script>
<!-- plugin -->
<script src="<?= base_url("assets/vendors/plugins/select-plugins/dist/jquery-editable-select.min.js"); ?>"></script>
<!-- / -->
<script src="<?= base_url("assets/vendors/vendor/bootstrap/dist/js/bootstrap.bundle.min.js") ?>"></script>
<script src="<?= base_url("assets/vendors/js/offcanvas.js") ?>"></script>
<script src="<?= base_url("assets/vendors/js/baguetteBox.min.js") ?>"></script>
<script src="<?= base_url("assets/vendors/js/custom.js") ?>"></script>
<script src="<?= base_url("assets/vendors/js/jsTambahan.js") ?>"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
    <link src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></link>
    <link src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></link>
    <link src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></link>
    -->
</body>

</html>