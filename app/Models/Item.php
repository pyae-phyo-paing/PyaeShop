<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'items';
    protected $fillable = [
        'code_no',
        'name',
        'image',
        'price',
        'discount',
        'in_stock',
        'description',
        'category_id'
    ];

    public function category(){
        return $this->belongsTo(Category::class);  //$this ဆိုတာက အပေါ်က model name item ကို ပြန်ခေါ်တာ
        //belongsTo ဆိုတာ ရှိကိုရှိရမယ် 
        //Category Model က ဘာလို့ use မလုပ်ရတာလဲဆိုတော့ item.php နဲ့ category.php က တစ်တန်းတည်းမှာရှိလို့
        //Join တယ်လို့ ခေါ်တယ် ဒီ function က laravel.com မှာ relationship ဆိုပြီး ခေါ်ပြီး ရှာလို့ရတယ်
    }
}
