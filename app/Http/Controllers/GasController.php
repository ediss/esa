<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\PartnerService;

class GasController extends Controller {
    
    public function index() {
        $data = [
            'partners' => PartnerService::getPartnersImg(),
        ];
        return view('pages.gas', $data);
    }
}
