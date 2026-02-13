@extends('layouts.app')
@section('title', 'Services')

@section('content')
{{-- 
    DATA REAL: TOTAL 8 ITEMS
    Dibagi menjadi 2 Grup:
    1. Production & Consumer Goods (Hulu ke Hilir & Lifestyle)
    2. Industrial & Solutions (Konstruksi, Supplier, Digital, Tech)
--}}
@php
    // GRUP 1: Production & Consumer Goods
    $productionGoods = [
        [
            'category' => 'Fishery & Aquaculture',
            'title' => 'ARNOVFISH',
            'desc' => 'Unit usaha tambak ikan yang mengelola siklus produksi langsung di lapangan, memitigasi risiko panen, dan menjaga kualitas hasil perikanan.',
            'images' => [
                'https://images.unsplash.com/photo-1544551763-46a013bb70d5?q=80&w=600&auto=format&fit=crop', // Ikan/Tambak
                'https://images.unsplash.com/photo-1516918844889-132d78603689?q=80&w=600&auto=format&fit=crop',
            ]
        ],
        [
            'category' => 'Agribusiness',
            'title' => 'ARNOVFEED',
            'desc' => 'Produksi pakan ikan mandiri yang dibangun untuk efisiensi biaya produksi dan menjamin nutrisi berkualitas bagi sektor perikanan.',
            'images' => [
                'https://media.istockphoto.com/id/1631276318/photo/fish-pellets-held-by-a-child-with-a-pond-garden-background.webp?a=1&b=1&s=612x612&w=0&k=20&c=OjjwcgcHaBhcO3xewfzUYcmhVuUlOJ-N8xSYu380isY=',
                'https://images.unsplash.com/photo-1627920769837-184547907f16?q=80&w=600&auto=format&fit=crop',
            ]
        ],
        [
            'category' => 'Food & Beverage',
            'title' => 'ARNOVFOOD',
            'desc' => 'Laboratorium bisnis kuliner dan frozen food yang memberdayakan UMKM, fokus pada efisiensi produksi dan penetrasi pasar ritel.',
            'images' => [
                'https://images.unsplash.com/photo-1604908176997-125f25cc6f3d?q=80&w=600&auto=format&fit=crop', // Frozen Food
                'https://images.unsplash.com/photo-1623341214823-6901b0f5b84c?q=80&w=600&auto=format&fit=crop',
            ]
        ],
        [
            'category' => 'Lifestyle & Fragrance',
            'title' => 'BE&CO',
            'desc' => 'Brand parfum yang merepresentasikan inovasi dan kreativitas, memberikan nilai tambah gaya hidup di era modern.',
            'images' => [
                'https://images.unsplash.com/photo-1541643600914-78b084683601?q=80&w=600&auto=format&fit=crop', // Parfum
                'https://images.unsplash.com/photo-1594035910387-fea477942698?q=80&w=600&auto=format&fit=crop',
            ]
        ]
    ];

    // GRUP 2: Industrial, Construction & Digital Services
    $industrialServices = [
        [
            'category' => 'Industrial Supplier',
            'title' => 'ARNOVWELDING',
            'desc' => 'Supplier kawat las dan material pendukung industri, menjadi bagian vital dalam rantai pasok proyek konstruksi dan manufaktur.',
            'images' => [
                'https://images.unsplash.com/photo-1504328345606-18bbc8c9d7d1?q=80&w=600&auto=format&fit=crop', // Welding/Las
                'https://images.unsplash.com/photo-1535921863-71887375a894?q=80&w=600&auto=format&fit=crop',
            ]
        ],
        [
            'category' => 'Construction',
            'title' => 'ARNOVKONSTRUKSI',
            'desc' => 'Kontraktor sipil dan konstruksi baja yang fokus pada pembangunan aset, infrastruktur, dan standar profesional industri.',
            'images' => [
                'https://images.unsplash.com/photo-1541888946425-d81bb19240f5?q=80&w=600&auto=format&fit=crop', // Konstruksi
                'https://images.unsplash.com/photo-1503387762-592deb58ef4e?q=80&w=600&auto=format&fit=crop',
            ]
        ],
        [
            'category' => 'Digital Creative',
            'title' => 'ASJ MEDIA',
            'desc' => 'Divisi pengelola konten, komunikasi strategis, dan pemasaran digital untuk memperkuat citra brand di dunia maya.',
            'images' => [
                'https://images.unsplash.com/photo-1542744173-8e7e53415bb0?q=80&w=600&auto=format&fit=crop', // Social Media/Agency
                'https://images.unsplash.com/photo-1551434678-e076c223a692?q=80&w=600&auto=format&fit=crop',
            ]
        ],
        [
            'category' => 'Technology',
            'title' => 'ARNOV TECH',
            'desc' => 'Penyedia solusi teknologi, sistem informasi, dan pengembangan web sebagai fondasi transformasi digital perusahaan.',
            'images' => [
                'https://images.unsplash.com/photo-1555066931-4365d14bab8c?q=80&w=600&auto=format&fit=crop', // Coding/Tech
                'https://images.unsplash.com/photo-1519389950473-47ba0277781c?q=80&w=600&auto=format&fit=crop',
            ]
        ]
    ];
