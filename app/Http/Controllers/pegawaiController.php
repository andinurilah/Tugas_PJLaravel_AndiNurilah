<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
{
    $title = 'halaman pegawai';
    $query = Pegawai::query();

    if ($request->has('search')) {
        $search = $request->search;
        $query->where(function ($q) use ($search) {
            $q->where('nama', 'like', "%$search%")
            ->orWhere('pangkat', 'like', "%$search%")
            ->orWhere('alamat', 'like', "%$search%");
        });
    }

    $pegawai = $query->get();

    return view('pegawai.index', compact('title', 'pegawai'));
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'halaman tambah data pegawai';

        return view('pegawai.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data =  $request->validate([
            'nama' => 'string|required',
            'pangkat' => 'string|required',
            'alamat' => 'string|required'
        ]);

        $pegawai = Pegawai::create($data);
        // dd($pegawai);
        return redirect()->route('pegawai.index')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pegawai $pegawai)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pegawai $pegawai)
    {
        $title = 'Halaman Edit data pegawai';
        return view('pegawai.edit', compact('title', 'pegawai'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pegawai $pegawai)
    {
        $data = $request->validate([
        'nama' => 'required|string',
        'pangkat' => 'required|string|in:juru,pengatur,penata',
        'alamat' => 'required|string'
    ]);

    $pegawai->update($data);

    return redirect()->route('pegawai.index')->with('success', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pegawai $pegawai)
{
    $pegawai->delete(); // cukup langsung hapus karena parameter sudah model
    return redirect()->route('pegawai.index')->with('success', 'Data Berhasil Dihapus');
}

    // public function search()
    // {
    //     //
    // }
}
