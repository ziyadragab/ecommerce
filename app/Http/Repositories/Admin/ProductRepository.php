<?php
namespace App\Http\Repositories\Admin;
use App\Http\Interfaces\Admin\ProductInterface;
use App\Http\Traits\ImageTrait;
use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\Size;

class ProductRepository implements ProductInterface{

    use ImageTrait;

    private $productModel;
    public function __construct()
    {
        $this->productModel = Product::class;
    }
    public function index()
    {
        $products = $this->productModel::with(['sizes','category','colors'])->get();

        return view('Admin.Pages.Product.index', compact('products'));
    }

    public function create()
    {
     $categories=Category::get(['id','name']);
     $sizes=Size::get();
     $colors=Color::get();

      return view('Admin.Pages.Product.create',compact(['sizes','categories','colors']));
    }
    public function store($request)
    {

        $productImage=$this->uploadImage($request->image,$this->productModel::PATH);
        $product= $this->productModel::create([
            'name'=>$request->name,
            'image'=>$productImage,
            'description'=>$request->description,
            'price'=>$request->price,
            'category_id'=>$request->category_id
        ]);
        $product->sizes()->attach($request->sizes);
        $product->colors()->attach($request->colors);

       toast('product Created Successfully','success');
       return redirect()->route('admin.product.index');

    }
    public function edit($product)
    {
        $categories=Category::get(['id','name']);
        $sizes=Size::get();
        $colors=Color::get();

        return view("Admin.Pages.Product.update",compact(['product','categories','sizes','colors']));

    }
    public function update($product, $request)
    {
        // Upload and update product image if provided
        if ($request->image) {
            $productImage = $this->uploadImage($request->image, $this->productModel::PATH, $product->getRawOriginal('image'));
            $this->removeImage($product->image);
        }

        // Update product details
        $product->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'category_id' => $request->category_id,
            'image' => $productImage ?? $product->getRawOriginal('image')
        ]);

        
        $product->colors()->sync($request->input('colors', []));
        $product->sizes()->sync($request->input('sizes', []));

        toast('Product updated successfully', 'success');
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
