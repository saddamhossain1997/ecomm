@extends('backend.master')
@section('admin')

<div class="card-body">
    <h1 class="text-center">Add Product</h1>

</div>
<div class="row">
    <div class="col-6">
        <form method="POST" action="{{ route('store.product') }}" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter title">
                </div>
                <div class="form-group">

                    <label for="category_id">Category</label>
                    <select class="form-control" name="category_id" id="category_id">
                        @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->category_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="Name">Name</label>
                    <input type="text" class="form-control" id="Name" name="name" placeholder="Enter Name">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" class="form-control" id="description" name="description" placeholder="Enter description">
                </div>
                <div class="form-group">
                    <label for="unit">Unit</label>
                    <input type="text" class="form-control" id="unit" name="unit" placeholder="Enter description">
                </div>
            </div>
    </div>
    <div class="col-6">
        <div class="card-body">
            <div class="form-group">
                <label for="qty">QTY</label>
                <input type="text" class="form-control" id="qty" name="quantity" placeholder="Enter description">
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" class="form-control" id="price" name="price" placeholder="Enter description">
            </div>
            <div class="form-group">
                <label for="file">Image</label>
                <input type="file" class="form-control" id="image" name="image" placeholder="Enter description">
            </div>

        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </form>
    </div>

</div>



@endsection