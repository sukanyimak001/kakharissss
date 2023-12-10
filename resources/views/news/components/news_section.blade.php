<div class="section news my-0">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane"
                type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Pengumuman
                Terbaru</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane"
                type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Berita & Artikel
                Kesehatan</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane"
                type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Rekrutmen</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="disabled-tab" data-bs-toggle="tab" data-bs-target="#disabled-tab-pane"
                type="button" role="tab" aria-controls="disabled-tab-pane" aria-selected="false">Seminar/Webinar
            </button>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
            tabindex="0">
            <div class="news-grid mt-3">
                @for ($i = 0; $i < 6; $i++)
                    <div class="grid-item">
                        <img src="{{ asset('assets/images/announcement1.png') }}" alt="" srcset="">
                        <div class="title">
                            Hasil Tes Kompetensi Dasar
                        </div>
                        <div class="content">
                            <div class="text">
                                Pengumuman mengenai hasil tes kompetensi dasar bagi para calon pegawai tidak tetap BLUD
                                non-PNS RSMM Jawa Timur.
                            </div>
                            <div class="highlight text-bold">
                                <strong>
                                    Baca Selengkapnya
                                </strong>
                                <svg width="8" height="14" viewBox="0 0 8 14" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 1.45964L6.83333 7.0013L1 12.543" stroke="#0F21FF" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
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
                                        <path d="M15 18L9 12L15 6" stroke="#D0D5DD" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9 18L15 12L9 6" stroke="#667085" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab"
            tabindex="0">
            <div class="news-list">
                @for ($i = 0; $i < 3; $i++)
                    <div class="news-item">
                        <img src="{{ asset('assets/images/article1.png') }}" alt="" srcset="">
                        <div class="content">
                            <div class="title">
                                Mengenal Deteksi Dini Pada Penyakit Stroke
                            </div>
                            <div class="text">
                                Pada tanggal 29 Oktober, seluruh dunia memperingati Hari Stroke dengan tujuan
                                meningkatkan
                                kesadaran dan pemahaman tentang penyakit ini. Peringatan Hari Stroke tahun 2023 memilih
                                tema
                                #GreaterThanStroke, yang mengajak masyarakat untuk mengenali dan mengatasi penyakit
                                stroke
                                dengan upaya lebih besar dan lebih komprehensif.
                            </div>
                            <div class="row">
                                <div class="col d-flex align-items-center">
                                    RSMM
                                    <span class="dot"></span>
                                    18 Menit yang lalu
                                </div>
                                <div class="col-auto">
                                    <a class="read-more" href="/news/mengenal-deteksi-dini-pada-penyakit-stroke">
                                        Baca Selengkapnya
                                        <svg width="28" height="29" viewBox="0 0 28 29" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect y="0.164062" width="28" height="28" rx="14"
                                                fill="white" fill-opacity="0.25" />
                                            <g clip-path="url(#clip0_224_645)">
                                                <path
                                                    d="M10.9199 20.1713C11.2466 20.4979 11.7732 20.4979 12.0999 20.1713L17.6399 14.6312C17.8999 14.3712 17.8999 13.9512 17.6399 13.6912L12.0999 8.15125C11.7732 7.82458 11.2466 7.82458 10.9199 8.15125C10.5932 8.47792 10.5932 9.00458 10.9199 9.33125L15.7466 14.1646L10.9132 18.9979C10.5932 19.3179 10.5932 19.8512 10.9199 20.1713Z"
                                                    fill="white" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_224_645">
                                                    <rect width="16" height="16" fill="white"
                                                        transform="translate(6 6.16406)" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
        <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab"
            tabindex="0">
            <div class="news-list">
                @for ($i = 0; $i < 3; $i++)
                    <div class="news-item">
                        <img src="{{ asset('assets/images/article1.png') }}" alt="" srcset="">
                        <div class="content">
                            <div class="title">
                                Mengenal Deteksi Dini Pada Penyakit Stroke
                            </div>
                            <div class="text">
                                Pada tanggal 29 Oktober, seluruh dunia memperingati Hari Stroke dengan tujuan
                                meningkatkan
                                kesadaran dan pemahaman tentang penyakit ini. Peringatan Hari Stroke tahun 2023 memilih
                                tema
                                #GreaterThanStroke, yang mengajak masyarakat untuk mengenali dan mengatasi penyakit
                                stroke
                                dengan upaya lebih besar dan lebih komprehensif.
                            </div>
                            <div class="row">
                                <div class="col d-flex align-items-center">
                                    RSMM
                                    <span class="dot"></span>
                                    18 Menit yang lalu
                                </div>
                                <div class="col-auto">
                                    <div class="read-more">
                                        Baca Selengkapnya
                                        <svg width="28" height="29" viewBox="0 0 28 29" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect y="0.164062" width="28" height="28" rx="14"
                                                fill="white" fill-opacity="0.25" />
                                            <g clip-path="url(#clip0_224_645)">
                                                <path
                                                    d="M10.9199 20.1713C11.2466 20.4979 11.7732 20.4979 12.0999 20.1713L17.6399 14.6312C17.8999 14.3712 17.8999 13.9512 17.6399 13.6912L12.0999 8.15125C11.7732 7.82458 11.2466 7.82458 10.9199 8.15125C10.5932 8.47792 10.5932 9.00458 10.9199 9.33125L15.7466 14.1646L10.9132 18.9979C10.5932 19.3179 10.5932 19.8512 10.9199 20.1713Z"
                                                    fill="white" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_224_645">
                                                    <rect width="16" height="16" fill="white"
                                                        transform="translate(6 6.16406)" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
        <div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab"
            tabindex="0">
            <div class="news-grid mt-3">
                @for ($i = 0; $i < 6; $i++)
                    <div class="grid-item">
                        <img src="{{ asset('assets/images/webinar1.png') }}" alt="" srcset="">
                        <div class="title">
                            Mengenal Deteksi Dini Pada Penyakit Stroke
                        </div>
                        <div class="content">
                            <div class="highlight">
                                Aula Gedung A Dinas Sosial Provinsi JATIM
                            </div>
                            <div class="highlight">
                                Jumat, 9 Juni 2023 12.15 - Selesai
                            </div>
                            <div class="text">
                                “WASPADAI GLAUKOMA, Si Pencuri Penglihatan, Kenali Tandanya Sejak Dini”
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-auto">
                                <div class="read-more">
                                    Daftar Sekarang
                                    <svg width="28" height="29" viewBox="0 0 28 29" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect y="0.164062" width="28" height="28" rx="14"
                                            fill="white" fill-opacity="0.25" />
                                        <g clip-path="url(#clip0_224_645)">
                                            <path
                                                d="M10.9199 20.1713C11.2466 20.4979 11.7732 20.4979 12.0999 20.1713L17.6399 14.6312C17.8999 14.3712 17.8999 13.9512 17.6399 13.6912L12.0999 8.15125C11.7732 7.82458 11.2466 7.82458 10.9199 8.15125C10.5932 8.47792 10.5932 9.00458 10.9199 9.33125L15.7466 14.1646L10.9132 18.9979C10.5932 19.3179 10.5932 19.8512 10.9199 20.1713Z"
                                                fill="white" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_224_645">
                                                <rect width="16" height="16" fill="white"
                                                    transform="translate(6 6.16406)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
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
                                        <path d="M15 18L9 12L15 6" stroke="#D0D5DD" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9 18L15 12L9 6" stroke="#667085" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
