<?php

namespace App\Services;
use App\Models\Product;
use Illuminate\Support\Str;
class productService
{
    public function productStore($request)
    {
        if ($request->file('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move('images/products/', $imageName);
            $imagePath = url('images/products/' . $imageName);
        }

        $product = Product::create([
            'cat_id' => $request->cat_id,
            'brand_id' => $request->brand_id,
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'buy_price' => $request->buy_price,
            'price' => $request->price,
            'discount_price' => $request->discount_price,
            'qty' => $request->qty,
            'sku' => $request->sku,
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            'image' => $imagePath,
        ]);

        return $product;
    }
    public function productUpdate($product, $request)
    {
        if ($request->file('image')) {
            if (file_exists($product->image)) {
                unlink($product->image);
            }
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move('images/products/', $imageName);
            $imagePath = url('images/products/' . $imageName);
        } else {
            $imagePath = $product->image;
        }
        $productData = $product->update([
            'cat_id' => $request->cat_id,
            'brand_id' => $request->brand_id,
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'buy_price' => $request->buy_price,
            'price' => $request->price,
            'discount_price' => $request->discount_price,
            'qty' => $request->qty,
            'sku' => $request->sku,
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            'image' => $imagePath,
        ]);

        return $productData;
    }
}
