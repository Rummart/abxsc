<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Season;

class SeasonController extends Controller
{



    function __construct(Request $request){



    }

    public function seasons(Request $request){

        // $seasons = Season::all()->orderBy('number', 'desc');
        $seasons = Season::orderByDesc('number')->get();

        return view('seasons', ['seasons' => $seasons]);

    }



}
