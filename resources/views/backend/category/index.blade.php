@extends('backend.layout')
@section('content')
    <!-- Table Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-12">
                <div class="bg-secondary rounded h-100 p-4">
                    <div class="d-flex justify-content-between">

                        <h6 class="mb-4">Category List</h6>
                        <a href="{{ route('categories.create') }}" class="btn btn-primary">Create</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Slug</th>
                                    <th class="text-center" scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $category->name }}</td>
                                        <td>{{ $category->slug }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('categories.edit', $category->id) }}"
                                                class="btn btn-outline-warning m-2">Edit</a>
                                            <a href="{{ route('categories.destroy', $category->id) }}"
                                                class="btn btn-outline-danger m-2">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            @if ($categories->lastPage() > 1)
                                @if ($categories->onFirstPage())
                                    <a class="btn btn-primary disabled" href="#">Previous</a>
                                @else
                                    <a class="btn btn-primary" href="{{ $categories->previousPageUrl() }}">Previous</a>
                                @endif

                                @for ($i = 1; $i <= $categories->lastPage(); $i++)
                                    <a class="btn btn-primary{{ $categories->currentPage() == $i ? ' active' : '' }}"
                                        href="{{ $categories->url($i) }}">{{ $i }}</a>
                                @endfor

                                @if ($categories->hasMorePages())
                                    <a class="btn btn-primary" href="{{ $categories->nextPageUrl() }}">Next</a>
                                @else
                                    <a class="btn btn-primary disabled" href="#">Next</a>
                                @endif
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Table End -->
@endsection
