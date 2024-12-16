@extends('layouts.admin')
@section('content')

<div class="container-fluid px-4">
    <div class="my-3">
        <h1 class="mt-4 d-inline">Edit Payment</h1>
        <a href="" class="btn btn-danger float-end">Cancel</a>
    </div>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{route('backend.dashboard')}}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{route('backend.payments.index')}}">Payments</a></li>
        <li class="breadcrumb-item active">Edit Payment</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
                Edit Payment
        </div>
        <div class="card-body">
            <form action="{{route('backend.payments.update',$payment->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{$payment->name}}">
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="logo-tab" data-bs-toggle="tab" data-bs-target="#logo-tab-pane" type="button" role="tab" aria-controls="logo-tab-pane" aria-selected="true">Logo</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="new_logo-tab" data-bs-toggle="tab" data-bs-target="#new_logo-tab-pane" type="button" role="tab" aria-controls="new_logo-tab-pane" aria-selected="false">New Logo</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="logo-tab-pane" role="tabpanel" aria-labelledby="logo-tab" tabindex="0">
                        <img src="{{$payment->logo}}" alt="" class="h-25 w-25 my-3">
                        <input type="hidden" name="old_logo" id="" value="{{$payment->logo}}">
                    </div>
                    <div class="tab-pane fade" id="new_logo-tab-pane" role="tabpanel" aria-labelledby="new_logo-tab" tabindex="0">
                        <input type="file" class="form-control my-3 @error('logo') is-invalid @enderror" id="logo" name="logo" accept="image/*" value="{{old('image')}}">
                    </div>
                </div>
                    @error('logo')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <button type="submit" class="btn btn-primary w-100">Update</button>
            </form>
        </div>
        
    </div>
</div>

@endsection