<?php

namespace App\Http\Controllers;

use App\Models\Brewery;
use Illuminate\Http\Request;

class BreweryController extends Controller
{
    public function index()
    {
        return response()->json([
            'breweries' => Brewery::all()
        ]);
    }

    public function show(Brewery $brewery)
    {
        dd($brewery);
    }
}
