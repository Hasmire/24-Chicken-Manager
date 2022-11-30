<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\Cart;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    //
    public function show()
    {
        return view('end-user.checkout', [
            //add
        ]);
    }

    public function add()
    {
        dd(request('item'));
    }

    public function update()
    {

    }

    public function remove()
    {

    }

    public function place()
    {

    }
}
