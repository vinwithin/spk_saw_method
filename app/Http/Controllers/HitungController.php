<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use App\Models\Kriteria;
use App\Models\Nilai;
use Illuminate\Http\Request;

class HitungController extends Controller
{
    public $kriterias;
    public $alternatifs = [];
    public $nilais = [];
    public $minmax = [];
    public $normal = [];
    public $terbobot = [];
    public $total = [];
    public $rank = [];
    public function index()
    {
        $title = 'Perhitungan';
        // $kriterias = [];
        
        
        foreach (Kriteria::orderBy('id')->get() as $kriteria)
            $kriterias[$kriteria->id] = $kriteria;
        foreach (Alternatif::all() as $alternatif)
            $alternatifs[$alternatif->id] = $alternatif;
        foreach (Nilai::orderBy('id_alternatif')->orderBy('id_kriteria')->get() as $nilai)
            $nilais[$nilai->id_alternatif][$nilai->id_kriteria] = $nilai->nilai;

        
        $arr = [];
        foreach ($nilais as $key => $val) {
            foreach ($val as $k => $v) {
                $arr[$key][$k] = $v;
                
            }
        }
        
        foreach ($arr as $key => $val) {
            $minmax[$key]['min'] = min($val);
            $minmax[$key]['max'] = max($val);
            
        }
        // dd($minmax[9]['max']);
       
        foreach ($nilais as $key => $val) {
            foreach ($val as $k => $v) {
                // dd($minmax[29]['min']);
                $normal[$key][$k] = strtolower($kriterias[$k]->atribut) === 'benefit' ? $v / $minmax[$k]['max'] : $minmax[$k]['min'] / $v;
                 
            }
        }
        
        foreach ($normal as $key => $val) {
            foreach ($val as $k => $v) {
                $terbobot[$key][$k] = $v * $kriterias[$k]->bobot;
            }
        }
                // dd($terbobot);
        
        foreach ($terbobot as $key => $val) {
            $total[$key] = array_sum($val);
        }
        
        arsort($total);
       
        $no = 1;
        foreach ($total as $key => $val) {
            $rank[$key] = $no++;
        }
        // dd($rank);
        ksort($total);
        return view('hitung.index', compact('title', 'kriterias', 'alternatifs', 'nilais', 'minmax', 'normal', 'terbobot', 'total', 'rank'));
    }
   
}
