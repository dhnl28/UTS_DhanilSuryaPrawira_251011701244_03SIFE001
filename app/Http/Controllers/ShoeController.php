<?php

namespace App\Http\Controllers;

use App\Models\Shoe;
use Illuminate\Http\Request;

class ShoeController extends Controller
{
    public function index()
    {
        $shoes = Shoe::all();
        $brandCount = Shoe::distinct('brand')->count('brand');
        $sportCount = Shoe::distinct('sport_type')->count('sport_type');
        return view('shoes.index', compact('shoes', 'brandCount', 'sportCount'));
    }

    public function show($id)
    {
        $shoe = Shoe::findOrFail($id);
        return view('shoes.show', compact('shoe'));
    }
}
