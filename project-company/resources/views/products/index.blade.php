@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a class="btn btn-primary mt-4 mb-3" href="{{ route('product.create') }}">Crear nuevo producto</a>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Descripcion</th>
                            <th>Precio</th>
                            <th>Compañia</th>
                            <th>Tipo de producto</th>
                            <th>Fecha creación</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td>{{$product->id}}</td>
                                <td>{{$product->name_product}}</td>
                                <td>{{$product->description}}</td>
                                <td>{{$product->price}}</td>
                                <td>{{$product->name_company}}</td>
                                <td>{{$product->name_product_type}}</td>
                                <td>{{$product->created_at}}</td>
                                <td>
                                    <div class="btn-group">
                                    <a href="{{ route('product.show',$product->id) }}" class="btn btn-sm btn-info">Detalles</a>
                                    <a href="{{ route('product.edit',$product->id) }}" class="btn btn-sm btn-warning">Editar</a>
                                    <a href="{{ route('product.delete',$product->id) }}" class="btn btn-sm btn-danger">Eliminar</a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

