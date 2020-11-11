@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 mt-4 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <div class="card-header">
                            <h3>Nuevo producto</h3>
                        </div>
                        <form action="{{ route('product.store') }}" method="POST">
                            @csrf
                            <div class="form-group mt-2">
                                <label for="company_id">Compañia</label>
                                <select name="company_id" id="company_id" class="form-control" required>
                                    <option value="0">Seleccione</option>
                                    @foreach($companies as $company)
                                        <option value="{{$company->id}}"> {{$company->name_company}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="product_type_id">Tipo producto</label>
                                <select name="product_type_id" id="product_type_id" class="form-control" required>
                                    <option value="0">Seleccione</option>
                                    @foreach($product_types as $product_type)
                                        <option value="{{$product_type->id}}"> {{$product_type->name_product_type}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="name_product">Nombre producto</label>
                                <input name="name_product" type="text" class="form-control" placeholder="Nombre producto" autofocus>
                            </div>
                            <div class="form-group">
                                <label for="description">Descripcion</label>
                                <textarea name="description" class="form-control" placeholder="Nombre tipo producto" ></textarea>
                            </div>
                            <div class="form-group">
                                <label for="price">Precio producto</label>
                                <input name="price" type="text" class="form-control" placeholder="Nombre tipo producto" >
                            </div>
                            <hr>
                            <button type="submit" class="btn btn-primary btn-block btn-sm">Guardar</button>
                            <a  class="btn btn-info btn-block btn-sm" href="{{ route('product.index') }}">Cancelar</a>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

