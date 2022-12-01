<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;
use Cart;

class CheckoutController extends Controller
{
    //
    public function show()
    {
        //dd(Cart::getContent());

        return view('end-user.checkout', [
            'foods' => Cart::getContent(),
            'total' => Cart::getSubTotal(),
        ]);
    }

    public function add()
    {

        // To be added:
        //\Cart::session($userId);
        $food = Food::find(request()->id);
        Cart::add(array(
            'id' => $food->id,
            'name' => $food->name,
            'price' => $food->amount,
            'quantity' => request()->quantity,
            'attributes' => array(
                'thumbnail' => $food->thumbnail,
            )
        ));
        return redirect('/menu');
    }

    public function update()
    {
    }

    public function remove()
    {
        Cart::remove(request()->id);
        return back();
    }

    public function place()
    {
    }
}
