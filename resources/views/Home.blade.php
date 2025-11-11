@extends('layouts.app')

@section('title', 'JIGEL — Software Development Company')

@section('content')

<!-- AOS INIT -->
<script>
    document.addEventListener("DOMContentLoaded", () => {
        AOS.init({ duration: 800, once: true });
    });
</script>

<!-- HERO: Split Left -->
<section class="relative gradient-bg text-white py-28 overflow-hidden">
    <div class="absolute inset-0 opacity-10 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')]"></div>

    <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center px-6 relative z-10">
        <div class="md:w-1/2 text-center md:text-left" data-aos="fade-right">
            <h1 class="text-5xl font-extrabold mb-6 leading-tight">
                Bangun Masa Depan Digital Bersama <span class="text-yellow-300">JIGEL</span>
            </h1>
            <p class="text-lg text-gray-100 max-w-md leading-relaxed">
                Kami menghadirkan solusi digital inovatif untuk mengubah ide Anda menjadi teknologi yang berdampak.
            </p>
            <div class="mt-10 flex justify-center md:justify-start gap-4">
                <a href="{{ route('projects') }}" class="bg-yellow-400 text-black px-6 py-3 rounded-xl font-semibold hover:bg-yellow-300 transition-all">
                    Lihat Proyek
                </a>
                <a href="{{ route('contact') }}" class="border border-white px-6 py-3 rounded-xl font-semibold hover:bg-white hover:text-purple-700 transition-all">
                    Hubungi Kami
                </a>
            </div>
        </div>

        <!-- HERO IMAGE -->
        <div class="md:w-1/2 mt-12 md:mt-0 relative flex justify-center" data-aos="fade-left">
            <img src="{{ asset('images/logo-jigel.png') }}" alt="Logo JIGEL" class="w-64 md:w-80 mx-auto">
        </div>
    </div>
</section>

<!-- About Section -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6 text-center" data-aos="fade-up">
        <h2 class="text-4xl font-bold text-primary mb-6">Tentang JIGEL</h2>
        <p class="text-lg text-gray-600 max-w-3xl mx-auto leading-relaxed">
            JIGEL berdiri sebagai mitra teknologi yang mengubah ide menjadi produk digital yang bernilai tinggi.
            Kami percaya setiap baris kode adalah karya seni yang membangun masa depan.
        </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-10 mt-16 max-w-6xl mx-auto px-6">
        <div class="bg-white p-8 rounded-2xl shadow hover-scale" data-aos="fade-up">
            <div class="flex justify-center mb-4">
                <i data-lucide="code" class="w-10 h-10 text-primary"></i>
            </div>
            <h3 class="text-xl font-bold text-primary mb-3">Software Development</h3>
            <p class="text-gray-600">Kami membangun aplikasi web dan mobile dengan performa tinggi dan desain modern — dari ide hingga peluncuran.</p>
        </div>

        <div class="bg-white p-8 rounded-2xl shadow hover-scale" data-aos="fade-up" data-aos-delay="100">
            <div class="flex justify-center mb-4">
                <i data-lucide="layout-dashboard" class="w-10 h-10 text-primary"></i>
            </div>
            <h3 class="text-xl font-bold text-primary mb-3">UI/UX Design</h3>
            <p class="text-gray-600">Desain intuitif yang memastikan pengalaman pengguna yang nyaman dan efisien.</p>
        </div>

        <div class="bg-white p-8 rounded-2xl shadow hover-scale" data-aos="fade-up" data-aos-delay="200">
            <div class="flex justify-center mb-4">
                <i data-lucide="lightbulb" class="w-10 h-10 text-primary"></i>
            </div>
            <h3 class="text-xl font-bold text-primary mb-3">Digital Consulting</h3>
            <p class="text-gray-600">Membantu Anda menyusun strategi digital yang tepat untuk pertumbuhan dan daya saing jangka panjang.</p>
        </div>
    </div>
</section>

