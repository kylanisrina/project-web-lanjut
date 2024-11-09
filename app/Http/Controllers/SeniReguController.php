<?php

namespace App\Http\Controllers;
use App\Models\Seniregu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SeniReguController extends Controller
{
    public function index()
    {
        $registrations = Seniregu::all();
        return view('admin.dashboard', compact('registrations'));
    }

    public function create()
    {
        return view('seniregu.register');
    }

    // app/Http/Controllers/SeniReguController.php
public function store(Request $request)
{
    $validated = $request->validate([
        'namaKetua' => 'required',
        'tglLahirKetua' => 'required|date',
        'namaAnggota1' => 'required',
        'tglLahirAnggota1' => 'required|date',
        'namaAnggota2' => 'required',
        'tglLahirAnggota2' => 'required|date',
        'namaOfficial' => 'required',
        'noTelpon' => 'required',
        'instansi' => 'required',
        'buktiPembayaran' => 'required|image|max:1024'
    ]);

    // Proses upload file pembayaran
    if ($request->hasFile('buktiPembayaran')) {
        $path = $request->file('buktiPembayaran')->store('bukti-pembayaran', 'public');
        $validated['buktiPembayaran'] = $path;
    }

    // Menyimpan data ke database
    $validated['kategori'] = 'Seni Regu'; // Set kategori secara otomatis
    Seniregu::create($validated); // Menyimpan data

    // Arahkan ke dashboard admin setelah sukses
    return redirect()->route('seniregu.register')->with('success', 'Pendaftaran berhasil!');
}

    public function edit($id)
    {
        $registration = Seniregu::findOrFail($id);
        return view('admin.edit', compact('registration'));
    }

    public function update(Request $request, $id)
    {
        $registration = Seniregu::findOrFail($id);
        $validated = $request->validate([
            'status' => 'required|in:Pending,Confirmed,Rejected'
        ]);

        $registration->update($validated);
        return redirect()->route('admin.dashboard')->with('success', 'Status updated successfully');
    }

    public function destroy($id)
    {
        $registration = Seniregu::findOrFail($id);
        if ($registration->buktiPembayaran) {
            Storage::disk('public')->delete($registration->buktiPembayaran);
        }
        $registration->delete();
        return redirect()->route('admin.dashboard')->with('success', 'Registration deleted successfully');
    }
}
