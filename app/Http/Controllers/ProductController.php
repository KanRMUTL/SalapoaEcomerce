<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function getProduct()
    {
        $products = Product::all();
        return response()->json($products);
    }
}
