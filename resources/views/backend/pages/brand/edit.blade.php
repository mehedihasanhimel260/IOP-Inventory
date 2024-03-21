@extends('backend.layout')
@section('content')
    <!-- Table Start -->
    <div class="container-fluid pt-4 px-4 vh-100">
        <div class="row g-4 d-flex justify-content-center ">
            <div class="col-sm-12 col-xl-6 ">
                <div class="bg-secondary rounded h-100 p-4">
                    <h6 class="mb-4">Create Brand</h6>
                    <form action="{{ route('brand.update', $brand->id) }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" value="{{ $brand->name }}">
                        </div>

                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Table End -->
@endsection
