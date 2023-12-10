<div class="section leaflet-list mt-5" data-aos="fade-up">
    <div class="row mb-3">
        <div class="col">
            <div
                style="color: black; font-size: 18px; font-family: Poppins; font-weight: 600; line-height: 21.60px; word-wrap: break-word">
                Indikator Nasional Mutu (INM) Pelayanan Kesehatan di RSMM
            </div>
            <div class="subtitle">
                Menampilkan 1 hingga 8 dari 8
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
            @for ($i = 0; $i < 8; $i++)
                <tr>
                    <td>{{ $i + 1 }}</td>
                    <td>
                        Kepatuhan Penggunaan Alat Pelindung Diri (APD)
                    </td>
                    <td class="text-end">
                        <div class="badge">
                            100%
                        </div>
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
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
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
