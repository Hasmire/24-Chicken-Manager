<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\User;
use App\Models\Order;
use Illuminate\Http\Request;
use Cart;
use Darryldecode\Cart\CartCondition;

class EmployeeController extends Controller
{
    //
    public function index()
    {
        return view('employee.employee', [
            'pending' => Order::where('status', 'pending')->orderBy('id', 'ASC')->get(),
            'confirmed' => Order::where('status', 'confirmed')->orderBy('id', 'ASC')->get(),
            'completed' => Order::where('status', 'completed')->orderBy('id', 'DESC')->get(),
        ]);
    }

    public function indexNew()
    {
        $userId = auth()->user()->id;

        return view('employee.add-order', [
            'header' => "Add Order",
            'subtitle' => "Add items to a new order.",
            'foods' => Cart::session($userId)->getContent(),
            'total' => Cart::session($userId)->getSubTotal(),
            'users' => User::all(),
            'products' => Food::all(),
        ]);
    }

    public function store(Request $request)
    {
        $userId = auth()->user()->id;

        $food = Food::find($request->id);
        Cart::session($userId)->add(array(
            'id' => $food->id,
            'name' => $food->name,
            'price' => $food->amount,
            'quantity' => $request->quantity,
            'attributes' => array(
                'thumbnail' => $food->thumbnail,
            )
        ));
        return back();
    }

    public function create(Request $request)
    {
        include(app_path() . '\Conditions.php');
        $request->validate([
            'type' => 'required|exists:order_types,id',
            'promo' => 'nullable|exists:promos,name',
        ]);

        $userId = auth()->user()->id;

        if (request('submit') == "save" && Cart::session($userId)->getContent()->count() > 0) {
            Cart::session($userId)->clearCartConditions();

            switch ($request->type) {
                case '1':
                    Cart::session($userId)->condition($tDine);
                    break;
                case '2':
                    Cart::session($userId)->condition($tTake);
                    break;
                case '3':
                    Cart::session($userId)->condition($tDeliv);
                    break;
            }

            switch ($request->promo) {
                case '20PESOS':
                    Cart::session($userId)->condition($promo20);
                    break;
                case '30PESOS':
                    Cart::session($userId)->condition($promo30);
                    break;
                case '50PESOS':
                    Cart::session($userId)->condition($promo50);
                    break;
            }

            Order::create([
                'user_id' => request('user'),
                'order_type_id' => request('type'),
                'cart' => Cart::session($userId)->getContent(),
                'conditions' => Cart::session($userId)->getConditions(),
                'amount' => Cart::session($userId)->getSubTotal(),
            ]);

            Cart::session($userId)->clear();
            return redirect()->route('index')->with('success', 'Order Successfully Added!');
        } else {
            return redirect('index')->with('failure', 'Your Cart is Empty!');
        }
    }

    public function update(Order $order)
    {
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

    public function edit(Order $order)
    {
        $userId = auth()->user()->id;

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
            case 'Dine-in':
                Cart::session($userId)->condition($tDine);
                break;
            case 'Take-out':
                Cart::session($userId)->condition($tTake);
                break;
            case 'Delivery':
                Cart::session($userId)->condition($tDeliv);
                break;
        }

        if (count($arr) > 1)
            if ($arr[1] == '20PESOS') {
                Cart::session($userId)->condition($promo20);
            } else if ($arr[1] == '30PESOS') {
                Cart::session($userId)->condition($promo30);
            } else if ($arr[1] == '50PESOS') {
                Cart::session($userId)->condition($promo50);
            }

        return redirect()->route('show', $order);
    }

    public function show(Order $order)
    {
        $userId = auth()->user()->id;
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

    public function save(Request $request)
    {
        include(app_path() . '\Conditions.php');
        $request->validate([
            'type' => 'required|exists:order_types,id',
            'promo' => 'nullable|exists:promos,name',
        ]);

        $userId = auth()->user()->id;

        if (request('submit') == "save" && Cart::session($userId)->getContent()->count() > 0) {
            Cart::session($userId)->clearCartConditions();

            switch ($request->type) {
                case '1':
                    Cart::session($userId)->condition($tDine);
                    break;
                case '2':
                    Cart::session($userId)->condition($tTake);
                    break;
                case '3':
                    Cart::session($userId)->condition($tDeliv);
                    break;
            }

            switch ($request->promo) {
                case '20PESOS':
                    Cart::session($userId)->condition($promo20);
                    break;
                case '30PESOS':
                    Cart::session($userId)->condition($promo30);
                    break;
                case '50PESOS':
                    Cart::session($userId)->condition($promo50);
                    break;
            }

            Order::find(request('id'))->update([
                'user_id' => request('user'),
                'order_type_id' => request('type'),
                'cart' => Cart::session($userId)->getContent(),
                'conditions' => Cart::session($userId)->getConditions(),
                'amount' => Cart::session($userId)->getSubTotal(),
            ]);
            Cart::session($userId)->clear();
            return redirect()->route('index')->with('success', 'Order Successfully Added!');
        } elseif (request('submit') != "save" || Cart::session($userId)->getContent()->count() == 0) {
            Order::find(request('id'))->delete();
            Cart::session($userId)->clear();
            return redirect()->route('index')->with('success', 'Order Sucessfully Deleted!');
        }
    }
}
