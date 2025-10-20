<x-app-layout>
    <!-- Hero Section -->
    @include('pages.client.packages.hero-section')

    <!-- Trial Plan -->
    @include('pages.client.packages.trial-plan')

    <!-- Basic Plan -->
    @include('pages.client.packages.basic-plan')

    <!-- Professional Plan -->
    @include('pages.client.packages.professional-plan')

    <!-- Enterprise Plan -->
    @include('pages.client.packages.enterprise-plan')

    <!-- Custom Section -->
    @include('pages.client.packages.custom-section')

    <!-- Footer Note -->
    @include('pages.client.packages.footer-note')

    <script>
        // Toggle Mobile Menu
        function toggleMobileMenu() {
            const menu = document.querySelector('.mobile-menu');
            menu.classList.toggle('active');
        }

        document.querySelectorAll('.mobile-menu a').forEach(link => {
            link.addEventListener('click', () => {
                document.querySelector('.mobile-menu').classList.remove('active');
            });
        });

        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            });
        });
    </script>
</x-app-layout>
