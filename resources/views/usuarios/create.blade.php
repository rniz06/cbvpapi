@extends('layouts.app')

{{-- Customize layout sections --}}

@section('subtitle', 'Usuarios')
@section('content_header_title', 'Usuarios')
@section('content_header_subtitle', 'Crear')

{{-- Content body: main page content --}}

@section('content_body')
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>¡Vaya!</strong> Hubo algunos problemas con su entrada.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="col-12">
        <div class="card card-success">
            <div class="card-header">
                <h3 class="card-title">Crear nuevo Usuario</h3>
            </div>


            <form action="{{ route('usuarios.store') }}" method="POST">
                @csrf

                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nombre del Usuario:</label>
                        <input type="text" name="name" class="form-control form-control-sm" id="exampleInputEmail1"
                            placeholder="Ej: Juan Pérez...">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Correo del Usuario:</label>
                        <input type="email" name="email" class="form-control form-control-sm" id="exampleInputEmail1"
                            placeholder="micorreo@nemby.gov.py">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Password del Usuario:</label>
                        <input type="password" name="password" class="form-control form-control-sm" id="exampleInputEmail1"
                            placeholder="Password...">
                    </div>

                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-sm btn-success"><i class="fas fa-save"></i> Agregar</button>
                </div>
            </form>
        </div>
    </div>
@stop

{{-- Push extra CSS --}}

@push('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@endpush

{{-- Push extra scripts --}}

@push('js')
@endpush
