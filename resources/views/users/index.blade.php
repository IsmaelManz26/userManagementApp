@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Email</th>
                <th>Rol</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->role }}</td>
                    <td>
                        <a href="{{ route('users.edit', $user) }}" class="btn btn-sm btn-primary">
                            Editar
                        </a>
                    @if($user->role === 'superadmin' || $user->id === 1)
                    <button type="button" class="btn btn-sm btn-danger" disabled 
                            title="No se puede eliminar al superadmin">
                        Eliminar
                    </button>
                @else
                    <button type="button" class="btn btn-sm btn-danger" 
                        data-bs-toggle="modal" 
                        data-bs-target="#deleteModal{{ $user->id }}">
                    Eliminar
                    </button>
                    @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection