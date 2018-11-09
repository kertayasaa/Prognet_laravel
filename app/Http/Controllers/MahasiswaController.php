<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswa = Mahasiswa::get();
        return view('Mahasiswa.showMahasiswa',compact('mahasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Mahasiswa.formMahasiswa');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mahasiswa = new Mahasiswa;
        $mahasiswa->nim = $request->nim;
        $mahasiswa->nama = $request->nama;
        $mahasiswa->alamat = $request->alamat;
        $mahasiswa->prodi = $request->prodi;
        $mahasiswa->save();
        $mahasiswa = Mahasiswa::get();
        return view('Mahasiswa.showMahasiswa',compact('mahasiswa'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        $mahasiswaEdit = Mahasiswa::find($mahasiswa);
        return view('mahasiswa/editMahasiswa',compact('mahasiswaEdit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        $mahasiswaEdit = Mahasiswa::find($mahasiswa->id);
        $mahasiswaEdit->nim = $request->nim;
        $mahasiswaEdit->nama = $request->nama;
        $mahasiswaEdit->alamat = $request->alamat;
        $mahasiswaEdit->prodi = $request->prodi;
        $mahasiswaEdit->save();
        $mahasiswa = Mahasiswa::get();
        return view('/showMahasiswa',compact('mahasiswa'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();
        $mahasiswa = Mahasiswa::get();
        return view('mahasiswa/showMahasiswa',compact('mahasiswa'));
    }
}
