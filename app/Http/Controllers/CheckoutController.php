<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\Promo;
use App\Models\Order_type;
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
            'flag' => false,
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
        if (request('place-order') == 'Calculate') {
            $type = Order_type::find(request('type'))->amount;
            $promo = Promo::where('name', '=', request('promo'))->first();
            $total = ($promo != null) ? Cart::getSubTotal() - $promo->amount + $type : Cart::getSubTotal() + $type;
            return view('end-user.checkout', [
                'foods' => Cart::getContent(),
                'total' => $total,
                'flag' => true,
            ]);
        } else {

        }
    }
}
