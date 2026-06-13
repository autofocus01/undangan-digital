<div class="bg-wedding-darkFooter text-stone-200 border-t border-wedding-goldAccent/20 relative">
    
    <section id="buku-tamu" class="py-24 px-6 scroll-mt-20 max-w-5xl mx-auto">
        <div class="text-center mb-16">
            <p class="text-[10px] tracking-[0.5em] uppercase text-wedding-goldAccent font-medium mb-2">RSVP & Wishes</p>
            <h2 class="font-cinzel text-3xl text-white font-normal tracking-widest mb-4">Buku Tamu</h2>
            <p class="text-stone-400 font-light text-xs max-w-md mx-auto tracking-wide">Berikan doa restu hangat sekaligus konfirmasi kehadiran Anda melalui form eksklusif di bawah ini.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 max-w-4xl mx-auto items-start">
            <div class="bg-white/[0.03] border border-white/10 p-8 rounded-3xl shadow-2xl backdrop-blur-md w-full">
                <form id="guestbookForm" onsubmit="handleRSVPOmit(event)" class="space-y-5 text-xs tracking-wide">
                    <div>
                        <label class="block text-[10px] uppercase text-wedding-goldAccent font-medium mb-1.5 tracking-[0.2em]">Nama Lengkap</label>
                        <input type="text" id="namaTamu" required class="w-full px-4 py-3 bg-white/[0.07] border border-white/10 focus:outline-none focus:border-wedding-goldAccent rounded-md text-white font-light text-xs transition" placeholder="Nama Anda">
                    </div>
                    
                    <div>
                        <label class="block text-[10px] uppercase text-wedding-goldAccent font-medium mb-1.5 tracking-[0.2em]">Konfirmasi Kehadiran</label>
                        <div class="grid grid-cols-2 gap-3 mt-1">
                            <button type="button" onclick="setAttendance('Hadir')" id="btnHadir" class="py-3 rounded-md bg-wedding-goldAccent text-wedding-darkFooter font-semibold text-center transition text-xs shadow-md uppercase tracking-wider">Hadir</button>
                            <button type="button" onclick="setAttendance('Tidak Hadir')" id="btnTidakHadir" class="py-3 rounded-md border border-white/10 text-stone-400 text-center transition text-xs uppercase tracking-wider">Absen</button>
                        </div>
                        <input type="hidden" id="konfirmasi" value="Hadir" required>
                    </div>

                    <div id="paxContainer">
                        <label class="block text-[10px] uppercase text-wedding-goldAccent font-medium mb-1.5 tracking-[0.2em]">Jumlah Pax</label>
                        <select id="paxTamu" class="w-full px-4 py-3 bg-white/[0.07] border border-white/10 focus:outline-none focus:border-wedding-goldAccent rounded-md text-white font-light text-xs transition">
                            <option class="text-stone-800" value="1">1 Person</option>
                            <option class="text-stone-800" value="2">2 Persons</option>
                            <option class="text-stone-800" value="3">3 Persons</option>
                            <option class="text-stone-800" value="4">4 Persons</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-[10px] uppercase text-wedding-goldAccent font-medium mb-1.5 tracking-[0.2em]">Pesan Doa & Restu</label>
                        <textarea id="ucapan" rows="4" required class="w-full px-4 py-3 bg-white/[0.07] border border-white/10 focus:outline-none focus:border-wedding-goldAccent rounded-md text-white font-light text-xs transition" placeholder="Tulis ungkapan doa suci Anda di sini..."></textarea>
                    </div>

                    <button type="submit" class="w-full bg-wedding-primary text-white text-[10px] tracking-[0.3em] uppercase py-4 rounded-md shadow-lg hover:bg-wedding-secondary transition mt-2 font-medium cursor-pointer border border-white/10">Kirim Ucapan</button>
                </form>
            </div>

            <div class="bg-white/[0.03] border border-white/10 p-8 rounded-3xl text-center shadow-2xl backdrop-blur-md w-full space-y-6">
                <div class="text-wedding-goldAccent text-lg">
                    <i class="fa-solid fa-gift"></i>
                </div>
                <h3 class="font-cinzel text-xl text-white font-normal tracking-widest">Kado Digital</h3>
                <p class="text-stone-400 text-xs font-light leading-relaxed tracking-wide">Doa restu Anda adalah berkah terindah. Namun jika ingin mengirimkan tanda kasih, Anda dapat menyalurkannya secara digital:</p>
                
                <div class="bg-black/30 rounded-xl p-6 border border-white/5 shadow-inner text-left relative max-w-sm mx-auto">
                    <p class="text-[9px] uppercase tracking-[0.2em] text-wedding-goldAccent font-medium">Bank BCA</p>
                    <p class="text-xl font-mono font-bold text-white tracking-widest mt-1" id="noRek">3460630133</p>
                    <p class="text-stone-400 text-[11px] mt-1 tracking-wide">a.n. Edi Sudrajat</p>
                    <button onclick="copyToClipboard('noRek')" class="absolute top-6 right-6 text-stone-400 hover:text-wedding-goldAccent cursor-pointer text-sm">
                        <i class="fa-regular fa-copy"></i>
                    </button>
                </div>

                <div class="bg-black/30 rounded-xl p-6 border border-white/5 shadow-inner text-left relative max-w-sm mx-auto">
                    <p class="text-[9px] uppercase tracking-[0.2em] text-wedding-goldAccent font-medium">No. Dana</p>
                    <p class="text-xl font-mono font-bold text-white tracking-widest mt-1" id="noDana">081395853423</p>
                    <p class="text-stone-400 text-[11px] mt-1 tracking-wide">a.n. Husna Hakimah</p>
                    <button onclick="copyToClipboard('noDana')" class="absolute top-6 right-6 text-stone-400 hover:text-wedding-goldAccent cursor-pointer text-sm">
                        <i class="fa-regular fa-copy"></i>
                    </button>
                </div>
            </div>
        </div>

        
        <div class="text-center mt-28 pt-10 border-t border-white/5 max-w-3xl mx-auto pb-6">
            <a href="https://youtu.be/XKwlZ-M4QW0?si=DtVaTipD3_R8omdw" target="_blank" 
            class="inline-block hover:scale-70 transition-transform duration-70">
                <i class="fa-brands fa-youtube text-3xl" style="color: #FF0000;"></i>
            </a>
            <p class="font-script text-wedding-goldAccent text-1xl mb-1">Yt by Al Istihdhor</p>
            <p class="font-script text-wedding-goldAccent text-4xl mb-2">Terima Kasih</p>
            <p class="font-playfair text-stone-400 font-light text-sm italic max-w-md mx-auto mb-8 tracking-wide">Merupakan suatu kehormatan & kebahagiaan mendalam bagi kami sekeluarga besar apabila Anda berkenan hadir memberikan doa restu suci.</p>
            <p class="text-[9px] text-stone-600 font-medium tracking-[0.4em] uppercase">© 2026 EDI & HUSNA. ALL RIGHTS RESERVED.</p>
        </div>
    </section>
    
</div>