@endphp

<section x-data="servicesGallery()" class="relative py-20 min-h-screen flex flex-col items-center overflow-hidden">

    <img src="https://images.unsplash.com/photo-1486312338219-ce68d2c6f44d?q=80&w=2072&auto=format&fit=crop" alt="Service Background" class="absolute inset-0 w-full h-full object-cover opacity-50 z-0">
    <div class="absolute inset-0 bg-dark-800/80 z-0"></div>

    <div class="relative z-10 max-w-screen-2xl mx-auto px-6 w-full">
        
        <div class="text-center mb-16 animate-fade-in-down max-w-4xl mx-auto">
            <h2 class="text-4xl md:text-5xl font-serif text-white mb-4 drop-shadow-md">Unit Bisnis Kami</h2>
            <div class="w-24 h-1 bg-gold mx-auto mb-6"></div>
            <h3 class="text-lg md:text-xl font-sans text-gray-300 tracking-wide leading-relaxed">
                PT Arnov Sasmita Jaya bergerak dari hulu ke hilir. Kami membangun ekosistem usaha yang saling terhubung: 
                <span class="text-gold font-bold">mulai dari produksi pangan, konstruksi industri, hingga inovasi digital.</span>
            </h3>
        </div>

        <div class="mb-20">
            <div class="flex items-center gap-4 mb-8">
                <div class="h-px bg-white/20 grow"></div>
                <h4 class="text-gold font-serif text-xl md:text-2xl uppercase tracking-widest text-center">Production & Consumer Goods</h4>
                <div class="h-px bg-white/20 grow"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach($productionGoods as $index => $item)
                    @include('partials.services-card', ['item' => $item, 'index' => $index + 1])
                @endforeach
            </div>
        </div>

        <div>
            <div class="flex items-center gap-4 mb-8">
                <div class="h-px bg-white/20 grow"></div>
                <h4 class="text-gold font-serif text-xl md:text-2xl uppercase tracking-widest text-center">Industrial, Construction & Tech</h4>
                <div class="h-px bg-white/20 grow"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach($industrialServices as $index => $item)
                    @include('partials.services-card', ['item' => $item, 'index' => $index + 5])
                @endforeach
            </div>
        </div>

    </div>

    <div x-show="isOpen" style="display: none;" class="fixed inset-0 z-50 flex items-center justify-center px-4"
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0 backdrop-blur-none"
         x-transition:enter-end="opacity-100 backdrop-blur-sm"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100 backdrop-blur-sm"
         x-transition:leave-end="opacity-0 backdrop-blur-none">
        
        <div class="absolute inset-0 bg-black/90" @click="closeModal()"></div>
        <div class="relative bg-dark-900 border border-gold w-full max-w-4xl max-h-[90vh] overflow-y-auto rounded shadow-2xl flex flex-col md:flex-row"
             x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-90 translate-y-4" x-transition:enter-end="opacity-100 scale-100 translate-y-0">
            
            <button @click="closeModal()" class="absolute top-4 right-4 text-gray-400 hover:text-white z-20 bg-black/50 rounded-full p-1">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>
            
            <div class="w-full md:w-1/2 bg-black flex items-center justify-center relative group min-h-[300px]">
                <img :src="modalImages[modalIndex]" class="w-full h-full object-contain max-h-[50vh] md:max-h-full transition duration-300">
                <button @click="prevImage()" class="absolute left-2 top-1/2 -translate-y-1/2 bg-black/50 text-white p-2 hover:bg-gold hover:text-black rounded-full" x-show="modalImages.length > 1">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                </button>
                <button @click="nextImage()" class="absolute right-2 top-1/2 -translate-y-1/2 bg-black/50 text-white p-2 hover:bg-gold hover:text-black rounded-full" x-show="modalImages.length > 1">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </button>
            </div>
            
            <div class="w-full md:w-1/2 p-8 md:p-12 flex flex-col justify-center">
                <h3 class="text-3xl font-serif text-white mb-2" x-text="modalTitle"></h3>
                <div class="w-12 h-1 bg-gold mb-6"></div>
                <p class="text-gray-300 leading-relaxed text-sm md:text-base mb-8" x-text="modalDesc"></p>
                <div class="mt-auto">
                    <p class="text-xs text-gray-500 uppercase tracking-widest mb-2">Gallery Preview:</p>
                    <div class="flex gap-2 overflow-x-auto pb-2 scrollbar-thin scrollbar-thumb-gold/50">
                        <template x-for="(img, i) in modalImages" :key="i">
                            <img :src="img" @click="modalIndex = i" class="w-16 h-16 object-cover border-2 cursor-pointer rounded-sm hover:opacity-100 transition" :class="modalIndex === i ? 'border-gold opacity-100' : 'border-transparent opacity-50'">
                        </template>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    function servicesGallery() { 
        return {
            isOpen: false,
            modalImages: [],
            modalIndex: 0,
            modalTitle: '',
            modalDesc: '',
            openModal(images, index, title, desc) {
                this.modalImages = images;
                this.modalIndex = index;
                this.modalTitle = title;
                this.modalDesc = desc;
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