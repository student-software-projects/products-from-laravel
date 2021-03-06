@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 mt-4 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <div class="card-header">
                            <h3 class="text-center">Eliminar tipo producto</h3>
                        </div>
                        <form action="{{ route('product_type.destroy',$product_type->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <h6 class="text-center mt-2">Desea eliminar el tipo de producto {{$product_type->name_product_type}}.</h6>
                            <button type="submit" class="btn btn-success btn-lg mt-4 float-right">Si, eliminar.</button>
                            <a href="{{ route('product_type.index') }}" class="btn btn-danger btn-lg mt-4 float-left">No, regresar.</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
