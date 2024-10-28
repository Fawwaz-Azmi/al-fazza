<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function index()
    {
        // Mengambil semua data package untuk ditampilkan di view
        $packages = Package::all();
        return view('admin.paket.index', compact('packages'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|unique:packages,nama',
        ]);

        // Membuat package baru
        Package::create([
            'nama' => $request->nama,
        ]);

        return redirect()->route('paket.index')->with('success', 'Package berhasil ditambahkan!');
    }

    public function destroy($id)
    {
        $paket = Package::find($id);
        // Menghapus package
        $paket->delete();

        return redirect()->route('paket.index')->with('success', 'Package berhasil dihapus!');
    }
}
