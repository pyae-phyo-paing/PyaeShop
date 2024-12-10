@extends('layouts.admin')
@section('content')

<div class="container-fluid px-4">
    <div class="my-3">
        <h1 class="mt-4 d-inline">Categories</h1>
        <a href="{{route('backend.categories.create')}}" class="btn btn-primary float-end">Create</a>
    </div>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item active">Categories</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Categories List
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @php
                        $j = 1;
                    @endphp
                    @foreach($categories as $category)
                        <tr>
                            <td>{{$j++}}</td>
                            <td>{{$category->name}}</td>
                            <td><img src="{{$category->image}}" alt="" width="70px" height="70px"></td>
                            <td>
                                <a href="" class="btn  btn-warning">Edit</a>
                                <a href="" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>

                    @endforeach
                </tbody>
            </table>
           {{$categories->links()}}
        </div>
    </div>
</div>
@endsection