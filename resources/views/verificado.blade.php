@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verificación de Email') }}</div>

                <div class="card-body">
                    @if (Auth::user()->hasVerifiedEmail())
                        <p>{{ __('Estás verificado.') }}</p>
                        <a href="{{ url('/') }}" class="btn btn-primary">Volver a la página principal</a>
                    @else
                        <p>{{ __('No estás verificado.') }}</p>
                        <form method="POST" action="{{ route('verification.resend') }}">
                            @csrf
                            <button type="submit" class="btn btn-primary">{{ __('Enviar correo de verificación') }}</button>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection