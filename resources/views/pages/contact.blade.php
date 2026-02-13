@extends('layouts.app')
@section('title', 'Contact')

@section('content')
<section class="relative py-20 min-h-screen flex items-center justify-center overflow-hidden">

    <img src="https://images.unsplash.com/photo-1556761175-4b46a572b786?q=80&w=1974&auto=format&fit=crop" 
         alt="Contact Background" 
         class="absolute inset-0 w-full h-full object-cover opacity-50">

    <div class="absolute inset-0 bg-dark-800/80 z-0"></div>

    <div class="relative z-10 max-w-3xl mx-auto px-6 w-full">
        
        <div class="text-center mb-12 animate-fade-in-down">
            <h2 class="text-4xl md:text-5xl font-serif text-white mb-6 drop-shadow-md">
                Mari Sinergikan <span class="text-gold">Potensi Bisnis Anda</span>
            </h2>
            <p class="text-gray-300 text-sm md:text-base leading-relaxed max-w-2xl mx-auto font-light">
                Apakah Anda mencari solusi pakan agribisnis, kemitraan distribusi produk, atau strategi digital untuk brand Anda? 
                Tim Arnovcorp siap mendengarkan dan merancang solusi yang tepat untuk kebutuhan Anda.
            </p>
        </div>
        
        <div class="bg-dark-900/60 backdrop-blur-md border border-white/10 p-8 md:p-10 rounded-sm shadow-[0_0_40px_rgba(0,0,0,0.5)]">
            
            <form id="waForm" class="space-y-6">
                <div>
                    <label class="block text-gold text-xs font-bold uppercase tracking-widest mb-3">
                        Nama Lengkap / Institusi
                    </label>
                    <input type="text" id="name" placeholder="Contoh: Budi Santoso / PT Maju Jaya" 
                           class="w-full bg-black/50 border border-white/10 text-white p-4 focus:border-gold focus:ring-1 focus:ring-gold outline-none transition duration-300 rounded-sm placeholder-gray-600">
                </div>

                <div>
                    <label class="block text-gold text-xs font-bold uppercase tracking-widest mb-3">
                        Ceritakan Kebutuhan Bisnis Anda
                    </label>
                    <textarea id="message" rows="5" placeholder="Halo, saya ingin berdiskusi mengenai kerjasama..." 
                              class="w-full bg-black/50 border border-white/10 text-white p-4 focus:border-gold focus:ring-1 focus:ring-gold outline-none transition duration-300 rounded-sm placeholder-gray-600"></textarea>
                </div>

                <button type="submit" 
                        class="group w-full bg-gold text-black font-bold py-4 uppercase tracking-[0.2em] hover:bg-white transition duration-300 flex items-center justify-center gap-2 rounded-sm shadow-lg shadow-gold/20">
                    <span>Hubungi Tim Kami</span>
                    <svg class="w-4 h-4 transform group-hover:translate-x-1 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </button>
            </form>

        </div>
        
        <p class="text-center text-gray-500 text-xs mt-8">
            Kami akan merespons pesan Anda melalui WhatsApp Official Arnovcorp.
        </p>

    </div>
</section>

<script>
    document.getElementById('waForm').addEventListener('submit', function(e) {
        e.preventDefault();
        
        const name = document.getElementById('name').value;
        const msg = document.getElementById('message').value;
        
        // Validasi sederhana
        if(!name || !msg) {
            alert("Mohon lengkapi nama dan pesan Anda.");
            return;
        }

        // Format Pesan WA
        const text = `Halo Arnovcorp, perkenalkan saya *${name}*.\n\n${msg}`;
        const encodedText = encodeURIComponent(text);
        
        // GANTI NOMOR DI SINI (Format 62...)
        const phoneNumber = "6282113096752"; 
        
        window.open(`https://wa.me/${phoneNumber}?text=${encodedText}`, '_blank');
    });
</script>
@endsection