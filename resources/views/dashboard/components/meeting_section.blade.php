<div class="section dashboard-meeting">
    <div class="title">
        Pilih Layanan Perawatan Mata
    </div>
    <div class="grid">
        @for ($i = 1; $i < 11; $i++)
            <div class="grid-item">
                <img src="{{ asset("assets/images/svc$i.png") }}" alt="">
                <a class="text" href="/dashboard/service/detail">
                    {{ [
                        'OP Katarak Sehari Kemarin',
                        'Operasi Hari Ini',
                        'Klinik SP Umum/Pasien Baru',
                        'Klinik Mata Anak & Strabism',
                        'Klinik Vitreo Retina',
                        'Klinik Infeksi & Imunologi',
                        'Klinik Glaukoma',
                        'Laser',
                        'Bedah Minor',
                        'Klinik Low Vision',
                    ][$i - 1] }}
                </a>
            </div>
        @endfor
    </div>
</div>
