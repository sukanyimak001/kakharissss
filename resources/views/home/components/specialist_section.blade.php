<div class="section specialist" data-aos="fade-up">
    <div style="width: 100%; text-align: center"><span
            style="color: #0F21FF; font-size: 32px; font-family: Poppins; font-weight: 600; line-height: 41.60px; word-wrap: break-word">Ahli
            Kesehatan</span><span
            style="color: black; font-size: 32px; font-family: Poppins; font-weight: 400; line-height: 41.60px; word-wrap: break-word">
            Kami</span></div>
    <div
        style="width: 100%; margin-bottom: 32px; opacity: 0.50; text-align: center; color: black; font-size: 20px; font-family: Poppins; font-weight: 400; line-height: 32px; word-wrap: break-word">
        Berikut tim ahli kesehatan yang praktek hari ini</div>
    @php
        $slides = ['Semua', 'Poli Spesialis Mata', 'Poli Retina', 'Poli Glaukoma', 'Poli Infeksi & Imunologi', 'Poli Mata Anak'];
    @endphp
    <div id="specialistCarousel" class="carousel slide" data-bs-ride="false">
        <div class="carousel-indicators">
            @for ($i = 1; $i < count($slides); $i++)
                <button type="button" data-bs-target="#specialistCarousel" data-bs-slide-to="{{ $i - 1 }}"
                    class="{{ $i == 1 ? 'active' : '' }}" aria-current="true" aria-label="Slide {{ $i }}">
                    {{ $slides[$i] }}
                </button>
            @endfor
        </div>
        <div class="carousel-inner">
            @for ($i = 1; $i < count($slides); $i++)
                <div class="carousel-item {{ $i == 1 ? 'active' : '' }}">
                    <div class="specialist-container">
                        <div class="specialist-item">
                            <img src="{{ asset('assets/images/doctor1.png') }}" alt="">
                            <div class="title">
                                Dr. Dimas Setya A, Sp.M
                            </div>
                            <div class="subtitle">
                                Today 07.00 - 09.00
                            </div>
                            <div class="badge">
                                Spesialis Mata
                            </div>
                        </div>
                        <div class="specialist-item">
                            <img src="{{ asset('assets/images/doctor2.png') }}" alt="">
                            <div class="title">
                                Dr. Ratna Parma J, Sp.M
                            </div>
                            <div class="subtitle">
                                Today 11.00 - 12.00
                            </div>
                            <div class="badge">
                                Spesialis Mata
                            </div>
                        </div>
                        <div class="specialist-item">
                            <img src="{{ asset('assets/images/doctor3.png') }}" alt="">
                            <div class="title">
                                Dr. Rika Agustanti, Sp.M
                            </div>
                            <div class="subtitle">
                                Today 08.00 - 10.00
                            </div>
                            <div class="badge">
                                Spesialis Mata
                            </div>
                        </div>
                    </div>
                </div>
            @endfor

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#specialistCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#specialistCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
