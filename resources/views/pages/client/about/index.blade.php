<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tentang Kami - SMESTICON</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            'grey-orange': '#998169',
            'grey-orange-dark': '#7d6a56',
          }
        }
      }
    }
  </script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&family=Inter:wght@400;500;600;700&display=swap');
    
    body {
      font-family: 'Inter', sans-serif;
    }
    
    h1, h2, h3, h4, h5, h6 {
      font-family: 'Poppins', sans-serif;
    }

    .menu-toggle {
      display: none;
    }

    @media (max-width: 768px) {
      .menu-toggle {
        display: block;
      }

      .mobile-menu {
        display: none;
      }

      .mobile-menu.active {
        display: block;
      }
    }
  </style>
</head>
<body class="bg-white text-gray-900">
  <!-- Header -->
  <header class="sticky top-0 z-50 bg-white/95 backdrop-blur border-b border-gray-200">
    <nav class="max-w-7xl mx-auto px-4 sm:px-6 py-3 sm:py-4">
      <div class="flex items-center justify-between">
        <div class="text-lg sm:text-xl font-bold tracking-tight text-gray-900">SMESTICON</div>
        <ul class="hidden md:flex items-center gap-6 lg:gap-8 text-xs sm:text-sm font-medium">
          <li><a href="/" class="text-gray-700 hover:text-grey-orange transition">Beranda</a></li>
          <li><a href="/about" class="text-grey-orange font-semibold">Tentang Kami</a></li>
          <li><a href="/packages" class="text-gray-700 hover:text-grey-orange transition">Paket</a></li>
          <li><a href="/tutorials" class="text-gray-700 hover:text-grey-orange transition">Tutorial</a></li>
        </ul>
        <button class="hidden sm:block px-4 sm:px-5 py-2 sm:py-2.5 rounded-lg bg-grey-orange text-white text-xs sm:text-sm font-medium hover:bg-grey-orange-dark transition">Hubungi Kami</button>
        <button class="md:hidden text-gray-900 text-2xl menu-toggle" onclick="toggleMobileMenu()">☰</button>
      </div>
      
      <!-- Mobile Menu -->
      <div class="mobile-menu md:hidden mt-4 pb-4 border-t border-gray-200 pt-4">
        <ul class="space-y-3">
          <li><a href="/" class="text-gray-700 hover:text-grey-orange transition block">Beranda</a></li>
          <li><a href="/about" class="text-grey-orange font-semibold block">Tentang Kami</a></li>
          <li><a href="/packages" class="text-gray-700 hover:text-grey-orange transition block">Paket</a></li>
          <li><a href="/tutorials" class="text-gray-700 hover:text-grey-orange transition block">Tutorial</a></li>
          <li><button class="w-full px-4 py-2 rounded-lg bg-grey-orange text-white text-sm font-medium hover:bg-grey-orange-dark transition">Hubungi Kami</button></li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- Hero Section -->
  <section class="relative py-12 sm:py-20 md:py-32 bg-gradient-to-br from-gray-50 to-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6 sm:gap-8 md:gap-12 items-center">
        <!-- Left Content -->
        <div class="order-1 md:order-1">
          <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold mb-4 sm:mb-6 text-gray-900">
            SMESTICON
          </h1>
          <h2 class="text-lg sm:text-xl md:text-2xl text-grey-orange mb-4 sm:mb-6 font-medium">
            Smart Estimator for Construction
          </h2>
          <p class="text-sm sm:text-base text-gray-600 leading-relaxed mb-4 sm:mb-6">
            SMESTICON adalah perangkat lunak untuk membantu penyusunan RAB secara digital, cepat, dan akurat.
          </p>
          <p class="text-sm sm:text-base text-gray-600 leading-relaxed mb-4 sm:mb-8">
            SMESTICON hadir untuk mempermudah kontraktor, konsultan, dan instansi dalam merencanakan biaya proyek tanpa proses manual yang rumit.
          </p>
          <div class="bg-orange-50 border-l-4 border-grey-orange p-3 sm:p-4 rounded">
            <p class="text-xs sm:text-sm text-gray-700">
              💡 SMESTICON membantu Anda berfokus pada proyek, bukan pada rumitnya perhitungan.
            </p>
          </div>
        </div>

        <!-- Right Image -->
        <div class="order-2 md:order-2 bg-gray-100 rounded-2xl overflow-hidden shadow-2xl aspect-video flex items-center justify-center">
          <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=1200&q=80" alt="SMESTICON Platform" class="w-full h-full object-cover">
        </div>
      </div>
    </div>
  </section>

  <!-- Nilai & Filosofi Kami Section -->
  <section class="py-12 sm:py-16 md:py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
      <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-center mb-8 sm:mb-12 md:mb-16 text-gray-900">Nilai & Filosofi Kami</h2>
      
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 sm:gap-6 md:gap-8">
        <!-- Value 1 -->
        <div class="text-center">
          <div class="bg-gray-100 rounded-xl aspect-square mb-4 sm:mb-6 flex items-center justify-center border-gray-200 overflow-hidden">
            <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?w=500&q=80" alt="Kolaborasi" class="w-full h-full object-cover">
          </div>
          <h3 class="text-lg sm:text-xl font-bold mb-2 sm:mb-3 text-gray-900">Keakuratan</h3>
          <p class="text-xs sm:text-sm text-gray-600 leading-relaxed">
            Setiap data harus dapat dipercaya.
          </p>
        </div>

        <!-- Value 2 -->
        <div class="text-center">
          <div class="bg-gray-100 rounded-xl aspect-square mb-4 sm:mb-6 flex items-center justify-center border-gray-200 overflow-hidden">
            <img src="https://images.unsplash.com/photo-1556761175-b413da4baf72?w=500&q=80" alt="Efisiensi" class="w-full h-full object-cover">
          </div>
          <h3 class="text-lg sm:text-xl font-bold mb-2 sm:mb-3 text-gray-900">Efisiensi</h3>
          <p class="text-xs sm:text-sm text-gray-600 leading-relaxed">
            Waktu pengguna adalah prioritas kami.
          </p>
        </div>

        <!-- Value 3 -->
        <div class="text-center">
          <div class="bg-gray-100 rounded-xl aspect-square mb-4 sm:mb-6 flex items-center justify-center border-gray-200 overflow-hidden">
            <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=500&q=80" alt="Keakuratan" class="w-full h-full object-cover">
          </div>
          <h3 class="text-lg sm:text-xl font-bold mb-2 sm:mb-3 text-gray-900">Kolaborasi</h3>
          <p class="text-xs sm:text-sm text-gray-600 leading-relaxed">
            Proyek terbaik lahir dari kerja tim yang terhubung.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Temukan Kami Section -->
  <section class="py-12 sm:py-16 md:py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
      <div class="flex items-start gap-3 mb-8 sm:mb-12">
        <div class="w-8 h-8 bg-red-500 rounded flex items-center justify-center flex-shrink-0 mt-1">
          <i class="fas fa-map-marker-alt text-white text-sm"></i>
        </div>
        <div>
          <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-900">Temukan Kami</h2>
        </div>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-6 sm:gap-8 md:gap-12">
        <!-- Google Maps -->
        <div class="order-2 md:order-1 bg-gray-100 rounded-2xl overflow-hidden shadow-xl border-gray-200" style="min-height: 300px; height: 100%;">
          <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.0723346496134!2d110.34989157476593!3d-7.782155492237499!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5816658a5555%3A0x139eea692429a36!2sVastu%20Cipta%20Persada!5e0!3m2!1sid!2sid!4v1760515492671!5m2!1sid!2sid"
            width="100%" 
            height="100%" 
            style="border:0; min-height: 300px;" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>

        <!-- Contact Info -->
        <div class="order-1 md:order-2 space-y-6 sm:space-y-8">
          <div>
            <h3 class="text-xl sm:text-2xl font-bold mb-4 sm:mb-6 text-gray-900">Vastech</h3>
            
            <div class="space-y-4 sm:space-y-6">
              <!-- Address -->
              <div class="flex items-start gap-3 sm:gap-4">
                <div class="w-10 h-10 bg-grey-orange/10 rounded-lg flex items-center justify-center flex-shrink-0">
                  <i class="fas fa-map-marker-alt text-grey-orange"></i>
                </div>
                <div>
                  <p class="text-xs sm:text-sm font-semibold text-gray-900 mb-1">Alamat:</p>
                  <p class="text-xs sm:text-sm text-gray-600 leading-relaxed">
                    Jl. HOS Cokroaminoto No.225, Tegalrejo, Kec. Tegalrejo, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55244
                  </p>
                </div>
              </div>

              <!-- Email -->
              <div class="flex items-start gap-3 sm:gap-4">
                <div class="w-10 h-10 bg-grey-orange/10 rounded-lg flex items-center justify-center flex-shrink-0">
                  <i class="fas fa-envelope text-grey-orange"></i>
                </div>
                <div>
                  <p class="text-xs sm:text-sm font-semibold text-gray-900 mb-1">Email:</p>
                  <a href="mailto:marketing@vastech.co.id" class="text-xs sm:text-sm text-grey-orange hover:text-grey-orange-dark transition">
                    marketing@vastech.co.id
                  </a>
                </div>
              </div>

              <!-- Phone -->
              <div class="flex items-start gap-3 sm:gap-4">
                <div class="w-10 h-10 bg-grey-orange/10 rounded-lg flex items-center justify-center flex-shrink-0">
                  <i class="fas fa-phone text-grey-orange"></i>
                </div>
                <div>
                  <p class="text-xs sm:text-sm font-semibold text-gray-900 mb-1">Telepon:</p>
                  <p class="text-xs sm:text-sm text-gray-600">+62 851-8325-8575</p>
                </div>
              </div>

              <!-- Hours -->
              <div class="flex items-start gap-3 sm:gap-4">
                <div class="w-10 h-10 bg-grey-orange/10 rounded-lg flex items-center justify-center flex-shrink-0">
                  <i class="fas fa-clock text-grey-orange"></i>
                </div>
                <div>
                  <p class="text-xs sm:text-sm font-semibold text-gray-900 mb-1">Jam Operasional:</p>
                  <p class="text-xs sm:text-sm text-gray-600">Senin — Jumat, 09.00 — 17.00 WIB</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA Section -->
  <section class="py-12 sm:py-16 md:py-20 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 text-center">
      <div class="bg-gradient-to-br from-grey-orange to-grey-orange-dark rounded-2xl sm:rounded-3xl p-8 sm:p-12 shadow-2xl">
        <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold mb-3 sm:mb-4 text-white">
          Ingin tahu bagaimana SMESTICON bisa membantu proyek Anda?
        </h2>
        <p class="text-sm sm:text-base md:text-lg text-white/90 mb-6 sm:mb-8 max-w-2xl mx-auto">
          Yuk, mulai dengan pelatihan dasar atau coba versi demonya.
        </p>
        <div class="flex flex-col sm:flex-row flex-wrap gap-3 sm:gap-4 justify-center">
          <button class="px-6 sm:px-8 py-3 sm:py-4 rounded-lg bg-white text-grey-orange font-semibold text-sm sm:text-base hover:bg-gray-100 transition shadow-lg">
            Mulai Sekarang
          </button>
          <button class="px-6 sm:px-8 py-3 sm:py-4 rounded-lg bg-transparent border-2 border-white text-white font-semibold text-sm sm:text-base hover:bg-white/10 transition">
            Lihat Demo
          </button>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-black py-12 sm:py-16 md:py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
      <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-4 gap-6 sm:gap-8 md:gap-12 mb-8 sm:mb-12">
        <div>
          <h3 class="text-lg sm:text-xl font-bold mb-4 sm:mb-6 text-white">SMESTICON</h3>
          <div class="flex gap-4">
            <a href="#" class="text-white hover:text-grey-orange transition">
              <i class="fab fa-whatsapp text-xl sm:text-2xl"></i>
            </a>
            <a href="#" class="text-white hover:text-grey-orange transition">
              <i class="fab fa-instagram text-xl sm:text-2xl"></i>
            </a>
            <a href="#" class="text-white hover:text-grey-orange transition">
              <i class="fab fa-linkedin text-xl sm:text-2xl"></i>
            </a>
            <a href="#" class="text-white hover:text-grey-orange transition">
              <i class="fas fa-envelope text-xl sm:text-2xl"></i>
            </a>
          </div>
        </div>
        
        <div>
          <h4 class="font-semibold mb-3 sm:mb-4 text-white text-sm sm:text-base">Halaman</h4>
          <ul class="space-y-2 sm:space-y-3 text-xs sm:text-sm text-gray-400">
            <li><a href="#" class="hover:text-grey-orange transition">Beranda</a></li>
            <li><a href="#tentang" class="hover:text-grey-orange transition">Tentang</a></li>
            <li><a href="#paket" class="hover:text-grey-orange transition">Paket</a></li>
            <li><a href="#faq" class="hover:text-grey-orange transition">FAQ</a></li>
          </ul>
        </div>
        
        <div>
          <h4 class="font-semibold mb-3 sm:mb-4 text-white text-sm sm:text-base">Layanan</h4>
          <ul class="space-y-2 sm:space-y-3 text-xs sm:text-sm text-gray-400">
            <li>RAB Otomatis</li>
            <li>Konsultasi Online</li>
            <li>Update Harga</li>
            <li>Dashboard Analitik</li>
          </ul>
        </div>

        <div>
          <div class="rounded-lg overflow-hidden border border-gray-700">
            <img src="images/maps-vastu.png" alt="Lokasi SMESTICON" class="w-full h-32 sm:h-40 object-cover">
          </div>
          <p class="text-xs text-gray-400 mt-3 leading-relaxed">
            Jl. HOS Cokroaminoto No.225, Tegalrejo, Kec. Tegalrejo, Kota Yogyakarta, DIY 55244
          </p>
        </div>
      </div>
      
      <div class="border-t border-white/70 pt-6 sm:pt-8 text-center text-xs sm:text-sm text-gray-400">
        © 2025 SMESTICON. All rights reserved.
      </div>
    </div>
  </footer>

  <script>
    // Toggle Mobile Menu
    function toggleMobileMenu() {
      const menu = document.querySelector('.mobile-menu');
      menu.classList.toggle('active');
    }

    // Close mobile menu when clicking on a link
    document.querySelectorAll('.mobile-menu a').forEach(link => {
      link.addEventListener('click', () => {
        document.querySelector('.mobile-menu').classList.remove('active');
      });
    });

    // Smooth scroll
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
          target.scrollIntoView({ behavior: 'smooth' });
        }
      });
    });
  </script>
</body>
</html>