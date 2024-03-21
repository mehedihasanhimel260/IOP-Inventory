@extends('backend.layout')
@section('content')
    <!-- Table Start -->
    <div class="container-fluid pt-4 px-4 ">
        <div class="row g-4 d-flex justify-content-center ">
            <div class="col-sm-12 col-xl-6 ">
                <div class="bg-secondary rounded h-100 p-4">
                    <h6 class="mb-4">Edit Product</h6>

                    <form action="{{ route('product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Name<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="name" value="{{ $product->name }}">
                            <span style="color: red">{{ $errors->has('name') ? $errors->first('name') : ' ' }}</span>
                        </div>
                        <div class="mb-3">
                            <label for="cat_id">Category Name <span class="text-danger">*</span></label>
                            <select class="form-control" name="cat_id">
                                <option selected disabled>Select a category *</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }} "
                                        {{ $category->id == $product->cat_id ? 'selected' : '' }}>{{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                            <span style="color: red">{{ $errors->has('cat_id') ? $errors->first('cat_id') : ' ' }}</span>
                        </div>
                        <div class="mb-3">
                            <label for="Brand_id">Brand Name <span class="text-danger">*</span></label>
                            <select class="form-control" name="brand_id">
                                <option selected disabled>Select a Brand *</option>
                                @foreach ($brands as $brand)
                                    <option value="{{ $brand->id }}"
                                        {{ $brand->id == $product->brand_id ? 'selected' : '' }}>{{ $brand->name }}
                                    </option>
                                @endforeach
                            </select>
                            <span
                                style="color: red">{{ $errors->has('brand_id') ? $errors->first('brand_id') : ' ' }}</span>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Buy Price<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="buy_price" value="{{ $product->buy_price }}">
                            <span
                                style="color: red">{{ $errors->has('buy_price') ? $errors->first('buy_price') : ' ' }}</span>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Sale Price<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="price" value="{{ $product->price }}">
                            <span style="color: red">{{ $errors->has('price') ? $errors->first('price') : ' ' }}</span>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Discount Price<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="discount_price"
                                value="{{ $product->discount_price }}">
                            <span
                                style="color: red">{{ $errors->has('discount_price') ? $errors->first('discount_price') : ' ' }}</span>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">SKU<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="sku" value="{{ $product->sku }}">
                            <span style="color: red">{{ $errors->has('sku') ? $errors->first('sku') : ' ' }}</span>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Quantity<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="qty" value="{{ $product->qty }}">
                            <span style="color: red">{{ $errors->has('qty') ? $errors->first('qty') : ' ' }}</span>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Short Description<span class="text-danger">*</span></label>
                            <textarea class="ckeditor form-control" id="short_description" name="short_description"
                                placeholder="Enter  description"> {{ $product->short_description }}</textarea>
                            <span
                                style="color: red">{{ $errors->has('short_description') ? $errors->first('short_description') : ' ' }}</span>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Long Description<span class="text-danger">*</span></label>
                            <textarea class="ckeditor form-control" id="long_description" name="long_description"
                                placeholder="Enter long description"> {{ $product->long_description }}</textarea>
                            <span
                                style="color: red">{{ $errors->has('long_description') ? $errors->first('long_description') : ' ' }}</span>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Image<span class="text-danger">*</span></label>
                            <input type="file" class="form-control" name="image">
                            <span style="color: red">{{ $errors->has('image') ? $errors->first('image') : ' ' }}</span>
                            <img src="{{ $product->image }}" alt="" width="100px" height="70px">
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Table End -->
@endsection
@push('script')
    <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.ckeditor').ckeditor();
        });
    </script>
@endpush
