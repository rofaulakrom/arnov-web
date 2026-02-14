<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - ARNOV PRIMA NUSANTARA</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'gold': { light: '#FCE9B5', DEFAULT: '#D4AF37', dark: '#8C7323' },
                        'dark': { 900: '#050505', 800: '#121212' }
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        serif: ['Playfair Display', 'serif'],
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-dark-900 text-white font-sans antialiased flex flex-col min-h-screen">

    @include('partials.navbar')

    <main class="flex-grow pt-24">
        @yield('content')
    </main>

    @include('partials.footer')

</body>
</html>