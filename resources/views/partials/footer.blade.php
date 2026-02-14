<footer class="bg-black py-10 border-t border-white/10 font-sans relative z-10 text-sm">
    <div class="max-w-7xl mx-auto px-6">

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center mb-8">
            
            <div class="flex flex-col items-center md:items-start text-center md:text-left">
                <a href="{{ route('home') }}" class="block group mb-3">
                    <span class="text-2xl font-serif font-bold text-white tracking-widest group-hover:text-gold transition duration-300">
                        ARNOV <span class="text-gold">PRIMA </span>NUSANTARA
                    </span>
                    <p class="text-[10px] text-gray-500 uppercase tracking-[0.4em] mt-1">PT Arnov Prima Nusantara</p>
                </a>
                <p class="text-gray-500 text-xs leading-relaxed max-w-xs">
                    Sinergi Inovasi Dari Hulu Hingga Digital
                </p>
            </div>

            <div class="flex flex-col space-y-5 items-center md:items-end text-center md:text-right">
                
                <div class="space-y-1">
                    <h5 class="text-gold text-[10px] font-bold uppercase tracking-widest">Kantor Pusat</h5>
                    <p class="text-gray-300 text-xs">
                        [Jl. Kantor Arnov, Gang Nangka no 24, RT/RW 02/02, Kel. Cimerang,  <br>Kec. Padalarang, Kab. Bandung Barat, Jawa Barat, 40553]
                    </p>
                </div>

                <div class="flex flex-col md:flex-row gap-4 md:gap-8 justify-center md:justify-end">
                    <div class="space-y-1">
                        <h5 class="text-gold text-[10px] font-bold uppercase tracking-widest">Email</h5>
                        <a href="mailto:hello@arnovcorp.site" class="text-white hover:text-gold transition text-xs border-b border-white/10 hover:border-gold pb-0.5">
                            arief@arnovcorp.site
                        </a>
                    </div>
                    
                    <div class="space-y-1">
                        <h5 class="text-gold text-[10px] font-bold uppercase tracking-widest">Jam Operasional</h5>
                        <p class="text-gray-300 text-xs">
                            Senin - Jumat: 09.00 - 17.00
                        </p>
                    </div>
                </div>

            </div>

        </div>

        <div class="border-t border-white/10 pt-4 text-center">
            <p class="text-gray-600 text-[10px] tracking-wider">
                &copy; {{ date('Y') }} PT Arnov Sasmita Jaya. All Rights Reserved.
            </p>
        </div>

    </div>
</footer>