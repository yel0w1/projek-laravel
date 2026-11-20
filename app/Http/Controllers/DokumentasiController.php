<?php

namespace App\Http\Controllers;

use App\Models\Dokumentasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DokumentasiController extends Controller
{
    public function index()
    {
        $dokumentasis = Dokumentasi::latest()->get();

        return view('dokumentasi.index', compact('dokumentasis'));
    }

    public function create()
    {
        return view('dokumentasi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'kategori' => 'required|string|max:100',
            'tanggal' => 'required|date',
            'deskripsi' => 'nullable|string',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $data = $request->only([
            'judul',
            'kategori',
            'tanggal',
            'deskripsi'
        ]);

        $data['user_id'] = Auth::id();

        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')
                ->store('dokumentasi', 'public');
        }

        Dokumentasi::create($data);

        return redirect()->route('dokumentasis.index')
            ->with('success', 'Dokumentasi berhasil ditambahkan!');
    }
    public function show(Dokumentasi $dokumentasi)
    {

        return view('dokumentasi.show', compact('dokumentasi'));
    }
    public function edit(Dokumentasi $dokumentasi)
    {
        return view('dokumentasi.edit', compact('dokumentasi'));

    }
    public function update(Request $request, Dokumentasi $dokumentasi)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'kategori' => 'required|string|max:100',
            'tanggal' => 'required|date',
            'deskripsi' => 'nullable|string',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $data = $request->only([
            'judul',
            'kategori',
            'tanggal',
            'deskripsi'
        ]);

        if ($request->hasFile('foto')) {
            if ($dokumentasi->foto) {
                Storage::disk('public')->delete($dokumentasi->foto);
            }

            $data['foto'] = $request->file('foto')
                ->store('dokumentasi', 'public');
        }

        $dokumentasi->update($data);

        return redirect()->route('dokumentasis.index')
            ->with('success', 'Dokumentasi berhasil diperbarui!');
    }
    public function destroy(Dokumentasi $dokumentasi)
    {
        if ($dokumentasi->foto) {
            Storage::disk('public')->delete($dokumentasi->foto);
        }

        $dokumentasi->delete();

        return redirect()->route('dokumentasis.index')
            ->with('success', 'Dokumentasi berhasil dihapus!');
    }
}