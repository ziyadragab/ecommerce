<?php
namespace App\Http\Repositories\Admin;
use App\Http\Interfaces\Admin\SettingInterface;

class SettingRepository implements SettingInterface{


    private $settingModel;
    public function __construct()
    {
        $this->settingModel = new \App\Models\Setting();
    }
    public function index()
    {
        $settings=$this->settingModel::get();
        return view('Admin.Pages.Setting.index',compact(['settings']));
    }

    public function edit($setting)
    {
        return view("Admin.Pages.Setting.update",compact('setting'));
    }
    public function update($setting, $request)
    {
        $setting->update([
            'email'=>$request->email,
            'phone'=>$request->phone,
            'address'=>$request->address
        ]);
        toast('Setting Updated Successfully','success');
        return redirect()->route('admin.setting.index');
    }

}
