<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function create(){
        return view('products.create');
    }

    public function store(Request $request){
        Product::create([
            'name' => $request->name,
            'price_cost' => $request->price_cost,
            'price_sale' => $request->price_sale,
            'qtde' => $request->qtde,
        ]);

        return "Produto criado com Sucesso!";
    }
}
