<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Controllers\AdminOrderController;
use Illuminate\Http\Request;

class AdminProductController extends Controller
{

    public function index()
    {
      $products=Product::get();
    return view('products.index', ['products' => $products]);
    }

    public function show($id)
    {
        $product = Product::find($id);
        return view('products.show', ['product' => $product]);
    }

    public function destroy($id)
    {

        Product::where('product_id', $id)->delete();
        return redirect()->route('products.index');
    }


    public function edit($id)
    {
         $product = Product::find($id);
        return view('products.edit', ['product' => $product]);
    }


   public function update(Request $request, $id)
{

    $request->validate([
        'product_name' => 'required',
        'product_price' => 'required|numeric',
        'product_availability' => 'required',
        'admin_id' => 'required|numeric',
        'category_id' => 'required|numeric',
        'product_picture' => 'image|mimes:jpeg,png,jpg|max:2048',
    ]);


    $product = Product::findOrFail($id);


    $product->product_name = $request->input('product_name');
    $product->product_price = $request->input('product_price');
    $product->product_availability = $request->input('product_availability');
    $product->admin_id = $request->input('admin_id');
    $product->category_id = $request->input('category_id');


    if ($request->hasFile('product_picture')) {


        $imagePath = $request->file('product_picture')->store('public');
        $product->product_picture = basename($imagePath);
    }


    $product->save();


    return redirect()->route('products.index')->with('success', 'Product updated successfully.');
}




    public function create()
    {
        return view('products.create');
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
        'product_name' => 'required|string|max:255',
        'product_price' => 'required|numeric|min:0',
        'product_availability' => 'required|string',

    ]
, [
        'product_name.required' => 'The product name is required.',
        'product_price.required' => 'The product price is required.'
]);

if ($request->hasFile('product_picture')) {
        $imagePath = $request->file('product_picture')->store('product_images', 'public');
        $validatedData['product_picture'] = $imagePath;
    }

    Product::create($validatedData);
    return redirect()->route('products.index');
    }
public function search(Request $request)
{
    $query = $request->input('query');

    $products = Product::where('product_name', 'like', '%' . $query . '%')->get();

    return view('profile.search', compact('products', 'query'));
}



}




