<div class="section our-service">
    <div
        style="width: 100%; margin-bottom: 12px; color: #101828; font-size: 24px; font-family: Poppins; font-weight: 600; line-height: 31.20px; word-wrap: break-word">
        Layanan Kami</div>
    <div class="services">
        @for ($i = 0; $i < 6; $i++)
            <div class="service-item">
                <img src="{{ asset("assets/images/service1.png") }}" alt="" srcset="">
                <p class="title">
                    Poli Spesialis Mata
                </p>

                <p class="content">
                    Kami menangani berbagai kondisi mata, termasuk miopia, hipermetropi, astigmatisme, serta masalah
                    mata yang lebih serius.
                </p>
            </div>
        @endfor
    </div>
</div>
