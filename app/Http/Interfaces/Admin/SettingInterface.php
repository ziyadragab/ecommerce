<?php
namespace App\Http\Interfaces\Admin;

interface SettingInterface{
    public function index();
    public function edit($setting);
    public function update($setting,$request);

}
