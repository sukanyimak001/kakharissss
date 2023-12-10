<div class="section dashboard-payment">
    <div class="doctor-details">
        <div class="header">
            <div class="title">
                Detail Informasi Dokter
            </div>
            <div class="secondary-btn">
                Ubah Dokter
            </div>
        </div>
        <div class="body">
            <div class="row align-items-center">
                <div class="col-auto">
                    <img src="{{ asset('assets/images/doct1.png') }}" alt="">
                </div>
                <div class="col">
                    <div class="title">
                        Dr. Elsa Rendyta, Sp.M
                        <span class="badge">
                            Spesialis Mata
                        </span>
                    </div>
                    <div class="table-text">
                        <span>
                            Tanggal
                        </span>
                        <span>
                            Senin, 11 November 2023
                        </span>
                    </div>
                    <div class="table-text">
                        <span>
                            Waktu
                        </span>
                        <span>
                            07.30 - 09.00
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="label">
        Pilih Jenis Pembayaran
    </div>
    <div class="payment-options">
        <div class="option">
            <input type="radio" name="" id="">
            <img src="{{ asset('assets/images/umum.png') }}" alt="">
            <div class="content">
                <div class="title">
                    Umum
                </div>
                <div class="text">
                    Biaya perawatan medis secara pribadi atau melalui asuransi kesehatan pribadi.
                </div>
            </div>
        </div>
        <div class="option">
            <input type="radio" name="" id="">
            <img src="{{ asset('assets/images/bpjs.png') }}" alt="">
            <div class="content">
                <div class="title">
                    JKN/BPJS/KIS
                </div>
                <div class="text">
                    Jaminan kesehatan oleh program pemerintah.
                </div>
            </div>
        </div>
        <div class="option">
            <input type="radio" name="" id="">
            <img src="{{ asset('assets/images/asuransi-lain.png') }}" alt="">
            <div class="content">
                <div class="title">
                    Asuransi Lain
                </div>
                <div class="text">
                    Asuransi kesehatan swasta yang membayar prima untuk perlindungan medis.
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-8">
            <div class="label mt-0">
                Pilih Jenis Pembayaran
            </div>
        </div>
        <div class="col">
            <div class="summary">
                <div class="header">
                    Pesanan
                </div>
                <div class="body">
                    <div class="text-group">
                        <span>Biaya Konsultasi Dokter</span>
                        <span class="amount">Rp. 50.000</span>
                    </div>
                    <div class="text-group">
                        <span>Biaya Layanan</span>
                        <span class="amount">Rp. 2.000</span>
                    </div>
                    <div class="text-group">
                        <span>Total Biaya</span>
                        <span class="total">Rp. 52.000</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="scheduleModal" tabindex="-1" aria-labelledby="scheduleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content schedule-modal">
            <div class="modal-body">
                <img src="{{ asset('assets/images/schedule-ilust.png') }}" width="325px">
                <div style="padding: 12px 24px;">
                    <div class="title">
                        Apakah Anda Yakin untuk Membuat Janji?
                    </div>
                    <div class="subtitle">
                        Apakah Anda yakin ingin membuat janji temu dengan Dr. Elsa Rendyta, Sp.M pada Senin, 11 November
                        2023?
                    </div>
                </div>
                <div class="actions">
                    <div class="cancel-btn" data-bs-dismiss="modal">
                        Batal
                    </div>
                    <button class="send-message" data-bs-dismiss="modal">
                        Ya, Buat Janji
                        <svg width="29" height="28" viewBox="0 0 29 28" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect x="0.5" width="28" height="28" rx="14" fill="white"
                                fill-opacity="0.25" />
                            <g clip-path="url(#clip0_112_3187)">
                                <path
                                    d="M11.4202 20.0062C11.7468 20.3329 12.2735 20.3329 12.6002 20.0062L18.1402 14.4662C18.4002 14.2062 18.4002 13.7862 18.1402 13.5262L12.6002 7.98621C12.2735 7.65954 11.7468 7.65954 11.4202 7.98621C11.0935 8.31288 11.0935 8.83954 11.4202 9.16621L16.2468 13.9995L11.4135 18.8329C11.0935 19.1529 11.0935 19.6862 11.4202 20.0062Z"
                                    fill="white" />
                            </g>
                            <defs>
                                <clipPath id="clip0_112_3187">
                                    <rect width="16" height="16" fill="white" transform="translate(6.5 6)" />
                                </clipPath>
                            </defs>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
