@extends('layouts.app')
@section('title', 'About Us')

@section('content')
<section class="relative py-20 overflow-hidden min-h-screen flex items-center">

    <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?q=80&w=2070&auto=format&fit=crop" 
         alt="About Background" 
         class="absolute inset-0 w-full h-full object-cover opacity-60 z-0">

    <div class="absolute inset-0 bg-dark-800/80 z-10"></div>

    <div class="relative z-20 max-w-6xl mx-auto px-6 text-center">
        
        <div class="max-w-3xl mx-auto mb-16 animate-fade-in-up">
            <h2 class="text-4xl md:text-5xl font-serif text-white mb-8 drop-shadow-lg">
                Tentang <span class="text-gold">Arnovcorp</span>
            </h2>
            <p class="text-gray-300 leading-relaxed text-lg">
                Kami meyakini bahwa bisnis yang besar bukanlah yang tumbuh paling cepat, melainkan yang dibangun dengan konsisten, mampu bertahan, dan tetap relevan dalam jangka panjang. <br><br>
                <span class="text-gold italic font-serif font-medium">"See you on top."</span>
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-24">
            
            <div class="p-8 border border-white/10 bg-dark-900/80 backdrop-blur-sm flex flex-col justify-center items-center h-full hover:border-gold/50 transition duration-500 rounded-sm">
                <div class="w-12 h-1 bg-gold mb-6 shadow-[0_0_10px_#D4AF37]"></div>
                <h3 class="text-gold font-bold text-2xl mb-4 tracking-widest uppercase">Visi</h3>
                <p class="text-gray-300 leading-relaxed max-w-sm mx-auto text-sm md:text-base">
                    Menjadi holding usaha nasional yang tangguh, berkelanjutan, dan relevan lintas generasi melalui penguasaan produksi, distribusi, dan teknologi.
                </p>
            </div>

            <div class="p-8 border border-white/10 bg-dark-900/80 backdrop-blur-sm text-left hover:border-gold/50 transition duration-500 rounded-sm">
                <div class="w-12 h-1 bg-gold mb-6 mx-auto md:mx-0 shadow-[0_0_10px_#D4AF37]"></div>
                <h3 class="text-gold font-bold text-2xl mb-6 tracking-widest uppercase text-center md:text-left">Misi</h3>
                
                <ul class="space-y-4">
                    <li class="flex gap-4">
                        <span class="text-gold font-bold text-xl shadow-gold">1</span>
                        <div>
                            <strong class="text-white block text-sm uppercase tracking-wider mb-1">Membangun Usaha Berbasis Penguasaan Lapangan</strong>
                            <span class="text-gray-400 text-sm">Mengembangkan setiap unit bisnis berdasarkan pengalaman operasional nyata, pemahaman lapangan, serta pengendalian proses dari hulu hingga hilir.</span>
                        </div>
                    </li>
                    <li class="flex gap-4">
                        <span class="text-gold font-bold text-xl">2</span>
                        <div>
                            <strong class="text-white block text-sm uppercase tracking-wider mb-1">Menciptakan Ekosistem Bisnis yang Terintegrasi</strong>
                            <span class="text-gray-400 text-sm">Menghubungkan sektor perikanan, industri, konstruksi, produk konsumen, media, dan teknologi dalam satu ekosistem usaha yang saling memperkuat pertumbuhan.</span>
                        </div>
                    </li>
                    <li class="flex gap-4">
                        <span class="text-gold font-bold text-xl">3</span>
                        <div>
                            <strong class="text-white block text-sm uppercase tracking-wider mb-1">Menjaga Pertumbuhan yang Sehat dan Berkelanjutan</strong>
                            <span class="text-gray-400 text-sm">Menjalankan usaha dengan fokus pada efisiensi operasional, pengelolaan risiko, serta arus kas yang sehat untuk jangka panjang.</span>
                        </div>
                    </li>
                    <li class="flex gap-4">
                        <span class="text-gold font-bold text-xl">4</span>
                        <div>
                            <strong class="text-white block text-sm uppercase tracking-wider mb-1">Mengembangkan Produk dan Merek Bernilai Tambah</strong>
                            <span class="text-gray-400 text-sm">Menciptakan produk dan merek yang memiliki kualitas, daya saing, serta identitas kuat di pasar offline maupun digital.</span>
                        </div>
                    </li>
                    <li class="flex gap-4">
                        <span class="text-gold font-bold text-xl">5</span>
                        <div>
                            <strong class="text-white block text-sm uppercase tracking-wider mb-1">Memanfaatkan Media dan Teknologi sebagai Penggerak Bisnis</strong>
                            <span class="text-gray-400 text-sm">Menggunakan media digital dan solusi teknologi untuk meningkatkan efektivitas, transparansi, dan skala usaha di seluruh lini bisnis.</span>
                        </div>
                    </li>
                    <li class="flex gap-4">
                        <span class="text-gold font-bold text-xl">6</span>
                        <div>
                            <strong class="text-white block text-sm uppercase tracking-wider mb-1">Menjadi Wadah Pertumbuhan bagi Generasi Muda</strong>
                            <span class="text-gray-400 text-sm">Membuka ruang bagi generasi muda untuk belajar, bekerja, dan bertumbuh melalui keterlibatan langsung dalam bisnis nyata dan berkelanjutan.</span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="pt-16 border-t border-white/10">
            <h3 class="text-gold text-xs font-bold uppercase tracking-[0.3em] mb-3">Our Leadership</h3>
            <h2 class="text-3xl md:text-4xl font-serif text-white mb-16 drop-shadow-md">Board of Directors</h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                
                <div class="group bg-dark-900/80 backdrop-blur-sm border border-white/5 p-8 hover:border-gold/50 transition-all duration-500 hover:-translate-y-2 rounded-sm">
                    <div class="w-24 h-24 mx-auto rounded-full overflow-hidden mb-6 border-2 border-gray-700 group-hover:border-gold transition duration-500 shadow-lg">
                        <img src="{{ asset('img/novy.jpg') }}" alt="Novy" class="w-full h-full object-cover">
                    </div>
                    
                    <h4 class="text-xl font-serif text-white mb-1 group-hover:text-gold transition">Novy</h4>
                    <p class="text-gold text-[10px] uppercase tracking-widest mb-4 h-8 flex items-center justify-center">Co-Founder & Chief Creative Officer</p>
                    <p class="text-gray-400 text-xs mb-6 leading-relaxed min-h-[80px]">
                        Bertanggung jawab membangun identitas visual, arah kreatif, strategi brand, dan kualitas tampilan seluruh divisi Arnov.
                    </p>

                    <div class="flex justify-center gap-4 opacity-70 group-hover:opacity-100 transition">
                        <a href="https://www.instagram.com/beabiiovy_/" class="text-white hover:text-gold transition transform hover:scale-110" target="_blank">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg></a>
                    </div>
                </div>

                <div class="group bg-dark-900/80 backdrop-blur-sm border border-white/5 p-8 hover:border-gold/50 transition-all duration-500 hover:-translate-y-2 rounded-sm">
                    <div class="w-24 h-24 mx-auto rounded-full overflow-hidden mb-6 border-2 border-gray-700 group-hover:border-gold transition duration-500 shadow-lg">
                        <img src="{{ asset('img/arief.jpg') }}" alt="Arief" class="w-full h-full object-cover">
                    </div>
                    
                    <h4 class="text-xl font-serif text-white mb-1 group-hover:text-gold transition">Arief Rachman Sasmita</h4>
                    <p class="text-gold text-[10px] uppercase tracking-widest mb-4 h-8 flex items-center justify-center">Founder & CEO</p>
                    <p class="text-gray-400 text-xs mb-6 leading-relaxed min-h-[80px]">
                        Memimpin arah visi, pengembangan bisnis, dan perluasan divisi Arnov. Fokus pada penciptaan ekosistem bisnis yang inovatif.
                    </p>

                    <div class="flex justify-center gap-4 opacity-70 group-hover:opacity-100 transition">
                        <a href="https://www.instagram.com/ariefrachmansasmita/" class="text-white hover:text-gold transition transform hover:scale-110" target="_blank">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948-0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg></a>
                    </div>
                </div>

                <div class="group bg-dark-900/80 backdrop-blur-sm border border-white/5 p-8 hover:border-gold/50 transition-all duration-500 hover:-translate-y-2 rounded-sm">
                    <div class="w-24 h-24 mx-auto rounded-full overflow-hidden mb-6 border-2 border-gray-700 group-hover:border-gold transition duration-500 shadow-lg">
                        <img src="{{ asset('img/nazar.jpg') }}" alt="Habib" class="w-full h-full object-cover">
                    </div>
                    
                    <h4 class="text-xl font-serif text-white mb-1 group-hover:text-gold transition">Habib Nazar</h4>
                    <p class="text-gold text-[10px] uppercase tracking-widest mb-4 h-8 flex items-center justify-center">Head of Operations</p>
                    <p class="text-gray-400 text-xs mb-6 leading-relaxed min-h-[80px]">
                        Memastikan seluruh proses operasional berjalan lancar—mulai dari produksi, distribusi, hingga koordinasi internal.
                    </p>

                    <div class="flex justify-center gap-4 opacity-70 group-hover:opacity-100 transition">
                        <a href="https://www.instagram.com/hbbnazarr/" class="text-white hover:text-gold transition transform hover:scale-110" target="_blank">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948-0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg></a>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>
@endsection