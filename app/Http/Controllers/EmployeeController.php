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
            'pending' => Order::where('status', 'pending')->orderBy('id', 'ASC')->get(),
            'confirmed' => Order::where('status', 'confirmed')->orderBy('id', 'ASC')->get(),
            'completed' => Order::where('status', 'completed')->orderBy('id', 'ASC')->get(),
        ]);
    }

    public function showNew()
    {
        $userId = auth()->user()->id;
        Cart::session($userId)->clear();

        return view('employee.add-order', [
            'header' => "Add Order",
            'subtitle' => "Add items to a new order.",
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
        $userId = auth()->user()->id;

        if (request('submit' == "save")) {
            include(app_path() . '\Conditions.php');
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
        }

        Cart::session($userId)->clear();
        return redirect('employee');
    }

    public function confirm()
    {
        $order = Order::find(request('id'));
        if ($order->status == "pending") {
            $order->update([
                'status' => 'confirmed',
            ]);
        } elseif ($order->status == "confirmed") {
            $order->update([
                'status' => 'completed',
            ]);
        }
        return back();
    }

    public function showEdit()
    {
        $userId = auth()->user()->id;
        $order = Order::find(request('id'));

        Cart::session($userId)->clear();
        foreach (json_decode($order->cart) as $parsed) {
            $food = Food::find($parsed->id);
            Cart::session($userId)->add(array(
                'id' => $food->id,
                'name' => $food->name,
                'price' => $food->amount,
                'quantity' => $parsed->quantity,
                'attributes' => array(
                    'thumbnail' => $food->thumbnail,
                )
            ));
        }

        include(app_path() . '\Conditions.php');
        Cart::session($userId)->clearCartConditions();

        $arr = array_keys((array) json_decode($order->conditions));
        switch ($arr[0]) {
            case 'Dine in':
                Cart::session($userId)->condition($c1);
                break;
            case 'Take-out':
                Cart::session($userId)->condition($c2);
                break;
            case 'Delivery':
                Cart::session($userId)->condition($c3);
                break;
        }

        if (count($arr) > 1)
            if ($arr[1] == 'PROMO') {
                Cart::session($userId)->condition($cpromo);
            }


        return view('employee.edit-order', [
            'header' => "Order #",
            'subtitle' => "Please verify the information below and save the order.",
            'foods' => Cart::session($userId)->getContent(),
            'total' => Cart::session($userId)->getSubTotal(),
            'users' => User::all(),
            'products' => Food::all(),
            'orders' => $order,
        ]);
    }

    public function save()
    {
        $userId = auth()->user()->id;

        if (request('submit' == "save")) {
            include(app_path() . '\Conditions.php');
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

            Order::find(request('id'))->update([
                'user_id' => request('user'),
                'order_type_id' => request('type'),
                'cart' => Cart::session($userId)->getContent(),
                'conditions' => Cart::session($userId)->getConditions(),
                'amount' => Cart::session($userId)->getSubTotal(),
            ]);
        } else {
            Order::find(request('id'))->delete();
        }

        Cart::session($userId)->clear();
        return redirect('employee');
    }
}
