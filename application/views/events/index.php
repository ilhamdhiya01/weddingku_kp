<div class="daftar-events">
    <div class="container">
        <div class="text-daftar-events">
            <a href="">Home</a>
            <span class="span-1">></span>
            <span class="span-2">Daftar Events</span>
        </div>
    </div>
</div>
<section class="section-events">
    <div class="container">
        <div class="events-title">
            <h2>Event Mendatang</h2>
            <p>Sedang mencari inspirasi untuk hari pernikahan Anda? Lihat rangkaian event pernikahan yang dapat Anda kunjungi di bawah ini! Rencanakan kunjungan Anda dan jangan lupa untuk melakukan RSVP.</p>
        </div>
        <?php for ($i = 1; $i <= 6; $i++) : ?>
            <div class="card-events">
                <div class="card">
                    <div class="row">
                        <div class="col-md-5">
                            <a href=""><img src="<?= base_url(); ?>assets/vendors/img/news/event<?= $i ?>.webp" class="img-events" alt=""></a>
                        </div>
                        <div class="col-md-7">
                            <div class="card-body">
                                <div class="periode-tgl">
                                    <span>12 Jun 2021 - 13 Jun 2021</span>
                                </div>
                                <div class="nama-event nama-event-d-v">
                                    <a href="">
                                        <h3>
                                            <?php
                                            $namaEvent = "Assembly Hall Menara Mandiri Wedding Tour";
                                            echo strlen($namaEvent) > 35 ? substr($namaEvent, 0, 35) . '...' : substr($namaEvent, 0, 35);
                                            ?>
                                        </h3>
                                    </a>
                                </div>
                                <div class="nama-event nama-event-m-v">
                                    <a href="">
                                        <h3>
                                            <?php
                                            $namaEvent = "Assembly Hall Menara Mandiri Wedding Tour";
                                            echo strlen($namaEvent) > 23 ? substr($namaEvent, 0, 23) . '...' : substr($namaEvent, 0, 23);
                                            ?>
                                        </h3>
                                    </a>
                                </div>
                                <div class="info-event info-event-d-v">
                                    <span class="info-lokasi">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <?php
                                        $lokasi = "Gedung Pernikahan Assembly Hall Menara Mandiri by IKK Indonesia, Assembly Hall Menara Mandiri, Jalan Jendral Sudirman, RT.5/RW.3, Senayan, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta, Indonesia";
                                        echo strlen($lokasi) > 65 ? substr($lokasi, 0, 65) . '...' : substr($lokasi, 0, 65);
                                        ?>
                                    </span>
                                    <br>
                                    <span class="info">
                                        <?php
                                        $kalimat = "Dear Bride & Groom,
                                        In this event you will experience the atmosphere of our elegant ballroom.
                                        We will provide you with a free consultation on your wedding preparation and you will have the chance to find solutions for your concerns regarding wedding preparations.                                    
                                        Mark your calendar on 12th & 13th June at 10:00 am until 05:00 pm.                                    
                                        It’s free! You just need to RSVP
                                        Check out our IG @ikkwedding.id and website ikkwedding.co.id or chat us via WA +62 811-100-501 for further info.";
                                        echo strlen($kalimat) > 223 ? substr($kalimat, 0, 223) . '...' : substr($kalimat, 0, 223);
                                        ?>
                                    </span>
                                </div>
                                <div class="info-event info-event-m-v">
                                    <span class="info-lokasi">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <?php
                                        $lokasi = "Gedung Pernikahan Assembly Hall Menara Mandiri by IKK Indonesia, Assembly Hall Menara Mandiri, Jalan Jendral Sudirman, RT.5/RW.3, Senayan, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta, Indonesia";
                                        echo strlen($lokasi) > 38 ? substr($lokasi, 0, 38) . '...' : substr($lokasi, 0, 38);
                                        ?>
                                    </span>
                                    <br>
                                    <span class="info">
                                        <?php
                                        $kalimat = "Dear Bride & Groom,
                                    In this event you will experience the atmosphere of our elegant ballroom.
                                    We will provide you with a free consultation on your wedding preparation and you will have the chance to find solutions for your concerns regarding wedding preparations.                                    
                                    Mark your calendar on 12th & 13th June at 10:00 am until 05:00 pm.                                    
                                    It’s free! You just need to RSVP
                                    Check out our IG @ikkwedding.id and website ikkwedding.co.id or chat us via WA +62 811-100-501 for further info.";
                                        echo strlen($kalimat) > 125 ? substr($kalimat, 0, 125) . '...' : substr($kalimat, 0, 125);
                                        ?>
                                    </span>
                                </div>
                                <div class="btn-event">
                                    <div class="row">
                                        <div class="col-6">
                                            <a href="">Selengkapnya</a>
                                        </div>
                                        <div class="col-6">
                                            <a href="" class="rsvp">rsvp</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endfor; ?>
    </div>
</section>