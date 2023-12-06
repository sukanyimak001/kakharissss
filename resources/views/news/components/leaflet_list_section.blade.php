<div class="section leaflet-list mt-5">
    <div class="row mb-3">
        <div class="col">
            <div class="title mb-2">
                Kumpulan Leaflet yang Dapat Diunduh
            </div>
            <div class="subtitle">
                Menampilkan 1 hingga 10 dari 22
            </div>
        </div>
        <div class="col-auto">
            <div class="search">
                <input type="text" placeholder="Cari Leaflet">
            </div>
        </div>
    </div>
    <table class="table">
        <tbody>
            @for ($i = 0; $i < 10; $i++)
                <tr>
                    <td>{{ $i + 1 }}</td>
                    <td>
                      <img src="{{ asset("assets/images/pdf.png") }}" alt="">  
                        Profil RSMM
                    </td>
                    <td>
                        2021
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
