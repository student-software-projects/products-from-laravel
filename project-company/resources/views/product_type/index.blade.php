@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a class="btn btn-primary mt-4 mb-3" href="{{ route('product_type.create') }}">Crear nuevo tipo de producto</a>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Fecha creación</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($product_type  as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->name_product_type }}</td>
                                <td>{{ $product->created_at }}</td>
                                <td>
                                    <a href="{{ route('product_type.show',$product->id) }}" class="btn btn-sm btn-info">Detalles</a>
                                    <a href="{{ route('product_type.edit',$product->id) }}" class="btn btn-sm btn-warning">Editar</a>
                                    <a href="{{ route('product_type.delete',$product->id) }}" class="btn btn-sm btn-danger">Eliminar</a>
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
