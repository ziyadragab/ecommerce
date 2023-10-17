<?php
namespace App\Http\Repositories\Admin;


use App\Http\Traits\ImageTrait;
use App\Http\Interfaces\Admin\AdInterface;

class AdRepository implements AdInterface{

    use ImageTrait;

    private $adModel;
    public function __construct()
    {
        $this->adModel = new \App\Models\Ad();
    }
    public function index()
    {
        $ads=$this->adModel::get();

        return view('Admin.Pages.Ad.index',compact(['ads']));
    }


    public function create()
    {
      return view('Admin.Pages.Ad.create');
    }

    public function store($request)
    {
        $adImage=$this->uploadImage($request->image,$this->adModel::PATH);

        $this->adModel::create([
            'name'=>$request->name,
            'image'=>$adImage,
            'description'=>$request->description
        ]);

       toast('Ad Created Successfully','success');
       return redirect()->route('admin.ad.index');
    }

    public function edit($ad)
    {

        return view("Admin.Pages.Ad.update",compact('ad'));

    }
    public function update($ad, $request)
    {

        if($request->image){
            $adImage=$this->uploadImage($request->image,$this->adModel::PATH,$ad->getRawOriginal('image'));
            $this->removeImage($ad->image);
        }
        $ad->update([
          'name'=>$request->name,
          'description'=>$request->description,
          'image'=>$adImage ?? $ad->getRawOriginal('image')
        ]);
        toast('Ad Updated Successfully','success');
        return redirect()->route('admin.ad.index');

    }
    public function delete($ad)
    {
        $this->removeImage($ad->image);
        $ad->delete();
        toast('Ad Deleted Successfully','success');
        return redirect()->route('admin.ad.index');
    }
}
