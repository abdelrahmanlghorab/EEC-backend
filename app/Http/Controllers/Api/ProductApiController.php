<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductApiController extends Controller
{
    public function index(Request $request)
    {
        $page = $request->input('page', 1);
        $limit = $request->input('limit', 30);
        $sort = $request->input('sort', 'asc');
        $products = Product::orderBy('price', $sort)->paginate($limit, ['title as name', 'image', 'price']);
        return $products;
        // return Product::select('title as name', 'image', 'price')->orderBy('price', 'asc')->get();

    }
    public function search(Request $request)
    {
        $query = $request->input('query');
        return Product::where('title', 'LIKE', "%{$query}%")
                      ->select('title as name', 'image', 'price')
                      ->orderBy('title')
                      ->get();
    }

    //it not in task but i do it for practice
    public function store(Request $request)
    {
        return Product::create($request->all());
    }
    public function show($id)
    {
        return Product::find($id);
    }
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->update($request->all());
        return $product;
    }
    public function destroy($id)
    {
        return Product::destroy($id);
    }

}
