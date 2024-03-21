<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\BrandRequest;
use App\Models\Brand;
use App\Services\BrandServices;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index(BrandServices $brandServices)
    {
        $brands = $brandServices->brandList();
        // $brands = Brand::paginate(5);
        return view('backend.pages.brand.index', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages.brand.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BrandRequest $request, brandServices $brandServices)
    {
        $brandServices->brandStore($request);
        $this->setSuccessMessage('success', 'Brand has been added');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $brand = Brand::find($id);
        return view('backend.pages.brand.edit', compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BrandRequest $request,$id,  brandServices $brandServices)
    {
        $brand = Brand::find($id);
        $brandServices->brandUpdate($brand, $request);
        $this->setSuccessMessage('info', 'brand has been Updated');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Brand::find($id)->delete();
        $this->setSuccessMessage('warning', 'brand has been Deleted');
        return redirect()->back();
    }
}
