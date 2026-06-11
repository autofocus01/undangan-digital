@extends('layouts.app')

@section('title', 'The Wedding of Edi & Husna')

@section('content')

    @include('partials.cover', ['guestName' => $guestName])

    <header id="topNavbar" class="sticky top-0 z-40 bg-white/90 backdrop-blur-md border-b border-stone-200/50 px-8 py-4 hidden justify-between items-center transition-all duration-300 shadow-sm">
        <span class="font-cinzel text-xl font-bold text-wedding-secondary tracking-widest">E & H</span>
        
        <nav class="hidden md:flex items-center space-x-8 text-[10px] font-medium uppercase tracking-[0.25em]">
            <a href="#home" class="nav-link text-wedding-primary transition">Home</a>
            <a href="#mempelai" class="nav-link text-stone-400 hover:text-wedding-primary transition">Couple</a>
            <a href="#acara" class="nav-link text-stone-400 hover:text-wedding-primary transition">Event</a>
            <a href="#galeri" class="nav-link text-stone-400 hover:text-wedding-primary transition">Gallery</a>
            <a href="#buku-tamu" class="nav-link text-stone-400 hover:text-wedding-primary transition">RSVP</a>
        </nav>

    <button id="musicToggle" onclick="toggleMusic()" class="fixed bottom-5 left-5 z-[100] bg-white/50 p-2 rounded-full shadow-lg">
        <i class="fa-solid fa-music"></i>
    </button>
    </header>

    <nav id="bottomNavbar" class="fixed bottom-0 left-0 right-0 z-40 bg-white/95 backdrop-blur-md border-t border-stone-200/50 py-3 px-6 hidden justify-between items-center md:hidden shadow-[0_-4px_12px_rgba(0,0,0,0.03)]">
        <a href="#home" class="flex flex-col items-center text-wedding-primary transition nav-link-mobile">
            <i class="fa-solid fa-house text-[11px]"></i>
            <span class="text-[8px] tracking-[0.15em] uppercase mt-1 font-medium">Home</span>
        </a>
        <a href="#mempelai" class="flex flex-col items-center text-stone-400 hover:text-wedding-primary transition nav-link-mobile">
            <i class="fa-regular fa-heart text-[11px]"></i>
            <span class="text-[8px] tracking-[0.15em] uppercase mt-1 font-medium">Couple</span>
        </a>
        <a href="#acara" class="flex flex-col items-center text-stone-400 hover:text-wedding-primary transition nav-link-mobile">
            <i class="fa-regular fa-calendar text-[11px]"></i>
            <span class="text-[8px] tracking-[0.15em] uppercase mt-1 font-medium">Event</span>
        </a>
        <a href="#galeri" class="flex flex-col items-center text-stone-400 hover:text-wedding-primary transition nav-link-mobile">
            <i class="fa-regular fa-image text-[11px]"></i>
            <span class="text-[8px] tracking-[0.15em] uppercase mt-1 font-medium">Gallery</span>
        </a>
        <a href="#buku-tamu" class="flex flex-col items-center text-stone-400 hover:text-wedding-primary transition nav-link-mobile">
            <i class="fa-regular fa-comment text-[11px]"></i>
            <span class="text-[8px] tracking-[0.15em] uppercase mt-1 font-medium">RSVP</span>
        </a>
    </nav>

    <main class="bg-unlock-gradient min-h-screen w-full">
        
        <section id="home" class="py-28 px-6 text-center flex flex-col items-center justify-center min-h-[50vh] max-w-4xl mx-auto">
            <div class="w-12 h-[1px] bg-wedding-goldAccent/40 mb-10"></div>
            <p class="font-playfair text-stone-600 text-base md:text-lg leading-relaxed italic max-w-2xl mb-10 font-light">
                "Maha suci Allah yang telah menciptakan mahluk-Nya berpasang-pasangan. Dengan memohon rahmat dan ridho-Mu, kami bermaksud menyatukan hati dalam ikatan suci pernikahan."
            </p>
            <div class="text-wedding-goldAccent text-base">
                <i class="fa-solid fa-heart animate-pulse"></i>
            </div>
        </section>

        @include('partials.mempelai')
        
        @include('partials.acara')
        
        @include('partials.galeri')
        
        @include('partials.rsvp')

    </main>


