<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductAttribute;
use Illuminate\Http\Request;

class ProductAttributeController extends Controller
{

    public function store(Request $request, Product $product)
    {

        $request->validate([
            'key' => 'required',
            'value' => 'required'
        ]);

        $attribute = new ProductAttribute([
            'key' => $request->get('key'),
            'value' => $request->get('value'),
            'product_id' => $product->getAttribute('id')
        ]);

        $attribute->save();
        return redirect('/products');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\ProductAttribute $productAttribute
     * @return \Illuminate\Http\Response
     */
    public function show(ProductAttribute $productAttribute)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\ProductAttribute $productAttribute
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductAttribute $productAttribute)
    {
        //
    }


    public function update(Request $request, ProductAttribute $productAttribute)
    {
        $request->validate([
            'key' => 'required',
            'value' => 'required'
        ]);

        $productAttribute->update([
            'key' => $request->get('key'),
            'value' => $request->get('value')
        ]);
        return redirect('/products');
    }

    public function destroy(ProductAttribute $productAttribute)
    {

        $productAttribute->delete();
        return redirect('/products');

    }
}
