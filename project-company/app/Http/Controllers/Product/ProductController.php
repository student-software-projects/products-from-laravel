<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Product_type;
use App\Models\Company;
use function GuzzleHttp\Promise\all;

class ProductController extends Controller
{
    public function index()
    {

        $products = Product::select('products.id', 'products.name_product', 'products.description', 'products.price', 'products.created_at',
            'companies.name_company', 'product_types.name_product_type')
            ->join('companies',function ($query){
            $query->on('companies.id', '=', 'products.company_id');
        })->join('product_types',function ($query){
            $query->on('product_types.id', '=', 'products.product_type_id');
        })->get();
        return view('products.index', compact('products'));
    }
    public function create()
    {
        $companies = Company::all();
        $product_types = Product_type::all();
        return view('products.create', compact('companies','product_types'));
    }

    public function store(Request $request)
    {

        $products = Product::create($request->all());
        return redirect()->route('product.index');
    }

    public function show($id)
    {
        // SELECT * FROM entity WHERE ID = ? 111  FIND
        $product = Product::select('products.name_product', 'products.description', 'products.price', 'products.created_at', 'products.updated_at',
            'companies.name_company', 'product_types.name_product_type')
            ->join('companies',function ($query){
                $query->on('companies.id', '=', 'products.company_id');
            })->join('product_types',function ($query){
                $query->on('product_types.id', '=', 'products.product_type_id');
            })->find($id);
        //return $product;

        return view('products.show', compact('product'));
    }

    public function edit($id)
    {
        $product = Product::select('products.id','products.name_product', 'products.description', 'products.price', 'products.created_at', 'products.updated_at',
            'products.company_id','products.product_type_id','companies.name_company', 'product_types.name_product_type')
            ->join('companies',function ($query){
                $query->on('companies.id', '=', 'products.company_id');
            })->join('product_types',function ($query){
                $query->on('product_types.id', '=', 'products.product_type_id');
            })->find($id);
        $companies = Company::all();
        $product_types = Product_type::all();
        return view('products.edit',compact('product', 'companies','product_types'));
    }

    public function update(Request $request, $id)
    {

        $product = Product::find($id);
        $product->name_product = $request->name_product;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->company_id = $request->company_id;
        $product->product_type_id = $request->product_type_id;
        $product->save();
        return redirect()->route('product.index');
    }

    public function delete($id)
    {
        $product = Product::find($id);
        return view('products.delete', compact('product'));
    }

    public function destroy($id)
    {
        Product::find($id)->delete();
        return redirect()->route('product.index');
    }
}
