<div class="section profile">
    <div class="header-wrapper">
        <div class="header">
            <div class="banner">
                <img class="background" src="{{ asset('assets/images/profile-background.png') }}" alt="">
                <img class="user-profile" src="{{ asset('assets/images/profile-user.png') }}" alt="">
            </div>
            <div class="actions">
                <div class="button primary" data-bs-toggle="modal" data-bs-target="#editProfileModal">
                    Edit Profil
                </div>
                <div class="button danger" onclick="window.location = '/'">
                    Logout
                </div>
            </div>
        </div>
        <div class="content">
            <div class="title">Reyna Aulia</div>
            <div class="badge">
                <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M10.5113 11.5178C12.6505 11.9216 14.1663 12.9558 14.1663 14.167V15.5837H2.83301V14.167C2.83301 12.9558 4.34884 11.9216 6.48801 11.5178L8.49967 14.8753L10.5113 11.5178ZM5.66634 5.667H11.333V7.08367C11.333 7.83511 11.0345 8.55578 10.5031 9.08714C9.97179 9.61849 9.25112 9.917 8.49967 9.917C7.74823 9.917 7.02756 9.61849 6.49621 9.08714C5.96485 8.55578 5.66634 7.83511 5.66634 7.08367V5.667ZM5.66634 4.95867L5.95676 2.0545C5.97438 1.87917 6.05671 1.71671 6.18769 1.59883C6.31867 1.48095 6.48888 1.41612 6.66509 1.417H10.3413C10.7026 1.417 11.0072 1.69325 11.0426 2.0545L11.333 4.95867H5.66634ZM8.49967 2.12533H7.79134V2.83367H7.08301V3.542H7.79134V4.25033H8.49967V3.542H9.20801V2.83367H8.49967V2.12533Z"
                        fill="#45AC60" />
                </svg>
                Pasien
            </div>
            <div class="row-info">
                <div class="info">
                    <div class="label">
                        NIK
                    </div>
                    <div class="text">
                        352762301289001
                    </div>
                </div>
                <div class="divider"></div>
                <div class="info">
                    <div class="label">
                        Email
                    </div>
                    <div class="text">
                        reynaaulia@gmail.com
                    </div>
                </div>
                <div class="divider"></div>
                <div class="info">
                    <div class="label">
                        Nomor JKN
                    </div>
                    <div class="text">
                        0000823128761
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section dashboard-home mt-0 pt-0">
    <div class="table-wrapper mt-0">
        <div class="title">
            Detail Profil
        </div>
        <table class="table">
            <tbody>
                <tr>
                    <td>
                        <span>Nama Lengkap</span>
                    </td>
                    <td>
                        Reyna Aulia
                    </td>
                </tr>
                <tr>
                    <td>
                        <span>Tanggal Lahir</span>
                    </td>
                    <td>
                        20 Juli 1999
                    </td>
                </tr>
                <tr>
                    <td>
                        <span>Nomor JKN</span>
                    </td>
                    <td>
                        0000823128761
                    </td>
                </tr>
                <tr>
                    <td>
                        <span>No. Rekam Medik</span>
                    </td>
                    <td>
                        007645-21
                    </td>
                </tr>
                <tr>
                    <td>
                        <span>Alamat</span>
                    </td>
                    <td>
                        Jl. Bunga Kamboja No.20, Surabaya
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="editProfileModal" tabindex="-1" aria-labelledby="editProfileModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body profile-form">
                <div class="title">
                    Edit Profil
                </div>
                <div class="inputs">
                    <label class="col-form-label">Nama Kamu</label>
                    <input type="text" class="form-control" value="Reyna Aulia">
                </div>
                <div class="inputs">
                    <label class="col-form-label">NIK</label>
                    <input type="text" class="form-control" value="352762301289001">
                </div>
                <div class="inputs">
                    <label class="col-form-label">Tanggal Lahir</label>
                    <input type="text" class="form-control" value="20 Juli 1999">
                </div>
                <div class="inputs">
                    <label class="col-form-label">Alamat</label>
                    <input type="text" class="form-control" value="Jl. Bunga Kamboja No.20, Surabaya">
                </div>
                <div class="inputs">
                    <label class="col-form-label">Nomor JKN</label>
                    <input type="text" class="form-control" value="0000823128761">
                </div>
                <div class="inputs">
                    <label class="col-form-label">Email</label>
                    <input type="text" class="form-control" value="reynaaulia@gmail.com">
                </div>
                <div class="inputs">
                    <label class="col-form-label">No Rekam Medik</label>
                    <input type="text" class="form-control" value="007645-21">
                </div>

                <div class="row px-4" style="margin-top: 40px;">
                    <div class="col">
                        <div class="button cancel" data-bs-dismiss="modal">
                            Batal
                        </div>
                    </div>
                    <div class="col">
                        <button class="send-message" data-bs-dismiss="modal">
                            Save
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
            </div>
        </div>
    </div>
</div>
