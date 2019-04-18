<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PokerController extends Controller {
    
    public function index() {
        return view('pages.poker-network');
    }
}
