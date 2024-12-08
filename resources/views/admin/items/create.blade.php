@extends('layouts.admin')
@section('content')
                    <div class="container-fluid px-4">
                        <div class="my-3">
                            <h1 class="mt-4 d-inline">Items</h1>
                            <a href="" class="btn btn-danger float-end">Cancel</a>
                        </div>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="index.html">Items</a></li>
                            <li class="breadcrumb-item active">Item Create</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Posts List
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="code_no" class="form-label">Code No</label>
                                    <input type="text" class="form-control" id="code_no">
                                </div>
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name">
                                </div>
                                <div class="mb-3">
                                    <label for="image" class="form-label">Image</label>
                                    <input type="file" class="form-control" id="image">
                                </div>
                                <div class="mb-3">
                                    <label for="price" class="form-label">Price</label>
                                    <input type="text" class="form-control" id="price">
                                </div>
                                <div class="mb-3">
                                    <label for="discount" class="form-label">Discount</label>
                                    <input type="text" class="form-control" id="discount">
                                </div>
                                <div class="mb-3">
                                    <label for="">InStock</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Yes</option>
                                        <option value="1">No</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="">Category</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Choose Category</option>
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea class="form-control" id="description" rows="3"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary w-100">Save</button>
                            </div>
                            
                        </div>
                    </div>
@endsection