@extends('layouts.front')
@section('content')

<div class="container my-5 py-5">
    <h3 class="text-center py-3">My Shopping Carts</h3>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Item Name</th>
                    <th>Item Image</th>
                    <th>Item Price</th>
                    <th>Item Discount</th>
                    <th>Qty</th>
                    <th>Amount</th>
                </tr>
            </thead>
            <tbody id="mytable">

            </tbody>
        </table>
    </div>

    <div class="d-grid gap-2">
        @guest 
            <a href="/login" class="btn btn-primary">Login</a>
        @else
            <form action="" id="paymentForm" class="row" enctype="multipart/form-data">
                @csrf 
                <div class="col-md-6">
                    <label for="payment_slip">Payment Slip</label>
                    <input type="file" name="payment_slip" id="payment_slip" class="form-control">
                </div>
                <div class="col-md-6">
                    <label for="payment_method">Payment Method</label>
                    <select name="payment_method" id="payment_method" class="form-select">
                        <option value="">Choose payment method</option>
                        @foreach($payments as $payment)
                            <option value="{{$payment->id}}">{{$payment->name}}</option>
                        @endforeach
                    </select>
                </div>
                <button class="btn btn-success my-3" type="button" id="order-now">Order Now</button>
            </form>
        @endif
    </div>
</div>
@endsection
@section('script')
    <script>
        $(document).ready(function(){
            //ajax setup
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('#order-now').click(function(){
                let itemString = localStorage.getItem('shops');
                $.post("{{route('orderNow')}}",{data:itemString},function(response){
                    console.log(response);
                })  //$.post က အပေါ်က ajaxကို သုံးထားလို့ တစ်ခါတည်း localstorage ထဲကို ထည့်လိုက်တာ အဲ့အတွက်ကြောင့် $.post ကို သုံးတာ
                    //console.log ထုတ်မယ်ဆိုရင် အပေါ်က button က submit မဖြစ်စေပါနဲ့
                    //shops ဆိုတာက ဟိုဘက်က add_to_cart.js ထဲက shops ကို သွားယူထားတာ
            })
        })
    </script>
@endsection