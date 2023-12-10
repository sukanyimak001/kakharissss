@extends('base.app')
@section('title', 'Syarat registrasi')
@section('content')
    <div class="auth-page">
        <div class="form-section">
            <div class="form-container">
                <img src="{{ asset("assets/images/logo.png") }}" class="logo">
                <div class="title">Login</div>
                <div class="warning">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M11.9998 9.00023V13.0002M11.9998 17.0002H12.0098M10.6151 3.89195L2.39019 18.0986C1.93398 18.8866 1.70588 19.2806 1.73959 19.6039C1.769 19.886 1.91677 20.1423 2.14613 20.309C2.40908 20.5002 2.86435 20.5002 3.77487 20.5002H20.2246C21.1352 20.5002 21.5904 20.5002 21.8534 20.309C22.0827 20.1423 22.2305 19.886 22.2599 19.6039C22.2936 19.2806 22.0655 18.8866 21.6093 18.0986L13.3844 3.89195C12.9299 3.10679 12.7026 2.71421 12.4061 2.58235C12.1474 2.46734 11.8521 2.46734 11.5935 2.58235C11.2969 2.71421 11.0696 3.10679 10.6151 3.89195Z"
                            stroke="#DC6803" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                    <p>
                        Jika sudah memiliki nomor rekam medis, mohon login menggunakan nomor rekam medis
                    </p>
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
                    <input type="text" class="form-control" placeholder="NIK/No.Rekam Medis">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M21 10H3M16 2V6M8 2V6M7.8 22H16.2C17.8802 22 18.7202 22 19.362 21.673C19.9265 21.3854 20.3854 20.9265 20.673 20.362C21 19.7202 21 18.8802 21 17.2V8.8C21 7.11984 21 6.27976 20.673 5.63803C20.3854 5.07354 19.9265 4.6146 19.362 4.32698C18.7202 4 17.8802 4 16.2 4H7.8C6.11984 4 5.27976 4 4.63803 4.32698C4.07354 4.6146 3.6146 5.07354 3.32698 5.63803C3 6.27976 3 7.11984 3 8.8V17.2C3 18.8802 3 19.7202 3.32698 20.362C3.6146 20.9265 4.07354 21.3854 4.63803 21.673C5.27976 22 6.11984 22 7.8 22Z"
                                stroke="#8E8E8F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </span>
                    <input type="text" class="form-control" placeholder="Tanggal Lahir">
                </div>
                <div class="captcha mb-3">
                    <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M2 14.5C2 14.5 2.12132 15.3492 5.63604 18.864C9.15076 22.3787 14.8492 22.3787 18.364 18.864C19.6092 17.6187 20.4133 16.0993 20.7762 14.5M2 14.5V20.5M2 14.5H8M22 10.5C22 10.5 21.8787 9.65076 18.364 6.13604C14.8492 2.62132 9.15076 2.62132 5.63604 6.13604C4.39076 7.38131 3.58669 8.90072 3.22383 10.5M22 10.5V4.5M22 10.5H16"
                            stroke="#8E8E8F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <img src="{{ asset('assets/images/captcha.png') }}" alt="">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_110_2489)">
                                <path
                                    d="M19.23 15.2598L16.69 14.9698C16.08 14.8998 15.48 15.1098 15.05 15.5398L13.21 17.3798C10.38 15.9398 8.06004 13.6298 6.62004 10.7898L8.47004 8.93976C8.90004 8.50977 9.11004 7.90977 9.04004 7.29977L8.75004 4.77977C8.63004 3.76977 7.78004 3.00977 6.76004 3.00977H5.03004C3.90004 3.00977 2.96004 3.94977 3.03004 5.07977C3.56004 13.6198 10.39 20.4398 18.92 20.9698C20.05 21.0398 20.99 20.0998 20.99 18.9698V17.2398C21 16.2298 20.24 15.3798 19.23 15.2598Z"
                                    fill="#8E8E8F" />
                            </g>
                            <defs>
                                <clipPath id="clip0_110_2489">
                                    <rect width="24" height="24" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                    </span>
                    <input type="text" class="form-control" placeholder="Captcha">
                </div>
                <button onclick="window.location='/dashboard/'" class="primary-button w-100" style="margin: 39px 0px;">
                    Login
                    <svg width="29" height="28" viewBox="0 0 29 28" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <rect x="0.5" width="28" height="28" rx="14" fill="white" fill-opacity="0.25" />
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
                <div class="text">
                    Belum pernah berobat ke RSMM Jawa Timur? <a href="/register">Daftar di sini</a>
                </div>
                <div style="width: 100%; margin:24px; border: 1.50px #EAECF0 solid"></div>
                <div class="text">
                    Sudah mempunyai password? <span>Silahkan klik di sini</span>
                </div>
            </div>
        </div>
        <div class="banner">
            <img src="{{ asset('assets/images/login.png') }}" alt="" srcset="">
        </div>
    </div>
@endsection
