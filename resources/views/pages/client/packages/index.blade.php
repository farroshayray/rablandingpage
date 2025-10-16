<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Paket & Lisensi - SMESTICON</title>
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
          <li><a href="/packages" class="text-grey-orange font-semibold">Paket</a></li>
          <li><a href="/tutorials" class="text-gray-700 hover:text-grey-orange transition">Tutorial</a></li>
        </ul>
        <button class="hidden sm:block px-4 sm:px-5 py-2 sm:py-2.5 rounded-lg bg-grey-orange text-white text-xs sm:text-sm font-medium hover:bg-grey-orange-dark transition">Hubungi Kami</button>
        <button class="md:hidden text-gray-900 text-2xl" onclick="toggleMenu()">☰</button>
      </div>
      
      <div class="mobile-menu md:hidden mt-4 pb-4 border-t border-gray-200 pt-4">
        <ul class="space-y-3">
          <li><a href="/" class="text-gray-700 hover:text-grey-orange transition block">Beranda</a></li>
          <li><a href="/about" class="text-gray-700 hover:text-grey-orange transition block">Tentang Kami</a></li>
          <li><a href="/packages" class="text-grey-orange font-semibold block">Paket</a></li>
          <li><a href="/tutorials" class="text-gray-700 hover:text-grey-orange transition block">Tutorial</a></li>
          <li><button class="w-full px-4 py-2 rounded-lg bg-grey-orange text-white text-sm font-medium hover:bg-grey-orange-dark transition">Hubungi Kami</button></li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- Hero Section -->
  <section class="py-12 sm:py-16 md:py-20 bg-gradient-to-br from-gray-50 to-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
      <div class="text-center mb-6 sm:mb-8">
        <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold mb-2 sm:mb-4 text-gray-900">Paket & Lisensi SMESTICON</h1>
        <p class="text-base sm:text-lg md:text-xl lg:text-2xl text-grey-orange mx-auto font-medium mb-4 sm:mb-6">Temukan paket yang sesuai dengan kebutuhan tim dan skala proyek Anda.</p>
      </div>

      <div class="max-w-4xl mx-auto">
        <div class="text-center space-y-2 sm:space-y-3">
          <p class="text-xs sm:text-sm md:text-base text-gray-600 leading-relaxed">Semua paket dapat digunakan di web tanpa batasan fitur utama.</p>
          <p class="text-xs sm:text-sm md:text-base text-gray-600 leading-relaxed">Anda hanya menyesuaikan jumlah pengguna dan dukungan tambahan sesuai kebutuhan.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Trial Plan -->
  <section class="py-8 sm:py-12 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
      <div class="max-w-5xl mx-auto border-2 border-gray-200 rounded-2xl overflow-hidden hover:border-grey-orange transition-all duration-300">
        <div class="grid grid-cols-1 md:grid-cols-5 gap-0">
          <div class="md:col-span-2 bg-gray-50 p-6 sm:p-8 flex flex-col justify-center items-center text-center">
            <h2 class="text-xl sm:text-2xl md:text-3xl font-bold mb-2 text-gray-900">TRIAL PLAN</h2>
            <p class="text-lg sm:text-xl font-semibold text-grey-orange mb-4 sm:mb-6">Gratis 1 Bulan</p>
            <p class="text-xs sm:text-sm text-gray-600 mb-3 sm:mb-4">Coba SMESTICON sebelum berlangganan!</p>
            <p class="text-xs sm:text-sm text-gray-600 mb-4 sm:mb-6">Gunakan semua fitur dasar untuk memahami alur kerja dan manfaatnya.</p>
            <a href="https://rabtest.livevcp.online/admin/login" target="_blank" rel="noopener noreferrer">
              <button class="px-5 sm:px-6 py-2 sm:py-3 rounded-lg bg-grey-orange text-white font-semibold text-sm sm:text-base hover:bg-grey-orange-dark transition shadow-lg">Mulai Trial Gratis</button>
            </a>
          </div>

          <div class="md:col-span-3 p-6 sm:p-8 bg-white">
            <ul class="space-y-3 sm:space-y-4">
              <li class="flex items-start gap-3">
                <svg class="w-4 sm:w-5 h-4 sm:h-5 text-grey-orange flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                <span class="text-xs sm:text-sm text-gray-700">Akses RAB Master, Proyek, Laporan, dan AHS Lokal</span>
              </li>
              <li class="flex items-start gap-3">
                <svg class="w-4 sm:w-5 h-4 sm:h-5 text-grey-orange flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                <span class="text-xs sm:text-sm text-gray-700">Template perhitungan RAB (bisa disesuaikan sendiri)</span>
              </li>
              <li class="flex items-start gap-3">
                <svg class="w-4 sm:w-5 h-4 sm:h-5 text-grey-orange flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                <span class="text-xs sm:text-sm text-gray-700">Ekspor laporan ke PDF/Excel</span>
              </li>
              <li class="flex items-start gap-3">
                <svg class="w-4 sm:w-5 h-4 sm:h-5 text-grey-orange flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                <span class="text-xs sm:text-sm text-gray-700">Pelatihan dasar penggunaan SMESTICON</span>
              </li>
              <li class="flex items-start gap-3">
                <svg class="w-4 sm:w-5 h-4 sm:h-5 text-grey-orange flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                <span class="text-xs sm:text-sm text-gray-700">1 pengguna (individu)</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Basic Plan -->
  <section class="py-8 sm:py-12 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
      <div class="max-w-5xl mx-auto border-2 border-gray-200 rounded-2xl overflow-hidden hover:border-grey-orange transition-all duration-300">
        <div class="grid grid-cols-1 md:grid-cols-5 gap-0">
          <div class="md:col-span-2 bg-white p-6 sm:p-8 flex flex-col justify-center items-center text-center">
            <h2 class="text-xl sm:text-2xl md:text-3xl font-bold mb-2 text-gray-900">BASIC PLAN</h2>
            <p class="text-lg sm:text-xl font-semibold text-grey-orange mb-4 sm:mb-6">Rp 500.000 / bulan</p>
            <p class="text-xs sm:text-sm text-gray-600 mb-4 sm:mb-6">Untuk individu atau tim kecil yang mulai digitalisasi penyusunan RAB.</p>
            <a href="https://wa.me/6285183258575" target="_blank" rel="noopener noreferrer">
              <button class="px-5 sm:px-6 py-2 sm:py-3 rounded-lg bg-grey-orange text-white font-semibold text-sm sm:text-base hover:bg-grey-orange-dark transition shadow-lg">Langganan Sekarang</button>
            </a>
          </div>

          <div class="md:col-span-3 p-6 sm:p-8 bg-gray-50">
            <ul class="space-y-3 sm:space-y-4">
              <li class="flex items-start gap-3">
                <svg class="w-4 sm:w-5 h-4 sm:h-5 text-grey-orange flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                <span class="text-xs sm:text-sm text-gray-700">Semua fitur pada Trial Plan</span>
              </li>
              <li class="flex items-start gap-3">
                <svg class="w-4 sm:w-5 h-4 sm:h-5 text-grey-orange flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                <span class="text-xs sm:text-sm text-gray-700">Pelatihan lanjutan dasar</span>
              </li>
              <li class="flex items-start gap-3">
                <svg class="w-4 sm:w-5 h-4 sm:h-5 text-grey-orange flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                <span class="text-xs sm:text-sm text-gray-700">Akses hingga 2 pengguna</span>
              </li>
              <li class="flex items-start gap-3">
                <svg class="w-4 sm:w-5 h-4 sm:h-5 text-grey-orange flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                <span class="text-xs sm:text-sm text-gray-700">Referensi harga satuan & AHSP Permen PUPR</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Professional Plan -->
  <section class="py-8 sm:py-12 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
      <div class="max-w-5xl mx-auto border-2 border-gray-200 rounded-2xl overflow-hidden hover:border-grey-orange transition-all duration-300">
        <div class="grid grid-cols-1 md:grid-cols-5 gap-0">
          <div class="md:col-span-2 bg-gray-50 p-6 sm:p-8 flex flex-col justify-center items-center text-center">
            <h2 class="text-xl sm:text-2xl md:text-3xl font-bold mb-2 text-gray-900">PROFESSIONAL PLAN</h2>
            <p class="text-lg sm:text-xl font-semibold text-grey-orange mb-4 sm:mb-6">Rp 750.000 / Bulan</p>
            <p class="text-xs sm:text-sm text-gray-600 mb-4 sm:mb-6">Untuk kontraktor & konsultan yang aktif mengelola banyak proyek.</p>
            <a href="https://wa.me/6285183258575" target="_blank" rel="noopener noreferrer">
              <button class="px-5 sm:px-6 py-2 sm:py-3 rounded-lg bg-grey-orange text-white font-semibold text-sm sm:text-base hover:bg-grey-orange-dark transition shadow-lg">Langganan Profesional</button>
            </a>
          </div>

          <div class="md:col-span-3 p-6 sm:p-8 bg-white">
            <ul class="space-y-3 sm:space-y-4">
              <li class="flex items-start gap-3">
                <svg class="w-4 sm:w-5 h-4 sm:h-5 text-grey-orange flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                <span class="text-xs sm:text-sm text-gray-700">Semua fitur Basic Plan</span>
              </li>
              <li class="flex items-start gap-3">
                <svg class="w-4 sm:w-5 h-4 sm:h-5 text-grey-orange flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                <span class="text-xs sm:text-sm text-gray-700">Akses Data Master & AHS Master</span>
              </li>
              <li class="flex items-start gap-3">
                <svg class="w-4 sm:w-5 h-4 sm:h-5 text-grey-orange flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                <span class="text-xs sm:text-sm text-gray-700">Kolaborasi proyek & multi-user workspace</span>
              </li>
              <li class="flex items-start gap-3">
                <svg class="w-4 sm:w-5 h-4 sm:h-5 text-grey-orange flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                <span class="text-xs sm:text-sm text-gray-700">Dukungan teknis prioritas</span>
              </li>
              <li class="flex items-start gap-3">
                <svg class="w-4 sm:w-5 h-4 sm:h-5 text-grey-orange flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                <span class="text-xs sm:text-sm text-gray-700">Pelatihan lanjutan & sesi konsultasi</span>
              </li>
              <li class="flex items-start gap-3">
                <svg class="w-4 sm:w-5 h-4 sm:h-5 text-grey-orange flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                <span class="text-xs sm:text-sm text-gray-700">Hingga 10 pengguna</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Enterprise Plan -->
  <section class="py-8 sm:py-12 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
      <div class="max-w-5xl mx-auto border-2 border-gray-200 rounded-2xl overflow-hidden hover:border-grey-orange transition-all duration-300">
        <div class="grid grid-cols-1 md:grid-cols-5 gap-0">
          <div class="md:col-span-2 bg-white p-6 sm:p-8 flex flex-col justify-center items-center text-center">
            <h2 class="text-xl sm:text-2xl md:text-3xl font-bold mb-2 text-gray-900">ENTERPRISE PLAN</h2>
            <p class="text-lg sm:text-xl font-semibold text-grey-orange mb-4 sm:mb-6">Rp 1.250.000 / Bulan</p>
            <p class="text-xs sm:text-sm text-gray-600 mb-4 sm:mb-6">Untuk instansi & perusahaan besar dengan kebutuhan khusus.</p>
            <a href="https://wa.me/6285183258575" target="_blank" rel="noopener noreferrer">
              <button class="px-5 sm:px-6 py-2 sm:py-3 rounded-lg bg-grey-orange text-white font-semibold text-sm sm:text-base hover:bg-grey-orange-dark transition shadow-lg">Langganan Enterprise</button>
            </a>
          </div>

          <div class="md:col-span-3 p-6 sm:p-8 bg-gray-50">
            <ul class="space-y-3 sm:space-y-4">
              <li class="flex items-start gap-3">
                <svg class="w-4 sm:w-5 h-4 sm:h-5 text-grey-orange flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                <span class="text-xs sm:text-sm text-gray-700">Semua fitur Professional</span>
              </li>
              <li class="flex items-start gap-3">
                <svg class="w-4 sm:w-5 h-4 sm:h-5 text-grey-orange flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                <span class="text-xs sm:text-sm text-gray-700">Akses tim hingga 30 pengguna</span>
              </li>
              <li class="flex items-start gap-3">
                <svg class="w-4 sm:w-5 h-4 sm:h-5 text-grey-orange flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                <span class="text-xs sm:text-sm text-gray-700">Pelatihan & pendampingan eksklusif oleh tim SMESTICON</span>
              </li>
              <li class="flex items-start gap-3">
                <svg class="w-4 sm:w-5 h-4 sm:h-5 text-grey-orange flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                <span class="text-xs sm:text-sm text-gray-700">Fitur tambahan dapat disesuaikan melalui admin</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Custom & Konsultasi -->
  <section class="py-8 sm:py-12 md:py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
      <div class="max-w-5xl mx-auto">
        <h2 class="text-xl sm:text-2xl md:text-3xl font-bold mb-3 sm:mb-4 text-gray-900">Custom & Konsultasi</h2>
        <p class="text-xs sm:text-sm text-gray-600 mb-2 leading-relaxed">Jika kebutuhan proyek Anda unik, kami menyediakan layanan penyesuaian fitur dan jumlah pengguna berdasarkan hasil konsultasi.</p>
        <p class="text-xs sm:text-sm text-gray-600 mb-4 sm:mb-6 leading-relaxed flex items-start gap-2">
          <i class="fas fa-phone text-grey-orange mt-1 flex-shrink-0"></i>
          <span>Hubungi tim kami untuk mendapatkan penawaran terbaik yang sesuai!</span>
        </p>
        <button class="px-5 sm:px-6 py-2 sm:py-3 rounded-lg border-2 border-grey-orange text-grey-orange font-semibold text-sm sm:text-base hover:bg-grey-orange hover:text-white transition">Konsultasi Sekarang</button>
      </div>
    </div>
  </section>

  <!-- Footer Note -->
  <section class="py-8 sm:py-12 md:py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
      <div class="max-w-4xl mx-auto text-center space-y-2 sm:space-y-3">
        <p class="text-xs text-gray-500">Semua paket berlangganan dilayarkan bulanan dan dapat diperpanjang otomatis.</p>
        <p class="text-xs text-gray-500">Upgrade paket dapat dilakukan kapan saja tanpa kehilangan data.</p>
        <p class="text-xs text-gray-500">Harga di atas belum termasuk PPN (jika berlaku).</p>
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