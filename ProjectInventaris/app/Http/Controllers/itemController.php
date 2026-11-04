<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class itemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Menampilkan daftar item (bisa diisi dengan Item::all() jika sudah ada halamannya)
        return view('items.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Menampilkan halaman formulir tambah barang
        return view('items.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data yang dikirim dari form agar tidak kosong
        $request->validate([
            'code' => 'required|string|max:255',
            'item_name' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'stock' => 'required|integer',
            'condition' => 'required|string',
            'room_location' => 'required|string|max:255',
        ]);

        // Menyimpan data ke database
        Item::create([
            'code' => $request->code,
            'item_name' => $request->item_name,
            'category' => $request->category,
            'stock' => $request->stock,
            'condition' => $request->condition,
            'room_location' => $request->room_location,
        ]);

        // Kembali ke halaman sebelumnya dengan pesan sukses
        return redirect()->back()->with('success', 'Barang berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}