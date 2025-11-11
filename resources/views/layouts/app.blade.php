<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Jhens')</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#800000',   // Merah gelap elegan
                        secondary: '#b30047', // Merah magenta
                        accent: '#ffd6d6'     // Aksen lembut
                    }
                }
            }
        }
    </script>

    <!-- AOS (Animate On Scroll) -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        /* ===== Custom Styles ===== */
        .gradient-bg {
            background: linear-gradient(135deg, #800000 0%, #b30047 100%);
        }
        .hover-scale {
            transition: transform 0.3s ease;
        }
        .hover-scale:hover {
            transform: scale(1.05);
        }
        .text-shadow {
            text-shadow: 1px 1px 4px rgba(0,0,0,0.2);
        }
        .btn-primary {
            background: linear-gradient(135deg, #800000, #b30047);
            color: #fff;
            font-weight: 600;
            border-radius: 0.75rem;
            padding: 0.75rem 1.5rem;
            transition: all 0.3s ease;
        }
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(179, 0, 71, 0.3);
        }

        /* Hover link effect putih → kuning */
        a {
            transition: color 0.3s ease;
        }
        a:hover {
            color: #ffd700 !important; /* kuning lembut */
        }
    </style>
</head>

<body class="bg-gray-50 text-gray-800 font-sans antialiased">

    <!-- HEADER -->
    @include('partials.header')

    <!-- MAIN CONTENT -->
    <main class="min-h-screen">
        @yield('content')
    </main>

    <!-- FOOTER -->
    @include('partials.footer')

    <!-- Scripts -->
    <script src="https://unpkg.com/lucide@latest"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Inisialisasi AOS
        AOS.init({ duration: 800, once: true });

        // Mobile menu toggle
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        const closeMobileMenu = document.getElementById('close-mobile-menu');

        if (mobileMenuBtn && mobileMenu && closeMobileMenu) {
            mobileMenuBtn.addEventListener('click', () => mobileMenu.classList.remove('hidden'));
            closeMobileMenu.addEventListener('click', () => mobileMenu.classList.add('hidden'));
        }

        // Inisialisasi ikon lucide
        lucide.createIcons();
    </script>
</body>
</html>
