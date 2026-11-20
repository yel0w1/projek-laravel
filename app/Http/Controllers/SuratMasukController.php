<?php

namespace App\Http\Controllers;

use App\Models\SuratMasuk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class SuratMasukController extends Controller
{
    public function index()
    {
        $suratMasuks = SuratMasuk::latest()->get();

        return view('surat_masuk.index', compact('suratMasuks'));
    }

    public function create()
    {
        $penandaTangan = SuratMasuk::whereNotNull('penanda_tangan')
            ->where('penanda_tangan', '!=', '')
            ->distinct()
            ->orderBy('penanda_tangan')
            ->pluck('penanda_tangan');

        return view('surat_masuk.create', compact('penandaTangan'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'jenis_surat' => 'required|in:Internal,Eksternal',
            'nomor_surat' => 'required|string|max:255',
            'tanggal_surat' => 'required|date',
            'tanggal_diterima' => 'required|date',
            'asal_surat' => 'required|string|max:255',
            'perihal' => 'required|string|max:255',
            'tujuan' => 'nullable|string|max:255',
            'penanda_tangan' => 'required|string|max:255',
            'file_pdf' => 'nullable|mimes:pdf|max:5120',
        ]);

        if ($request->hasFile('file_pdf')) {
            $validated['file_pdf'] = $request->file('file_pdf')
                ->store('arsip_surat', 'public');
        }

        $validated['user_id'] = Auth::id();

        SuratMasuk::create($validated);

        return redirect()->route('surat-masuk.index')
            ->with('success', 'Arsip surat berhasil ditambahkan!');
    }

    public function show(SuratMasuk $suratMasuk)
    {
        return view('surat_masuk.show', compact('suratMasuk'));
    }

    public function edit(SuratMasuk $suratMasuk)
    {
        $penandaTangan = SuratMasuk::whereNotNull('penanda_tangan')
            ->where('penanda_tangan', '!=', '')
            ->distinct()
            ->orderBy('penanda_tangan')
            ->pluck('penanda_tangan');

        return view('surat_masuk.edit', compact('suratMasuk', 'penandaTangan'));
    }

    public function update(Request $request, SuratMasuk $suratMasuk)
    {
        $validated = $request->validate([
            'jenis_surat' => 'required|in:Internal,Eksternal',
            'nomor_surat' => 'required|string|max:255',
            'tanggal_surat' => 'required|date',
            'tanggal_diterima' => 'required|date',
            'asal_surat' => 'required|string|max:255',
            'perihal' => 'required|string|max:255',
            'tujuan' => 'nullable|string|max:255',
            'penanda_tangan' => 'required|string|max:255',
            'file_pdf' => 'nullable|mimes:pdf|max:5120',
        ]);

        if ($request->hasFile('file_pdf')) {
            if ($suratMasuk->file_pdf) {
                Storage::disk('public')->delete($suratMasuk->file_pdf);
            }

            $validated['file_pdf'] = $request->file('file_pdf')
                ->store('arsip_surat', 'public');
        }

        $suratMasuk->update($validated);

        return redirect()->route('surat-masuk.index')
            ->with('success', 'Arsip surat berhasil diperbarui!');
    }

    public function destroy(SuratMasuk $suratMasuk)
    {
        if ($suratMasuk->file_pdf) {
            Storage::disk('public')->delete($suratMasuk->file_pdf);
        }

        $suratMasuk->delete();

        return redirect()->route('surat-masuk.index')
            ->with('success', 'Arsip surat berhasil dihapus!');
    }
}