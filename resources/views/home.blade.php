@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Te has logueado con exito! C-:
                </div>
            </div>

            <div class="">
                <a href="{{ route('create') }}" type="button" class="btn btn-dark">Insertar documento</a>

                <a href="{{ route ('search')}}" type="button" class="btn btn-info">Bucar Documento</a>

                <a href="{{ route('all') }}" type="button" class="btn btn-primary">Mostrar documentos pendientes</a>
            </div>
        </div>
    </div>
</div>
@endsection
