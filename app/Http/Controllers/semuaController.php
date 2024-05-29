<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class semuaController extends Controller
{
    function dashboard(){
        return view('Dashboard');
    }
    function stock(){
        return view('Stock');
    }
    function historyPembelian(){
        return view('HistoryPembelian');
    }
}

