<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Panduan & Demo - SMESTICON</title>
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

    .mobile-menu {
      display: none;
    }

    @media (max-width: 768px) {
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
          <li><a href="/about" class="text-gray-700 hover:text-grey-orange transition">Tentang Kami</a></li>
          <li><a href="/packages" class="text-gray-700 hover:text-grey-orange transition">Paket</a></li>
          <li><a href="/tutorials" class="text-grey-orange font-semibold">Tutorial</a></li>
        </ul>
        <button class="hidden sm:block px-4 sm:px-5 py-2 sm:py-2.5 rounded-lg bg-grey-orange text-white text-xs sm:text-sm font-medium hover:bg-grey-orange-dark transition">Hubungi Kami</button>
        <button class="md:hidden text-gray-900 text-2xl" onclick="toggleMenu()">☰</button>
      </div>

      <div class="mobile-menu md:hidden mt-4 pb-4 border-t border-gray-200 pt-4">
        <ul class="space-y-3">
          <li><a href="/" class="text-gray-700 hover:text-grey-orange transition block">Beranda</a></li>
          <li><a href="/about" class="text-gray-700 hover:text-grey-orange transition block">Tentang Kami</a></li>
          <li><a href="/packages" class="text-gray-700 hover:text-grey-orange transition block">Paket</a></li>
          <li><a href="/tutorials" class="text-grey-orange font-semibold block">Tutorial</a></li>
          <li><button class="w-full px-4 py-2 rounded-lg bg-grey-orange text-white text-sm font-medium hover:bg-grey-orange-dark transition">Hubungi Kami</button></li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- Hero Section -->
  <section class="py-12 sm:py-16 md:py-20 bg-gradient-to-br from-gray-50 to-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
      <div class="text-center mb-2">
        <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold mb-3 sm:mb-4 text-gray-900">Panduan & Demo</h1>
        <p class="text-base sm:text-lg md:text-xl lg:text-2xl text-grey-orange max-w-2xl mx-auto font-medium">Pelajari langkah penggunaan fitur utama secara interaktif.</p>
      </div>
    </div>
  </section>

  <!-- Tutorial Grid Section -->
  <section class="py-12 sm:py-16 md:py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6 md:gap-8 mb-8 sm:mb-12">
        <!-- Tutorial Card 1 -->
        <div class="bg-white border-2 border-gray-200 rounded-2xl overflow-hidden hover:shadow-xl hover:border-grey-orange transition-all duration-300 group cursor-pointer">
          <div class="aspect-video bg-gray-100 border-b-2 border-gray-200 flex items-center justify-center overflow-hidden">
            <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=600&q=80" alt="Membuat Proyek" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
          </div>
          <div class="p-4 sm:p-6">
            <div class="flex items-center gap-2 mb-2">
              <div class="w-6 h-6 bg-grey-orange rounded flex items-center justify-center flex-shrink-0">
                <i class="fas fa-book text-white text-xs"></i>
              </div>
              <h3 class="text-base sm:text-lg font-bold text-gray-900">Membuat Proyek</h3>
            </div>
          </div>
        </div>

        <!-- Tutorial Card 2 -->
        <div class="bg-white border-2 border-gray-200 rounded-2xl overflow-hidden hover:shadow-xl hover:border-grey-orange transition-all duration-300 group cursor-pointer">
          <div class="aspect-video bg-gray-100 border-b-2 border-gray-200 flex items-center justify-center overflow-hidden">
            <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=600&q=80" alt="Menyusun RAB Master" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
          </div>
          <div class="p-4 sm:p-6">
            <div class="flex items-center gap-2 mb-2">
              <div class="w-6 h-6 bg-grey-orange rounded flex items-center justify-center flex-shrink-0">
                <i class="fas fa-book text-white text-xs"></i>
              </div>
              <h3 class="text-base sm:text-lg font-bold text-gray-900">Menyusun RAB Master</h3>
            </div>
          </div>
        </div>

        <!-- Tutorial Card 3 -->
        <div class="bg-white border-2 border-gray-200 rounded-2xl overflow-hidden hover:shadow-xl hover:border-grey-orange transition-all duration-300 group cursor-pointer">
          <div class="aspect-video bg-gray-100 border-b-2 border-gray-200 flex items-center justify-center overflow-hidden">
            <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=600&q=80" alt="Mengatur AHS Lokal" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
          </div>
          <div class="p-4 sm:p-6">
            <div class="flex items-center gap-2 mb-2">
              <div class="w-6 h-6 bg-grey-orange rounded flex items-center justify-center flex-shrink-0">
                <i class="fas fa-book text-white text-xs"></i>
              </div>
              <h3 class="text-base sm:text-lg font-bold text-gray-900">Mengatur AHS Lokal</h3>
            </div>
          </div>
        </div>

        <!-- Tutorial Card 4 -->
        <div class="bg-white border-2 border-gray-200 rounded-2xl overflow-hidden hover:shadow-xl hover:border-grey-orange transition-all duration-300 group cursor-pointer">
          <div class="aspect-video bg-gray-100 border-b-2 border-gray-200 flex items-center justify-center overflow-hidden">
            <img src="https://images.unsplash.com/photo-1586281380349-632531db7ed4?w=600&q=80" alt="Mengekspor Laporan" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
          </div>
          <div class="p-4 sm:p-6">
            <div class="flex items-center gap-2 mb-2">
              <div class="w-6 h-6 bg-grey-orange rounded flex items-center justify-center flex-shrink-0">
                <i class="fas fa-book text-white text-xs"></i>
              </div>
              <h3 class="text-base sm:text-lg font-bold text-gray-900">Mengekspor Laporan</h3>
            </div>
          </div>
        </div>

        <!-- Tutorial Card 5 -->
        <div class="bg-white border-2 border-gray-200 rounded-2xl overflow-hidden hover:shadow-xl hover:border-grey-orange transition-all duration-300 group cursor-pointer">
          <div class="aspect-video bg-gray-100 border-b-2 border-gray-200 flex items-center justify-center overflow-hidden">
            <img src="https://images.unsplash.com/photo-1553877522-43269d4ea984?w=600&q=80" alt="Mengatur AHS Lokal" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
          </div>
          <div class="p-4 sm:p-6">
            <div class="flex items-center gap-2 mb-2">
              <div class="w-6 h-6 bg-grey-orange rounded flex items-center justify-center flex-shrink-0">
                <i class="fas fa-book text-white text-xs"></i>
              </div>
              <h3 class="text-base sm:text-lg font-bold text-gray-900">Mengatur AHS Lokal</h3>
            </div>
          </div>
        </div>

        <!-- Tutorial Card 6 -->
        <div class="bg-white border-2 border-gray-200 rounded-2xl overflow-hidden hover:shadow-xl hover:border-grey-orange transition-all duration-300 group cursor-pointer">
          <div class="aspect-video bg-gray-100 border-b-2 border-gray-200 flex items-center justify-center overflow-hidden">
            <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?w=600&q=80" alt="Mengekspor Laporan" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
          </div>
          <div class="p-4 sm:p-6">
            <div class="flex items-center gap-2 mb-2">
              <div class="w-6 h-6 bg-grey-orange rounded flex items-center justify-center flex-shrink-0">
                <i class="fas fa-book text-white text-xs"></i>
              </div>
              <h3 class="text-base sm:text-lg font-bold text-gray-900">Mengekspor Laporan</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Panduan Lengkap Section -->
  <section class="py-12 sm:py-16 md:py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
      <div class="mb-8 sm:mb-12">
        <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold mb-2 sm:mb-3 text-gray-900">Panduan Lengkap SMESTICON</h2>
        <p class="text-sm sm:text-base text-gray-600 leading-relaxed mb-2">Ingin panduan lengkap langkah demi langkah?</p>
        <p class="text-sm sm:text-base text-gray-600 mb-4 sm:mb-6 leading-relaxed">Untuk Manual Book SMESTICON versi terbaru dalam format PDF.</p>
        <a href="#" class="inline-block px-5 sm:px-6 py-2 sm:py-3 rounded-lg bg-grey-orange text-white font-semibold text-sm sm:text-base hover:bg-grey-orange-dark transition shadow-lg mb-6 sm:mb-8">
          Unduh Manual Book
        </a>
      </div>

      <div style="position:relative;padding-top:max(60%,324px);width:100%;height:0;">
        <iframe style="position:absolute;border:none;width:100%;height:100%;left:0;top:0;" src="https://online.fliphtml5.com/pfwcy/vpnd/" seamless="seamless" scrolling="no" frameborder="0" allowtransparency="true" allowfullscreen="true"></iframe>
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
          <p class="text-xs text-gray-400 mt-3 leading-relaxed">Jl. HOS Cokroaminoto No.225, Tegalrejo, Kec. Tegalrejo, Kota Yogyakarta, DIY 55244</p>
        </div>
      </div>
      
      <div class="border-t border-white/70 pt-6 sm:pt-8 text-center text-xs sm:text-sm text-gray-400">
        © 2025 SMESTICON. All rights reserved.
      </div>
    </div>
  </footer>

  <script>
    function toggleMenu() {
      const menu = document.querySelector('.mobile-menu');
      menu.classList.toggle('active');
    }

    document.querySelectorAll('.mobile-menu a').forEach(link => {
      link.addEventListener('click', () => {
        document.querySelector('.mobile-menu').classList.remove('active');
      });
    });

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