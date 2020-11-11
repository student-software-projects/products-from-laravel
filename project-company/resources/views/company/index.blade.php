@extends('layouts.app')
@section('content')
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">

            <a class="btn btn-primary mt-4 mb-3" href="{{ route('company.create') }}">Crear nueva empresa</a>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="thead-dark">
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Nit</th>
                        <th>Dirección</th>
                        <th>Fecha creación</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($companies  as $company)
                        <tr>
                            <td>{{ $company->id }}</td>
                            <td>{{ $company->name_company }}</td>
                            <td>{{ $company->nit }}</td>
                            <td>{{ $company->address }}</td>
                            <td>{{ $company->created_at }}</td>
                            <td>
                                <a href="{{ route('company.show',$company->id) }}" class="btn btn-sm btn-info">Detalles</a>
                                <a href="{{ route('company.edit',$company->id) }}" class="btn btn-sm btn-warning">Editar</a>
                                <a href="{{ route('company.delete',$company->id) }}" class="btn btn-sm btn-danger">Eliminar</a>
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
