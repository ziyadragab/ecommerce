<?php
namespace App\Http\Repositories\Admin;

use App\Http\Interfaces\Admin\ProductInterface;
use App\Http\Traits\ImageTrait;
use App\Models\Category;
use App\Models\Product;

class ProductRepository implements ProductInterface{

    use ImageTrait;

    private $productModel;
    public function __construct()
    {
        $this->productModel = Product::class;
    }
    public function index()
    {
        $products=$this->productModel::with('category')->get();
        return view('Admin.Pages.Product.index',compact(['products']));
    }


    public function create()
    {
        $categories=Category::get(['id','name']);
      return view('Admin.Pages.Product.create',compact('categories'));
    }
    public function store($request)
    {

        $productImage=$this->uploadImage($request->image,$this->productModel::PATH);

        $this->productModel::create([
            'name'=>$request->name,
            'image'=>$productImage,
            'description'=>$request->description,
            'price'=>$request->price,
            'category_id'=>$request->category_id
        ]);

       toast('product Created Successfully','success');
       return redirect()->route('admin.product.index');

    }
    public function edit($product)
    {
        $categories=Category::get(['id','name']);

        return view("Admin.Pages.Product.update",compact(['product','categories']));

    }
    public function update($product, $request)
    {

        if($request->image){
            $productImage=$this->uploadImage($request->image,$this->productModel::PATH,$product->getRawOriginal('image'));
            $this->removeImage($product->image);
        }
        $product->update([
          'name'=>$request->name,
          'description'=>$request->description,
          'price'=>$request->price,
          'category_id'=>$request->category_id,
          'image'=>$productImage ?? $product->getRawOriginal('image')
        ]);
        toast('product Updated Successfully','success');
        return redirect()->route('admin.product.index');

    }
    public function delete($product)
    {
        
        $this->removeImage($product->image);
        $product->delete();
        toast('product Deleted Successfully','success');
        return redirect()->route('admin.product.index');
    }
}
