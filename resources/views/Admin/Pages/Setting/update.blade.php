@extends('Admin.includes.master')

@section('title')
Edit Setting
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
                                    <h4>Edit Setting</h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <form method="post" action="{{ route('admin.setting.update', $setting) }}"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row mb-4">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput2">Setting Email</label>
                                            <input type="email" class="form-control" name="email" value="{{$setting->email}}"
                                                id="exampleFormControlInput2" placeholder="Setting Email">
                                            @error('email')
                                            <p class="alert alert-danger mt-1" role="alert">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput2">Setting Phone</label>
                                            <input type="text" class="form-control" name="phone" value="{{$setting->phone}}"
                                                id="exampleFormControlInput2" placeholder="Setting Phone">
                                            @error('phone')
                                            <p class="alert alert-danger mt-1" role="alert">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput2">Setting Address</label>
                                            <input type="text" class="form-control" name="address" value="{{$setting->address}}"
                                                id="exampleFormControlInput2" placeholder="Setting Address">
                                            @error('address')
                                            <p class="alert alert-danger mt-1" role="alert">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
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
