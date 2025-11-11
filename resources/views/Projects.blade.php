@extends('layouts.app')

@section('title', 'Proyek - Jhens Studio')

@section('content')

<!-- AOS Animation -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        AOS.init({ duration: 1000, once: true });
    });
</script>

<!-- HEADER -->
<section class="gradient-bg py-24 relative overflow-hidden">
    <div class="absolute inset-0 opacity-10 bg-[url('/images/texture.svg')] bg-cover bg-center"></div>
    <div class="relative z-10 mx-auto max-w-5xl text-center px-6">
        <h1 class="text-5xl font-extrabold text-white sm:text-6xl mb-6" data-aos="fade-up">
            Proyek Unggulan & Karya Terbaik
        </h1>
        <p class="text-lg text-gray-100 leading-relaxed max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="200">
            Setiap proyek adalah kolaborasi antara kreativitas, strategi, dan teknologi.
            Di <span class="text-yellow-300 font-semibold">Jigel Studio</span>, kami menciptakan solusi digital
            yang berfungsi, memikat, dan memberi dampak nyata bagi klien.
        </p>
    </div>
</section>

<!-- FILTER -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="flex flex-wrap justify-center gap-4 mb-16" data-aos="fade-up">
            <button class="px-6 py-2 rounded-full gradient-bg text-white font-semibold shadow-lg hover:shadow-xl transition-all duration-300">
                Semua Proyek
            </button>
            <button class="px-6 py-2 rounded-full bg-gray-200 text-gray-700 font-medium hover:bg-gray-300 transition-all duration-300">
                Desain UI/UX
            </button>
            <button class="px-6 py-2 rounded-full bg-gray-200 text-gray-700 font-medium hover:bg-gray-300 transition-all duration-300">
                Web Development
            </button>
            <button class="px-6 py-2 rounded-full bg-gray-200 text-gray-700 font-medium hover:bg-gray-300 transition-all duration-300">
                Aplikasi
            </button>
        </div>

        <!-- GRID PROJECT -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">

            <!-- Project 1 -->
            <article data-aos="fade-up" class="group bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300">
                <img src="{{ asset('images/figma-design.jpg') }}" alt="Desain UI Sekolah Digital"
                     class="aspect-video w-full object-cover group-hover:scale-105 transition-transform duration-500">
                <div class="p-6">
                    <div class="flex items-center gap-2 mb-3">
                        <span class="px-3 py-1 text-xs font-semibold text-primary bg-red-50 rounded-full">Figma</span>
                        <span class="px-3 py-1 text-xs font-semibold text-primary bg-red-50 rounded-full">UI/UX</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-yellow-400 transition-colors duration-300">
                        Dashboard Sekolah Digital
                    </h3>
                    <p class="text-gray-600 mb-4">
                        Desain antarmuka intuitif untuk sistem manajemen sekolah. Fokus pada kemudahan akses data,
                        keseimbangan warna edukatif, dan pengalaman pengguna yang menyenangkan bagi guru, siswa, dan admin.
                    </p>
                    <a href="#" class="inline-flex items-center text-primary font-semibold hover:text-yellow-400 transition-colors">
                        Lihat Detail
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
            </article>

            <!-- Project 2 -->
            <article data-aos="fade-up" data-aos-delay="150" class="group bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300">
                <img src="{{ asset('images/csharp-laundry.jpg') }}" alt="Aplikasi Laundry C#"
                     class="aspect-video w-full object-cover group-hover:scale-105 transition-transform duration-500">
                <div class="p-6">
                    <div class="flex items-center gap-2 mb-3">
                        <span class="px-3 py-1 text-xs font-semibold text-primary bg-red-50 rounded-full">C#</span>
                        <span class="px-3 py-1 text-xs font-semibold text-primary bg-red-50 rounded-full">.NET</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-yellow-400 transition-colors duration-300">
                        Laundry Management System
                    </h3>
                    <p class="text-gray-600 mb-4">
                        Aplikasi desktop untuk manajemen transaksi laundry, pelanggan, dan laporan keuangan.
                        Dibangun dengan efisiensi alur kerja dan tampilan yang ramah pengguna.
                    </p>
                    <a href="#" class="inline-flex items-center text-primary font-semibold hover:text-yellow-400 transition-colors">
                        Lihat Detail
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
            </article>

            <!-- Project 3 -->
            <article data-aos="fade-up" data-aos-delay="300" class="group bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300">
                <img src="{{ asset('images/project1.jpg') }}" alt="Aplikasi Konsultasi Hukum Online"
                     class="aspect-video w-full object-cover group-hover:scale-105 transition-transform duration-500">
                <div class="p-6">
                    <div class="flex items-center gap-2 mb-3">
                        <span class="px-3 py-1 text-xs font-semibold text-primary bg-red-50 rounded-full">Web App</span>
                        <span class="px-3 py-1 text-xs font-semibold text-primary bg-red-50 rounded-full">Laravel</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-yellow-400 transition-colors duration-300">
                        Aplikasi Konsultasi Hukum Online
                    </h3>
                    <p class="text-gray-600 mb-4">
                        Platform konsultasi hukum dengan fitur chat real-time, jadwal janji, dan sistem pembayaran otomatis.
                        Solusi digital untuk koneksi profesional antara klien dan konsultan hukum.
                    </p>
                    <a href="#" class="inline-flex items-center text-primary font-semibold hover:text-yellow-400 transition-colors">
                        Lihat Detail
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
            </article>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="gradient-bg py-24 text-center text-white">
    <div class="max-w-2xl mx-auto px-6">
        <h2 class="text-4xl font-extrabold mb-6" data-aos="fade-up">
            Siap Mewujudkan Proyek Digital Anda?
        </h2>
        <p class="text-lg text-gray-100 mb-8" data-aos="fade-up" data-aos-delay="150">
            Baik untuk bisnis, personal brand, maupun startup —
            <span class="text-yellow-300 font-semibold">tim Jhens</span> siap membantu merancang
            dan mengembangkan solusi digital yang menarik, efisien, dan berdaya guna.
        </p>
        <a href="{{ route('contact') }}"
           class="bg-white text-primary font-semibold px-8 py-3 rounded-full hover:scale-105 hover:shadow-xl transition-all duration-300">
            Diskusikan Proyek Sekarang →
        </a>
    </div>
</section>

@endsection
