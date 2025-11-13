<?php

namespace App\Http\Controllers;

use App\Models\History;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    // get history list
    public function index()
    {
        $history = History::all();

        return view('stories.index', [
            'historyList' => $history
        ]);
    }
}
