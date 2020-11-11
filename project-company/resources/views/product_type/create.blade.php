@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 mt-4 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <div class="card-header">
                            <h3>Nuevo tipo producto</h3>
                        </div>
                        <form action="{{ route('product_type.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="name_product_type">Nombre tipo producto</label>
                                <input name="name_product_type" id="name_product_type" type="text" class="form-control" placeholder="Nombre tipo producto" autofocus>
                            </div>
                            <hr>
                            <button type="submit" class="btn btn-primary btn-block btn-sm">Guardar</button>
                            <a  class="btn btn-info btn-block btn-sm" href="{{ route('product_type.index') }}">Cancelar</a>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

