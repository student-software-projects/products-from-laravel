@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 mt-4 mx-auto">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <tr>
                        <th>Nombre</th>
                        <td>{{ $company->name_company }}</td>
                    </tr>
                    <tr>
                        <th>Nit</th>
                        <td>{{ $company->nit }}</td>
                    </tr>
                    <tr>
                        <th>Dirección</th>
                        <td>{{ $company->address }}</td>
                    </tr>
                    <tr>
                        <th>Creación</th>
                        <td>{{ $company->created_at }}</td>
                    </tr>
                    <tr>
                        <th>Actualización</th>
                        <td>{{ $company->updated_at }}</td>
                    </tr>
                </table>
                <a class="btn btn-primary btn-block btn-sm" href="{{ route('company.index') }}">Volver</a>
            </div>
        </div>
    </div>
</div>
@endsection
