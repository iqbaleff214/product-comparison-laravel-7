<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('pages.products', compact('products'));
    }

    public function comparison($id=null)
    {
        if(!$id) return redirect()->route('products');
        $product = Product::find($id);
        $products = Product::where('category_id', $product->category_id)->where('id','!=' , $id)->limit(2)->get();
        return view('pages.comparison', compact('product', 'products'));
    }

    public function comparison_post(Request $request)
    {
        $products = Product::find($request->id);
        return view('pages.comparison', compact('products'));
    }

    public function form()
    {
        $categories = Category::where('parent_id', null)->get();
        return view('pages.form', compact('categories'));
    }
}
