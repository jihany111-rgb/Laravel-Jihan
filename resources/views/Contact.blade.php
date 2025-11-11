@extends('layouts.app')

@section('title', 'Kontak - Jihan Portfolio')

@section('content')
<!-- Hero Section -->
<section class="gradient-bg py-20 text-center text-white">
    <div class="mx-auto max-w-3xl px-6">
        <h1 class="text-4xl font-bold sm:text-6xl">Yuk, Ngobrol Tentang Proyekmu!</h1>
        <p class="mt-6 text-lg text-accent">
            Punya ide keren atau proyek yang ingin kamu wujudkan? Aku siap bantu kamu menciptakan sesuatu yang kreatif dan berkesan 💡
        </p>
    </div>
</section>

<!-- Contact Section -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-2 gap-12">

        <!-- Info Kontak -->
        <div class="flex flex-col justify-center">
            <h2 class="text-3xl font-bold text-gray-900 mb-6">Hubungi Aku ✉️</h2>
            <p class="text-lg text-gray-600 mb-10 leading-relaxed">
                Aku selalu terbuka untuk kolaborasi, proyek freelance, atau sekadar ngobrol santai tentang desain dan teknologi.
                Kirim pesan aja — siapa tahu, obrolan kecil bisa jadi awal dari sesuatu yang besar 🚀
            </p>

            <div class="space-y-6">
                <!-- Email -->
                <div class="flex items-start group hover:translate-x-1 transition-all duration-300">
                    <div class="flex h-12 w-12 items-center justify-center rounded-lg gradient-bg shadow-lg">
                        <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15A2.25 2.25 0 002.25 6.75m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91A2.25 2.25 0 012.25 6.993V6.75" />
                        </svg>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-lg font-semibold text-gray-900">Email</h3>
                        <p class="text-gray-600">jihany111@gmail.com</p>
                    </div>
                </div>

                <!-- Telepon -->
                <div class="flex items-start group hover:translate-x-1 transition-all duration-300">
                    <div class="flex h-12 w-12 items-center justify-center rounded-lg gradient-bg shadow-lg">
                        <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25A2.25 2.25 0 0021.75 19.5v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106a1.125 1.125 0 00-1.173.417l-.97 1.293a1.125 1.125 0 01-1.21.38 12.035 12.035 0 01-7.143-7.143 1.125 1.125 0 01.38-1.21l1.293-.97a1.125 1.125 0 00.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                        </svg>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-lg font-semibold text-gray-900">Telepon / WhatsApp</h3>
                        <p class="text-gray-600">+62 822 9053 6135</p>
                    </div>
                </div>

                <!-- Alamat -->
                <div class="flex items-start group hover:translate-x-1 transition-all duration-300">
                    <div class="flex h-12 w-12 items-center justify-center rounded-lg gradient-bg shadow-lg">
                        <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                        </svg>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-lg font-semibold text-gray-900">Alamat</h3>
                        <p class="text-gray-600">Jl. Dirgantara No. 76 B, Makassar</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Form -->
        <div class="bg-white rounded-2xl shadow-2xl p-8 lg:p-12 hover:shadow-red-200 transition-all duration-300">
            <h2 class="text-3xl font-bold text-gray-900 mb-6">Kirim Pesan</h2>
            <p class="text-gray-600 mb-8 text-base leading-relaxed">
                Ceritakan idemu, proyekmu, atau sekadar sapa! Aku akan segera membalas pesanmu secepat mungkin 😊
            </p>

            <form action="{{ route('contact.submit') }}" method="POST" class="space-y-6">
                @csrf
                <div>
                    <label for="name" class="block text-sm font-semibold text-gray-900 mb-2">Nama Lengkap</label>
                    <input type="text" id="name" name="name" required
                        class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-primary outline-none"
                        placeholder="Masukkan nama kamu">
                </div>

                <div>
                    <label for="email" class="block text-sm font-semibold text-gray-900 mb-2">Email</label>
                    <input type="email" id="email" name="email" required
                        class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-primary outline-none"
                        placeholder="nama@email.com">
                </div>

                <div>
                    <label for="message" class="block text-sm font-semibold text-gray-900 mb-2">Pesan</label>
                    <textarea id="message" name="message" rows="6" required
                        class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-primary outline-none resize-none"
                        placeholder="Tulis pesan atau ide kamu di sini..."></textarea>
                </div>

                <button type="submit"
                    class="w-full gradient-bg rounded-lg px-6 py-4 text-base font-semibold text-white shadow-lg hover:scale-105 transition-all duration-300">
                    Kirim Sekarang 🚀
                </button>
            </form>
        </div>
    </div>
</section>
@endsection
