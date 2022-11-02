<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        $series = [
            'Punisher',
            'Lost',
            'Grey\'s Anatomy'
        ];

        // retorno mais verboso
        // return view('listar-series', [
        //     'series' => $series
        // ]);

        // retorno mais compacto
        return view('series.index')->with('series', $series);

    }
}
