<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProductController extends Controller
{
    private ProductAttributeController $attributeController;

    public function __construct(ProductAttributeController $attributeController)
    {
        $this->attributeController = $attributeController;
    }

    public function index()
    {
        $products = Product::all();
        return view('list', ['products' => $products]);
    }


    public function create()
    {
        return view('add');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);

        $product = new Product([
            'name' => $request->get('name'),
            'description' => $request->get('description')
        ]);
        $product->save();

        if ($request->get('key') !== null) {
            $this->attributeController->store($request, $product);
        }
        return $this->index();

    }

    public function edit(Product $product)
    {

        if(!isset($product->productAttribute)) {
            return view('edit', ['product' => $product]);
        }
         return view('edit_att', ['product' => $product]);

    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);

        $product->update([
            'name' => $request->get('name'),
            'description' => $request->get('description')
        ]);

        return $this->index();
    }


    public function destroy(Product $product)
    {
        $product->delete();
        $product->productAttribute()->delete();
        return $this->index();
    }
}
