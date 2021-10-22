<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::where('user_type', 'user')->get();
        $vendors = User::where('user_type', 'user')->get();
        $riders = User::where('user_type', 'user')->get();
        $products = Product::get();
        $sold = Product::where('status', 'sold')->get();
        $categories = Category::get();
        return view('admin.index', compact('users','vendors', 'riders', 'products', 'categories', 'sold'));
    }
    public function account()
    {
        $id = Auth::user()->id;
        $user = User::where('id', $id)->first();
        return view('admin.account', compact('user'));
    }
    public function editAccount()
    {
        $id = Auth::user()->id;
        $data = request()->validate([
            'name' => ['required', 'string', 'max:100'],
            'fname' => ['required', 'string', 'max:100'],
            'phone' => ['required', 'string', 'max:11'],
            'dob' => ['required'],
            'address' => ['required', 'string', 'max:200'],
        ]);
        User::where('id', $id)->update($data);
        return redirect('/admin/index')->with('msg', 'Account Updated Successfully!');
    }
}
