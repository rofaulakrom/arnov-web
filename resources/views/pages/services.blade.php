@extends('layouts.app')
@section('title', 'Services')

@section('content')
{{-- 
    DATA PROCESSING (FULL TEXT)
--}}
@php
    // GRUP 1: Production & Consumer Goods
    $productionGoods = [
        [
            'category' => 'Fishery & Aquaculture',
            'title' => 'ARNOV FEED & FISH',
            'desc' => 'ARNOV FEED & FISH adalah divisi usaha di bawah PT ARNOV PRIMA NUSANTARA yang bergerak di bidang perikanan dan pakan ikan, meliputi:
                •   Produksi dan perdagangan pakan ikan
                •   Kegiatan budidaya dan pembesaran ikan
                •   Pengelolaan tambak dan sarana perikanan
                •   Perdagangan hasil perikanan air tawar
                •   Distribusi produk pakan dan hasil ikan secara offline maupun online

            Divisi ini dikembangkan untuk mendukung sektor perikanan berkelanjutan dengan fokus pada efisiensi produksi, kualitas hasil, dan kesinambungan usaha.',
            'images' => [
                'https://images.unsplash.com/photo-1544551763-46a013bb70d5?q=80&w=600&auto=format&fit=crop', 
                'https://images.unsplash.com/photo-1516918844889-132d78603689?q=80&w=600&auto=format&fit=crop',
            ]
        ],
        [
            'category' => 'DIGITAL CREATIVE',
            'title' => 'APN UMKM',
            'desc' => 'APN UMKM adalah divisi usaha di bawah PT ARNOV PRIMA NUSANTARA yang bergerak di bidang pengembangan, produksi, dan perdagangan usaha mikro, kecil, dan menengah (UMKM), meliputi:
                •   Produksi dan penjualan produk makanan dan minuman, seperti kue, camilan, cimol, dan produk olahan lainnya
                •   Perdagangan hasil pertanian dan perkebunan, termasuk penjualan durian dan produk segar lainnya
                •   Pengelolaan usaha jongko, gerai, dan penjualan langsung (offline)
                •   Penjualan produk melalui offline dan online

            Divisi ini berfokus pada usaha berjalan (real business) yang cepat berputar, mudah dikembangkan, dan dapat direplikasi ke berbagai lokasi.',
            'images' => [
                'https://media.istockphoto.com/id/1631276318/photo/fish-pellets-held-by-a-child-with-a-pond-garden-background.webp?a=1&b=1&s=612x612&w=0&k=20&c=OjjwcgcHaBhcO3xewfzUYcmhVuUlOJ-N8xSYu380isY=',
                'https://images.unsplash.com/photo-1627920769837-184547907f16?q=80&w=600&auto=format&fit=crop',
            ]
        ]
    ];

    // GRUP 2: Industrial, Construction & Digital Services
    $industrialServices = [
        [
            'category' => 'APN CONSTRUCTION',
            'title' => 'APN INDUSTRIAL CONSTRUCTION',
            'desc' => 'APN INDUSTRIAL CONSTRUCTION adalah divisi usaha di bawah PT ARNOV PRIMA NUSANTARA yang bergerak di bidang jasa konstruksi dan industri, meliputi:
            •   Pekerjaan konstruksi baja dan besi (fabrikasi dan pemasangan rangka baja, struktur bangunan, dan pekerjaan logam lainnya)
            •   Pekerjaan konstruksi sipil ringan hingga menengah (bangunan, gudang, kanopi, dan fasilitas pendukung)
            •   Pengadaan material konstruksi (baja, besi, dan bahan pendukung proyek)
            •   Jasa perbaikan, renovasi, dan pemeliharaan bangunan industri
            
            Divisi ini melayani proyek swasta maupun pemerintah, dengan fokus pada pekerjaan konstruksi yang efisien, profesional, dan berkelanjutan.',
            'images' => [
                'https://images.unsplash.com/photo-1504328345606-18bbc8c9d7d1?q=80&w=600&auto=format&fit=crop',
                'https://images.unsplash.com/photo-1535921863-71887375a894?q=80&w=600&auto=format&fit=crop',
            ]
        ],
        [
            'category' => 'APN TECH',
            'title' => 'APN DIGITAL & TECHNOLOGY',
            'desc' => 'APN Digital & Technology adalah divisi usaha di bawah PT ARNOV PRIMA NUSANTARA yang bergerak di bidang layanan digital, teknologi informasi, dan pengembangan sistem, meliputi:
            •   Pembuatan dan pengembangan website
            •   Pembuatan company profile digital
            •   Pengembangan aplikasi dan sistem IT
            •   Jasa programming dan solusi teknologi informasi
            •   Pengelolaan media digital dan konten promosi
            •   Jasa branding, publikasi, dan pemasaran digital

            Divisi ini melayani kebutuhan internal perusahaan maupun klien eksternal, baik perorangan, UMKM, perusahaan swasta, maupun instansi, dengan tujuan menyediakan solusi digital yang efisien, profesional, dan berkelanjutan.',
            'images' => [
                'https://images.unsplash.com/photo-1541888946425-d81bb19240f5?q=80&w=600&auto=format&fit=crop',
                'https://images.unsplash.com/photo-1503387762-592deb58ef4e?q=80&w=600&auto=format&fit=crop',
            ]
        ],
        [
            'category' => 'LIFESTYLE AND FRAGRANCE',
            'title' => 'BE&CO',
            'desc' => 'BE&CO adalah merek dan divisi usaha di bawah PT ARNOV PRIMA NUSANTARA yang bergerak di bidang produk konsumen dan lifestyle, meliputi:
                •   Produksi dan perdagangan produk parfum dan wewangian
                •   Pengembangan merek (brand) dan produk turunan
                •   Penjualan produk melalui offline maupun online
                •   Aktivitas pemasaran dan distribusi produk

            BE&CO dikembangkan sebagai brand bernilai komersial tinggi dengan fokus pada kualitas produk, identitas merek, dan keberlanjutan bisnis.',
            'images' => [
                'https://images.unsplash.com/photo-1542744173-8e7e53415bb0?q=80&w=600&auto=format&fit=crop',
                'https://images.unsplash.com/photo-1551434678-e076c223a692?q=80&w=600&auto=format&fit=crop',
            ]
        ]
    ];

    // MERGE ARRAY (Total 5 Item)
    $allServices = array_merge($productionGoods, $industrialServices);
