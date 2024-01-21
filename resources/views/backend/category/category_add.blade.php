@extends('backend.master')
@section('admin')
<div class="row ml-4 mt-4">
    <div class="col-6">
        <form method="POST" action="{{ route('store')}}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="category_name" class="form-label">Category Name</label>
                <input type="text" class="form-control" id="category_name" name="category_name">
            </div>
            <div class="mb-3">
                <label for="file" class="form-label">Category Image</label>
                <input type="file" class="form-control" id="category_image" name="category_image">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection