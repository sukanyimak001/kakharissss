<div class="section dashboard-home">
    <div class="row">
        <div class="col">
            <div class="dashboard-header">
                <img src="{{ asset('assets/images/dashboard-header.png') }}" width="100%">
                <a class="action" href="/dashboard/service">
                    Buat Janji
                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <rect width="28" height="28" rx="14" fill="#0F21FF" fill-opacity="0.25" />
                        <g clip-path="url(#clip0_328_1075)">
                            <path
                                d="M10.9197 20.0072C11.2463 20.3339 11.773 20.3339 12.0997 20.0072L17.6397 14.4672C17.8997 14.2072 17.8997 13.7872 17.6397 13.5272L12.0997 7.98719C11.773 7.66052 11.2463 7.66052 10.9197 7.98719C10.593 8.31385 10.593 8.84052 10.9197 9.16719L15.7463 14.0005L10.913 18.8339C10.593 19.1539 10.593 19.6872 10.9197 20.0072Z"
                                fill="#0F21FF" />
                        </g>
                        <defs>
                            <clipPath id="clip0_328_1075">
                                <rect width="16" height="16" fill="white" transform="translate(6 6)" />
                            </clipPath>
                        </defs>
                    </svg>

                </a>
            </div>
            <div class="table-wrapper">
                <div class="title">
                    History Booking Antrian
                </div>
                <div class="subtitle">
                    5 Data No Antrian
                </div>
                <table class="table">
                    <tbody>
                        @for ($i = 0; $i < 5; $i++)
                            <tr>
                                <td>
                                    <span>2023-05-25 14:43:30</span>
                                </td>
                                <td>
                                    Klinik SP Umum/Pasien Baru
                                </td>
                                <td>
                                    <span>29 Mei 2023</span>
                                </td>
                                <td>
                                    <span class="link">
                                        C.005
                                    </span>
                                </td>
                                <td>
                                    <span class="link">
                                        GY-2FVY59
                                    </span>
                                </td>
                                <td>
                                    <a class="badge" href="/dashboard/pdf" target="_blank">
                                        <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.35645 10.5753L8.35645 1" stroke="#0F21FF" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M10.6748 8.24609L8.35594 10.5745L6.03708 8.24609" stroke="#0F21FF"
                                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            <path
                                                d="M12.0404 4.76367H12.7823C14.4006 4.76367 15.7119 6.07499 15.7119 7.69406L15.7119 11.5779C15.7119 13.1922 14.4038 14.5004 12.7895 14.5004L3.93072 14.5004C2.31245 14.5004 1.00033 13.1882 1.00033 11.57L1.00033 7.68531C1.00033 6.07181 2.30926 4.76367 3.92277 4.76367H4.67187"
                                                stroke="#0F21FF" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                        Download
                                    </a>
                                </td>
                            </tr>
                        @endfor
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-auto">
            <div class="table-wrapper mt-0" style="width: 434px;">
                <div class="title">
                    Monitoring Antrian
                </div>
                <div class="subtitle">
                    11 Kode Antrian
                </div>
                <table class="table">
                    <tbody>
                        @for ($i = 0; $i < 11; $i++)
                            <tr>
                                <td>
                                    OP. Katarak Sehari Kemarin
                                </td>
                                <td>
                                    <div class="badge">
                                        A.008
                                    </div>
                                </td>
                            </tr>
                        @endfor
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
