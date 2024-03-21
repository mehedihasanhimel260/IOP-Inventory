<?php
namespace App\Services;

use App\Models\Brand;
use Illuminate\Support\Str;
class BrandServices
{
    public function brandStore($request)
    {
        $brand = Brand::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
        ]);
        return $brand;
    }
    public function brandList()
    {
        return Brand::paginate(5);
    }
    public function brandUpdate($brand, $request)
    {
        $brandData = $brand->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
        ]);

        return $brandData;
    }
}
