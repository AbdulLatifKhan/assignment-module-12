<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //show product
    public function product()
    {
        $products = DB::table('products')->get();
        return view('pages.product', compact('products'));
    }

    //update price start
    public function priceUpdate(Request $request)
    {
        $products = DB::table('products')
            ->where('id', '=', $request->id)
            ->get();
        return view('pages.updatePrice', compact('products'));
    }
    public function updatePriceStore(Request $request)
    {
        $id = $request->input('id');
        $newPrice = $request->input('price');
        DB::table('products')
            ->where('id', '=', $id)
            ->update(['unit_price' => $newPrice]);

        return redirect()->route('admin.product')->with('success', 'Update successful!');
    }
    //update price end

    //create product
    public function create()
    {
        return view('pages.addProduct');
    }
    public function store(Request $request)
    {
        $title = $request->input('title');
        $quantity = $request->input('quantity');
        $unitPrice = $request->input('unitPrice');

        DB::table('products')->insert([
            'title' => $title,
            'quantity' => $quantity,
            'unit_price' => $unitPrice,

        ]);
        return redirect()->back()->with('success', 'Update successful!');
    }
}
