<div class="section survey news leaflet-list mb-3 service-rates">
    <div style="width: 100%; text-align: center"><span
            style="color: black; font-size: 24px; font-family: Poppins; font-weight: 400; line-height: 31.20px; word-wrap: break-word">Hasil
        </span><span
            style="color: #0F21FF; font-size: 24px; font-family: Poppins; font-weight: 600; line-height: 31.20px; word-wrap: break-word">Survey
            Kepuasan</span><span
            style="color: black; font-size: 24px; font-family: Poppins; font-weight: 400; line-height: 31.20px; word-wrap: break-word">
            Masyarakat</span></div>
    <div
        style="width: 100%; opacity: 0.50; text-align: center; color: black; font-size: 16px; font-family: Poppins; font-weight: 400; line-height: 25.60px; word-wrap: break-word">
        Survei dilakukan berdasarkan PERMENPAN No. 14 Tahun 2017 tentang Pedoman Penyusunan Survei Kepuasan Masyarakat
        Unit Penyelenggara Pelayanan Publik. Survei dilaksanakan oleh Sub Bagian UKM dan Litbang RSMM Jawa Timur
        Bekerjasama dengan WJP Consultation Network.
    </div>
    <div class="row mt-3">
        <div class="col">
            <figure>
                <img src="{{ asset('assets/images/certificate1.png') }}" alt="">
            </figure>
        </div>
        <div class="col">
            <figure>
                <img src="{{ asset('assets/images/certificate2.png') }}" alt="">
            </figure>
        </div>
        <div class="col">
            <figure>
                <img src="{{ asset('assets/images/certificate3.png') }}" alt="">
            </figure>
        </div>
    </div>
    <div class="table-wrapper">
        <div class="title mb-1">
            Survey Kepuasan Masyarakat Tahun 2022
        </div>
        <div class="subtitle mb-3">
            Tahun 2022 dilakukan survei kepuasan masyarakat secara mandiri dengan mengacu pada PermenPAN RB nomor 90
            tahun 2021 tentang wilayah pembangunan dan evaluasi zona integritas menuju wilayah bebas korupsi dan wilayah
            birokrasi bersih dan melayani di instansi pemerintah. Berikut untuk tahun 2022 & 2023 :
        </div>
        <table class="table">
            <tbody>
                @for ($i = 0; $i < 5; $i++)
                    <tr>
                        <td>{{ $i + 1 }}</td>
                        <td>
                            Triwulan {{ ['I', 'II', 'III', 'IV'][$i % 4] }}
                        </td>
                        <td class="text-center">
                            2022
                        </td>
                        <td class="text-center">
                            <div class="badge mx-5">
                                84.10
                            </div>
                        </td>
                        <td class="text-start">
                            {{ ['B - Baik', 'A - Sangat Baik'][$i % 2] }}
                        </td>
                    </tr>
                @endfor
            </tbody>
        </table>
    </div>
</div>