@endphp

<section x-data="servicesPage()" @open-service-modal.window="openModal($event.detail)" class="relative py-20 min-h-screen flex flex-col items-center overflow-hidden bg-dark-900">

    {{-- Background --}}
    <img src="https://images.unsplash.com/photo-1486312338219-ce68d2c6f44d?q=80&w=2072&auto=format&fit=crop" alt="Service Background" class="absolute inset-0 w-full h-full object-cover opacity-30 z-0">
    <div class="absolute inset-0 bg-gradient-to-b from-dark-900 via-dark-900/90 to-dark-900 z-0"></div>

    <div class="relative z-10 max-w-screen-2xl mx-auto px-4 w-full h-full flex flex-col justify-center">
        
        {{-- Header Section --}}
        <div class="text-center mb-12 animate-fade-in-down max-w-4xl mx-auto">
            <h2 class="text-4xl md:text-6xl font-serif text-white mb-6 drop-shadow-xl">Unit Bisnis Kami</h2>
            <div class="w-24 h-1 bg-gold mx-auto mb-8 rounded-full"></div>
            <h3 class="text-lg md:text-xl font-sans text-gray-300 tracking-wide leading-relaxed px-4">
                PT Arnov Sasmita Jaya membangun ekosistem usaha terintegrasi: 
                <span class="text-gold font-bold">Produksi Pangan, Konstruksi, hingga Teknologi Digital.</span>
            </h3>
        </div>

        {{-- INFINITE CAROUSEL CONTAINER --}}
        <div class="relative w-full max-w-7xl mx-auto px-2 md:px-12" x-data="infiniteCarousel()">
            
            {{-- Navigation Button: PREV --}}
            <button @click="prev()" 
                    class="absolute left-0 top-1/2 -translate-y-1/2 z-20 bg-dark-800/80 border border-gold/30 text-gold p-3 rounded-full hover:bg-gold hover:text-black transition duration-300 shadow-lg backdrop-blur-sm group hover:scale-110">
                <svg class="w-6 h-6 group-hover:-translate-x-1 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
            </button>

            {{-- Main Slider Window (Overflow Hidden) --}}
            <div class="overflow-hidden w-full py-4">
                {{-- Track (x-ref="slider" is key here) --}}
                <div x-ref="slider"
                     class="flex will-change-transform"
                     :class="disableTransition ? '' : 'transition-transform duration-500 ease-in-out'"
                     :style="`transform: translateX(${offset}%)`">
                    
                    @foreach($allServices as $index => $item)
                        {{-- 
                            Item Wrapper
                            Mobile: 100% width (1 item)
                            Tablet: 50% width (2 items)
                            Desktop: 33.33% width (3 items)
                        --}}
                        <div class="w-full md:w-1/2 lg:w-1/3 flex-shrink-0 px-3">
                            @include('partials.services-card', ['item' => $item, 'index' => $index + 1])
                        </div>
                    @endforeach

                </div>
            </div>

            {{-- Navigation Button: NEXT --}}
            <button @click="next()" 
                    class="absolute right-0 top-1/2 -translate-y-1/2 z-20 bg-dark-800/80 border border-gold/30 text-gold p-3 rounded-full hover:bg-gold hover:text-black transition duration-300 shadow-lg backdrop-blur-sm group hover:scale-110">
                <svg class="w-6 h-6 group-hover:translate-x-1 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            </button>

        </div>

    </div>

    {{-- MODAL POPUP --}}
    <div x-show="isOpen" style="display: none;" class="fixed inset-0 z-50 flex items-center justify-center p-4"
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0 backdrop-blur-none"
         x-transition:enter-end="opacity-100 backdrop-blur-sm"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100 backdrop-blur-sm"
         x-transition:leave-end="opacity-0 backdrop-blur-none">
        
        <div class="absolute inset-0 bg-black/90" @click="closeModal()"></div>
        
        <div class="relative bg-dark-900 border border-gold w-full max-w-5xl h-[85vh] md:h-[75vh] rounded shadow-2xl flex flex-col md:flex-row overflow-hidden"
             x-transition:enter="transition ease-out duration-300" 
             x-transition:enter-start="opacity-0 scale-95 translate-y-4" 
             x-transition:enter-end="opacity-100 scale-100 translate-y-0">
            
            <button @click="closeModal()" class="absolute top-4 right-4 text-gray-400 hover:text-white z-50 bg-black/50 rounded-full p-2 hover:bg-gold hover:text-black transition">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>
            
            <div class="w-full md:w-1/2 h-48 md:h-full bg-black relative group shrink-0">
                <img :src="modalImages[modalIndex]" class="w-full h-full object-cover opacity-90">
                <div class="absolute inset-0 flex items-center justify-between px-4 opacity-0 group-hover:opacity-100 transition duration-300" x-show="modalImages.length > 1">
                    <button @click="prevImage()" class="bg-black/60 text-white p-2 rounded-full hover:bg-gold hover:text-black transition transform hover:scale-110">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                    </button>
                    <button @click="nextImage()" class="bg-black/60 text-white p-2 rounded-full hover:bg-gold hover:text-black transition transform hover:scale-110">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </button>
                </div>
            </div>
            
            <div class="w-full md:w-1/2 flex flex-col bg-dark-900">
                <div class="flex-1 overflow-y-auto p-8 custom-scrollbar">
                    <h3 class="text-2xl md:text-3xl font-serif text-gold mb-2" x-text="modalTitle"></h3>
                    <div class="w-16 h-1 bg-white/20 mb-6"></div>
                    <div class="text-gray-300 leading-relaxed text-sm md:text-base whitespace-pre-line mb-8" x-text="modalDesc"></div>
                    <div class="mt-4 pt-6 border-t border-white/10">
                        <h5 class="text-white font-serif text-lg mb-4 flex items-center gap-2">
                            <span class="w-2 h-2 bg-gold rounded-full"></span>
                            Aktivitas & Galeri
                        </h5>
                        <div class="grid grid-cols-3 gap-2">
                            <template x-for="(img, i) in modalImages" :key="i">
                                <div @click="modalIndex = i" 
                                     class="relative aspect-square cursor-pointer overflow-hidden rounded border border-white/10 hover:border-gold transition group">
                                    <img :src="img" class="w-full h-full object-cover transition duration-500 group-hover:scale-110">
                                    <div class="absolute inset-0 bg-gold/20" x-show="modalIndex === i"></div>
                                </div>
                            </template>
                        </div>
                    </div>
                </div>
                <div class="p-4 border-t border-white/10 bg-black/20 text-center">
                    <span class="text-xs text-gray-500 uppercase tracking-widest">PT Arnov Prima Nusantara</span>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .custom-scrollbar::-webkit-scrollbar { width: 6px; }
    .custom-scrollbar::-webkit-scrollbar-track { background: rgba(255, 255, 255, 0.05); }
    .custom-scrollbar::-webkit-scrollbar-thumb { background: rgba(212, 175, 55, 0.5); border-radius: 3px; }
    .custom-scrollbar::-webkit-scrollbar-thumb:hover { background: rgba(212, 175, 55, 0.8); }
