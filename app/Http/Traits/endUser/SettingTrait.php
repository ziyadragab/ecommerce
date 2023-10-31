<?php
namespace App\Http\Traits\endUser;

use App\Models\Setting;

trait SettingTrait{
    public function getSettings(){
        return Setting::get();
    }
}


?>
