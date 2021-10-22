<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
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
        $cats = Category::get();
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
        $data['admin_id'] = Auth::user()->id;
        $data['cat_slug'] = Str::slug(request('cat_name'));
        $cat = Product::create([$data]);
        Product::where('id', $cat->id)->update(['cat_id', $cat->id]);
        return redirect('/vendor/categories')->with('msg', 'Category Addeed Successfully!');
    }
    public function products()
    {
        $id = Auth::user()->id;
        $products = Product::get();
       
        return view('vendor.products', compact('products'));
    }
    public function addProductP()
    {
        $cats = Category::get();

        return view('vendor.add_product', compact('cats'));
    }
    public function addProduct(Request $request)
    {
        $data = request()->validate([
            'product_name' => ['required'],
            'product_desc' => ['required'],
            'product_images' => ['required'],
            'product_price' => ['required'],
        ]);
        $files = [];
        if($request->hasfile('product_images')){
            foreach($request->file('product_images') as $file)
            {
                $name = $file->getClientOriginalName();
                $file->move(public_path('admin/products/'), $name);  

                $files[] = $name;  
            }
        }

        $file = new Product();

        $file->user_id = Auth::user()->id;
        $file->product_images = json_encode($files);
        $file->product_name = $request->product_name;
        $file->product_price = $request->product_price;
        $file->product_slug =  Str::slug(request('product_name'));
        $file->product_price = $request->product_price;
        $file->product_desc = $request->product_desc;
        $file->category_id = request('category_id');
        
        $file->save();
        
        Product::where('id', $file->id)->update(['product_id'=> $file->id]);

        return redirect('/vendor/products')->with('msg', 'Product Addeed Successfully!');
    }
}
