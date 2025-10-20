<x-app-layout>
    <!-- Hero Section -->
    @include('pages.client.tutorials.hero-section')

    <!-- Tutorial Grid Section -->
    @include('pages.client.tutorials.tutorial-section')

    <!-- Guide Section -->
    @include('pages.client.tutorials.guide-section')

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
