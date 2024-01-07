@php
    $services = [
        [
            'title' => 'Poli Spesialis Mata',
            'text' => 'Kami menangani berbagai kondisi mata, termasuk miopia, hipermetropi, astigmatisme, serta masalah mata yang lebih serius.',
        ],
        [
            'title' => 'Poli Retina',
            'text' => 'Kami mengutamakan kesehatan retina Anda dan memberikan perawatan untuk masalah retina seperti retinopati diabetik dan degenerasi makula.',
        ],
        [
            'title' => 'Poli Glaukoma',
            'text' => 'Melalui poli glaukoma kami, Anda akan menerima perawatan untuk mengendalikan tekanan mata dan menjaga kesehatan mata Anda.',
        ],
        [
            'title' => 'Poli Infeksi dan Imunologi',
            'text' => 'Kami menangani masalah infeksi mata serta kondisi imunologi terkait mata dengan perawatan yang efektif.',
        ],
        [
            'title' => 'Poli Mata Anak',
            'text' => 'Menjaga kesehatan mata anak-anak Anda dan memberikan pemeriksaan dan perawatan yang sesuai untuk perkembangan mata mereka.',
        ],
        [
            'title' => 'Instalasi Gawat Darurat Umum & Mata 24 Jam',
            'text' => 'Kami siap membantu Anda dengan masalah mata mendesak, kapan saja, 24 jam sehari.',
        ],
    ];
@endphp
<div class="section our-service" data-aos="fade-up">
    <div
        style="width: 100%; margin-bottom: 12px; color: #101828; font-size: 24px; font-family: Poppins; font-weight: 600; line-height: 31.20px; word-wrap: break-word">
        Layanan Kami</div>
    <div class="services">
        @for ($i = 0; $i < 6; $i++)
            <div class="service-item">
                <img src="{{ asset('assets/images/service' . ($i + 1) . '.png') }}" alt="" srcset="">
                <p class="title">
                    {{ $services[$i]['title'] }}
                </p>

                <p class="content">
                    {{ $services[$i]['text'] }}
                </p>
            </div>
        @endfor
    </div>
</div>
