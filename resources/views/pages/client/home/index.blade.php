<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SMESTICON Landing Page</title>
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
          <li><a href="/about" class="text-gray-700 hover:text-grey-orange transition">Tentang Kami</a></li>
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
          <li><a href="/about" class="text-gray-700 hover:text-grey-orange transition block">Tentang Kami</a></li>
          <li><a href="/packages" class="text-gray-700 hover:text-grey-orange transition block">Paket</a></li>
          <li><a href="/tutorials" class="text-gray-700 hover:text-grey-orange transition block">Tutorial</a></li>
          <li><button class="w-full px-4 py-2 rounded-lg bg-grey-orange text-white text-sm font-medium hover:bg-grey-orange-dark transition">Hubungi Kami</button></li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- Hero Section -->
  <section class="relative w-full h-screen sm:h-[calc(100vh-64px)] overflow-hidden">
    <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=1600&q=80" alt="Construction Hero" class="absolute inset-0 w-full h-full object-cover">
    <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/80 to-black/95"></div>
    <div class="relative z-10 h-full flex items-center">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 w-full">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 sm:gap-12 items-center">
          <div>
            <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold leading-snug lg:leading-snug mb-4 sm:mb-6 text-white">
              Kelola Anggaran Proyek Lebih Cepat, Akurat, dan Profesional
            </h1>
            <p class="text-sm sm:text-base md:text-lg text-white/70 leading-relaxed mb-4 sm:mb-6">
              Hemat waktu, tingkatkan akurasi, dan hasilkan laporan profesional hanya dalam beberapa klik.
            </p>
            <button class="px-5 sm:px-7 py-3 sm:py-3.5 rounded-lg bg-grey-orange text-white font-semibold text-sm sm:text-base hover:bg-grey-orange-dark transition shadow-lg">
              Coba Gratis Sekarang
            </button>
          </div>
          
          <!-- Mac Mockup -->
          <div class="hidden lg:block">
            <div class="relative">
              <!-- Mac Window Frame -->
              <div class="bg-gray-800 rounded-t-2xl p-3 shadow-2xl">
                <div class="flex items-center gap-2 mb-3">
                  <div class="w-3 h-3 rounded-full bg-red-500"></div>
                  <div class="w-3 h-3 rounded-full bg-yellow-500"></div>
                  <div class="w-3 h-3 rounded-full bg-green-500"></div>
                </div>
                <!-- Video Container -->
                <div class="bg-black rounded-lg overflow-hidden aspect-video">
                  <video 
                    class="w-full h-full object-cover"
                    autoplay 
                    muted 
                    loop 
                    playsinline
                  >
                    <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                  </video>
                </div>
              </div>
              <!-- Mac Base -->
              <div class="bg-gray-300 h-6 rounded-b-2xl shadow-xl"></div>
              <div class="mx-auto w-32 h-2 bg-gray-400 rounded-b-lg"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Smart Estimator Section -->
  <section id="tentang" class="py-12 sm:py-16 md:py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8 sm:gap-12 md:gap-16 items-center">
        <div class="order-1 md:order-1 flex justify-center">
          <div class="relative w-56 h-56 sm:w-72 sm:h-72 md:w-80 md:h-80">
            <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=500&q=80" alt="Smart Construction" class="w-full h-full rounded-full object-cover shadow-2xl">
          </div>
        </div>
        <div class="order-2 md:order-2">
          <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold mb-4 sm:mb-5 text-gray-900">Smart Estimator for Construction</h2>
          <p class="text-sm sm:text-base text-gray-600 leading-relaxed mb-4">
            SMESTICON adalah software estimasi biaya konstruksi berbasis web yang membantu kontraktor, konsultan, pemilik proyek, dan instansi dalam menyusun serta mengelola RAB secara efisien dan terstruktur.
          </p>
          <button class="px-6 py-3 rounded-lg bg-grey-orange text-white font-semibold text-sm sm:text-base hover:bg-grey-orange-dark transition shadow-lg">
            <a href="/about">Kenali Kami</a>  
          </button>
        </div>
      </div>
    </div>
  </section>

  <!-- Mengapa SMESTICON Section -->
  <section class="py-12 sm:py-16 md:py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
      <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-center mb-8 sm:mb-12 text-gray-900">Mengapa SMESTICON?</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-4 sm:gap-6 md:gap-8">
        <!-- Card 1 -->
        <div class="bg-white border-2 border-gray-200 rounded-2xl p-6 sm:p-8 text-center hover:shadow-xl hover:border-grey-orange transition-all duration-300">
          <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=400&q=80" alt="Praktis & Efisien" class="w-full h-40 sm:h-48 object-cover rounded-xl mb-4 sm:mb-6">
          <h3 class="text-base sm:text-lg font-bold mb-2 text-gray-900">Praktis & Efisien</h3>
          <p class="text-xs sm:text-sm text-gray-600 leading-relaxed">Menyederhanakan proses penyusunan RAB secara digital.</p>
        </div>
        
        <!-- Card 2 -->
        <div class="bg-white border-2 border-gray-200 rounded-2xl p-6 sm:p-8 text-center hover:shadow-xl hover:border-grey-orange transition-all duration-300">
          <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=400&q=80" alt="Akurat & Terpercaya" class="w-full h-40 sm:h-48 object-cover rounded-xl mb-4 sm:mb-6">
          <h3 class="text-base sm:text-lg font-bold mb-2 text-gray-900">Akurat & Terstruktur</h3>
          <p class="text-xs sm:text-sm text-gray-600 leading-relaxed">Memberikan hasil yang rapi dan mudah disesuaikan.</p>
        </div>
        
        <!-- Card 3 -->
        <div class="bg-white border-2 border-gray-200 rounded-2xl p-6 sm:p-8 text-center hover:shadow-xl hover:border-grey-orange transition-all duration-300">
          <img src="https://images.unsplash.com/photo-1664575602554-2087b04935a5?w=400&q=80" alt="Fitur Profesional" class="w-full h-40 sm:h-48 object-cover rounded-xl mb-4 sm:mb-6">
          <h3 class="text-base sm:text-lg font-bold mb-2 text-gray-900">Fleksibel Untuk Semua Proyek</h3>
          <p class="text-xs sm:text-sm text-gray-600 leading-relaxed">Cocok digunakan pada berbagai jenis dan skala pekerjaan konstruksi.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Fitur Utama Section -->
  <section class="py-12 sm:py-16 md:py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
      <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-center mb-8 sm:mb-12 text-gray-900">Fitur Utama</h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-4 sm:gap-6 max-w-4xl mx-auto">
        <!-- Feature 1 -->
        <div class="bg-white border-2 border-gray-200 rounded-xl p-6 sm:p-8 hover:shadow-xl hover:border-grey-orange transition-all duration-300">
          <div class="w-12 sm:w-16 h-12 sm:h-16 bg-grey-orange/10 rounded-xl flex items-center justify-center mb-4 sm:mb-5 mx-auto">
            <i class="fas fa-file-invoice text-2xl sm:text-3xl text-grey-orange"></i>
          </div>
          <h3 class="text-base sm:text-lg font-bold mb-2 text-gray-900 text-center">RAB Master Otomatis</h3>
          <p class="text-xs sm:text-sm text-gray-600 leading-relaxed text-center">Buat dan kelola RAB dengan struktur sistematis.</p>
        </div>
        
        <!-- Feature 2 -->
        <div class="bg-white border-2 border-gray-200 rounded-xl p-6 sm:p-8 hover:shadow-xl hover:border-grey-orange transition-all duration-300">
          <div class="w-12 sm:w-16 h-12 sm:h-16 bg-grey-orange/10 rounded-xl flex items-center justify-center mb-4 sm:mb-5 mx-auto">
            <i class="fas fa-tags text-2xl sm:text-3xl text-grey-orange"></i>
          </div>
          <h3 class="text-base sm:text-lg font-bold mb-2 text-gray-900 text-center">AHS Lokal & Nasional</h3>
          <p class="text-xs sm:text-sm text-gray-600 leading-relaxed text-center">Gunakan atau sesuaikan harga satuan sesuai kebutuhan.</p>
        </div>
        
        <!-- Feature 3 -->
        <div class="bg-white border-2 border-gray-200 rounded-xl p-6 sm:p-8 hover:shadow-xl hover:border-grey-orange transition-all duration-300">
          <div class="w-12 sm:w-16 h-12 sm:h-16 bg-grey-orange/10 rounded-xl flex items-center justify-center mb-4 sm:mb-5 mx-auto">
            <i class="fas fa-file-export text-2xl sm:text-3xl text-grey-orange"></i>
          </div>
          <h3 class="text-base sm:text-lg font-bold mb-2 text-gray-900 text-center">Rekap & Laporan Cepat</h3>
          <p class="text-xs sm:text-sm text-gray-600 leading-relaxed text-center">Hasil ekspor ke PDF atau Excel secara instan.</p>
        </div>
        
        <!-- Feature 4 -->
        <div class="bg-white border-2 border-gray-200 rounded-xl p-6 sm:p-8 hover:shadow-xl hover:border-grey-orange transition-all duration-300">
          <div class="w-12 sm:w-16 h-12 sm:h-16 bg-grey-orange/10 rounded-xl flex items-center justify-center mb-4 sm:mb-5 mx-auto">
            <i class="fas fa-users text-2xl sm:text-3xl text-grey-orange"></i>
          </div>
          <h3 class="text-base sm:text-lg font-bold mb-2 text-gray-900 text-center">Kolaborasi Tim Online</h3>
          <p class="text-xs sm:text-sm text-gray-600 leading-relaxed text-center">Kerja bersama dalam satu akun proyek.</p>
        </div>
        
        <!-- Feature 5 - Centered -->
        <div class="bg-white border-2 border-gray-200 rounded-xl p-6 sm:p-8 hover:shadow-xl hover:border-grey-orange transition-all duration-300 sm:col-span-2 lg:col-span-2 lg:w-1/2 lg:mx-auto">
          <div class="w-12 sm:w-16 h-12 sm:h-16 bg-grey-orange/10 rounded-xl flex items-center justify-center mb-4 sm:mb-5 mx-auto">
            <i class="fas fa-chart-line text-2xl sm:text-3xl text-grey-orange"></i>
          </div>
          <h3 class="text-base sm:text-lg font-bold mb-2 text-gray-900 text-center">Dashboard Analitik</h3>
          <p class="text-xs sm:text-sm text-gray-600 leading-relaxed text-center">Pantau progress dan efisiensi biaya.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Pilih Paket Section -->
  <section id="paket" class="py-12 sm:py-16 md:py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
      <div class="text-center mb-8 sm:mb-12">
        <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold mb-3 text-gray-900">Pilih Paket Sesuai Skala Proyek Anda</h2>
        <p class="text-xs sm:text-sm md:text-base text-gray-600 max-w-3xl mx-auto">
          Dari individu hingga perusahaan besar, SMESTICON siap menyesuaikan kebutuhan Anda.
        </p>
      </div>
      
      <div class="max-w-4xl mx-auto">
        <h3 class="text-lg sm:text-xl font-bold mb-4 sm:mb-6 text-gray-900">PILIHAN PAKET</h3>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 sm:gap-6">
          <div class="bg-white border-2 border-gray-200 rounded-xl p-5 sm:p-8 hover:shadow-xl hover:border-grey-orange transition-all duration-300 cursor-pointer group">
            <div class="flex items-center gap-4">
              <svg class="w-5 h-5 text-grey-orange flex-shrink-0 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"/>
              </svg>
              <div>
                <h4 class="text-base sm:text-lg font-bold mb-1 text-gray-900">Trial Plan</h4>
                <p class="text-xs sm:text-sm text-gray-600">Coba gratis 1 bulan</p>
              </div>
            </div>
          </div>
          
          <div class="bg-white border-2 border-gray-200 rounded-xl p-5 sm:p-8 hover:shadow-xl hover:border-grey-orange transition-all duration-300 cursor-pointer group">
            <div class="flex items-center gap-4">
              <svg class="w-5 h-5 text-grey-orange flex-shrink-0 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"/>
              </svg>
              <div>
                <h4 class="text-base sm:text-lg font-bold mb-1 text-gray-900">Basic Plan</h4>
                <p class="text-xs sm:text-sm text-gray-600">Untuk individu dan tim kecil</p>
              </div>
            </div>
          </div>
          
          <div class="bg-white border-2 border-gray-200 rounded-xl p-5 sm:p-8 hover:shadow-xl hover:border-grey-orange transition-all duration-300 cursor-pointer group">
            <div class="flex items-center gap-4">
              <svg class="w-5 h-5 text-grey-orange flex-shrink-0 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"/>
              </svg>
              <div>
                <h4 class="text-base sm:text-lg font-bold mb-1 text-gray-900">Professional Plan</h4>
                <p class="text-xs sm:text-sm text-gray-600">Untuk konsultan dan kontraktor aktif</p>
              </div>
            </div>
          </div>
          
          <div class="bg-white border-2 border-gray-200 rounded-xl p-5 sm:p-8 hover:shadow-xl hover:border-grey-orange transition-all duration-300 cursor-pointer group">
            <div class="flex items-center gap-4">
              <svg class="w-5 h-5 text-grey-orange flex-shrink-0 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"/>
              </svg>
              <div>
                <h4 class="text-base sm:text-lg font-bold mb-1 text-gray-900">Enterprise Plan</h4>
                <p class="text-xs sm:text-sm text-gray-600">Untuk perusahaan dengan tim besar</p>
              </div>
            </div>
          </div>
        </div>
        
        <div class="text-center mt-8 sm:mt-12">
          <button class="px-6 sm:px-7 py-3 sm:py-3.5 rounded-lg bg-grey-orange text-white font-semibold text-sm sm:text-base hover:bg-grey-orange-dark transition shadow-lg">
            <a href="/packages">Lihat Detail Paket & Harga</a>
          </button>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ Section -->
  <section id="faq" class="py-12 sm:py-16 md:py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
      <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-center mb-8 sm:mb-12 text-gray-900">Pertanyaan yang Sering Diajukan (FAQ)</h2>
      
      <div class="max-w-4xl mx-auto space-y-3 sm:space-y-4">
        <!-- FAQ Item 1 -->
        <div class="bg-white border-2 border-gray-200 rounded-xl overflow-hidden">
          <button class="w-full px-5 sm:px-8 py-5 sm:py-6 text-left flex items-center justify-between hover:bg-gray-50 transition-colors">
            <h3 class="text-base sm:text-lg font-bold text-gray-900 pr-4">Apa itu SMESTICON?</h3>
            <svg class="w-5 sm:w-6 h-5 sm:h-6 text-grey-orange flex-shrink-0 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
            </svg>
          </button>
          <div class="px-5 sm:px-8 pb-5 sm:pb-6 hidden">
            <p class="text-xs sm:text-sm text-gray-600 leading-relaxed">SMESTICON adalah perangkat lunak estimasi biaya konstruksi berbasis web yang membantu dalam penyusunan, pengelolaan, dan pelaporan RAB proyek secara digital.</p>
          </div>
        </div>
        
        <!-- FAQ Item 2 -->
        <div class="bg-white border-2 border-gray-200 rounded-xl overflow-hidden">
          <button class="w-full px-5 sm:px-8 py-5 sm:py-6 text-left flex items-center justify-between hover:bg-gray-50 transition-colors">
            <h3 class="text-base sm:text-lg font-bold text-gray-900 pr-4">Siapa yang dapat menggunakan SMESTICON?</h3>
            <svg class="w-5 sm:w-6 h-5 sm:h-6 text-grey-orange flex-shrink-0 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
            </svg>
          </button>
          <div class="px-5 sm:px-8 pb-5 sm:pb-6 hidden">
            <p class="text-xs sm:text-sm text-gray-600 leading-relaxed">Dapat digunakan oleh kontraktor, konsultan, pemilik proyek, instansi pemerintah, maupun pihak swasta yang terlibat dalam pekerjaan konstruksi.</p>
          </div>
        </div>
        
        <!-- FAQ Item 3 -->
        <div class="bg-white border-2 border-gray-200 rounded-xl overflow-hidden">
          <button class="w-full px-5 sm:px-8 py-5 sm:py-6 text-left flex items-center justify-between hover:bg-gray-50 transition-colors">
            <h3 class="text-base sm:text-lg font-bold text-gray-900 pr-4">Apakah SMESTICON memerlukan instalasi?</h3>
            <svg class="w-5 sm:w-6 h-5 sm:h-6 text-grey-orange flex-shrink-0 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
            </svg>
          </button>
          <div class="px-5 sm:px-8 pb-5 sm:pb-6 hidden">
            <p class="text-xs sm:text-sm text-gray-600 leading-relaxed">Tidak. SMESTICON dirancang eksklusif untuk pengguna sehingga keamanan dan kualitas data proyek tetap terjaga. Akses diberikan melalui akun resmi dan link yang dikelola langsung oleh tim SMESTICON.</p>
          </div>
        </div>
        
        <!-- FAQ Item 4 -->
        <div class="bg-white border-2 border-gray-200 rounded-xl overflow-hidden">
          <button class="w-full px-5 sm:px-8 py-5 sm:py-6 text-left flex items-center justify-between hover:bg-gray-50 transition-colors">
            <h3 class="text-base sm:text-lg font-bold text-gray-900 pr-4">Apakah bisa menambahkan AHS sendiri?</h3>
            <svg class="w-5 sm:w-6 h-5 sm:h-6 text-grey-orange flex-shrink-0 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
            </svg>
          </button>
          <div class="px-5 sm:px-8 pb-5 sm:pb-6 hidden">
            <p class="text-xs sm:text-sm text-gray-600 leading-relaxed">Bisa. Pengguna dapat membuat AHS lokal sesuai kebutuhan.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Bergabung Section -->
  <section id="bergabung" class="py-12 sm:py-16 md:py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8 sm:gap-12 md:gap-16 items-center">
        <div class="order-1 md:order-1">
          <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?w=600&q=80" alt="Join Us" class="w-full h-64 sm:h-80 md:h-[400px] object-cover rounded-2xl shadow-2xl mb-6 md:mb-0">
        </div>
        
        <div class="order-2 md:order-2">
          <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold mb-4 sm:mb-5 text-gray-900">Mari Bergabung dengan SMESTICON</h2>
          <p class="text-sm sm:text-base text-gray-600 mb-5 sm:mb-6 leading-relaxed">
            Satu platform, semua kebutuhan estimasi konstruksi Anda. 
            Jadikan penyusunan RAB lebih cerdas dan efisien.
          </p>
          <button class="px-6 sm:px-7 py-3 sm:py-3.5 rounded-lg bg-grey-orange text-white font-semibold text-sm sm:text-base hover:bg-grey-orange-dark transition shadow-lg">
            Konsultasikan dengan Kami
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

    // FAQ Accordion
    document.querySelectorAll('#faq button').forEach(button => {
      button.addEventListener('click', function() {
        const content = this.nextElementSibling;
        const icon = this.querySelector('svg');
        const isOpen = !content.classList.contains('hidden');
        
        // Close all other accordions
        document.querySelectorAll('#faq button').forEach(btn => {
          const otherContent = btn.nextElementSibling;
          const otherIcon = btn.querySelector('svg');
          if (btn !== this) {
            otherContent.classList.add('hidden');
            otherIcon.classList.remove('rotate-180');
          }
        });
        
        // Toggle current accordion
        if (isOpen) {
          content.classList.add('hidden');
          icon.classList.remove('rotate-180');
        } else {
          content.classList.remove('hidden');
          icon.classList.add('rotate-180');
        }
      });
    });
  </script>
</body>
</html>