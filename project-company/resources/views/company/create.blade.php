@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 mt-4 mx-auto">
            <div class="card">
                <div class="card-body">
                    <div class="card-header">
                        <h3>Nueva empresa</h3>
                    </div>
                    <form action="{{ route('company.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name_company">Nombre de la empresa</label>
                            <input name="name_company" id="name_company" type="text" class="form-control" placeholder="Nombre empresa" autofocus>
                        </div>

                        <div class="form-group">
                            <label for="nit">Nit de la empresa</label>
                            <input name="nit" id="nit" type="text" class="form-control" placeholder="Nit Empresa">
                        </div>
                        <div class="form-group">
                            <label for="address">Dirección de la empresa</label>
                            <input name="address" id="address" type="text" class="form-control" placeholder="Direccion">
                        </div>
                        <hr>
                        <button type="submit" class="btn btn-primary btn-block btn-sm">Guardar</button>
                        <a  class="btn btn-info btn-block btn-sm" href="{{ route('company.index') }}">Cancelar</a>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
