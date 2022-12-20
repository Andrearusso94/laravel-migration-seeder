<?php

namespace App\Http\Controllers\Guest;

use App\Models\Train;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    function index()
    {
        return view('welcome');
    }

    function trains()
    {
        $trains = Train::all();
        //dd($trains);
        return view('trains', compact('trains'));
    }
}
