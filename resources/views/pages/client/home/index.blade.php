<x-app-layout>
    <!-- Hero Section -->
    @include('pages.client.home.hero-section')

    <!-- Smart Estimator Section -->
    @include('pages.client.home.smart-section')

    <!-- Why Choose SMESTICON Section -->
    @include('pages.client.home.choose-section')

    <!-- Feature Section -->
    @include('pages.client.home.feature')

    <!-- Package Section -->
    @include('pages.client.home.package')

    <!-- FAQ Section -->
    @include('pages.client.home.faq-section')

    <!-- CTA Section -->
    @include('pages.client.home.cta-section')



    
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
</x-app-layout>
