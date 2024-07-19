@extends('layouts.master')

@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <h2>Payment Details</h2>
                            </br>
                            <div>
                                <p><strong>User ID:</strong> {{ $payment->userid }}</p>
                                <p><strong>Amount:</strong> {{ $payment->amount }}</p>
                                <p><strong>Currency:</strong> {{ $payment->currency }}</p>
                                <p><strong>Status:</strong> {{ $payment->status }}</p>
                                <p><strong>Transaction ID:</strong> {{ $payment->transaction_id }}</p>
                                <p><strong>Payment Method:</strong> {{ $payment->payment_method }}</p>
                            </div>
                            <br></br>
                                <a href="{{ route('payments.list-fees') }}" class="btn btn-secondary">Back</a>
                        </div>        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
