<?php

namespace App\Http\Controllers\Product_type;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product_type;
class Product_typeController extends Controller
{
    public function index()
    {
        $product_type = Product_type::all();
        return view('product_type.index',compact('product_type'));
    }
    public function create()
    {
        return view('product_type.create');
    }

    public function store(Request $request)
    {
        $product_type = Product_type::create($request->all());
        return redirect()->route('product_type.index');
    }

    public function show($id)
    {
        // SELECT * FROM entity WHERE ID = ? 111  FIND
        $product_type = Product_type::find($id);
        return view('product_type.show',compact('product_type'));
    }

    public function edit($id)
    {
        $product_type = Product_type::find($id);
        return view('product_type.edit',compact('product_type'));
    }

    public function update(Request $request, $id)
    {
        $company = Product_type::findOrfail($id);
        $company->name_product_type = $request->name_product_type;
        $company->save();
        return redirect()->route('product_type.index');


    }

    public function delete($id)
    {
        $product_type = Product_type::find($id);
        return view('product_type.delete',compact('product_type'));
    }

    public function destroy($id)
    {
        Product_type::find($id)->delete();
        return redirect()->route('product_type.index');
    }
}
