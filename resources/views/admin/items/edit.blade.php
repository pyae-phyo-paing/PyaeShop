@extends('layouts.admin')
@section('content')
                    <div class="container-fluid px-4">
                        <div class="my-3">
                            <h1 class="mt-4 d-inline">Edit Item</h1>
                            <a href="{{route('backend.items.index')}}" class="btn btn-danger float-end">Cancel</a>
                        </div>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="{{route('backend.dashboard')}}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{route('backend.items.index')}}">Items</a></li>
                            <li class="breadcrumb-item active">Edit Item</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Edit Item
                            </div>
                            <div class="card-body">
                                <form action="{{route('backend.items.store')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="code_no" class="form-label">Code No</label>
                                        <input type="text" class="form-control @error('code_no') is-invalid @enderror" id="code_no" name="code_no" value="{{$item->code_no}}">
                                        @error('code_no')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Item Name</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{$item->name}}">
                                        @error('name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="image" class="form-label">Image</label>
                                        <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image" accept="image/*" value="{{old('image')}}">
                                        @error('image')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="price" class="form-label">Price</label>
                                        <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{$item->price}}">
                                        @error('price')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="discount" class="form-label">Discount</label>
                                        <input type="text" class="form-control @error('discount') is-invalid @enderror" id="discount" name="discount" value="{{$item->discount}}">
                                        @error('discount')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="in_stock">InStock</label>
                                        <select class="form-select @error('in_stock') is-invalid @enderror"  name="in_stock" value="{{old('in_stock')}}">
                                            <option value="1" {{$item->in_stock == 1 ? 'selected':'';}}>Yes</option>
                                            <option value="0" {{$item->in_stock == 0 ? 'selected':'';}}>No</option>
                                        </select>
                                        @error('in_stock')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="category_id">Category</label>
                                        <select class="form-select @error('category_id') is-invalid @enderror" name="category_id">
                                            <option value="">Choose Category</option>
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}" {{$item->category_id == $category->id ? 'selected':'';}}>{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                        @error('category_id')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="description" class="form-label">Description</label>
                                        <textarea class="form-control @error('description') is-invalid @enderror" id="description" rows="3" name="description">{{$item->description}}</textarea>
                                        @error('description')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-primary w-100">Save</button>
                                </form>
                            </div>
                            
                        </div>
                    </div>
@endsection