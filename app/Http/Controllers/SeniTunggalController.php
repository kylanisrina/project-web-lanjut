<?php

namespace App\Http\Controllers;
use App\Models\Senitunggal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SeniTunggalController extends Controller
{
    public function index()
    {
        $registrations = Senitunggal::all();
        return view('admin.dashboard', compact('registrations'));
    }

    public function create()
    {
        return view('senitunggal.register');
    }

    // app/Http/Controllers/SeniReguController.php
public function store(Request $request)
{
    $validated = $request->validate([
        'namaPeserta' => 'required',
        'tglLahirPeserta' => 'required|date',
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
    $validated['kategori'] = 'Seni Tunggal'; // Set kategori secara otomatis
    Senitunggal::create($validated); // Menyimpan data

    // Arahkan ke dashboard admin setelah sukses
    return redirect()->route('senitunggal.register')->with('success', 'Pendaftaran berhasil!');
}

    public function edit($id)
    {
        $registration = Senitunggal::findOrFail($id);
        return view('admin.edit', compact('registration'));
    }

    public function update(Request $request, $id)
    {
        $registration = Senitunggal::findOrFail($id);
        $validated = $request->validate([
            'status' => 'required|in:Pending,Confirmed,Rejected'
        ]);

        $registration->update($validated);
        return redirect()->route('admin.dashboard')->with('success', 'Status updated successfully');
    }

    public function destroy($id)
    {
        $registration = Senitunggal::findOrFail($id);
        if ($registration->buktiPembayaran) {
            Storage::disk('public')->delete($registration->buktiPembayaran);
        }
        $registration->delete();
        return redirect()->route('admin.dashboard')->with('success', 'Registration deleted successfully');
    }
}
