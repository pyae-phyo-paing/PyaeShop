@extends('layouts.admin')
@section('content')
<div class="container-fluid px-4">
    <div class="my-3">
        <h1 class="mt-4">Payments</h1>
        <a href="{{route('backend.payments.create')}}" class="btn btn-primary float-end">Create</a>
    </div>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{route('backend.dashboard')}}">Dashboard</a></li>
        <li class="breadcrumb-item active">Payments</li>
    </ol>
    
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Payments
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Logo</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Logo</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @php 
                        $j = 1;
                    @endphp

                    @foreach($payments as $payment)
                        <tr>
                            <td>{{$j++}}</td>
                            <td>{{$payment->name}}</td>
                            <td><img src="{{$payment->logo}}" alt="" width="50px" height="50px"></td>
                            <td>
                                <a href="" class="btn btn-sm btn-warning">Edit</a>
                                <button type="button" class="btn btn-sm btn-danger delete" data-id="{{$payment->id}}">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{$payments->links()}}
        </div>
    </div>
</div>
@endsection
@section('script')
    <script>
        $(document).ready(function(){
            $('tbody').on('click','.delete',function(){
                alert('Are you Sure?');
                let id = $(this).data('id');
                console.log(id);
                
            })
        })
    </script>
@endsection