<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rsvp;

class AdminController extends Controller
{
    public function index()
    {
        // Proteksi halaman admin via session
        if (!session()->has('admin_logged_in')) {
            return redirect()->route('login');
        }

        // Mengambil ringkasan data statistik database
        $totalUcapan = Rsvp::count();
        $totalHadir = Rsvp::where('kehadiran', 'Hadir')->count();
        $totalAbsen = Rsvp::where('kehadiran', 'Tidak Hadir')->count();
        $totalPax = Rsvp::where('kehadiran', 'Hadir')->sum('pax');

        // Mengambil semua data rsvp terbaru
        $allRsvp = Rsvp::latest()->get();

        return view('admin.dashboard', compact('totalUcapan', 'totalHadir', 'totalAbsen', 'totalPax', 'allRsvp'));
    }
}