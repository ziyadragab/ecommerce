<?php

namespace App\Http\Repositories\EndUser;


use App\Http\Interfaces\EndUser\ShopInterface;
use App\Http\Traits\endUser\ProductTrait;
use App\Models\Color;
use App\Models\Product;
use App\Models\Size;

class ShopRepository implements ShopInterface
{
    use ProductTrait;
    public function show()
    {
        $products = $this->getProducts(9)->paginate(9);
        $colors = Color::with('products')->get();
        $sizes = Size::with('products')->get();

        return view('EndUser.pages.shop', compact(['products', 'colors', 'sizes']));
    }
    public function filterByColor($request)
       {
        if ($request->color) {
            $selectedColor = $request->color;

            $products = Product::whereHas('colors', function ($query) use ($selectedColor) {
                $query->where('name', $selectedColor);
            })->paginate(9);

            $products->appends(['color' => $selectedColor]);

            $colors = Color::with('products')->get();
            $sizes = Size::with('products')->get();

            return view('EndUser.pages.shop', compact(['products', 'colors', 'sizes']));
        } else {
            return redirect()->route('shop.show');
        }
    }

    public function filterBySize($request)
    {
        if ($request->size) {
            $selectedSize = $request->size;

            $products = Product::whereHas('sizes', function ($query) use ($selectedSize) {
                $query->where('name', $selectedSize);
            })->paginate(9);

            $products->appends(['size' => $selectedSize]);
            $colors = Color::with('products')->get();
            $sizes = Size::with('products')->get();

            return view('EndUser.pages.shop', compact(['products', 'colors', 'sizes']));
        } else {
            return redirect()->route('shop.show');
        }
    }
}
