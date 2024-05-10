<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    public function addProduct(Request $request)
    {
        $request->validate([
            'product_name' => ['required', 'exists:wallets,id'],
            'product_price' => ['required'],
            'product_descrption'=>['required'],
            'product_category'=>['required'],
            'product_image'=>['required']
        ]);

    }




}
