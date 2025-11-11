<footer class="gradient-bg text-white mt-20">
    <div class="mx-auto max-w-7xl px-6 lg:px-8 py-14">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-10">
            <!-- Brand -->
            <div class="col-span-1 md:col-span-2">
                <div class="flex items-center space-x-3 mb-4">
                    <div class="w-10 h-10 bg-white rounded-lg flex items-center justify-center shadow-md">
                        <span class="text-primary font-extrabold text-xl">J</span>
                    </div>
                    <span class="text-white font-bold text-2xl tracking-wide">JIGEL</span>
                </div>
                <p class="text-accent leading-relaxed">
                    Tempat di mana ide dan kode berpadu jadi karya digital yang hidup.
                    Setiap detail adalah bagian dari cerita inovasi.
                </p>

                <!-- Social Media -->
                <div class="flex space-x-4 mt-6">
                    <a href="https://instagram.com/jhannm19" target="_blank" class="hover:scale-110 transition-all duration-300">
                        <img src="https://cdn-icons-png.flaticon.com/512/2111/2111463.png" alt="Instagram" class="w-8 h-8">
                    </a>
                    <a href="https://linkedin.com/in/jihanmannatana" target="_blank" class="hover:scale-110 transition-all duration-300">
                        <img src="https://cdn-icons-png.flaticon.com/512/174/174857.png" alt="LinkedIn" class="w-8 h-8">
                    </a>
                    <a href="https://facebook.com/jhan" target="_blank" class="hover:scale-110 transition-all duration-300">
                        <img src="https://cdn-icons-png.flaticon.com/512/733/733547.png" alt="Facebook" class="w-8 h-8">
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div>
                <h3 class="text-xl font-semibold mb-4 border-b border-yellow-400 inline-block pb-1">Tautan Cepat</h3>
                <ul class="space-y-3">
                    <li><a href="{{ url('/') }}" class="hover:text-yellow-400 transition-colors duration-300">Home</a></li>
                    <li><a href="{{ url('/portofolio') }}" class="hover:text-yellow-400 transition-colors duration-300">Portofolio</a></li>
                    <li><a href="{{ url('/contact') }}" class="hover:text-yellow-400 transition-colors duration-300">Kontak</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div>
                <h3 class="text-xl font-semibold mb-4 border-b border-yellow-400 inline-block pb-1">Kontak</h3>
                <ul class="space-y-3">
                    <li>
                        <span class="block text-white font-medium">Email:</span>
                        <p class="hover:text-yellow-400 transition-colors duration-300">jihany111@gmail.com</p>
                    </li>
                    <li>
                        <span class="block text-white font-medium">Telepon:</span>
                        <p class="hover:text-yellow-400 transition-colors duration-300">+62 822 9053 6135</p>
                    </li>
                    <li>
                        <span class="block text-white font-medium">Alamat:</span>
                        <p class="hover:text-yellow-400 transition-colors duration-300">Jl. Dirgantara No. 76 B, Makassar</p>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Bottom -->
        <div class="border-t border-yellow-400 mt-10 pt-6 text-center">
            <p class="text-sm">
                &copy; {{ date('Y') }} <span class="font-semibold text-white hover:text-yellow-400 transition-colors duration-300">All Rights Reserved</span>.
            </p>
        </div>
    </div>
</footer>
