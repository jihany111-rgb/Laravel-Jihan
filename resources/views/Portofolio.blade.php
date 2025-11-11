@extends('layouts.app')

@section('title', 'Portofolio — Jihan Mannatana')

@section('content')

<!-- AOS INIT -->
<script>
    document.addEventListener("DOMContentLoaded", () => {
        AOS.init({ duration: 800, once: true });
    });
</script>

<!-- HERO PROFILE -->
<section class="py-24 bg-white text-center" data-aos="fade-up">
    <img src="{{ asset('images/team1.jpg') }}"
         alt="Jihan Mannatana"
         class="w-40 h-40 rounded-full mx-auto mb-6 shadow-lg object-cover">
    <h1 class="text-4xl font-bold text-primary mb-2">Jihan Mannatana</h1>
    <p class="text-lg text-gray-600 mb-4">CEO & Lead Developer</p>
    <p class="text-gray-600 max-w-2xl mx-auto leading-relaxed">
        Saya adalah pengembang perangkat lunak dan desainer digital yang berfokus pada menciptakan solusi berbasis teknologi
        dengan kombinasi kreativitas, efisiensi, dan pengalaman pengguna yang kuat.
    </p>
</section>

<!-- PERSONAL VALUES -->
<section class="py-20 bg-gray-50" data-aos="fade-up">
    <div class="max-w-6xl mx-auto px-6 text-center">
        <h2 class="text-3xl font-bold text-primary mb-10">Nilai & Prinsip Kerja</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white p-8 rounded-2xl shadow hover-scale">
                <i data-lucide="heart" class="w-10 h-10 text-primary mx-auto mb-4"></i>
                <h3 class="text-lg font-bold text-primary mb-2">Integritas</h3>
                <p class="text-gray-600 text-sm">Menjaga kejujuran, komitmen, dan tanggung jawab dalam setiap kolaborasi.</p>
            </div>
            <div class="bg-white p-8 rounded-2xl shadow hover-scale" data-aos-delay="100">
                <i data-lucide="cpu" class="w-10 h-10 text-primary mx-auto mb-4"></i>
                <h3 class="text-lg font-bold text-primary mb-2">Inovasi</h3>
                <p class="text-gray-600 text-sm">Mendorong ide-ide baru dan penerapan teknologi modern untuk hasil terbaik.</p>
            </div>
            <div class="bg-white p-8 rounded-2xl shadow hover-scale" data-aos-delay="200">
                <i data-lucide="users" class="w-10 h-10 text-primary mx-auto mb-4"></i>
                <h3 class="text-lg font-bold text-primary mb-2">Kolaborasi</h3>
                <p class="text-gray-600 text-sm">Membangun sinergi positif dengan tim dan klien untuk solusi yang berdampak.</p>
            </div>
        </div>
    </div>
</section>

<!-- SKILLS -->
<section class="py-20 bg-white" data-aos="fade-up">
    <div class="max-w-6xl mx-auto px-6 text-center">
        <h2 class="text-3xl font-bold text-primary mb-10">Keahlian Utama</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
            <div class="bg-gray-50 rounded-2xl shadow p-8 hover-scale">
                <i data-lucide="code" class="w-10 h-10 text-primary mx-auto mb-3"></i>
                <h3 class="text-lg font-bold text-primary mb-2">Software Development</h3>
                <p class="text-gray-600 text-sm">
                    Penguasaan backend (Laravel, Node.js) dan frontend (React, Vue) untuk sistem dinamis dan scalable.
                </p>
            </div>
            <div class="bg-gray-50 rounded-2xl shadow p-8 hover-scale" data-aos-delay="100">
                <i data-lucide="layout-dashboard" class="w-10 h-10 text-primary mx-auto mb-3"></i>
                <h3 class="text-lg font-bold text-primary mb-2">UI/UX Design</h3>
                <p class="text-gray-600 text-sm">
                    Mendesain antarmuka intuitif yang memadukan estetika dan kenyamanan pengguna.
                </p>
            </div>
            <div class="bg-gray-50 rounded-2xl shadow p-8 hover-scale" data-aos-delay="200">
                <i data-lucide="database" class="w-10 h-10 text-primary mx-auto mb-3"></i>
                <h3 class="text-lg font-bold text-primary mb-2">System Architecture</h3>
                <p class="text-gray-600 text-sm">
                    Merancang struktur sistem dan arsitektur data untuk kestabilan, keamanan, dan efisiensi aplikasi.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- PROJECTS -->
<section class="py-20 bg-gray-50" data-aos="fade-up">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <h2 class="text-3xl font-bold text-primary mb-12">Proyek Unggulan</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">

            <!-- Project 1 -->
            <div class="bg-white rounded-2xl shadow hover-scale overflow-hidden" data-aos-delay="100">
                <img src="{{ asset('images/project1.jpg') }}" alt="Aplikasi Konsultasi Hukum Online" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-primary mb-2">Aplikasi Konsultasi Hukum Online</h3>
                    <p class="text-gray-600 text-sm mb-4">
                        Platform konsultasi berbasis web dengan fitur chat, jadwal, dan sistem pembayaran otomatis.
                    </p>
                    <a href="#" class="text-primary font-semibold hover:text-yellow-400 transition-colors">
                        Lihat Detail →
                    </a>
                </div>
            </div>

            <!-- Project 2 -->
            <div class="bg-white rounded-2xl shadow hover-scale overflow-hidden" data-aos-delay="200">
                <img src="{{ asset('images/project2.jpg') }}" alt="Desain Website Sekolah Figma" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-primary mb-2">Desain Website Sekolah — Figma Project</h3>
                    <p class="text-gray-600 text-sm mb-4">
                        Proyek desain antarmuka website sekolah modern yang dikembangkan menggunakan Figma.
                        Fokus utamanya adalah menampilkan citra sekolah yang profesional, interaktif, dan mudah diakses oleh siswa, guru, serta orang tua.
                    </p>
                    <a href="#" class="text-primary font-semibold hover:text-yellow-400 transition-colors">
                        Lihat Detail →
                    </a>
                </div>
            </div>


        </div>
    </div>
</section>

<!-- CTA -->
<section class="py-20 bg-white" data-aos="fade-up">
    <div class="max-w-6xl mx-auto px-6 flex flex-col md:flex-row items-center justify-between gap-6">
        <div class="text-center md:text-left">
            <h2 class="text-3xl md:text-4xl font-bold text-primary mb-3">
                Ingin Berkolaborasi dengan Saya?
            </h2>
            <p class="text-gray-600">
                Mari wujudkan ide besar Anda menjadi produk digital yang berdampak dan berkelas.
            </p>
        </div>
        <div class="text-center md:text-right">
            <a href="{{ route('contact') }}"
               class="bg-primary text-white px-8 py-4 rounded-xl font-semibold shadow hover:bg-secondary transition-all">
                Hubungi Saya
            </a>
        </div>
    </div>
</section>

<script src="https://unpkg.com/lucide@latest"></script>
<script>lucide.createIcons();</script>

@endsection
