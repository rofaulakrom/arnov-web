<div x-data="{ 
        activeIndex: 0, 
        images: {{ json_encode($item['images']) }},
        triggerModal() {
            $dispatch('open-service-modal', {
                images: this.images,
                index: this.activeIndex,
                title: '{{ $item['title'] }}',
                desc: `{{ $item['desc'] }}`
            })
        }
     }" 
     class="group p-6 border border-white/10 bg-dark-900/60 backdrop-blur-md hover:bg-dark-900/90 hover:border-gold transition duration-500 hover:-translate-y-2 rounded-sm flex flex-col h-full min-h-[450px]">
    
    <div class="mb-4 flex justify-between items-start">
        <span class="text-gold text-xs font-bold uppercase tracking-widest border border-gold px-2 py-1 rounded-sm">
            Sector 0{{ $index }}
        </span>
    </div>

    {{-- Image Slider inside Card --}}
    <div class="relative w-full aspect-[4/3] bg-black/50 mb-6 overflow-hidden rounded-sm border border-white/5 group-hover:border-gold/30 transition">
        <template x-for="(img, i) in images" :key="i">
            <img :src="img" 
                 x-show="activeIndex === i"
                 x-transition:enter="transition opacity duration-500" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                 @click="triggerModal()"
                 class="absolute inset-0 w-full h-full object-cover cursor-pointer hover:scale-110 transition duration-700 ease-in-out">
        </template>

        {{-- Navigasi Slider Kecil --}}
        <button @click.stop="activeIndex = activeIndex === 0 ? images.length - 1 : activeIndex - 1" class="absolute left-2 top-1/2 -translate-y-1/2 bg-black/50 text-white p-1 hover:bg-gold hover:text-black transition rounded-full z-10">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
        </button>
        <button @click.stop="activeIndex = activeIndex === images.length - 1 ? 0 : activeIndex + 1" class="absolute right-2 top-1/2 -translate-y-1/2 bg-black/50 text-white p-1 hover:bg-gold hover:text-black transition rounded-full z-10">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
        </button>

        {{-- Dots Indicator --}}
        <div class="absolute bottom-2 left-0 right-0 flex justify-center gap-1 z-10">
            <template x-for="(img, i) in images" :key="i">
                <div class="w-1.5 h-1.5 rounded-full transition-all duration-300 shadow-sm" :class="activeIndex === i ? 'bg-gold w-3' : 'bg-white/70'"></div>
            </template>
        </div>
    </div>

    <h3 class="text-2xl font-serif text-white mb-1 group-hover:text-gold transition line-clamp-1" title="{{ $item['title'] }}">{{ $item['title'] }}</h3>
    <h4 class="text-sm text-gray-400 font-bold uppercase tracking-wider mb-4">{{ $item['category'] }}</h4>
    
    {{-- Description Preview --}}
    <p class="text-gray-300 text-sm leading-relaxed border-t border-white/10 pt-4 group-hover:border-gold/30 transition grow line-clamp-3">
        {{ Str::limit($item['desc'], 100) }} 
    </p>
    
    <div class="mt-4 text-right">
        <button class="text-gold text-xs cursor-pointer hover:underline font-bold uppercase tracking-wider" 
                @click="triggerModal()">
            Lihat Detail & Galeri &rarr;
        </button>
    </div>
</div>