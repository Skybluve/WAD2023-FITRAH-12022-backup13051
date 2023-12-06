<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowroomController extends Controller
{
 
    public function create()
    {
        return view('showroom.create');
    }

    public function store(Request $request)
    {
        $showroom = new \App\Models\Showroom;
        $showroom->nama = $request->get('nama');
        $showroom->alamat = $request->get('alamat');
        $showroom->save();
        return redirect()->route('showroom.index')->with('status', 'Showroom berhasil ditambahkan!');
    }

    public function index()
    {
        $showrooms = \App\Models\Showroom::all();
        return view('showroom.index', ['showrooms' => $showrooms]);
    }
    
}
