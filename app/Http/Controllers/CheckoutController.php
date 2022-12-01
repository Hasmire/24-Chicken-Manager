<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\Promo;
use App\Models\Order_type;
use Illuminate\Http\Request;
use Cart;
use Darryldecode\Cart\CartCondition;

class CheckoutController extends Controller
{
    //
    public function show()
    {
        //dd(Cart::getContent());
        include(app_path() . '\Conditions.php');
        Cart::condition($c1);

        return view('end-user.checkout', [
            'foods' => Cart::getContent(),
            'total' => Cart::getSubTotal(),
        ]);
    }

    public function add()
    {
        // To be added:
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
        include(app_path() . '\Conditions.php');

        Cart::clearCartConditions();

        switch (request('type')) {
            case '1':
                Cart::condition($c1);
                break;
            case '2':
                Cart::condition($c2);
                break;
            case '3':
                Cart::condition($c3);
                break;
        }

        if (request('promo') == 'PROMO') {
            Cart::condition($cpromo);
        }


        return back();
    }
}
