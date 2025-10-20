<x-app-layout>
  <!-- Hero Section -->
  @include('pages.client.about.hero-section')

  <!-- Value Section -->
  @include('pages.client.about.value-section')

  <!-- Maps Section -->
  @include('pages.client.about.maps-section')

  <!-- CTA Section -->
  @include('pages.client.about.cta-section')

 

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
</x-app-layout>

  
