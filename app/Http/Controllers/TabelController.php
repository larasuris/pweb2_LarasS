<?php

namespace App\Http\Controllers;

use App\Models\pemesanan;
use Illuminate\Http\Request;
use Illuminate\View;

class TabelController extends Controller
{
    public function index()
    {
        $table = pemesanan::all();
    return view('cv_abs', compact('pemesanan'));

    }
    public function create()
    {

    }
    public function store(request $REQUEST, string $id )
    {
        
    }
    public function destroy(string $id)
    {

    }
    
}
