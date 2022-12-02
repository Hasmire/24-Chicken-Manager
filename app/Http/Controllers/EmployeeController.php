<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\User;
use App\Models\Order;
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
        return view('employee.employee', [
            'pending' => Order::where('status', 'pending')->latest()->get(),
            'confirmed' => Order::where('status', 'confirmed')->latest()->get(),
            'completed' => Order::all(),
        ]);
        /*
        include(app_path() . '\Conditions.php');
        $userId = auth()->user()->id;

        Cart::session($userId)->condition($c1);

        return view('end-user.checkout', [
            'foods' => Cart::session($userId)->getContent(),
            'total' => Cart::session($userId)->getSubTotal(),
        ]);
        */
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

        DB::table('orders')->insert([
            'user_id' => request('user'),
            'order_type_id' => request('type'),
            'cart' => Cart::session($userId)->getContent(),
            'conditions' => Cart::session($userId)->getConditions(),
            'amount' => Cart::session($userId)->getSubTotal(),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        Cart::session($userId)->clear();
        return back();
    }

}
