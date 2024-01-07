<div class="section leaflet-list mt-5" data-aos="fade-up">
    <div style="width: 100%; text-align: center; margin-bottom: 12px;"><span
            style="color: #0F21FF; font-size: 32px; font-family: Poppins; font-weight: 600; line-height: 41.60px; word-wrap: break-word">Sakip</span><span
            style="color: black; font-size: 32px; font-family: Poppins; font-weight: 400; line-height: 41.60px; word-wrap: break-word">
            Masyarakat</span>
    </div>
    <div
        style="width: 100%; opacity: 0.50; text-align: center; color: black; font-size: 16px; font-family: Poppins; font-weight: 400; line-height: 25.60px; word-wrap: break-word">
        Survei dilakukan berdasarkan PERMENPAN No. 14 Tahun 2017 tentang Pedoman Penyusunan Survei Kepuasan Masyarakat
        Unit Penyelenggara Pelayanan Publik. Survei dilaksanakan oleh Sub Bagian UKM dan Litbang RSMM Jawa Timur
        Bekerjasama dengan WJP Consultation Network.
    </div>
    <div class="table-wrapper mt-5">
        <div class="row mb-3">
            <div class="col">
                <div class="title mb-2">
                    Sakip Rumah Sakit Mata Jawa Timur
                </div>
                <div class="subtitle">
                    Menampilkan 4 hingga 4 dari 4
                </div>
            </div>
            <div class="col-auto">
                <div class="search">
                    <input type="text" placeholder="Cari di sini...">
                </div>
            </div>
        </div>
        <table class="table">
            <tbody>
                @for ($i = 0; $i < 4; $i++)
                    <tr>
                        <td>{{ $i + 1 }}</td>
                        <td>
                            <img src="{{ asset('assets/images/pdf.png') }}" alt="">
                            {{ 
                            [
                                "Perjanjian Kinerja Perubahan Kepala UPT RSMM Jawa Timur 2021",
                                "Laporan Kinerja Pejabat Eselon III RSMM 2021",
                                "Perjanjian Kinerja ESELON III 2021",
                                "Laporan Kinerja Kepala Eselon III UPT RSMM 2020",
                            ][$i] }}
                        </td>
                        <td class="text-end">
                            <div class="badge">
                                Download
                            </div>
                        </td>
                        <td>
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_178_850)">
                                    <path
                                        d="M8.00008 3C4.66675 3 1.82008 5.07333 0.666748 8C1.82008 10.9267 4.66675 13 8.00008 13C11.3334 13 14.1801 10.9267 15.3334 8C14.1801 5.07333 11.3334 3 8.00008 3ZM8.00008 11.3333C6.16008 11.3333 4.66675 9.84 4.66675 8C4.66675 6.16 6.16008 4.66667 8.00008 4.66667C9.84008 4.66667 11.3334 6.16 11.3334 8C11.3334 9.84 9.84008 11.3333 8.00008 11.3333ZM8.00008 6C6.89341 6 6.00008 6.89333 6.00008 8C6.00008 9.10667 6.89341 10 8.00008 10C9.10675 10 10.0001 9.10667 10.0001 8C10.0001 6.89333 9.10675 6 8.00008 6Z"
                                        fill="#707070" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_178_850">
                                        <rect width="16" height="16" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </td>
                    </tr>
                @endfor
            </tbody>
        </table>
        <div class="row mt-4">
            <div class="col-auto">
                <div class="per-page">
                    <select>
                        <option value="5">5</option>
                        <option value="10" selected>10</option>
                        <option value="20">20</option>
                    </select>
                </div>
            </div>
            <div class="col"></div>
            <div class="col-auto">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15 18L9 12L15 6" stroke="#D0D5DD" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 18L15 12L9 6" stroke="#667085" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
