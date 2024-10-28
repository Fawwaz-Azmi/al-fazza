<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contents = Content::all();
        return view("admin.content.index", compact('contents'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.content.create");
    }

    // Menyimpan konten baru ke dalam database
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Upload gambar jika ada
        $imagePath = null;
        if ($request->hasFile('gambar')) {
            $imagePath = $request->file('gambar')->store('images', 'public');
        }

        // Simpan data
        Content::create([
            'title' => $request->title,
            'body' => $request->body,
            'gambar' => $imagePath,
        ]);

        // Redirect dengan pesan sukses
        return redirect()->route('content.create')->with('success', 'Content berhasil dibuat');
    }



    /**
     * Display the specified resource.
     */
    public function show(Content $content)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Content $content)
    {
        // $content = Content::findOrFail($id);
        return view('admin.content.edit', compact('content'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Content $content)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            $imagePath = $request->file('gambar')->store('images', 'public');
            $content->gambar = $imagePath;
        }
        // Update data lainnya
        $content->title = $request->title;
        $content->body = $request->body;
        $content->save();

        // Redirect dengan pesan sukses
        return redirect()->route('content.index', $content->id)->with('success', 'Content berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $teacher = Content::findOrFail($id);
        $teacher->delete();

        // Redirect dengan pesan sukses
        return redirect()->route('content.index')->with('success', 'Konten berhasil dihapus');
    }
}
