<!-- Header -->
<header class="sticky top-0 z-50 bg-white/95 backdrop-blur border-b border-gray-200">
    <nav class="max-w-7xl mx-auto px-4 sm:px-6 py-3 sm:py-4">
        <div class="flex items-center justify-between">
            <div class="text-lg sm:text-xl font-bold tracking-tight text-gray-900">SMESTICON</div>
            <ul class="hidden md:flex items-center gap-6 lg:gap-8 text-xs sm:text-sm font-medium">
                <ul class="hidden md:flex items-center gap-6 lg:gap-8 text-xs sm:text-sm font-medium">
                    <li> <a href="/" class="text-gray-700 hover:text-grey-orange transition">
                            Beranda
                        </a>
                    </li>

                    <li>
                        <a href="/about"
                            class="{{ Request::is('about*') ? 'text-grey-orange font-semibold' : 'text-gray-700 hover:text-grey-orange' }} transition">
                            Tentang Kami
                        </a>
                    </li>

                    <li>
                        <a href="/packages"
                            class="{{ Request::is('packages*') ? 'text-grey-orange font-semibold' : 'text-gray-700 hover:text-grey-orange' }} transition">
                            Paket
                        </a>
                    </li>

                    <li>
                        <a href="/tutorials"
                            class="{{ Request::is('tutorials*') ? 'text-grey-orange font-semibold' : 'text-gray-700 hover:text-grey-orange' }} transition">
                            Tutorial
                        </a>
                    </li>
                </ul>

            </ul>
            <button
                class="hidden sm:block px-4 sm:px-5 py-2 sm:py-2.5 rounded-lg bg-grey-orange text-white text-xs sm:text-sm font-medium hover:bg-grey-orange-dark transition">Hubungi
                Kami</button>
            <button class="md:hidden text-gray-900 text-2xl menu-toggle" onclick="toggleMobileMenu()">☰</button>
        </div>

        <!-- Mobile Menu -->
        <div class="mobile-menu md:hidden mt-4 pb-4 border-t border-gray-200 pt-4">
            <ul class="space-y-3">
                <li>
                    <a href="/" class="text-gray-700 hover:text-grey-orange transition block">
                        Beranda
                    </a>
                </li>

                <li>
                    <a href="/about"
                        class="{{ Request::is('about*') ? 'text-grey-orange font-semibold' : 'text-gray-700 hover:text-grey-orange' }} transition block">
                        Tentang Kami
                    </a>
                </li>

                <li>
                    <a href="/packages"
                        class="{{ Request::is('packages*') ? 'text-grey-orange font-semibold' : 'text-gray-700 hover:text-grey-orange' }} transition block">
                        Paket
                    </a>
                </li>

                <li>
                    <a href="/tutorials"
                        class="{{ Request::is('tutorials*') ? 'text-grey-orange font-semibold' : 'text-gray-700 hover:text-grey-orange' }} transition block">
                        Tutorial
                    </a>
                </li>
                <li><button
                        class="w-full px-4 py-2 rounded-lg bg-grey-orange text-white text-sm font-medium hover:bg-grey-orange-dark transition">Hubungi
                        Kami</button></li>
            </ul>
        </div>
    </nav>
</header>
