@extends('layouts.admin')
@section('content')

<div class="container-fluid px-4">
<div class="my-5">
    <h3 class="my-4 d-inline">Order Details</h3>
    <a href="{{route('backend.orders')}}" class="btn btn-sm btn-danger float-end">Cancel</a>
</div>

<div class="card mb-4">
    <div class="card-body">
        <h3 class="text-center">PyaeShop</h3>

        <div class="row">
            <div class="col-md-6">
                <p>Name - </p>
                <p>Phone - </p>
                <p>Voucher No - </p>
            </div>
            <div class="col-md-6 text-end">
                <p>Date - </p>
                <p>Address - </p>
                <p>Payment Method - </p>
            </div>
        </div>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Item Name</th>
                    <th>Price</th>
                    <th>Discount</th>
                    <th>Qty</th>
                    <th>Amount</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
        <div class="row">
            <div class="offset-md-4 col-md-4">
                <img src="" alt="" class="img-fluid">
            </div>
            <form action="" class="d-grid gap-2 my-5" method="post">
            @csrf 
                <input type="hidden" name="status" value="Accept">
                <button class="btn btn-primary" type="submit">Order Accept</button>
            </form>
        </div>
    </div>
</div>
</div>

@endsection