@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 mt-4 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <div class="card-header">
                            <h3 class="text-center">Eliminar empresa</h3>
                        </div>
                        <form action="{{ route('company.destroy',$company->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <h6 class="text-center mt-2">Desea eliminar la empresa {{$company->name_company}}</h6>
                            <button type="submit" class="btn btn-success btn-lg mt-4 float-right">Si, eliminar.</button>
                            <a href="{{ route('company.index') }}" class="btn btn-danger btn-lg mt-4 float-left">No, regresar.</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
