<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.admin', [
            'foods' => Food::all()
        ]);
    }

    public function editorView(Food $food)
    {
        return view ('admin.admin-item', [
            'food' => $food
        ]);
    }

    public function destroy($id)
    {
        $food = Food::find($id);
        $food->delete();

        return redirect()->route('adminpage.index')
                        ->with('success','Menu Item deleted successfully');
    }

}
