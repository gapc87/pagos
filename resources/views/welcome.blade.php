@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Welcome!') }}</div>

                    <div class="card-body">
                        {{ __('Esta plataforma se encarga de procesar pagos utilizando las mejores plataformas de pagos') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
