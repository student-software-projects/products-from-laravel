@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 mt-4 mx-auto">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <th>Nombre empresa</th>
                            <td>{{ $product->name_company }}</td>
                        </tr>
                        <tr>
                            <th>Nombre tipo de producto</th>
                            <td>{{ $product->name_product_type }}</td>
                        </tr>
                        <tr>
                            <th>Nombre producto</th>
                            <td>{{ $product->name_product }}</td>
                        </tr>
                        <tr>
                            <th>Descripción</th>
                            <td>{{ $product->description }}</td>
                        </tr>
                        <tr>
                            <th>Precio</th>
                            <td>{{ $product->price }}</td>
                        </tr>
                        <tr>
                            <th>Creación</th>
                            <td>{{ $product->created_at }}</td>
                        </tr>
                        <tr>
                            <th>Actualización</th>
                            <td>{{ $product->updated_at }}</td>
                        </tr>
                    </table>
                    <a class="btn btn-primary btn-block btn-sm" href="{{ route('product.index') }}">Volver</a>
                </div>
            </div>
        </div>
    </div>
@endsection

