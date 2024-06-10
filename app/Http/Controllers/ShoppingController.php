<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customers;
use App\Models\Product;
use App\Models\Shoppings;
class ShoppingController extends Controller
{
    public function index()
    {
        $shoppings=Shoppings::all();

        return view('shopping.index',compact('shoppings'));
    }
   public function create(){
    $products=Product::all();
    $customers=Customers::all();
    return view('shopping.create',compact('products','customers'));
   } 

   public function store(Request $request){
    $request->validate([
        'product_id'=>'required|exists:products,id',
        'customer_id'=>'required|exists:customers,id',
        'quantity'=>'required|numeric',
    ]);

    Shoppings::create($request->all());

    return redirect()->route('shopping.create')->with('success','Shopping created successfully');
   }


   public function edit($id)
   {
       $shopping = Shoppings::findOrFail($id);
       $customers=Customers::all();
       $products=Product::all();
       return view('shopping.edit', compact('shopping', 'customers', 'products')); 
   }

   public function update(Request $request, $id)
    {
        $request->validate([
            'product_id'=>'required|exists:products,id',
        'customer_id'=>'required|exists:customers,id',
        'quantity'=>'required|numeric',
            
        ]);

        $shopping = Shoppings::findOrFail($id); // Retrieve the suppliers by its ID or fail
        $shopping->update($request->all()); // Update the suppliers with the new data

        return redirect()->route('shopping.index')->with('success', 'Shopping Card updated successfully.');
    }
    public function destroy($id)
    {
        
        $shopping = Shoppings::findOrFail($id); // Find the product by ID or fail
        $shopping->delete(); // Delete the product

        return redirect()->route('shopping.index')->with('success', 'Shopping Card deleted successfully.');
    }

}
