<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produs;

class MainController extends Controller
{
    public function index(){
        $produse = Produs::all();
        return view('produse.index',[
            'produse' => $produse
        ]);
    }
}
