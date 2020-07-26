@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Make a payment') }}</div>

                <div class="card-body">
                    <form action="#" method="post" id="paymentForm">
                        @csrf

                        <div class="row">
                            <div class="col-auto">
                                <label for="value">How match you want to pay?</label>
                                <input id="value" type="number" min="5" step="0.01" name="value" value="{{ mt_rand(500, 100000) / 100 }}">
                                <small class="form-text text-muted">
                                    Use values with up to two decimal positions, using dot "."
                                </small>
                            </div>
                        </div>
                        <div class="text-center mt-3">
                            <button type="submit" id="payButton" class="btn btn-primary">Pay</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
