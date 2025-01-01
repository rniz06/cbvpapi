@extends('layouts.app')

{{-- Customize layout sections --}}

@section('subtitle', 'Usuarios')
@section('content_header_title', 'Usuarios')
@section('content_header_subtitle', 'Index')

{{-- Content body: main page content --}}

@section('content_body')
    @if ($message = Session::get('success'))
        <div class="callout callout-success">
            <h5><i class="fas fa-check-circle mr-2" style="color: #28a745"></i>{{ $message }}</h5>
        </div>
    @endif

    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title ">
                    <strong>Listado de Usuarios</strong>
                        <a href="{{ Route('usuarios.create') }}" class="btn btn-sm btn-success"><i class="fas fa-user-plus"></i>
                            Usuario</a>
                </h3>
            </div>

            <div class="col-12 p-4">

                <table class="table table-hover table-bordered table-sm">
                    <thead>
                        <tr>
                            <th>ID:</th>
                            <th>Nombre Completo:</th>
                            <th>Email:</th>
                            <th>Creado El::</th>
                            <th>Acciones:</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($usuarios as $usuario)
                            <tr>
                                <td>{{ $usuario->id ?? 'N/A' }}</td>
                                <td>{{ $usuario->name ?? 'N/A' }}</td>
                                <td>{{ $usuario->email ?? 'N/A' }}</td>
                                <td>{{ date('d/m/Y h:m:s', strtotime($usuario->created_at))  ?? 'N/A'  }}</td>
                                <td>
                                    <x-dropdown>
                                        <x-slot name="show">{{ Route('usuarios.show', $usuario->id) }}</x-slot>
                                        <x-slot name="edit">{{ Route('usuarios.edit', $usuario->id) }}</x-slot>
                                        <x-slot name="action">{{ Route('usuarios.destroy', $usuario->id) }}</x-slot>
                                    </x-dropdown>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="9" class="text-center">
                                    Sin registros...
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

                <div class="card-footer pagination-sm">
                    {{ $usuarios->links('pagination::bootstrap-4') }}
                </div>
            </div>

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
