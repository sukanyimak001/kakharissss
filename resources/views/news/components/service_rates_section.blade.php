<div class="section service-rates news leaflet-list mb-3">
    <div style="width: 100%; text-align: center; margin-bottom: 8px;"><span
            style="color: #0F21FF; font-size: 32px; font-family: Poppins; font-weight: 600; line-height: 41.60px; word-wrap: break-word">Tarif
            Layanan</span><span
            style="color: black; font-size: 32px; font-family: Poppins; font-weight: 400; line-height: 41.60px; word-wrap: break-word">
            Kami</span>
    </div>
    <div style="width: 100%; opacity: 0.50; text-align: center"><span
            style="color: black; font-size: 16px; font-family: Poppins; font-weight: 400; line-height: 25.60px; word-wrap: break-word">Berdasarkan
        </span><span
            style="color: #0F21FF; font-size: 16px; font-family: Poppins; font-weight: 500; text-decoration: underline; line-height: 25.60px; word-wrap: break-word">Peraturan
            Gubernur Jawa Timur Nomor 45 Tahun 2023</span><span
            style="color: black; font-size: 16px; font-family: Poppins; font-weight: 400; line-height: 25.60px; word-wrap: break-word">
            tentang Perubahan atas Peraturan Gubernur Nomor 28 Tahun 2023 tentang Tarif Rumah Sakit Mata Masyarakat Jawa
            Timur yang Menerapkan Pola Keuangan Badan Layanan Umum Daerah</span>
    </div>

    <ul class="nav nav-tabs mt-4" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane"
                type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Pengumuman
                Rawat Jalan</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane"
                type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">
                Instalasi Gawat Darurat</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane"
                type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Bedah
                Refraktif</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="disabled-tab" data-bs-toggle="tab" data-bs-target="#disabled-tab-pane"
                type="button" role="tab" aria-controls="disabled-tab-pane" aria-selected="false">Rawat Inap
            </button>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
            tabindex="0">
            <table class="table">
                <tbody>
                    @for ($i = 0; $i < 10; $i++)
                        <tr>
                            <td>{{ $i + 1 }}</td>
                            <td>
                                Konsultasi Antar Sub Spesialis Umum
                            </td>
                            <td class="text-end">
                                <div class="badge">
                                    Rp 60.000
                                </div>
                            </td>
                            <td></td>
                        </tr>
                    @endfor
                </tbody>
            </table>
        </div>
        <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
            <table class="table">
                <tbody>
                    @for ($i = 0; $i < 10; $i++)
                        <tr>
                            <td>{{ $i + 1 }}</td>
                            <td>
                                Konsultasi Antar Sub Spesialis Umum
                            </td>
                            <td class="text-end">
                                <div class="badge">
                                    Rp 80.000
                                </div>
                            </td>
                            <td></td>
                        </tr>
                    @endfor
                </tbody>
            </table>
        </div>
        <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
            <table class="table">
                <tbody>
                    @for ($i = 0; $i < 10; $i++)
                        <tr>
                            <td>{{ $i + 1 }}</td>
                            <td>
                                Konsultasi Antar Sub Spesialis Umum
                            </td>
                            <td class="text-end">
                                <div class="badge">
                                    Rp 150.000
                                </div>
                            </td>
                            <td></td>
                        </tr>
                    @endfor
                </tbody>
            </table>
        </div>
        <div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0">
            <table class="table">
                <tbody>
                    @for ($i = 0; $i < 10; $i++)
                        <tr>
                            <td>{{ $i + 1 }}</td>
                            <td>
                                Konsultasi Antar Sub Spesialis Umum
                            </td>
                            <td class="text-end">
                                <div class="badge">
                                    Rp 65.000
                                </div>
                            </td>
                            <td></td>
                        </tr>
                    @endfor
                </tbody>
            </table>
        </div>
    </div>
</div>
