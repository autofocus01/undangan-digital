<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rsvp;

class RsvpController extends Controller
{
    public function store(Request $request)
    {
        // 1. Validasi Input demi keamanan database dari data sampah
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'kehadiran' => 'required|in:Hadir,Tidak Hadir',
            'pax' => 'required|integer|min:0|max:4',
            'ucapan' => 'required|string',
        ]);

        // 2. Simpan ke database menggunakan Eloquent ORM
        Rsvp::create([
            'nama' => $validated['nama'],
            'kehadiran' => $validated['kehadiran'],
            'pax' => $validated['kehadiran'] === 'Hadir' ? $validated['pax'] : 0,
            'ucapan' => $validated['ucapan'],
        ]);

        // 3. Kembalikan respons JSON sukses untuk AJAX Fetch di Frontend
        return response()->json([
            'status' => 'success',
            'message' => 'Konfirmasi kehadiran berhasil disimpan!'
        ]);
    }
}