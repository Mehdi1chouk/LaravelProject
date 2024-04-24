<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
         $Products = Product::all();
         return view ('index')->with('products', $Products);
      
    }

   public function create()
   {
       return view('create');
   }

   public function store(Request $request)
   {
       $requestData = $request->all();
       $fileName = time().$request->file('photo')->getClientOriginalName();
       $path = $request->file('photo')->storeAs('images', $fileName, 'public'); 
       $requestData["photo"] = '/storage/'.$path;
       Product::create($requestData);
       return redirect('/admin/products')->with('flash_message', 'product Addedd!'); 
   }

   
   public function show(Product $product) 
{
   return view('details', compact('product'));
}

    

    
    public function edit(string $id)
{
    $product = Product::findOrFail($id);  // Fetch the product to be edited
    return view('edit')->with('product', $product);  // Pass it to the edit view
}

public function update(Request $request, Product $product)
{
    // Validate the form data
    $request->validate([
        'name' => 'required|max:255',
        'category',
        'price',
        'description',
        'photo'
         // Add other validation rules as needed
        // ... other fields
    ]);

    if ($request->hasFile('photo')) {
        $fileName = time() . $request->file('photo')->getClientOriginalName();
        $path = $request->file('photo')->storeAs('images', $fileName, 'public');
        $product->photo = '/storage/' . $path; // Update photo path
    }

    // Update other product data
    $product->update([
        'name' => $request->name,
        'category' => $request->category,
        'price' => $request->price,
        'description' => $request->description,
    ]);

    return redirect('admin/products')->with('flash_message', 'Product Updated!');
}


public function destroy(string $id)
{
    $product = Product::findOrFail($id);
    $product->delete();

    return redirect('admin/products')->with('flash_message', 'Product Deleted!');
}

public function getProducts()
{
    $products = Product::all();
    return response()->json($products);
}


public function productsByCategory($category)
{
    $products = Product::where('category', $category)->get();
    return view('category')->with('products', $products);
}

public function payment(Product $product)
{
    return view('paiement', compact('product')); // Pass product data to the view (optional)
}
}