<!-- Vision & Mission -->
<section class="py-20 bg-white">
    <div class="max-w-6xl mx-auto px-6 text-center" data-aos="fade-up">
        <h2 class="text-4xl font-bold text-primary mb-6">Visi & Misi Kami</h2>
        <p class="text-gray-600 max-w-3xl mx-auto mb-10 leading-relaxed">
            Kami menciptakan teknologi yang tidak hanya efisien, tapi juga memberdayakan manusia di baliknya.
        </p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 text-left">
            <div class="p-8 bg-gray-50 rounded-2xl shadow" data-aos="fade-right">
                <h3 class="text-xl font-bold text-primary mb-3 flex items-center">
                    <i data-lucide="target" class="w-6 h-6 mr-2 text-secondary"></i> Visi
                </h3>
                <p class="text-gray-600">
                    Menjadi perusahaan pengembang perangkat lunak terdepan di Asia Tenggara yang dikenal karena inovasi dan keandalan teknologi.
                </p>
            </div>
            <div class="p-8 bg-gray-50 rounded-2xl shadow" data-aos="fade-left">
                <h3 class="text-xl font-bold text-primary mb-3 flex items-center">
                    <i data-lucide="flag" class="w-6 h-6 mr-2 text-secondary"></i> Misi
                </h3>
                <ul class="list-disc list-inside text-gray-600 space-y-2">
                    <li>Menghadirkan solusi digital sesuai kebutuhan bisnis.</li>
                    <li>Menjaga keamanan, kualitas, dan kecepatan.</li>
                    <li>Mendorong kolaborasi berkelanjutan dengan klien.</li>
                    <li>Mengembangkan talenta muda teknologi.</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6 text-center" data-aos="fade-up">
        <h2 class="text-4xl font-bold text-primary mb-12">Mengapa Memilih <span class="text-secondary">JIGEL</span>?</h2>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-10">
            <div class="bg-white p-8 rounded-2xl shadow hover-scale" data-aos="zoom-in">
                <i data-lucide="users" class="w-10 h-10 text-primary mb-3 mx-auto"></i>
                <h3 class="text-lg font-bold text-primary mb-3">Tim Profesional</h3>
                <p class="text-gray-600 text-sm">Developer, designer, dan analis berpengalaman dengan fokus hasil nyata.</p>
            </div>
            <div class="bg-white p-8 rounded-2xl shadow hover-scale" data-aos="zoom-in" data-aos-delay="100">
                <i data-lucide="cpu" class="w-10 h-10 text-primary mb-3 mx-auto"></i>
                <h3 class="text-lg font-bold text-primary mb-3">Teknologi Terbaru</h3>
                <p class="text-gray-600 text-sm">Kami gunakan framework modern agar produk Anda tangguh dan scalable.</p>
            </div>
            <div class="bg-white p-8 rounded-2xl shadow hover-scale" data-aos="zoom-in" data-aos-delay="200">
                <i data-lucide="handshake" class="w-10 h-10 text-primary mb-3 mx-auto"></i>
                <h3 class="text-lg font-bold text-primary mb-3">Kolaborasi Nyata</h3>
                <p class="text-gray-600 text-sm">Kami bekerja bersama Anda di setiap tahap — dari konsep hingga deploy.</p>
            </div>
            <div class="bg-white p-8 rounded-2xl shadow hover-scale" data-aos="zoom-in" data-aos-delay="300">
                <i data-lucide="infinity" class="w-10 h-10 text-primary mb-3 mx-auto"></i>
                <h3 class="text-lg font-bold text-primary mb-3">Dukungan Berkelanjutan</h3>
                <p class="text-gray-600 text-sm">Kami tetap mendampingi Anda untuk pemeliharaan dan pengembangan lanjutan.</p>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-6 text-center" data-aos="fade-up">
        <h2 class="text-4xl font-bold text-primary mb-6">Tim di Balik JIGEL</h2>
        <p class="text-gray-600 max-w-3xl mx-auto mb-12 leading-relaxed">
            Kami bukan sekadar pengembang — kami pemikir, kreator, dan pelaksana yang percaya setiap produk digital harus punya jiwa.
        </p>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-10">
<!-- CEO -->
<a href="{{ route('portofolio') }}"
   class="block bg-gray-50 rounded-2xl shadow hover-scale p-6 hover:shadow-lg transition-all duration-300 group"
   data-aos="fade-up">

    <img src="{{ asset('images/team1.jpg') }}"
         alt="CEO"
         class="w-32 h-32 rounded-full mx-auto object-cover mb-4 group-hover:scale-105 transition-transform duration-500">

    <h3 class="text-lg font-semibold text-primary text-center group-hover:text-yellow-400 transition-colors duration-300">
        Jihan Manna
    </h3>

    <p class="text-sm text-gray-600 text-center">
        CEO & Lead Developer
    </p>
</a>

            <!-- CTO -->
            <div class="bg-gray-50 rounded-2xl shadow hover-scale p-6" data-aos="fade-up" data-aos-delay="100">
                <img src="{{ asset('images/team2.jpg') }}" alt="CTO" class="w-32 h-32 rounded-full mx-auto object-cover mb-4">
                <h3 class="text-lg font-semibold text-primary">Jackson Wang</h3>
                <p class="text-sm text-gray-600">CTO & System Architect</p>
            </div>

            <!-- Designer -->
            <div class="bg-gray-50 rounded-2xl shadow hover-scale p-6" data-aos="fade-up" data-aos-delay="200">
                <img src="{{ asset('images/team3.jpg') }}" alt="Designer" class="w-32 h-32 rounded-full mx-auto object-cover mb-4">
                <h3 class="text-lg font-semibold text-primary">Jeon Somi</h3>
                <p class="text-sm text-gray-600">UI/UX Designer</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="py-20 bg-white" data-aos="fade-up">
    <div class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row items-center justify-between gap-6">
        <div class="text-center md:text-left">
            <h2 class="text-3xl md:text-4xl font-bold text-primary mb-3">
                Siap Membangun Solusi Digital Bersama?
            </h2>
            <p class="text-gray-600">
                Mari ciptakan inovasi yang memberi dampak. Tim <span class="font-semibold text-secondary">JIGEL</span> siap berkolaborasi dengan Anda.
            </p>
        </div>

        <div class="text-center md:text-right">
            <a href="{{ route('contact') }}" class="bg-primary text-white px-8 py-4 rounded-xl font-semibold shadow hover:bg-secondary transition-all">
                Hubungi Kami
            </a>
        </div>
    </div>
</section>

<script src="https://unpkg.com/lucide@latest"></script>
<script>lucide.createIcons();</script>

@endsection
