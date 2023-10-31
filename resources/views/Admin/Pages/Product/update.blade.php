@extends('Admin.includes.master')

@section('title')
Edit Category
@endsection

@section('content')
<div id="content" class="main-content">
    <div class="container">
        <div class="container">
            <div class="row">
                <div id="flStackForm" class="col-lg-12 layout-spacing layout-top-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Edit Category</h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <form method="post" action="{{ route('admin.product.update', $product) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row mb-4">
                                    <div class="form-group col-md-6">
                                        <label for="exampleFormControlInput2">Product name</label>
                                        <input type="text" class="form-control" name="name" value="{{ $product->name }}" id="exampleFormControlInput2" placeholder="Product name">
                                        @error('name')
                                            <p class="alert alert-danger mt-1" role="alert">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="exampleFormControlInput2">Product Price</label>
                                        <input type="text" class="form-control" name="price" value="{{ $product->price }}" id="exampleFormControlInput2" placeholder="Product Price">
                                        @error('price')
                                            <p class="alert alert-danger mt-1" role="alert">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="category_id">Category</label>
                                    <select name="category_id" id="category_id" class="form-control">
                                        <option value="">Select Category Menu</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}" @if($category->id == $product->category_id) selected @endif>{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                        <p class="alert alert-danger mt-1" role="alert">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlInput2">Product description</label>
                                    <textarea name="description" id="exampleFormControlInput2" class="form-control" rows="6">{{ $product->description }}</textarea>
                                    @error('description')
                                        <p class="alert alert-danger mt-1" role="alert">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Colors:</label><br>
                                    @foreach ($colors as $color)
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="color_{{ $color->id }}" name="colors[]" value="{{ $color->id }}" @if(in_array($color->id, $product->colors->pluck('id')->toArray())) checked @endif>
                                            <label class="form-check-label" for="color_{{ $color->id }}">{{ $color->name }}</label>
                                        </div>
                                    @endforeach
                                    @error('colors')
                                        <p class="alert alert-danger mt-1" role="alert">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Sizes:</label><br>
                                    @foreach ($sizes as $size)
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="size_{{ $size->id }}" name="sizes[]" value="{{ $size->id }}" @if(in_array($size->id, $product->sizes->pluck('id')->toArray())) checked @endif>
                                            <label class="form-check-label" for="size_{{ $size->id }}">{{ $size->name }}</label>
                                        </div>
                                    @endforeach
                                    @error('sizes')
                                        <p class="alert alert-danger mt-1" role="alert">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlInput2">Product image</label>
                                    <div class="input-group">
                                        <img src="{{ asset($product->image) }}" width="100px" height="100px" alt="Product Image">
                                    </div>
                                    <input type="file" class="form-control" name="image" id="exampleFormControlInput2">
                                    @error('image')
                                        <p class="alert alert-danger mt-1" role="alert">{{ $message }}</p>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>



@endsection
