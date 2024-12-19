@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Detalles del Usuario</h2>
    <div class="card">
        <div class="card-header">
            Información del Usuario
        </div>
        <div class="card-body">
            <p><strong>Nombre:</strong> {{ $user->name }}</p>
            <p><strong>Email:</strong> {{ $user->email }}</p>
            <p><strong>Rol:</strong> {{ $user->role }}</p>
        </div>
        <div class="card-footer">
            <a href="{{ url('/') }}" class="btn btn-primary">Volver al Dashboard</a>
        </div>
    </div>
</div>
@endsection