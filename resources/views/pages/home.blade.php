@extends('layouts.app')
@section('title', 'Home')

@section('content')
<section class="h-screen md:h-[90vh] flex items-center justify-center relative bg-dark-900 overflow-hidden">
    
    <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?q=80&w=2069&auto=format&fit=crop" 
         alt="Background Office" 
         class="absolute inset-0 w-full h-full object-cover">

    <div class="absolute inset-0 bg-black/70 z-0"></div>
    
    <div class="relative z-10 text-center px-6 max-w-5xl mx-auto mt-10">
        
        <span class="text-gold uppercase tracking-[0.4em] text-xs md:text-sm font-bold mb-6 block animate-fade-in-down">
            Premium Corporate Solution
        </span>
        
        <h1 class="text-5xl md:text-7xl font-serif font-bold text-white mb-6 leading-tight drop-shadow-2xl">
            Sinergi Inovasi <br> 
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-gold via-yellow-200 to-gold">
                Dari Hulu Hingga Digital
            </span>
        </h1>
        
        <p class="text-gray-200 text-lg md:text-xl mb-10 font-light leading-relaxed max-w-3xl mx-auto drop-shadow-md">
            PT Arnov Prima Nusantara hadir menghubungkan potensi agribisnis, manufaktur pangan, gaya hidup, dan kreativitas digital. Kami berdedikasi menciptakan standar kualitas tinggi di setiap sektor, tumbuh bersama mitra dan UMKM Indonesia.
        </p>
        
        <div class="flex flex-col md:flex-row justify-center gap-5">
            <a href="{{ route('services') }}" 
               class="bg-gold text-black px-8 py-4 font-bold text-sm tracking-widest uppercase hover:bg-white hover:scale-105 transition-all duration-300 shadow-[0_0_20px_rgba(212,175,55,0.3)]">
                Jelajahi Solusi
            </a>
            <a href="{{ route('contact') }}" 
               class="border border-white text-white px-8 py-4 font-bold text-sm tracking-widest uppercase hover:bg-white hover:text-black hover:scale-105 transition-all duration-300">
                Hubungi Kami
            </a>
        </div>

    </div>
</section>
@endsection