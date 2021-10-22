<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function product()
    {
        return view('users.product');
    }
    public function catType($slug)
    {
        $cates = Category::where('cat_slug', $slug)->first();
        $products = Product::where('category_id', $cates->id)->get();
        return view('users.categories', compact('cates','products'));
    }
    public function checkout()
    {
        return view('users.checkout');
    }
    public function order()
    {
        return view('users.order');
    }
    public function about()
    {
        return view('users.about-us');
    }
    public function contact()
    {
        return view('users.contact-us');
    }
    public function cart()
    {
        return view('users.cart');
    }
    public function oneProd()
    {
        return view('users.products');
    }
    //Users Dashboard
    public function account()
    {
        return view('users.account');
    }
}
