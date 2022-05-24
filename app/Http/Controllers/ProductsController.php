<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{

    public function index()
    {
        $products = Product::get();

        return view('products.index', compact('products'));

    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        Product::create([
            'name' => $request->name,
            'price_cost' => $request->price_cost,
            'price_sale' => $request->price_sale,
            'qtde' => $request->qtde,
        ]);

        return "Produto criado com Sucesso!";

    }

    public function show($id)
    {

        $product = Product::findOrFail($id);
        return view('products.show', ['product' => $product]);

    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit', ['product' => $product]);

    }

    public function update(Request $request, $id)
    {

        $product = Product::findOrFail($id);

        $product->update([
            'name' => $request->name,
            'price_cost' => $request->price_cost,
            'price_sale' => $request->price_sale,
            'qtde' => $request->qtde,
        ]);

        return "Editado com Sucesso!";
    }

    public function delete($id)
    {
        $product = Product::findOrFail($id);
        return view('products.delete', ['product' => $product]);
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return "Produto excluido com Sucesso!";
    }

}
