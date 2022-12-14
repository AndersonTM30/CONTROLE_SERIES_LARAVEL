<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SeriesController extends Controller
{
    public function index()
    {
        $series = Serie::query()->orderBy('nome')->get();
        // $series = DB::select('SELECT * FROM series');
        // $series = [
        //     'Punisher',
        //     'Lost',
        //     'Grey\'s Anatomy'
        // ];

        // retorno mais verboso
        // return view('listar-series', [
        //     'series' => $series
        // ]);

        // retorno mais compacto
        return view('series.index')->with('series', $series);

    }

    public function create()
    {
        return view('series.create');
    }

    public function store(Request $request)
    {
        // $nomeSerie = $request->input('nome');
        // if(DB::insert('INSERT INTO series (nome) VALUES (?)', [$nomeSerie])){
        //     return redirect('/series');
        // }else {
        //     return "Deu erro";
        // }

        $nomeSerie = $request->input('nome');
        $serie = new Serie();
        $serie->nome = $nomeSerie;
        $serie->save();
        return redirect('/series');
    }
}
