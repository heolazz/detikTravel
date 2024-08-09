@extends('layouts.app')

@section('title', 'Explore Thailand by detikTravel')

@section('content')
    <!-- Home Section -->
    <section id="home" class="home-section" style="background-image: url('{{ asset('images/background 1.png') }}');">
        <div class="text-section">
            <img src="{{ asset('images/logo-travel.png') }}" alt="Logo Travel" class="logo-travel">
            <a href="#about" class="explore-button">Tentang Program</a>
        </div>
        <div class="slider">
            <div class="book-cover-frame"><img src="{{ asset('images/background 1.png') }}" alt="Slider 1" class="slider-image"></div>
            <div class="book-cover-frame"><img src="{{ asset('images/background 2.png') }}" alt="Slider 2" class="slider-image"></div>
            <div class="book-cover-frame"><img src="{{ asset('images/background 3.png') }}" alt="Slider 3" class="slider-image"></div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about-section">
        <div class="about-grid">
            <img src="{{ asset('images/about-image 1.png') }}" alt="Tentang Program" class="circle-img">
            <div class="about-content">
                <h2>Tentang Program</h2>
                <p>Bergabunglah dalam "Explore Thailand bersama Detiktravel"! Kompetisi ini terbuka bagi pembaca Detiktravel yang ingin menikmati perjalanan ke Thailand. Kunjungi destinasi menakjubkan seperti pantai Pak Bia Island dan destinasi lain di Phuket, Thailand. Jadi bagian dari perjalanan kami dan menangkan hadiah jalan-jalan yang tak terlupakan!</p>
                <a href="{{ route('registrasi') }}" class="btn btn-register">Daftar Sekarang</a>
                <h3 class="mechanism-title">Mekanisme</h3>
                <div class="mechanism-text">
                    <h5>Isi Formulir</h5>
                    <p class="text-yellow">1-31 Mei 2023</p>
                    <p>Lengkapi formulir pendaftaran dengan data yang sebenarnya.</p>
                </div>
                <div class="mechanism-text">
                    <h5>Penjurian</h5>
                    <p class="text-yellow">1-7 Juni 2023</p>
                    <p>Ikuti rangkaian Penjurian Online/Offline.</p>
                </div>
                <div class="mechanism-text">
                    <h5>Pengumuman Pemenang</h5>
                    <p class="text-yellow">11 Juni 2023</p>
                    <p>Ikuti rangkaian penjurian online/offline.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- News Section -->
    <section id="news" class="news-section">
        <h2 class="section-title"><span>detik</span>Travel Update</h2>
        <div class="news-grid">
            <div class="main-news frame">
                <img src="{{ asset('images/artikel-1 1.png') }}" alt="Main News" class="main-news-image">
                <div class="news-text main-news-text">
                    <h3>Warga Thailand Pakai Boneka Doraemon untuk Ritual Pemanggil Hujan</h3>
                    <p class="main-news-time">3 jam yang lalu</p>
                </div>
            </div>
        
            <div class="side-news-wrapper">
                <div class="side-news">
                    <div class="side-news-item">
                        <img src="{{ asset('images/artikel-2 1.png') }}" alt="Side News 1">
                        <div class="side-news-text">
                            <h4>Thailand Ngarep Cuan Banyak dari Turis China dan Jepang</h4>
                            <p class="side-news-time">1 jam yang lalu</p>
                        </div>
                    </div>
                    <div class="side-news-item">
                        <img src="{{ asset('images/artikel-2 2.png') }}" alt="Side News 2">
                        <div class="side-news-text">
                            <h4>Cahaya Lampu Hiasi Kuil Wat Phra Dhammakaya Thailand Saat Waisak</h4>
                            <p class="side-news-time">1 jam yang lalu</p>
                        </div>
                    </div>
                    <div class="side-news-item">
                        <img src="{{ asset('images/artikel-2 3.png') }}" alt="Side News 3">
                        <div class="side-news-text">
                            <h4>Cantiknya Lisa BLACKPINK Berwisata Sejarah di Thailand</h4>
                            <p class="side-news-time">1 jam yang lalu</p>
                        </div>
                    </div>
                </div>
                <a href="#" class="btn-more-news">Lihat Berita Lainnya</a>
            </div>
        </div>         
    </section>
@endsection

@push('scripts')
<script>
    document.querySelectorAll('.slider img').forEach(img => {
        img.addEventListener('click', function() {
            document.querySelector('.home-section').style.backgroundImage = `url(${this.src})`;
        });
    });
    document.querySelectorAll('.slider .book-cover-frame').forEach(frame => {
        frame.addEventListener('click', function() {
            document.querySelectorAll('.slider .book-cover-frame').forEach(f => f.classList.remove('active'));
            frame.classList.add('active');
            document.querySelector('.home-section').style.backgroundImage = `url(${this.querySelector('img').src})`;
        });
    });

    // Set 'background 1' as the active frame on page load
    document.querySelector('.slider .book-cover-frame img[src*="background 1.png"]').parentElement.classList.add('active');
</script>
@endpush

