<style>
    .no-result-found {
        text-align: center;
    }

    .no-result-found img {
        width: 320px;
        height: 150px;
    }

    .no-result-found h1 {
        font-size: 22px;
        font-weight: bold;
        color: #5A5555;
        letter-spacing: 1px;
    }

    .no-result-found p {
        font-size: 17px;
        letter-spacing: 1.5px;
    }
</style>
<div class="no-result-found mt-4">
    <img src="<?= base_url(); ?>assets/vendors/img/hasil_tidak_ada.webp" alt="">
    <h1>Oh nooo !</h1>
    <p><?= $pesan; ?></p>
</div>