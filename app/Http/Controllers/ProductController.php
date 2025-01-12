<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return Product::select('title', 'image', 'price')->orderBy('title')->get();
    }
    public function search(Request $request)
    {
        $query = $request->input('query');
        return Product::where('title', 'LIKE', "%{$query}%")
                      ->select('title', 'image', 'price')
                      ->orderBy('title')
                      ->get();
    }
}
