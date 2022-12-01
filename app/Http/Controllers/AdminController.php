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

    public function create()
    {
        return view('admin.admin-create-menu');
    }

    public function store(Request $request)
    {
        //validate inputs
        $request->validate([
            'name' => 'required|min:5',
            'description' => 'required|min:10',
            'amount' => 'required',
            'thumbnail' => 'required'
        ]);

        // Create user using inputs
        $food = Food::create($request->all());      
        
        //Redirect to landing page if successful
        return redirect('admin')->with('success', 'Successfully Added Item');
    }

    public function destroy($id)
    {
        $food = Food::find($id);
        $food->delete();

        return redirect()->route('adminpage.index')
                        ->with('success','Menu Item deleted successfully');
    }

}
