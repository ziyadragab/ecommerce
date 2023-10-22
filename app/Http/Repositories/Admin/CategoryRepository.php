<?php
namespace App\Http\Repositories\Admin;

use App\Http\Interfaces\Admin\CategoryInterface;
use App\Http\Traits\ImageTrait;

class CategoryRepository implements CategoryInterface{

    use ImageTrait;

    private $categoryModel;
    public function __construct()
    {
        $this->categoryModel = new \App\Models\Category();
    }
    public function index()
    {
        $categories=$this->categoryModel::get();

        return view('Admin.Pages.Category.index',compact(['categories']));
    }


    public function create()
    {
      return view('Admin.Pages.Category.create');
    }
    public function store($request)
    {

        $categoryImage=$this->uploadImage($request->image,$this->categoryModel::PATH);
        $this->categoryModel::create([
            'name'=>$request->name,
            'image'=>$categoryImage
        ]);

       toast('Category Created Successfully','success');
       return redirect()->route('admin.category.index');

    }
    public function edit($category)
    {

        return view("Admin.Pages.Category.update",compact('category'));

    }
    public function update($category, $request)
    {

        if($request->image){
            $categoryImage=$this->uploadImage($request->image,$this->categoryModel::PATH,$category->getRawOriginal('image'));
            $this->removeImage($category->image);
        }
        $category->update([
          'name'=>$request->name,
          'image'=>$categoryImage ?? $category->getRawOriginal('image')
        ]);
        toast('Category Updated Successfully','success');
        return redirect()->route('admin.category.index');

    }
    public function delete($category)
    {
        $this->removeImage($category->image);
        $category->delete();
        toast('Category Deleted Successfully','success');
        return redirect()->route('admin.category.index');
    }
}
