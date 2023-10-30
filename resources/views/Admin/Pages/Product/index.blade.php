@extends('Admin.includes.master')

@section('title')
Products
@endsection

@section('content')
<div id="content" class="main-content">
    <div class="container">

        <div class="container">
            <br>
            <a class="btn btn-primary" href="{{route('admin.product.create')}}"> Create New Product </a>
            <!--  BEGIN BREADCRUMBS  -->
            <div class="secondary-nav">
                <div class="breadcrumbs-container" data-page-heading="Analytics">
                    <header class="header navbar navbar-expand-sm">
                        <a href="javascript:void(0);" class="btn-toggle sidebarCollapse" data-placement="bottom">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-menu">
                                <line x1="3" y1="12" x2="21" y2="12"></line>
                                <line x1="3" y1="6" x2="21" y2="6"></line>
                                <line x1="3" y1="18" x2="21" y2="18"></line>
                            </svg>
                        </a>
                        <div class="d-flex breadcrumb-content">
                            <div class="page-header">

                                <div class="page-title">
                                </div>

                                <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#">Form</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Basic</li>
                                    </ol>
                                </nav>

                            </div>
                        </div>
                    </header>
                </div>
            </div>
            <div class="row layout-top-spacing">
                <!-- Add search input field -->
                <div class="col-lg-4 col-12 layout-spacing">
                    <input type="text" id="searchInput" class="form-control" placeholder="Search by name">
                </div>
            </div>
            <div class="row layout-top-spacing">

                <div id="tableSimple" class="col-lg-12 col-12 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>All Products</h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">Product Name</th>
                                            <th scope="col">Product Price</th>
                                            <th scope="col">Category Name</th>
                                            <th scope="col">Product Image</th>
                                            <th scope="col">Sizes</th>
                                            <th scope="col">Colors</th>
                                            <th scope="col">Update</th>
                                            <th scope="col">Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($products as $product)
                                        <tr class="product-row">
                                            <td>{{ $product->name }}</td>
                                            <td>{{ $product->price }}</td>
                                            <td>{{ $product->category->name }}</td>
                                            <td>
                                                <img src="{{ asset($product->image) }}" width="100px" height="100px">
                                            </td>
                                            <td>
                                                @foreach ($product->sizes as $size)
                                                    {{ $size->name }},
                                                @endforeach
                                            </td>
                                            <td>
                                                @foreach ($product->colors as $color)
                                                    {{ $color->name }},
                                                @endforeach
                                            </td>
                                            <td class="text-center">
                                                <a class="btn btn-primary" href="{{ route('admin.product.edit', $product) }}">Edit</a>
                                            </td>
                                            <td>
                                                <form id="delete" action="{{ route('admin.product.delete', $product) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                        @empty
                                            <h5>No Data</h5>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
