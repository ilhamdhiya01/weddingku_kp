<div class="card-body">
    <div class="banner-title">
        <h2>Weddingku : Sumber Inspirasi Rencana Pernikahan Anda</h2>
    </div>
    <p>10.000+ calon pengantin merencanakan pernikahan-nya bersama kami setiap hari! </p>
    <p>Baca wedding ideas, temukan direktori wedding vendor terlengkap, nikmati cerita real wedding kami, lihat inspiration board serta temukan best deal paket di weddingku store & honeymoon sekarang juga!</p>
    <?php if (!$this->session->userdata('email_member')) : ?>
        <a href="<?= base_url(); ?>ui/auth/registrasi" class="btn-signup">sign up</a>
    <?php else : ?>
    <?php endif; ?>
</div>