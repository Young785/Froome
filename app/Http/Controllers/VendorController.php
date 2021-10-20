<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
class VendorController extends Controller
{
    public function index()
    {
        $orders = Order::get();
        return view('vendor.index', compact('orders'));
    }
    public function users()
    {
        $users = User::get();
        return view('vendor.users', compact('users'));
    }
    public function orders()
    {
        $orders = Order::get();
        return view('vendor.orders', compact('orders'));
    }
    public function account()
    {
        $id = Auth::user()->id;
        $user = User::where('id', $id)->first();
        return view('vendor.account', compact('user'));
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
        return redirect('/vendor')->with('msg', 'Account Updated Successfully!');
    }
    public function category()
    {
        $id = Auth::user()->id;
        $cats = Category::where('id', $id)->get();
        return view('vendor.categories', compact('cats'));
    }
    public function addCategoryP()
    {
        return view('vendor.add_category');
    }
    public function addCategory()
    {
        $data = request()->validate([
            'cat_name' => ['required', 'string', 'max:50'],
        ]);
        $data['vendor_id'] = Auth::user()->id;
        $data['cat_slug'] = Str::slug(request('cat_name'));
        $cat = Category::create([$data]);
        Category::where('id', $cat->id)->update(['cat_id', $cat->id]);
        return redirect('/vendor/add_categories')->with('msg', 'Category Addeed Successfully!');
    }
}
