<?php

namespace App\Http\Traits\endUser;

use App\Models\Ad;

trait AdTrait
{

    public function getAds($count)
    {
        return Ad::inRandomOrder()->limit($count)->get();
    }
}
