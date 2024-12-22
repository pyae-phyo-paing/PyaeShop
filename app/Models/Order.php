<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'orders';
    protected $fillable = [
        'voucher_no',
        'total',
        'qty',
        'payment_slip',
        'status',
        'note',
        'item_id',
        'payment_id',
        'user_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);  //$this ဆိုတာက အပေါ်က model name item ကို ပြန်ခေါ်တာ
        //belongsTo ဆိုတာ ရှိကိုရှိရမယ် 
        //Category Model က ဘာလို့ use မလုပ်ရတာလဲဆိုတော့ item.php နဲ့ category.php က တစ်တန်းတည်းမှာရှိလို့
        //Join တယ်လို့ ခေါ်တယ် ဒီ function က laravel.com မှာ relationship ဆိုပြီး ခေါ်ပြီး ရှာလို့ရတယ်
    }

    public function payment(){
        return $this->belongsTo(Payment::class);  //$this ဆိုတာက အပေါ်က model name item ကို ပြန်ခေါ်တာ
        //belongsTo ဆိုတာ ရှိကိုရှိရမယ် 
        //Category Model က ဘာလို့ use မလုပ်ရတာလဲဆိုတော့ item.php နဲ့ category.php က တစ်တန်းတည်းမှာရှိလို့
        //Join တယ်လို့ ခေါ်တယ် ဒီ function က laravel.com မှာ relationship ဆိုပြီး ခေါ်ပြီး ရှာလို့ရတယ်
    }

    public function item(){
        return $this->belongsTo(Item::class);  //$this ဆိုတာက အပေါ်က model name item ကို ပြန်ခေါ်တာ
        //belongsTo ဆိုတာ ရှိကိုရှိရမယ် 
        //Category Model က ဘာလို့ use မလုပ်ရတာလဲဆိုတော့ item.php နဲ့ category.php က တစ်တန်းတည်းမှာရှိလို့
        //Join တယ်လို့ ခေါ်တယ် ဒီ function က laravel.com မှာ relationship ဆိုပြီး ခေါ်ပြီး ရှာလို့ရတယ်
    }
}
