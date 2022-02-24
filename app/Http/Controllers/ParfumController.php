<?php

namespace App\Http\Controllers;

use App\Models\Contenance;
use App\Models\Parfum;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;

class ParfumController extends Controller
{
    public function index()
    {

        $parflui = Parfum::where('categorie','=',1)->get();
        $parfelle = Parfum::where('categorie','=',2)->get();
        $parfunisexe = Parfum::where('categorie','=',3)->get();
        $contenance = Contenance::all();

        return view('home',[
            'parflui'=>$parflui,
            'parfelle'=>$parfelle,
            'parfunisexe'=>$parfunisexe,
            'contenance'=>$contenance
        ]);
    }
}
