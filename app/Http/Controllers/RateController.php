<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rate;

class RateController extends Controller
{
    // show all rates
    public function index()
    {
        $rates = Rate::all();

        return view('welcome', [
            'rates' => $rates
        ]);
    }
}
