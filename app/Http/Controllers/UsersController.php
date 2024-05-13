<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class UsersController extends Controller
{
    //
    public function addProduct(Request $request)
    {
        $request->validate([
            'product_name' => ['required'],
            'product_price' => ['required'],
            'product_description'=>['required'],
            'product_category'=>['required'],
            'product_image'=>['required']
        ]);

        Product::create([
            'product_name'=>request('product_name'),
            'product_price'=>request('product_price'),
            'product_description'=>request('product_description'),
            'product_category'=>request('product_category'),
            'product_image'=>request()->file('product_image')->store('pImages'),
        ]);
        return redirect('/');

    }




}
