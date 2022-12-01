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
        include(app_path() . '\Conditions.php');
        $userId = auth()->user()->id;
        $wish_list = app('wishlist');
        $wish_list::session($userId)->condition($c1);

        return view('end-user.checkout', [
            'foods' => Cart::session($userId)->getContent(),
            'total' => Cart::session($userId)->getSubTotal(),
        ]);
    }

    public function add()
    {
        $userId = auth()->user()->id;

        $food = Food::find(request()->id);
        Cart::session($userId)->add(array(
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
        $userId = auth()->user()->id;
        Cart::session($userId)->remove(request()->id);
        return back();
    }

    public function place()
    {
        include(app_path() . '\Conditions.php');
        $userId = auth()->user()->id;
        dd(gettype(Cart::session($userId)));
        Cart::session($userId)->clearCartConditions();

        switch (request('type')) {
            case '1':
                Cart::session($userId)->condition($c1);
                break;
            case '2':
                Cart::session($userId)->condition($c2);
                break;
            case '3':
                Cart::session($userId)->condition($c3);
                break;
        }

        if (request('promo') == 'PROMO') {
            Cart::session($userId)->condition($cpromo);
        }

        /*
        DB::table('cartStorage')->insert([
            'user_id' => $userId,
            'order_type_id' => request('type'),
            'promo_id' => request('promo'),
            'cart' => Cart::,
            'amount' => Cart::session($userId)->getSubTotal(),
            'status' => 'pending',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
*/
        Cart::session($userId)->clear();
        return back();
    }
}
