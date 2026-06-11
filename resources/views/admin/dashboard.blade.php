<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - RSVP Overview</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-slate-50 font-sans text-slate-700">

    <header class="bg-white border-b border-slate-200 sticky top-0 z-10 px-8 py-4 flex justify-between items-center shadow-sm">
        <h1 class="font-bold text-slate-800 text-base tracking-wide">💍 Wedding Admin Panel</h1>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="text-xs text-red-500 hover:text-red-700 font-medium transition flex items-center space-x-1">
                <i class="fa-solid fa-right-from-bracket"></i> <span>Logout</span>
            </button>
        </form>
    </header>

    <main class="max-w-7xl mx-auto px-6 py-10 space-y-8">
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
            <div class="bg-white p-5 rounded-xl border border-slate-200 shadow-sm flex items-center space-x-4">
                <div class="p-3 bg-blue-50 text-blue-600 rounded-lg text-lg"><i class="fa-regular fa-comment-dots"></i></div>
                <div>
                    <span class="block text-xs text-slate-400 font-medium uppercase tracking-wider">Total Ucapan</span>
                    <span class="text-xl font-bold text-slate-800">{{ $totalUcapan }}</span>
                </div>
            </div>
            <div class="bg-white p-5 rounded-xl border border-slate-200 shadow-sm flex items-center space-x-4">
                <div class="p-3 bg-green-50 text-green-600 rounded-lg text-lg"><i class="fa-regular fa-circle-check"></i></div>
                <div>
                    <span class="block text-xs text-slate-400 font-medium uppercase tracking-wider">Konfirmasi Hadir</span>
                    <span class="text-xl font-bold text-slate-800">{{ $totalHadir }} <span class="text-xs text-slate-400 font-normal">Keluarga</span></span>
                </div>
            </div>
            <div class="bg-white p-5 rounded-xl border border-slate-200 shadow-sm flex items-center space-x-4">
                <div class="p-3 bg-amber-50 text-amber-600 rounded-lg text-lg"><i class="fa-solid fa-users"></i></div>
                <div>
                    <span class="block text-xs text-slate-400 font-medium uppercase tracking-wider">Total Pax Katering</span>
                    <span class="text-xl font-bold text-slate-800">{{ $totalPax }} <span class="text-xs text-slate-400 font-normal">Orang</span></span>
                </div>
            </div>
            <div class="bg-white p-5 rounded-xl border border-slate-200 shadow-sm flex items-center space-x-4">
                <div class="p-3 bg-rose-50 text-rose-600 rounded-lg text-lg"><i class="fa-regular fa-circle-xmark"></i></div>
                <div>
                    <span class="block text-xs text-slate-400 font-medium uppercase tracking-wider">Tidak Bisa Hadir</span>
                    <span class="text-xl font-bold text-slate-800">{{ $totalAbsen }}</span>
                </div>
            </div>
        </div>

        <div class="bg-white border border-slate-200 rounded-xl shadow-sm overflow-hidden">
            <div class="px-6 py-4 border-b border-slate-100 bg-slate-50/50">
                <h3 class="font-bold text-slate-800 text-sm">Daftar Kehadiran & Doa Restu Tamu</h3>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-left text-xs border-collapse">
                    <thead>
                        <tr class="border-b border-slate-200 bg-slate-100 text-slate-500 font-semibold uppercase tracking-wider">
                            <th class="px-6 py-3.5">Nama Tamu</th>
                            <th class="px-6 py-3.5">Status Kehadiran</th>
                            <th class="px-6 py-3.5">Pax</th>
                            <th class="px-6 py-3.5">Ucapan Doa Restu</th>
                            <th class="px-6 py-3.5">Waktu Kirim</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100 text-slate-600">
                        @forelse($allRsvp as $rsvp)
                            <tr class="hover:bg-slate-50/80 transition">
                                <td class="px-6 py-4 font-semibold text-slate-800">{{ $rsvp->nama }}</td>
                                <td class="px-6 py-4">
                                    @if($rsvp->kehadiran === 'Hadir')
                                        <span class="px-2.5 py-1 bg-green-50 text-green-700 rounded-full font-medium border border-green-100 text-[10px]">Hadir</span>
                                    @else
                                        <span class="px-2.5 py-1 bg-rose-50 text-rose-700 rounded-full font-medium border border-rose-100 text-[10px]">Absen</span>
                                    @endif
                                </td>
                                <td class="px-6 py-4 font-mono font-medium">{{ $rsvp->pax }}</td>
                                <td class="px-6 py-4 max-w-sm truncate text-slate-500 italic" title="{{ $rsvp->ucapan }}">"{{ $rsvp->ucapan }}"</td>
                                <td class="px-6 py-4 text-slate-400 font-light">{{ $rsvp->created_at->diffForHumans() }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="px-6 py-10 text-center text-slate-400 italic">Belum ada tamu yang mengisi konfirmasi RSVP.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </main>

</body>
</html>