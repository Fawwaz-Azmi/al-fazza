<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::with('package')->get();

        // dd($students);

        return view("admin.data-adm", compact("students"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $packages = Package::all(); // Ambil semua data packages untuk dropdown
        return view('pendaftaran', compact('packages'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_siswa' => 'required|string|max:255',
            'kelas' => 'required|string|max:50',
            'umur' => 'required|numeric',
            'nama_orangtua' => 'required|string|max:255',
            'nomor_hp' => 'required|string|max:15',
            'package_id' => 'required|exists:packages,id',
        ]);

        // Simpan data
        Student::create([
            'nama_siswa' => $request->nama_siswa,
            'kelas' => $request->kelas,
            'umur' => $request->umur,
            'nama_orangtua' => $request->nama_orangtua,
            'nomor_hp' => $request->nomor_hp,
            'package_id' => $request->package_id,
        ]);

        // Redirect dengan pesan sukses
        return redirect()->route('pendaftaran.create')->with('success', 'berhasil dibuat');
  
    }


   
}
