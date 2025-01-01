@extends('layouts.app')

{{-- Customize layout sections --}}

@section('subtitle', 'Usuarios')
@section('content_header_title', 'Usuarios')
@section('content_header_subtitle', 'Editar')

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
        <div class="card card-warning">
            <div class="card-header">
                <h3 class="card-title">Editar Usuario</h3>
            </div>


            <form action="{{ route('usuarios.update', $usuario->id) }}" method="POST">
                @csrf
                @method('put')

                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nombre del Usuario:</label>
                        <input type="text" name="name" class="form-control form-control-sm" id="exampleInputEmail1"
                            value="{{ $usuario->name }}">
                    </div>
                    @error('name')
                        <p class="text-danger">*{{ $message }}</p>
                    @enderror

                    <div class="form-group">
                        <label for="exampleInputEmail1">Correo del Usuario:</label>
                        <input type="email" name="email" class="form-control form-control-sm" id="exampleInputEmail1"
                            value="{{ $usuario->email }}">
                    </div>
                    @error('email')
                        <p class="text-danger">*{{ $message }}</p>
                    @enderror

                    <div class="form-group">
                        <label for="exampleInputEmail1">Password del Usuario:</label>
                        <input type="password" name="password" class="form-control form-control-sm" id="exampleInputEmail1"
                            placeholder="Password...">
                    </div>
                    @error('name')
                        <p class="text-danger">*{{ $message }}</p>
                    @enderror

                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-warning">Actualizar</button>
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
