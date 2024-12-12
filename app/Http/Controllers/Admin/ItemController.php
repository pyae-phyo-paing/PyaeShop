<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Category;
use App\Http\Requests\ItemRequest;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Item::orderBy('id','DESC')->paginate(15);
        return view('admin.items.index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.items.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ItemRequest $request)
    {
        // dd($request);
        $items = Item::create($request->all());
        
        // file Upload
        $file_name = time().'.'.$request->image->extension(); //12222224334.png

        $upload = $request->image->move(public_path('images/items/'),$file_name); //file folder ထဲကို ထည့်တာ

        if($upload){
            $items->image = "/images/items/".$file_name; //ဒါက items ထဲက image colum ထဲကို images folder ထဲက items folder ထဲက file name ကို ထည့်တာ database ထဲကို ထည့်တာ
        }

        $items->save();

        return redirect()->route('backend.items.index');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
