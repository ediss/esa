<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\PartnerService;

class HomeController extends Controller {
    
    public function index() {
        $data = [
            'partners' => PartnerService::getPartnersImg(),
        ];
        return view('pages.home', $data);
    }
}
