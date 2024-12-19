@extends('layouts.app')

@section('content')
<div class="container-fluid px-4 mt-4">
    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">
                    @if(Auth::check())
                        Hola {{ Auth::user()->name }}! Bienvenido a tu dashboard.
                    @else
                        Hola Invitado! Bienvenido a tu dashboard.
                    @endif
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="{{ route('user.details') }}">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
    </div>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Actions
        </div>
        <div class="card-body">
            @guest
                <a href="{{ url('login') }}" class="btn btn-primary">Login</a>
                <br>
            @endguest
            <a href="{{ route('logout') }}"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-danger">
               Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
            <br>
            <a href="{{ route('password.request') }}" class="btn btn-warning">Password forgot</a>
            <br>
            <a href="{{ route('verificado') }}" class="btn btn-success">Verificado</a>
            <br>
        </div>
    </div>
</div>
@endsection