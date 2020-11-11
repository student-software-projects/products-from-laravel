@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 mt-4 mx-auto">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <th>Nombre</th>
                            <td>{{ $product_type->name_product_type }}</td>
                        </tr>
                        <tr>
                            <th>Creación</th>
                            <td>{{ $product_type->created_at }}</td>
                        </tr>
                        <tr>
                            <th>Actualización</th>
                            <td>{{ $product_type->updated_at }}</td>
                        </tr>
                    </table>
                    <a class="btn btn-primary btn-block btn-sm" href="{{ route('product_type.index') }}">Volver</a>
                </div>
            </div>
        </div>
    </div>
@endsection

