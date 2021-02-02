<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function categories($id=null)
    {
        $categories = Category::where('parent_id', $id)->get();
        return json_encode($categories);
    }

    public function products($id)
    {
        $products = Product::where('category_id', $id)->get();
        return json_encode($products);
    }
}
