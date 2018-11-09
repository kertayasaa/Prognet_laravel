<?php

namespace App\Http\Controllers;

use App\Prodi;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prodi = Prodi::get();
        return view('/showProdi',compact('prodi')); // memasukan passing variabel
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createProdi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $prodi = new Prodi;
        $prodi->prodi = $request->prodi;
        $prodi->save();
        $prodi = Prodi::get();
        return view('/showProdi',compact('prodi'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Prodi  $prodi
     * @return \Illuminate\Http\Response
     */
    public function show(Prodi $prodi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Prodi  $prodi
     * @return \Illuminate\Http\Response
     */
    public function edit(Prodi $prodi)
    {
        $prodiEdit = Prodi::find($prodi);
        return view('/editProdi',compact('prodiEdit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Prodi  $prodi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prodi $prodi)
    {
        //return $request;
        $prodiEdit = Prodi::find($prodi->id);
        $prodiEdit->prodi = $request->prodi;
        $prodiEdit->save();
        $prodi = Prodi::get();
        return view('/showProdi',compact('prodi'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Prodi  $prodi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prodi $prodi)
    {
        $prodi->delete();
        $prodi = Prodi::get();
        return view('/showProdi',compact('prodi'));
    }
}
