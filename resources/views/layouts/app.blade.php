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

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
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

    {{-- header --}}
    @include('layouts.navigation')

    {{-- page content --}}
    <main>
        {{ $slot }}
    </main>

    {{-- Footer --}}
    @include('layouts.footer')
</body>

</html>
