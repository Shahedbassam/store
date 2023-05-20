<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }
    public function create()
    {
        $categories = Category::all();
     return view('admin.products.create', compact('categories'));
    }
    public function store(Request $request)
    {
        $product = new Product();

        $product->name = $request->name;
        $product->quantity = $request->quantity;
        $product->price = $request->price;
        $product->category_id = $request->category;
        $product->decscription = $request->decscription;
        $product->save();

        return redirect()->back();
    }
    public function edit($id)
    {
        $product= Product::find($id);
        $categories = Category::all();
        $category_name= Category::Where('id',$product->category_id)->first();

     return view('admin.products.edit', compact('product','categories','category_name'));
    }
    public function update(Request $request, $id)
    {
        $product = Product::find($id);

        $product->name = $request->name;
        $product->quantity = $request->quantity;
        $product->price = $request->price;
        $product->category_id = $request->category;
        $product->decscription = $request->decscription;
        $product->save();

        return redirect('products');
    }
    public function destroy($id)
    {
        Product::find($id)->delete();
        return redirect()->back();
    }
}
