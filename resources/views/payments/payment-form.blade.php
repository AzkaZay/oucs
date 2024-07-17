@extends('layouts.master')

@section('content')
{{-- Toastr messages --}}
{!! Toastr::message() !!}

<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Payments Record</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('payments.list-fees') }}">Payments</a></li>
                        <li class="breadcrumb-item active">Paypal</li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h3 class="page-title">Payment Form</h3>
                        <br></br>
                        @if (session('error'))
                            <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif

                        @if (session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif

                        <form action="{{ route('payments.process') }}" method="POST" id="payment-form">
                            @csrf
                            <div class="row">
                            <div class="col-12 col-sm-4">
                                <div class="form-group local-forms">
                                    <label for="amount">User ID:<span class="login-danger">*</span></label>
                                    <input type="text" name="userid" id="userid" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group local-forms">
                                    <label for="amount">Amount:<span class="login-danger">*</span></label>
                                    <input type="number" name="amount" id="amount" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group local-forms">
                                    <label for="currency">Choose Currency:<span class="login-danger">*</span></label>
                                    <select class="form-control select @error('currency') is-invalid @enderror" name="status" required>
                                                <option selected disabled>currency...</option>
                                                <option value="mur" {{ old('currency') == 'mur' ? 'selected' : '' }}>MUR</option>
                                                <option value="usd" {{ old('currency') == 'usd' ? 'selected' : '' }}>USD</option>
                                                <option value="eur" {{ old('currency') == 'eur' ? 'selected' : '' }}>EUR</option>

                                            </select>
                                            @error('semester')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror                                 </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group local-forms">
                                    <label for="status">Status:<span class="login-danger">*</span></label>
                                    <select class="form-control select @error('status') is-invalid @enderror" name="status" required>
                                                <option selected disabled>Status</option>
                                                <option value="paid" {{ old('status') == 'paid' ? 'selected' : '' }}>Paid</option>
                                                <option value="unpaid" {{ old('status') == 'unpaid' ? 'selected' : '' }}>Unpaid</option>
                                                <option value="payment_rejected" {{ old('status') == 'payment_rejected' ? 'selected' : '' }}>Payment rejected</option>

                                            </select>
                                            @error('semester')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror                                </div>
                                </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group local-forms">
                                    <label for="amount">Transaction ID:<span class="login-danger">*</span></label>
                                    <input type="number" name="amount" id="transaction_id" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group local-forms">
                                    <label for="payment_method">Select Payment method:<span class="login-danger">*</span></label>
                                    <select class="form-control select @error('payment_method') is-invalid @enderror" name="payment_method" required>
                                                <option selected disabled></option>
                                                <option value="cash" {{ old('payment_method') == 'cash' ? 'selected' : '' }}>Cash</option>
                                                <option value="juice" {{ old('payment_method') == 'juice' ? 'selected' : '' }}>Juice</option>
                                                <option value="bank_deposit" {{ old('payment_method') == 'bank_deposit' ? 'selected' : '' }}>Bank deposit</option>

                                            </select>
                                            @error('semester')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror                                   </div>
                                </div>
                                <div class="col-12">
                                    <div class="student-submit">
                                        <button type="submit" class="btn btn-primary">Pay with PayPal</button>
                                    </div>
                                </div>
                            </div>    
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
