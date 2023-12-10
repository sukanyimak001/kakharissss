<div class="header">
    <div class="info">
        <div class="info-item">
            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="31.9999" height="31.9992" rx="15.9996" fill="#0F21FF" />
                <g opacity="0.4">
                    <path
                        d="M17.9345 10.7914C17.5537 10.7211 17.2039 10.9641 17.1314 11.3358C17.0589 11.7076 17.3027 12.0705 17.6732 12.1433C18.7885 12.3607 19.6498 13.2241 19.8681 14.3434C19.9302 14.6655 20.2138 14.9006 20.5405 14.9006C20.5843 14.9006 20.6281 14.8966 20.6727 14.8886C21.0432 14.8142 21.287 14.4521 21.2145 14.0795C20.8886 12.4079 19.602 11.1168 17.9345 10.7914Z"
                        fill="white" />
                    <path
                        d="M17.8848 8.00634C17.7064 7.98076 17.5271 8.03353 17.3845 8.14705C17.2379 8.26217 17.1463 8.42845 17.1264 8.61472C17.0842 8.99126 17.3558 9.33183 17.7319 9.3742C20.3251 9.6636 22.3407 11.6838 22.6323 14.2852C22.6714 14.6338 22.9638 14.8968 23.3127 14.8968C23.339 14.8968 23.3645 14.8952 23.3908 14.892C23.5732 14.872 23.7358 14.7817 23.8505 14.6378C23.9644 14.4939 24.0162 14.3148 23.9955 14.1317C23.6322 10.886 21.1202 8.3669 17.8848 8.00634Z"
                        fill="white" />
                </g>
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M15.2251 16.7767C18.4163 19.9671 19.1402 16.2762 21.172 18.3066C23.1309 20.265 24.2567 20.6574 21.7749 23.1386C21.464 23.3884 19.4889 26.3942 12.5475 19.4545C5.60531 12.514 8.60925 10.5368 8.85914 10.226C11.347 7.73791 11.7326 8.87033 13.6914 10.8287C15.7232 12.86 12.034 13.5863 15.2251 16.7767Z"
                    fill="white" />
            </svg>
            Emergensi (031) 820-10000
        </div>
        <div class="info-item">
            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="32" height="32" rx="16" fill="#0F21FF" />
                <path
                    d="M16 8C20.424 8 24 11.584 24 16C24 20.424 20.424 24 16 24C11.584 24 8 20.424 8 16C8 11.584 11.584 8 16 8ZM15.72 11.944C15.392 11.944 15.12 12.208 15.12 12.544V16.584C15.12 16.792 15.232 16.984 15.416 17.096L18.552 18.968C18.648 19.024 18.752 19.056 18.864 19.056C19.064 19.056 19.264 18.952 19.376 18.76C19.544 18.48 19.456 18.112 19.168 17.936L16.32 16.24V12.544C16.32 12.208 16.048 11.944 15.72 11.944Z"
                    fill="white" />
            </svg>

            09:00 - 20:00 Everyday
        </div>
        <div class="info-item">
            <svg width="33" height="32" viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="33" height="32" rx="16" fill="#0F21FF" />
                <path
                    d="M16.495 8C20.0606 8 23 10.9743 23 14.6542C23 16.5086 22.3554 18.2301 21.2943 19.6893C20.1238 21.2988 18.6811 22.7012 17.0571 23.8019C16.6854 24.0563 16.35 24.0755 15.9421 23.8019C14.3089 22.7012 12.8662 21.2988 11.7057 19.6893C10.6439 18.2301 10 16.5086 10 14.6542C10 10.9743 12.9394 8 16.495 8ZM16.495 12.6215C15.316 12.6215 14.3544 13.6382 14.3544 14.8614C14.3544 16.0942 15.316 17.0637 16.495 17.0637C17.6748 17.0637 18.6456 16.0942 18.6456 14.8614C18.6456 13.6382 17.6748 12.6215 16.495 12.6215Z"
                    fill="white" />
            </svg>

            Jl. Ketintang Baru Selatan I No.1
        </div>
    </div>
    <div class="navbar">
        <img class="logo" src="{{ asset('assets/images/logo.png') }}" alt="" srcset="">
        <div class="nav-items">
            <a href="/" class="nav-item {{ Route::is('landing') ? 'active' : '' }}">
                Beranda
            </a>
            <div class="nav-item {{ Route::is('services.*') ? 'active' : '' }}">
                <div class="dropdown">
                    <div class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Layanan Unggulan
                    </div>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/services/lasik">LASIK</a></li>
                        <li><a class="dropdown-item" href="/services/vitreo-retina">Vitero Retina</a></li>
                        <li><a class="dropdown-item" href="/services/poli-executive">Poli Eksekutif (VIP)</a></li>
                        <li><a class="dropdown-item" href="/services/sigalon">SIGALON</a></li>
                    </ul>
                </div>
            </div>
            <div class="nav-item">
                <div class="dropdown">
                    <div class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"
                        data-bs-auto-close="outside">
                        Fasilitas Layanan
                    </div>
                    <ul class="dropdown-menu">
                        <div class="mega-menu accordion" id="fasilitasLayanan">
                            <div class="highlighted">
                                <a id="pelayananMedisHead" data-bs-toggle="collapse" data-bs-target="#pelayananMedis"
                                    aria-expanded="true" aria-controls="fasilitasPenunjang">
                                    <div class="title">
                                        Pelayanan Medis
                                    </div>

                                    <div class="text">
                                        RSMM berkomitmen untuk memberikan pelayanan medis berkualitas kepada pasien.
                                    </div>
                                </a>
                                <a class="collapsed" id="fasilitasPenunjangHead" data-bs-toggle="collapse"
                                    data-bs-target="#fasilitasPenunjang" aria-expanded="true"
                                    aria-controls="fasilitasPenunjang">
                                    <div class="title">
                                        Fasilitas Penunjang
                                    </div>
                                    <div class="text">
                                        RSMM Jawa Timur juga menawarkan beragam fasilitas penunjang yang mendukung
                                        proses perawatan mata.
                                    </div>
                                </a>
                            </div>
                            <div class="list accordion-collapse collapse show" id="pelayananMedis"
                                aria-labelledby="pelayananMedisHead" data-bs-parent="#fasilitasLayanan">
                                <div class="label">Pelayanan Medis</div>
                                <li><a class="dropdown-item" href="#">Gawat Darurat</a></li>
                                <li><a class="dropdown-item" href="#">Rawat Jalan</a></li>
                                <li><a class="dropdown-item" href="#">Bedah Sentral</a></li>
                                <li><a class="dropdown-item" href="#">Rawat Inap</a></li>
                            </div>
                            <div class="list collapse collapse-horizontal" id="fasilitasPenunjang"
                                aria-labelledby="fasilitasPenunjangHead" data-bs-parent="#fasilitasLayanan">
                                <div class="label">Fasilitas Penunjang</div>
                                <li><a class="dropdown-item" href="#">Instalasi Farmasi</a></li>
                                <li><a class="dropdown-item" href="#">Instalasi Laboratorium</a></li>
                                <li><a class="dropdown-item" href="#">Instalasi CSSD</a></li>
                                <li><a class="dropdown-item" href="#">Unit Diagnostik</a></li>
                                <li><a class="dropdown-item" href="#">Unit Laundry and Linen</a></li>
                                <li><a class="dropdown-item" href="#">Unit Gizi</a></li>
                                <li><a class="dropdown-item" href="#">Optik</a></li>
                            </div>
                        </div>
                    </ul>
                </div>
            </div>
            <div class="nav-item {{ Route::is('news.*') ? 'active' : '' }}">
                <div class="dropdown">
                    <div class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"
                        data-bs-auto-close="outside">
                        Berita & Informasi
                    </div>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <div class="mega-menu accordion" id="beritaInformasi">
                            <div class="highlighted">
                                <a id="beritaInformasiSectionHead" data-bs-toggle="collapse"
                                    data-bs-target="#beritaInformasiSection" aria-expanded="true"
                                    aria-controls="informasiPublik">
                                    <div class="title">
                                        Berita & Informasi
                                    </div>

                                    <div class="text">
                                        Temukan berita terkini dan wawasan yang relevan untuk menjaga Anda tetap
                                        informasi. </div>
                                </a>
                                <a class="collapsed" id="informasiPublikHead" data-bs-toggle="collapse"
                                    data-bs-target="#informasiPublik" aria-expanded="true"
                                    aria-controls="informasiPublik">
                                    <div class="title">
                                        Informasi Publik
                                    </div>
                                    <div class="text">
                                        Temukan informasi sehingga Anda dapat merasa lebih terhubung dengan layanan
                                        kesehatan mata yang kami sediakan.
                                    </div>
                                </a>
                            </div>
                            <div class="list accordion-collapse collapse show" id="beritaInformasiSection"
                                aria-labelledby="beritaInformasiSectionHead" data-bs-parent="#beritaInformasi">
                                <div class="label">Berita & Informasi</div>
                                <li><a class="dropdown-item" href="/news?page=latest-info">Pengumuman Terbaru</a></li>
                                <li><a class="dropdown-item" href="/news?page=news-and-article">Berita & Artikel Kesehatan</a></li>
                                <li><a class="dropdown-item" href="/news/leaflet">Leaflet</a></li>
                                <li><a class="dropdown-item" href="#">Rekrutmen</a></li>
                                <li><a class="dropdown-item" href="/news?page=webinar">Seminar/Webinar</a></li>
                            </div>
                            <div class="list collapse collapse-horizontal" id="informasiPublik"
                                aria-labelledby="informasiPublikHead" data-bs-parent="#beritaInformasi">
                                <div class="label">Informasi Publik</div>
                                <li><a class="dropdown-item" href="/news/service-flow">Alur Pelayanan</a></li>
                                <li><a class="dropdown-item" href="/news/rates">Tarif Layanan</a></li>
                                <li><a class="dropdown-item" href="/news/survey">Survey Kepuasan Masyarakat</a></li>
                                <li><a class="dropdown-item" href="/news/indicator">Indikator Mutu</a></li>
                                <li><a class="dropdown-item" href="#">Rencana Pengembangan</a></li>
                                <li><a class="dropdown-item" href="/news/public-service">Standar Pelayanan Publik</a></li>
                                <li><a class="dropdown-item" href="/news/sakip">SAKIP</a></li>
                            </div>
                        </div>
                    </ul>
                </div>
            </div>
            <div class="nav-item">
                <div class="dropdown">
                    <div class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        PPID
                    </div>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Profil PPID</a></li>
                        <li><a class="dropdown-item" href="#">Layanan Informasi PPID</a></li>
                        <li><a class="dropdown-item" href="#">Daftar Informasi PPID</a></li>
                    </ul>
                </div>
            </div>
            <div class="nav-item">
                Zona Integritas
            </div>
            <div class="nav-item">
                <div class="dropdown">
                    <div class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Saran & Pengaduan
                    </div>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Pengaduan</a></li>
                        <li><a class="dropdown-item" href="#">Kontak</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
