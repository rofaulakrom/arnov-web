<nav class="fixed top-0 left-0 w-full z-50 font-sans shadow-lg bg-dark-900/95 backdrop-blur-md border-b border-white/5">

    <div class="max-w-7xl mx-auto px-6">
        <div class="flex items-center justify-between h-20">
            
            <a href="{{ route('home') }}" class="flex items-center gap-3 group z-50">
                <div class="flex flex-col">
                    <span class="text-2xl font-serif font-bold text-white tracking-widest leading-none group-hover:text-gold transition duration-300">
                        AR<span class="text-gold">PRI</span>NUS
                    </span>
                    <span class="text-[0.6rem] text-gray-500 uppercase tracking-[0.3em] mt-1">
                        PT Arnov Prima Nusantara
                    </span>
                </div>
            </a>

            <div class="hidden md:flex items-center space-x-1">
                <a href="{{ route('home') }}" class="px-5 py-2 text-sm uppercase font-bold tracking-widest transition rounded-sm {{ Request::routeIs('home') ? 'bg-gold text-black' : 'text-gray-300 hover:text-white hover:bg-white/5' }}">Home</a>
                <a href="{{ route('about') }}" class="px-5 py-2 text-sm uppercase font-bold tracking-widest transition rounded-sm {{ Request::routeIs('about') ? 'bg-gold text-black' : 'text-gray-300 hover:text-white hover:bg-white/5' }}">About</a>
                <a href="{{ route('services') }}" class="px-5 py-2 text-sm uppercase font-bold tracking-widest transition rounded-sm {{ Request::routeIs('services') ? 'bg-gold text-black' : 'text-gray-300 hover:text-white hover:bg-white/5' }}">Services</a>
                <a href="{{ route('contact') }}" class="px-5 py-2 text-sm uppercase font-bold tracking-widest transition rounded-sm {{ Request::routeIs('contact') ? 'bg-gold text-black' : 'text-gray-300 hover:text-white hover:bg-white/5' }}">Contact</a>
            </div>

            <div class="md:hidden z-50">
                <button id="mobile-menu-btn" class="text-gold hover:text-white focus:outline-none p-2">
                    <svg id="icon-menu" class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                    <svg id="icon-close" class="w-8 h-8 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                </button>
            </div>

        </div>
    </div>

    <div id="mobile-menu" class="hidden md:hidden bg-dark-900 border-t border-white/10 shadow-2xl absolute w-full left-0 top-20">
        <div class="flex flex-col px-6 py-8 space-y-4 text-center">
            <a href="{{ route('home') }}" class="block py-3 text-sm uppercase font-bold tracking-widest rounded-sm {{ Request::routeIs('home') ? 'bg-gold text-black' : 'text-gray-300 hover:bg-white/5' }}">Home</a>
            <a href="{{ route('about') }}" class="block py-3 text-sm uppercase font-bold tracking-widest rounded-sm {{ Request::routeIs('about') ? 'bg-gold text-black' : 'text-gray-300 hover:bg-white/5' }}">About</a>
            <a href="{{ route('services') }}" class="block py-3 text-sm uppercase font-bold tracking-widest rounded-sm {{ Request::routeIs('services') ? 'bg-gold text-black' : 'text-gray-300 hover:bg-white/5' }}">Services</a>
            <a href="{{ route('contact') }}" class="block py-3 text-sm uppercase font-bold tracking-widest rounded-sm {{ Request::routeIs('contact') ? 'bg-gold text-black' : 'text-gray-300 hover:bg-white/5' }}">Contact</a>
        </div>
    </div>

</nav>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const btn = document.getElementById('mobile-menu-btn');
        const menu = document.getElementById('mobile-menu');
        const iconMenu = document.getElementById('icon-menu');
        const iconClose = document.getElementById('icon-close');

        btn.addEventListener('click', function() {
            // Toggle visibility menu
            menu.classList.toggle('hidden');
            
            // Toggle icon (Garis 3 <-> Silang)
            iconMenu.classList.toggle('hidden');
            iconClose.classList.toggle('hidden');
        });
    });
</script>