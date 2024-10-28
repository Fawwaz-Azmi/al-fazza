<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teachers = Teacher::all();
        return view("admin.teacher.index", compact("teachers"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.teacher.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama_guru' => 'required|string|min:6|max:25',
            'body' => 'required|string|min:6|max:100',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Upload gambar
        $imagePath = $request->file('gambar')->store('images', 'public');

        // Simpan data ke database
        Teacher::create([
            'nama_guru' => $request->nama_guru,
            'body' => $request->body,
            'gambar' => $imagePath,
        ]);

        // Redirect ke halaman lain dengan pesan sukses
        return redirect()->route('teachers.index')->with('success', 'Teacher berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Teacher $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $teacher = Teacher::findOrFail($id);
        return view('admin.teacher.edit', compact('teacher'));
    }

    // Update data Teacher di database
    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'nama_guru' => 'required|string|min:6|max:25',
            'body' => 'required|string|min:6|max:100',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Temukan teacher
        $teacher = Teacher::findOrFail($id);

        // Jika ada file gambar yang diupload, upload gambar baru
        if ($request->hasFile('gambar')) {
            $imagePath = $request->file('gambar')->store('images', 'public');
            $teacher->gambar = $imagePath;
        }

        // Update data lainnya
        $teacher->nama_guru = $request->nama_guru;
        $teacher->body = $request->body;
        $teacher->save();

        // Redirect dengan pesan sukses
        return redirect()->route('teachers.index', $teacher->id)->with('success', 'Teacher berhasil diupdate');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $teacher = Teacher::findOrFail($id);
        $teacher->delete();

        // Redirect dengan pesan sukses
        return redirect()->route('teachers.index')->with('success', 'Teacher berhasil dihapus');
    }
}