@push('scripts')
    <script>
        // Referensi Elemen UI Global
        const music = document.getElementById('weddingMusic');
        const topNav = document.getElementById('topNavbar');
        const bottomNav = document.getElementById('bottomNavbar');
        const bodyPage = document.getElementById('bodyPage');

        /**
         * Fungsi untuk membuka amplop cover depan
         */
        function openUndangan() {
        const cover = document.getElementById('weddingCover');
        const music = document.getElementById('weddingMusic');
        
        // Animasi sembunyikan cover
        cover.classList.add('opacity-0', 'pointer-events-none');
        document.body.style.overflow = 'auto'; // Mengaktifkan scroll kembali

        // Jalankan musik dengan 'Promise' untuk menangani penolakan browser
        music.play().then(() => {
            console.log("Musik berhasil diputar otomatis!");
        }).catch(err => {
            console.log("Autoplay diblokir browser, musik menunggu interaksi user.");
            // Opsi: Berikan tombol play manual jika gagal
        });
            
            // Hapus elemen dari display tree setelah animasi selesai agar tidak memakan memori browser
            setTimeout(() => { cover.style.display = 'none'; }, 1000);
        }

        /**
         * Kontrol Pause / Play Background Music
         */
        function toggleMusic() {
            const music = document.getElementById('weddingMusic');
            if (music.paused) {
                music.play();
            } else {
                music.pause();
            }
        }``

        /**
         * Mengatur visual tombol status kehadiran Form RSVP (Hadir/Absen)
         */
        function setAttendance(status) {
            document.getElementById('konfirmasi').value = status;
            const btnHadir = document.getElementById('btnHadir');
            const btnTidakHadir = document.getElementById('btnTidakHadir');
            const paxContainer = document.getElementById('paxContainer');
            
            if(status === 'Hadir') {
                btnHadir.className = "py-3 rounded-md bg-wedding-goldAccent text-wedding-darkFooter font-semibold text-center transition text-xs shadow-md uppercase tracking-wider";
                btnTidakHadir.className = "py-3 rounded-md border border-white/10 text-stone-400 text-center transition text-xs uppercase tracking-wider";
                paxContainer.style.display = 'block';
            } else {
                btnHadir.className = "py-3 rounded-md border border-white/10 text-stone-400 text-center transition text-xs uppercase tracking-wider";
                btnTidakHadir.className = "py-3 rounded-md bg-wedding-goldAccent text-wedding-darkFooter font-semibold text-center transition text-xs shadow-md uppercase tracking-wider";
                paxContainer.style.display = 'none';
            }
        }

        /**
         * Menangani pengiriman data Form RSVP ke Controller Backend Laravel via AJAX Fetch
         */
        function handleRSVPOmit(event) {
            event.preventDefault();
            
            // Mengubah status tombol menjadi mode loading untuk UX yang baik
            const submitBtn = event.target.querySelector('button[type="submit"]');
            const originalBtnText = submitBtn.innerHTML;
            submitBtn.innerHTML = '<i class="fa-solid fa-spinner animate-spin"></i> Memproses...';
            submitBtn.disabled = true;

            // Membaca data inputan user
            const nama = document.getElementById('namaTamu').value;
            const status = document.getElementById('konfirmasi').value;
            const pax = status === 'Hadir' ? document.getElementById('paxTamu').value : '0';
            const ucapan = document.getElementById('ucapan').value;

            // Memasukkan data ke dalam objek FormData javascript
            const formData = new FormData();
            formData.append('nama', nama);
            formData.append('kehadiran', status);
            formData.append('pax', pax);
            formData.append('ucapan', ucapan);

            // Melakukan request POST asinkron ke route '/rsvp' internal Laravel
            fetch('/rsvp', {
                method: 'POST',
                body: formData,
                headers: {
                    // Menyertakan token CSRF bawaan laravel untuk otentikasi request yang aman
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.status === 'success') {
                    alert(`Terima kasih ${nama}.\nKonfirmasi kehadiran Anda telah berhasil disimpan di database.`);
                    document.getElementById('guestbookForm').reset();
                    setAttendance('Hadir'); // Kembalikan ke state awal default
                } else {
                    alert('Gagal menyimpan konfirmasi. Silakan periksa kembali kelengkapan data Anda.');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Sambungan ke server backend terputus atau terjadi kesalahan sistem.');
            })
            .finally(() => {
                // Mengembalikan text tombol ke bentuk semula setelah proses selesai
                submitBtn.innerHTML = originalBtnText;
                submitBtn.disabled = false;
            });
        }

        /**
         * Logika Hitung Mundur Waktu Acara (Countdown Timer)
         */
        const countdownTarget = new Date("July 5, 2026 08:00:00").getTime();
        setInterval(() => {
            const now = new Date().getTime();
            const distance = countdownTarget - now;

            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));

            // Menambahkan angka 0 di depan jika nilai di bawah 10 agar format simetris (01, 02, dst)
            document.getElementById("days").innerText = days < 10 ? "0" + days : days;
            document.getElementById("hours").innerText = hours < 10 ? "0" + hours : hours;
            document.getElementById("minutes").innerText = minutes < 10 ? "0" + minutes : minutes;
        }, 1000);

        /**
         * Fitur Salin Nomor Kado Digital
         */
        function copyToClipboard(idElement) {
            const textToCopy = document.getElementById(idElement).innerText;
            navigator.clipboard.writeText(textToCopy).then(() => {
                alert("Nomor berhasil tersalin: " + textToCopy);
            });
        }

        /**
         * Deteksi Scroll Aktif untuk Mengubah Warna Menu Navigasi secara Otomatis
         */
        const sections = document.querySelectorAll("section");
        const navLinksDesktop = document.querySelectorAll("header nav .nav-link");
        const navLinksMobile = document.querySelectorAll("#bottomNavbar .nav-link-mobile");

        window.addEventListener("scroll", () => {
            let current = "";
            sections.forEach((section) => {
                const sectionTop = section.offsetTop;
                if (window.pageYOffset >= sectionTop - 180) {
                    current = section.getAttribute("id");
                }
            });

            // Ubah style link navigasi versi desktop
            navLinksDesktop.forEach((link) => {
                link.classList.remove("text-wedding-primary", "font-semibold");
                link.classList.add("text-stone-400");
                if (link.getAttribute("href").includes(current)) {
                    link.classList.remove("text-stone-400");
                    link.classList.add("text-wedding-primary", "font-semibold");
                }
            });

            // Ubah style link navigasi versi mobile navbar
            navLinksMobile.forEach((link) => {
                link.classList.remove("text-wedding-primary");
                link.classList.add("text-stone-400");
                if (link.getAttribute("href").includes(current)) {
                    link.classList.remove("text-stone-400");
                    link.classList.add("text-wedding-primary");
                }
            });
        });
    </script>
@endsection