<?php

namespace App\Http\Controllers;
use App\Models\SeniGanda; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SeniGandaController extends Controller
{
    public function index()
    {
        $registrations = SeniGanda::all();
        return view('admin.dashboard', compact('registrations'));
    }

    public function create()
    {
        return view('seniganda.register'); 
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'namaKetua' => 'required',
            'tglLahirKetua' => 'required|date',
            'namaAnggota1' => 'required',
            'tglLahirAnggota1' => 'required|date',
            'namaOfficial' => 'required',
            'noTelpon' => 'required',
            'instansi' => 'required',
            'buktiPembayaran' => 'required|image|max:1024'
        ]);

        
        if ($request->hasFile('buktiPembayaran')) {
            $path = $request->file('buktiPembayaran')->store('bukti-pembayaran', 'public');
            $validated['buktiPembayaran'] = $path;
        }

        
        $validated['kategori'] = 'Seni Ganda';
        SeniGanda::create($validated);

        
        return redirect()->route('seniganda.register')->with('success', 'Pendaftaran berhasil!');
    }

    public function edit($id)
    {
        $registration = Seniganda::findOrFail($id);
        return view('admin.edit', compact('registration'));
    }

    public function update(Request $request, $id)
    {
        $registration = Seniganda::findOrFail($id);
        $validated = $request->validate([
            'status' => 'required|in:Pending,Confirmed,Rejected'
        ]);

        $registration->update($validated);
        return redirect()->route('admin.dashboard')->with('success', 'Status updated successfully');
    }

    public function destroy($id)
    {
        $registration = Seniganda::findOrFail($id);
        if ($registration->buktiPembayaran) {
            Storage::disk('public')->delete($registration->buktiPembayaran);
        }
        $registration->delete();
        return redirect()->route('admin.dashboard')->with('success', 'Registration deleted successfully');
    }
   
}
