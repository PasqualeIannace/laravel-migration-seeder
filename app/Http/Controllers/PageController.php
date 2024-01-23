<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class PageController extends Controller
{
    public function index()
    {
        $trains = Train::all();
        $inPartenza = Train::where('orario_di_partenza', '>=', now())->get();

        return view('home', compact("trains", "inPartenza"));
    }
}
