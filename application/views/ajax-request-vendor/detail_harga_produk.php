<style>
    .content-wrapper {
        display: flex;
        justify-content: center;
    }

    .detail-harga-produk-1 {
        width: 85%;
    }

    .detail-harga-produk-2 {
        width: 130%;
    }

    .detail-harga-produk-3 {
        width: 85%;
    }

    .garis {
        /* padding-bottom: 20px; */
        /* border-bottom: 2px solid #EBA1B5; */
        border: 1px solid #EBA1A1;
    }

    .kategori h5 {
        text-align: center;
        font-size: 12px;
        font-weight: bold;
        color: #5A555F;
        text-transform: uppercase;
    }

    .detail-nama-produk {
        color: #848484;
        text-transform: uppercase;
        font-size: 14px;
    }

    .detail-harga-produk {
        font-weight: bold;
        text-transform: uppercase;
        font-size: 14px;
        color: #EBA1A6;
    }

    .detail-harga {
        text-align: center;
        font-size: 14px;
        color: #848484;
    }
</style>

<div class="content-wrapper">
    <div class="detail-harga-produk-1"></div>
    <div class="detail-harga-produk-2">
        <div class="kategori">
            <h5><?= $nama_kategori; ?></h5>
            <hr class="garis">
        </div>
        <?php foreach ($detail_harga as $harga) : ?>
            <div class="produk pb-3">
                <div class="text-center detail-nama-produk"><?= $harga['nama_produk']; ?></div>
                <div class="text-center detail-harga-produk pb-3"><?= format_idr($harga['harga']); ?></div>
                <p class="detail-harga">Detail dari produk :</p>
                <p class="detail-harga"><?= $harga['detail_produk']; ?></p>
                <hr>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="detail-harga-produk-3"></div>
</div>