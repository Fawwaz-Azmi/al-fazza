<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;

class PrestasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Content $prestasi)
    {
        $prestasi = Content::all();
        return view("prestasi.index", compact("prestasi"));
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

}