</style>

<script>
    // LOGIC TRUE INFINITE CAROUSEL
    function infiniteCarousel() {
        return {
            offset: 0,
            isAnimating: false,
            disableTransition: false,
            visibleCards: 3,

            init() {
                this.updateVisibleCards();
                window.addEventListener('resize', () => this.updateVisibleCards());
            },

            updateVisibleCards() {
                if (window.innerWidth < 768) {
                    this.visibleCards = 1;
                } else if (window.innerWidth < 1024) {
                    this.visibleCards = 2;
                } else {
                    this.visibleCards = 3;
                }
            },

            next() {
                if (this.isAnimating) return;
                this.isAnimating = true;

                // 1. Geser Container ke Kiri
                this.offset = -(100 / this.visibleCards);

                setTimeout(() => {
                    const slider = this.$refs.slider;
                    // 2. Ambil elemen PERTAMA, pindahkan ke PALING BELAKANG
                    slider.appendChild(slider.firstElementChild);

                    // 3. Matikan transisi sebentar untuk reset offset ke 0 secara instan
                    this.disableTransition = true;
                    this.offset = 0;

                    // 4. Hidupkan kembali transisi setelah browser me-render posisi baru
                    this.$nextTick(() => {
                        requestAnimationFrame(() => {
                            this.disableTransition = false;
                            this.isAnimating = false;
                        });
                    });
                }, 500); // Waktu ini harus sama dengan duration-500 di CSS class
            },

            prev() {
                if (this.isAnimating) return;
                this.isAnimating = true;

                const slider = this.$refs.slider;

                // 1. Matikan transisi dulu
                this.disableTransition = true;

                // 2. Ambil elemen TERAKHIR, pindahkan ke PALING DEPAN
                slider.prepend(slider.lastElementChild);

                // 3. Set posisi offset seolah-olah kita sudah geser ke kiri (padahal belum dilihat user)
                this.offset = -(100 / this.visibleCards);

                this.$nextTick(() => {
                    requestAnimationFrame(() => {
                        // 4. Nyalakan transisi
                        this.disableTransition = false;
                        
                        // 5. Geser offset ke 0 (Gerakan visual ke kanan)
                        requestAnimationFrame(() => {
                            this.offset = 0;
                            setTimeout(() => {
                                this.isAnimating = false;
                            }, 500);
                        });
                    });
                });
            }
        }
    }

    // Logic untuk Modal (Global Page)
    function servicesPage() { 
        return {
            isOpen: false,
            modalImages: [],
            modalIndex: 0,
            modalTitle: '',
            modalDesc: '',
            openModal(data) {
                this.modalImages = data.images;
                this.modalIndex = data.index || 0;
                this.modalTitle = data.title;
                this.modalDesc = data.desc;
                this.isOpen = true;
                document.body.style.overflow = 'hidden';
            },
            closeModal() {
                this.isOpen = false;
                document.body.style.overflow = 'auto';
            },
            nextImage() {
                this.modalIndex = (this.modalIndex === this.modalImages.length - 1) ? 0 : this.modalIndex + 1;
            },
            prevImage() {
                this.modalIndex = (this.modalIndex === 0) ? this.modalImages.length - 1 : this.modalIndex - 1;
            }
        }
    }
</script>
@endsection