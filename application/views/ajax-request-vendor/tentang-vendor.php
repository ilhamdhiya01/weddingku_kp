<style>
    .about-wrapper {
        display: flex;
        justify-content: center;
    }

    .content {
        width: 80%;
    }

    .p-title {
        color: #5A555F;
        font-size: 13px;
        font-weight: bold;
        text-align: center;
    }

    .p-isi {
        font-size: 13px;
        text-align: center;
        cursor: pointer;
        color: #EBA1B5;
    }

    .p-tentang {
        font-size: 13px;
        text-align: center;
        color: #848484;
    }
</style>
<div class="about-wrapper">
    <div class="content mt-2">
        <div class="kategori">
            <p class="p-title">Layanan</p>
            <p class="p-isi"><?= $tentang_kami['nama_kategori']; ?></p>
        </div>
        <div class="alamat">
            <p class="p-title">Alamat</p>
            <p class="p-tentang"><?= $tentang_kami['alamat_kantor']; ?></p>
        </div>
        <div class="lokasi">
            <p class="p-title">Lokasi</p>
            <p class="p-isi"><?= $tentang_kami['kota']; ?></p>
        </div>
        <div class="tentang-kami mb-5">
            <p class="p-tentang"><?= $tentang_kami['tentang_bisnis']; ?></p>
        </div>
    </div>
</div>