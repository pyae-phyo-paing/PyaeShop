<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Payment;
use App\Http\Requests\PaymentRequest;
use App\Http\Requests\PaymentUpdateRequest;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $payments = Payment::orderBy('id','DESC')->paginate(7);
        return view('admin.payments.index',compact('payments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.payments.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PaymentRequest $request)
    {
        // dd($request);
        $payments = Payment::create($request->all());

        //file Upload
        $file_name = time().'.'.$request->logo->extension(); //12345678.jpeg file name ပေးတာ

        $upload = $request->logo->move(public_path('images/payments/'),$file_name); //file folder ထဲကိုထည့်တာ

        if($upload){
            $payments->logo = "/images/payments/".$file_name; //database ထဲကို ထည့်တာ
        }

        $payments->save();

        return redirect()->route('backend.payments.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $payment = Payment::find($id);
        return view('admin.payments.edit',compact('payment'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PaymentUpdateRequest $request, string $id)
    {
        $payment = Payment::find($id);
        $payment->update($request->all());
        if($request->hasFile('logo')){
            $file_name = time().'.'.$request->logo->extension();
            $update = $request->logo->move(public_path('images/payments/'),$file_name);
            if($update){
                $payment->logo = "/images/payments/".$file_name;
            }
        }else{
            $payment->logo = $request->old_logo;
        }

        $payment->save();
        return redirect()->route('backend.payments.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $payment = Payment::find($id);
        $payment->delete();
        return redirect()->route('backend.payments.index');
    }
}
