<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use Illuminate\Http\Request;

class AlternatifController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
        $alternatifs = Alternatif::all();
        return view('alternatif.index', [ 'alternatif' => $alternatifs]);
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
    public function show(Alternatif $alternatif)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Alternatif $alternatif)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Alternatif $alternatif)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alternatif $alternatif)
    {
        //
    }
}
