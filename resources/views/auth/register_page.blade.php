@extends('base.app')
@section('title', 'Syarat registrasi')
@push('style')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bs-stepper/dist/css/bs-stepper.min.css" />
@endpush

@section('content')
    <div class="auth-page">
        <div class="form-section">
            <div class="form-container">
                <img src="{{ asset('assets/images/logo.png') }}" class="logo">
                <div class="title mb-3">Daftar Pasien Baru</div>

                <div class="bs-stepper">
                    <div class="bs-stepper-header" role="tablist">
                        <!-- your steps here -->
                        <div class="step" data-target="#logins-part">
                            <button type="button" class="step-trigger" role="tab" aria-controls="logins-part"
                                id="logins-part-trigger">
                                <span class="bs-stepper-circle">1</span>
                                <span class="bs-stepper-label">Personal Info</span>
                            </button>
                        </div>
                        <div class="line"></div>
                        <div class="step" data-target="#information-part">
                            <button type="button" class="step-trigger" role="tab" aria-controls="information-part"
                                id="information-part-trigger">
                                <span class="bs-stepper-circle">2</span>
                                <span class="bs-stepper-label">Daftar Akun</span>
                            </button>
                        </div>
                    </div>
                    <div class="bs-stepper-content  p-0">
                        <div id="logins-part" class="content" role="tabpanel" aria-labelledby="logins-part-trigger">

                            <div class="form-container">
                                <div class="input-group mb-3 mt-5">
                                    <span class="input-group-text">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_110_2480)">
                                                <path
                                                    d="M12 2C6.48 2 2 6.48 2 12C2 17.52 6.48 22 12 22C17.52 22 22 17.52 22 12C22 6.48 17.52 2 12 2ZM7.07 18.28C7.5 17.38 10.12 16.5 12 16.5C13.88 16.5 16.51 17.38 16.93 18.28C15.57 19.36 13.86 20 12 20C10.14 20 8.43 19.36 7.07 18.28ZM18.36 16.83C16.93 15.09 13.46 14.5 12 14.5C10.54 14.5 7.07 15.09 5.64 16.83C4.62 15.49 4 13.82 4 12C4 7.59 7.59 4 12 4C16.41 4 20 7.59 20 12C20 13.82 19.38 15.49 18.36 16.83ZM12 6C10.06 6 8.5 7.56 8.5 9.5C8.5 11.44 10.06 13 12 13C13.94 13 15.5 11.44 15.5 9.5C15.5 7.56 13.94 6 12 6ZM12 11C11.17 11 10.5 10.33 10.5 9.5C10.5 8.67 11.17 8 12 8C12.83 8 13.5 8.67 13.5 9.5C13.5 10.33 12.83 11 12 11Z"
                                                    fill="#8E8E8F" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_110_2480">
                                                    <rect width="24" height="24" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </span>
                                    <input type="text" class="form-control" placeholder="NIK">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_110_2480)">
                                                <path
                                                    d="M12 2C6.48 2 2 6.48 2 12C2 17.52 6.48 22 12 22C17.52 22 22 17.52 22 12C22 6.48 17.52 2 12 2ZM7.07 18.28C7.5 17.38 10.12 16.5 12 16.5C13.88 16.5 16.51 17.38 16.93 18.28C15.57 19.36 13.86 20 12 20C10.14 20 8.43 19.36 7.07 18.28ZM18.36 16.83C16.93 15.09 13.46 14.5 12 14.5C10.54 14.5 7.07 15.09 5.64 16.83C4.62 15.49 4 13.82 4 12C4 7.59 7.59 4 12 4C16.41 4 20 7.59 20 12C20 13.82 19.38 15.49 18.36 16.83ZM12 6C10.06 6 8.5 7.56 8.5 9.5C8.5 11.44 10.06 13 12 13C13.94 13 15.5 11.44 15.5 9.5C15.5 7.56 13.94 6 12 6ZM12 11C11.17 11 10.5 10.33 10.5 9.5C10.5 8.67 11.17 8 12 8C12.83 8 13.5 8.67 13.5 9.5C13.5 10.33 12.83 11 12 11Z"
                                                    fill="#8E8E8F" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_110_2480">
                                                    <rect width="24" height="24" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </span>
                                    <input type="text" class="form-control" placeholder="Nama Lengkap">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M21 10H3M16 2V6M8 2V6M7.8 22H16.2C17.8802 22 18.7202 22 19.362 21.673C19.9265 21.3854 20.3854 20.9265 20.673 20.362C21 19.7202 21 18.8802 21 17.2V8.8C21 7.11984 21 6.27976 20.673 5.63803C20.3854 5.07354 19.9265 4.6146 19.362 4.32698C18.7202 4 17.8802 4 16.2 4H7.8C6.11984 4 5.27976 4 4.63803 4.32698C4.07354 4.6146 3.6146 5.07354 3.32698 5.63803C3 6.27976 3 7.11984 3 8.8V17.2C3 18.8802 3 19.7202 3.32698 20.362C3.6146 20.9265 4.07354 21.3854 4.63803 21.673C5.27976 22 6.11984 22 7.8 22Z"
                                                stroke="#8E8E8F" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                    <input type="text" class="form-control" placeholder="Tanggal Lahir">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M14.0497 6C15.0264 6.19057 15.924 6.66826 16.6277 7.37194C17.3314 8.07561 17.8091 8.97326 17.9997 9.95M14.0497 2C16.0789 2.22544 17.9713 3.13417 19.4159 4.57701C20.8606 6.01984 21.7717 7.91101 21.9997 9.94M10.2266 13.8631C9.02506 12.6615 8.07627 11.3028 7.38028 9.85323C7.32041 9.72854 7.29048 9.66619 7.26748 9.5873C7.18576 9.30695 7.24446 8.96269 7.41447 8.72526C7.46231 8.65845 7.51947 8.60129 7.63378 8.48698C7.98338 8.13737 8.15819 7.96257 8.27247 7.78679C8.70347 7.1239 8.70347 6.26932 8.27247 5.60643C8.15819 5.43065 7.98338 5.25585 7.63378 4.90624L7.43891 4.71137C6.90747 4.17993 6.64174 3.91421 6.35636 3.76987C5.7888 3.4828 5.11854 3.4828 4.55098 3.76987C4.2656 3.91421 3.99987 4.17993 3.46843 4.71137L3.3108 4.86901C2.78117 5.39863 2.51636 5.66344 2.31411 6.02348C2.08969 6.42298 1.92833 7.04347 1.9297 7.5017C1.93092 7.91464 2.01103 8.19687 2.17124 8.76131C3.03221 11.7947 4.65668 14.6571 7.04466 17.045C9.43264 19.433 12.295 21.0575 15.3284 21.9185C15.8928 22.0787 16.1751 22.1588 16.588 22.16C17.0462 22.1614 17.6667 22 18.0662 21.7756C18.4263 21.5733 18.6911 21.3085 19.2207 20.7789L19.3783 20.6213C19.9098 20.0898 20.1755 19.8241 20.3198 19.5387C20.6069 18.9712 20.6069 18.3009 20.3198 17.7333C20.1755 17.448 19.9098 17.1822 19.3783 16.6508L19.1835 16.4559C18.8339 16.1063 18.6591 15.9315 18.4833 15.8172C17.8204 15.3862 16.9658 15.3862 16.3029 15.8172C16.1271 15.9315 15.9523 16.1063 15.6027 16.4559C15.4884 16.5702 15.4313 16.6274 15.3644 16.6752C15.127 16.8453 14.7828 16.904 14.5024 16.8222C14.4235 16.7992 14.3612 16.7693 14.2365 16.7094C12.7869 16.0134 11.4282 15.0646 10.2266 13.8631Z"
                                                stroke="#AAAAAA" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                    <input type="text" class="form-control" placeholder="Nomor Telepon">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 13C13.6569 13 15 11.6569 15 10C15 8.34315 13.6569 7 12 7C10.3431 7 9 8.34315 9 10C9 11.6569 10.3431 13 12 13Z"
                                                stroke="#8E8E8F" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M12 22C16 18 20 14.4183 20 10C20 5.58172 16.4183 2 12 2C7.58172 2 4 5.58172 4 10C4 14.4183 8 18 12 22Z"
                                                stroke="#8E8E8F" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                    <input type="text" class="form-control" placeholder="Alamat">
                                </div>
                                <button id="next" class="primary-button"
                                    style="margin: 39px 0px; align-self: flex-end;">
                                    Selanjutnya
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
                                                <rect width="16" height="16" fill="white"
                                                    transform="translate(6.5 6)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </button>
                            </div>

                        </div>
                        <div id="information-part" class="content" role="tabpanel"
                            aria-labelledby="information-part-trigger">

                            <div class="form-container">
                                <div class="input-group mb-3 mt-5">
                                    <span class="input-group-text">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2 7L7.19384 10.4626C7.49349 10.6623 7.64331 10.7622 7.8054 10.833C7.94927 10.8958 8.10003 10.9414 8.25458 10.969C8.42869 11 8.60876 11 8.96888 11H15.0311C15.3912 11 15.5713 11 15.7454 10.969C15.9 10.9414 16.0507 10.8958 16.1946 10.833C16.3567 10.7622 16.5065 10.6623 16.8062 10.4626L22 7M6.8 20H17.2C18.8802 20 19.7202 20 20.362 19.673C20.9265 19.3854 21.3854 18.9265 21.673 18.362C22 17.7202 22 16.8802 22 15.2V8.8C22 7.11984 22 6.27976 21.673 5.63803C21.3854 5.07354 20.9265 4.6146 20.362 4.32698C19.7202 4 18.8802 4 17.2 4H6.8C5.11984 4 4.27976 4 3.63803 4.32698C3.07354 4.6146 2.6146 5.07354 2.32698 5.63803C2 6.27976 2 7.11984 2 8.8V15.2C2 16.8802 2 17.7202 2.32698 18.362C2.6146 18.9265 3.07354 19.3854 3.63803 19.673C4.27976 20 5.11984 20 6.8 20Z"
                                                stroke="#8E8E8F" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                    <input type="text" class="form-control" placeholder="Email">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M17 10V8C17 5.23858 14.7614 3 12 3C9.23858 3 7 5.23858 7 8V10M12 14.5V16.5M8.8 21H15.2C16.8802 21 17.7202 21 18.362 20.673C18.9265 20.3854 19.3854 19.9265 19.673 19.362C20 18.7202 20 17.8802 20 16.2V14.8C20 13.1198 20 12.2798 19.673 11.638C19.3854 11.0735 18.9265 10.6146 18.362 10.327C17.7202 10 16.8802 10 15.2 10H8.8C7.11984 10 6.27976 10 5.63803 10.327C5.07354 10.6146 4.6146 11.0735 4.32698 11.638C4 12.2798 4 13.1198 4 14.8V16.2C4 17.8802 4 18.7202 4.32698 19.362C4.6146 19.9265 5.07354 20.3854 5.63803 20.673C6.27976 21 7.11984 21 8.8 21Z"
                                                stroke="#8E8E8F" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                    <input type="text" class="form-control" placeholder="Password">
                                    <span class="input-group-text">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.42012 12.7132C2.28394 12.4975 2.21584 12.3897 2.17772 12.2234C2.14909 12.0985 2.14909 11.9015 2.17772 11.7766C2.21584 11.6103 2.28394 11.5025 2.42012 11.2868C3.54553 9.50484 6.8954 5 12.0004 5C17.1054 5 20.4553 9.50484 21.5807 11.2868C21.7169 11.5025 21.785 11.6103 21.8231 11.7766C21.8517 11.9015 21.8517 12.0985 21.8231 12.2234C21.785 12.3897 21.7169 12.4975 21.5807 12.7132C20.4553 14.4952 17.1054 19 12.0004 19C6.8954 19 3.54553 14.4952 2.42012 12.7132Z"
                                                stroke="#8E8E8F" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M12.0004 15C13.6573 15 15.0004 13.6569 15.0004 12C15.0004 10.3431 13.6573 9 12.0004 9C10.3435 9 9.0004 10.3431 9.0004 12C9.0004 13.6569 10.3435 15 12.0004 15Z"
                                                stroke="#8E8E8F" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M17 10V8C17 5.23858 14.7614 3 12 3C9.23858 3 7 5.23858 7 8V10M12 14.5V16.5M8.8 21H15.2C16.8802 21 17.7202 21 18.362 20.673C18.9265 20.3854 19.3854 19.9265 19.673 19.362C20 18.7202 20 17.8802 20 16.2V14.8C20 13.1198 20 12.2798 19.673 11.638C19.3854 11.0735 18.9265 10.6146 18.362 10.327C17.7202 10 16.8802 10 15.2 10H8.8C7.11984 10 6.27976 10 5.63803 10.327C5.07354 10.6146 4.6146 11.0735 4.32698 11.638C4 12.2798 4 13.1198 4 14.8V16.2C4 17.8802 4 18.7202 4.32698 19.362C4.6146 19.9265 5.07354 20.3854 5.63803 20.673C6.27976 21 7.11984 21 8.8 21Z"
                                                stroke="#8E8E8F" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                    <input type="text" class="form-control" placeholder="Confirm Password">
                                    <span class="input-group-text">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.42012 12.7132C2.28394 12.4975 2.21584 12.3897 2.17772 12.2234C2.14909 12.0985 2.14909 11.9015 2.17772 11.7766C2.21584 11.6103 2.28394 11.5025 2.42012 11.2868C3.54553 9.50484 6.8954 5 12.0004 5C17.1054 5 20.4553 9.50484 21.5807 11.2868C21.7169 11.5025 21.785 11.6103 21.8231 11.7766C21.8517 11.9015 21.8517 12.0985 21.8231 12.2234C21.785 12.3897 21.7169 12.4975 21.5807 12.7132C20.4553 14.4952 17.1054 19 12.0004 19C6.8954 19 3.54553 14.4952 2.42012 12.7132Z"
                                                stroke="#8E8E8F" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M12.0004 15C13.6573 15 15.0004 13.6569 15.0004 12C15.0004 10.3431 13.6573 9 12.0004 9C10.3435 9 9.0004 10.3431 9.0004 12C9.0004 13.6569 10.3435 15 12.0004 15Z"
                                                stroke="#8E8E8F" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2 7L7.19384 10.4626C7.49349 10.6623 7.64331 10.7622 7.8054 10.833C7.94927 10.8958 8.10003 10.9414 8.25458 10.969C8.42869 11 8.60876 11 8.96888 11H15.0311C15.3912 11 15.5713 11 15.7454 10.969C15.9 10.9414 16.0507 10.8958 16.1946 10.833C16.3567 10.7622 16.5065 10.6623 16.8062 10.4626L22 7M6.8 20H17.2C18.8802 20 19.7202 20 20.362 19.673C20.9265 19.3854 21.3854 18.9265 21.673 18.362C22 17.7202 22 16.8802 22 15.2V8.8C22 7.11984 22 6.27976 21.673 5.63803C21.3854 5.07354 20.9265 4.6146 20.362 4.32698C19.7202 4 18.8802 4 17.2 4H6.8C5.11984 4 4.27976 4 3.63803 4.32698C3.07354 4.6146 2.6146 5.07354 2.32698 5.63803C2 6.27976 2 7.11984 2 8.8V15.2C2 16.8802 2 17.7202 2.32698 18.362C2.6146 18.9265 3.07354 19.3854 3.63803 19.673C4.27976 20 5.11984 20 6.8 20Z"
                                                stroke="#8E8E8F" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                    <input type="text" class="form-control" placeholder="Nomor JKN">
                                </div>
                                <div
                                    style="width: 100%; margin-top: 4px; margin-bottom: 16px; color: #F04438; font-size: 16px; font-family: Poppins; font-weight: 400; line-height: 22.40px; word-wrap: break-word">
                                    *Khusus pasien BPJS</div>
                                <img src="{{ asset('assets/images/upload-ktp.png') }}" alt="">

                                <div class="row w-100">
                                    <div class="col">
                                        <button id="prev" class="secondary-button w-100" style="margin: 39px 0px;">
                                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect width="28" height="28" rx="14"
                                                    transform="matrix(-1 0 0 1 28 0)" fill="#8E8E8F"
                                                    fill-opacity="0.25" />
                                                <g clip-path="url(#clip0_110_2585)">
                                                    <path
                                                        d="M17.0798 20.0062C16.7532 20.3329 16.2265 20.3329 15.8998 20.0062L10.3598 14.4662C10.0998 14.2062 10.0998 13.7862 10.3598 13.5262L15.8998 7.98621C16.2265 7.65954 16.7532 7.65954 17.0798 7.98621C17.4065 8.31288 17.4065 8.83954 17.0798 9.16621L12.2532 13.9995L17.0865 18.8329C17.4065 19.1529 17.4065 19.6862 17.0798 20.0062Z"
                                                        fill="#8E8E8F" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_110_2585">
                                                        <rect width="16" height="16" fill="white"
                                                            transform="matrix(-1 0 0 1 22 6)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>

                                            Sebelumnya
                                        </button>
                                    </div>
                                    <div class="col">
                                        <button onclick="window.location='/dashboard'" class="primary-button w-100"
                                            style="margin: 39px 0px;">
                                            Daftar
                                            <svg width="29" height="28" viewBox="0 0 29 28" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect x="0.5" width="28" height="28" rx="14"
                                                    fill="white" fill-opacity="0.25" />
                                                <g clip-path="url(#clip0_112_3187)">
                                                    <path
                                                        d="M11.4202 20.0062C11.7468 20.3329 12.2735 20.3329 12.6002 20.0062L18.1402 14.4662C18.4002 14.2062 18.4002 13.7862 18.1402 13.5262L12.6002 7.98621C12.2735 7.65954 11.7468 7.65954 11.4202 7.98621C11.0935 8.31288 11.0935 8.83954 11.4202 9.16621L16.2468 13.9995L11.4135 18.8329C11.0935 19.1529 11.0935 19.6862 11.4202 20.0062Z"
                                                        fill="white" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_112_3187">
                                                        <rect width="16" height="16" fill="white"
                                                            transform="translate(6.5 6)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner">
            <img src="{{ asset('assets/images/register.png') }}" alt="" srcset="">
        </div>
    </div>
@endsection

@push('script')
    <script src="https://cdn.jsdelivr.net/npm/bs-stepper/dist/js/bs-stepper.min.js"></script>
    <script>
        $(document).ready(function() {
            var stepper = new Stepper($('.bs-stepper')[0]);

            $("#next").click(function() {
                stepper.next();
            })
            $("#prev").click(function() {
                stepper.to(1);
            })
        })
    </script>
@endpush
