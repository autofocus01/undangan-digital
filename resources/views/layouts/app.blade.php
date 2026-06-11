<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Undangan Digital')</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    wedding: {
                        bg: '#FDFBF9',         // Warna latar utama
                        card: '#FFFDFB',       // Warna latar kartu
                        primary: '#723E42',    // Coklat tua/merah marun
                        secondary: '#4A2E31',  // Warna sekunder
                        goldAccent: '#C5A059', // Emas aksen
                        goldPremium: '#D4AF37',// Emas premium
                        darkFooter: '#1E1615', // Footer gelap elegan
                    }
                }
            }
        }
    }
</script>
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700&family=Playfair+Display:ital,wght@0,400;0,600;1,400&family=Monsieur+La+Doulaise&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        :root {
            --wedding-primary: #8b7355;
            --wedding-secondary: #2d2d2d;
            --wedding-goldAccent: #c5a059;
            --wedding-darkFooter: #1a1a1a;
        }
        .font-cinzel { font-family: 'Cinzel', serif; }
        .font-playfair { font-family: 'Playfair Display', serif; }
        .font-poppins { font-family: 'Poppins', sans-serif; }
    </style>
</head>
<body class="bg-stone-50 text-stone-700 font-poppins selection:bg-wedding-goldAccent/30">

    <audio id="weddingMusic" loop>
        <source src="{{ asset('assets/audio/Music_2.mp3') }}" type="audio/mpeg">
    </audio>

    <button id="musicToggle" onclick="toggleMusic()" class="fixed bottom-5 left-5 z-[100] bg-white/50 p-2 rounded-full shadow-lg">
    <i class="fa-solid fa-music"></i>
    </button>

    
    @yield('content')
    
    <!-- Scripts -->
    <script>
        // Fungsi untuk membuka undangan
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
        }
        
        function toggleMusic() {
            const music = document.getElementById('weddingMusic');
            if (music.paused) {
                music.play();
            } else {
                music.pause();
            }
        }
        </script>
</body>
</html>