<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\Admin\SettingInterface;
use App\Http\Requests\Admin\SettingRequest;
use App\Models\Setting;


class SettingController extends Controller
{
    private $settingInterface;
    public function __construct(SettingInterface $setting)
    {
        $this->settingInterface = $setting;
    }

    public function index()
    {
        return $this->settingInterface->index();
    }

    public function edit(Setting $setting)
    {
        return $this->settingInterface->edit($setting);
    }
    public function update(Setting $setting, SettingRequest $request)
    {
        return $this->settingInterface->update($setting, $request);
    }

}
