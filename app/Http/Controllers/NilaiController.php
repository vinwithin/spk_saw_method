<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use App\Models\Kriteria;
use App\Models\Nilai;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $title = 'Data Nilai';
        // $kriterias = [];
        $alternatifs = [];
        // $nilais = [];
        // foreach (Kriteria::all() as $kriteria)
        //     $kriterias[$kriteria->id_kriteria] = $kriteria;
        foreach (Alternatif::all() as $alternatif)
            $alternatifs[$alternatif->id_alternatif] = $alternatif->nama_alternatif;
           
        
        foreach (Nilai::orderBy('id_alternatif')->orderBy('id_kriteria')->get() as $nilai){
            $nilais[$nilai->id_alternatif][$nilai->id_kriteria] = $nilai;
            
            
        }
       
        return view('nilai.index', ['nilais'=> $nilais, 'kriteria' => Kriteria::all(), 'alternatif' => $alternatifs ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Nilai $nilai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Nilai $nilai)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Nilai $nilai)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Nilai $nilai)
    {
        //
    }
}
