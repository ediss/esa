<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Partner;

class PartnerService extends ServiceProvider {

    public static function getPartnersImg() {
        return Partner::orderBy('position', 'asc')->get();
    }
}
