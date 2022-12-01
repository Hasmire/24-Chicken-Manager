<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\User;
use Illuminate\Http\Request;
use Cart;
use Darryldecode\Cart\CartCondition;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class EmployeeController extends Controller
{
    //
    public function show()
    {
        include(app_path() . '\Conditions.php');
        $userId = auth()->user()->id;

        Cart::session($userId)->condition($c1);

        return view('end-user.checkout', [
            'foods' => Cart::session($userId)->getContent(),
            'total' => Cart::session($userId)->getSubTotal(),
        ]);
    }

    public function showNew()
    {
        $userId = auth()->user()->id;

        return view('employee.add-order', [
            'foods' => Cart::session($userId)->getContent(),
            'total' => Cart::session($userId)->getSubTotal(),
            'users' => User::all(),
            'products' => Food::all(),
        ]);
    }

    public function addOrder()
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
        return back();
    }
}
