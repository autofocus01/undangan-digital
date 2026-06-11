  <!-- 1. COMPONENT SCREEN COVER / AMPLOP DIGITAL -->
<div id="weddingCover" class="fixed inset-0 z-50 flex flex-col items-center justify-center bg-wedding-darkFooter text-center px-6 transition-all duration-1000 ease-in-out">
    
    <!-- Background Motif -->
    <div class="absolute inset-0 opacity-10 pointer-events-none bg-[url('https://www.transparenttextures.com/patterns/black-linen.png')]"></div>

    <div class="relative z-10 space-y-8 animate-fade-in-up">
        <div class="space-y-2">
            <p class="text-[10px] tracking-[0.5em] uppercase text-wedding-goldAccent font-medium">The Wedding Of</p>
            <h1 class="font-cinzel text-4xl md:text-5xl text-white font-normal tracking-widest">Edi & Husna</h1>
        </div>

        <div class="w-16 h-[1px] bg-wedding-goldAccent/40 mx-auto"></div>

        <div class="text-stone-300 text-xs tracking-[0.2em] uppercase font-light">
            <p>Minggu, 5 Juli 2026</p>
        </div>

        <div class="mt-12">
            <p class="text-[10px] text-stone-500 mb-6 uppercase tracking-[0.2em]">Kepada Yth. Bapak/Ibu/Saudara/i</p>
            <h2 class="text-xl text-white font-playfair font-medium mb-8">
                {{ $guestName }}
            </h2>
            
            <button onclick="openUndangan()" class="group relative inline-flex items-center justify-center px-8 py-4 bg-white text-wedding-darkFooter font-semibold text-[10px] tracking-[0.25em] uppercase rounded-md transition-all hover:bg-wedding-goldAccent hover:text-white shadow-lg overflow-hidden">
                <span class="mr-2"><i class="fa-regular fa-envelope-open"></i></span>
                Buka Undangan
            </button>
        </div>
    </div>
</div>