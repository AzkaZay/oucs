@extends('layouts.master')

@section('content')
{{-- Toastr messages --}}
{!! Toastr::message() !!}

<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Edit Payment Record</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('payments.list-fees') }}">Payments</a></li>
                        <li class="breadcrumb-item active">Edit</li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h3 class="page-title">Edit Payment Form</h3>
                        <br></br>
                        @if (session('error'))
                            <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif

                        @if (session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif

                        <form action="{{ route('list-fees.update', $payment->id) }}" method="POST" id="payment-form">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label for="userid">User ID:<span class="login-danger">*</span></label>
                                        <input type="text" name="userid" id="userid" class="form-control" value="{{ old('userid', $payment->userid) }}" required>
                                        @error('userid')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label for="amount">Amount:<span class="login-danger">*</span></label>
                                        <input type="number" name="amount" id="amount" class="form-control" value="{{ old('amount', $payment->amount) }}" required>
                                        @error('amount')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label for="currency">Choose Currency:<span class="login-danger">*</span></label>
                                        <select class="form-control select @error('currency') is-invalid @enderror" name="currency" required>
                                            <option value="mur" {{ old('currency', $payment->currency) == 'mur' ? 'selected' : '' }}>MUR</option>
                                            <option value="usd" {{ old('currency', $payment->currency) == 'usd' ? 'selected' : '' }}>USD</option>
                                            <option value="eur" {{ old('currency', $payment->currency) == 'eur' ? 'selected' : '' }}>EUR</option>
                                        </select>
                                        @error('currency')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label for="status">Status:<span class="login-danger">*</span></label>
                                        <select class="form-control select @error('status') is-invalid @enderror" name="status" required>
                                            <option value="paid" {{ old('status', $payment->status) == 'paid' ? 'selected' : '' }}>Paid</option>
                                            <option value="unpaid" {{ old('status', $payment->status) == 'unpaid' ? 'selected' : '' }}>Unpaid</option>
                                            <option value="payment_rejected" {{ old('status', $payment->status) == 'payment_rejected' ? 'selected' : '' }}>Payment rejected</option>
                                        </select>
                                        @error('status')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label for="transaction_id">Transaction ID:<span class="login-danger">*</span></label>
                                        <input type="text" name="transaction_id" id="transaction_id" class="form-control" value="{{ old('transaction_id', $payment->transaction_id) }}" required>
                                        @error('transaction_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label for="payment_method">Select Payment Method:<span class="login-danger">*</span></label>
                                        <select class="form-control select @error('payment_method') is-invalid @enderror" name="payment_method" required>
                                            <option value="cash" {{ old('payment_method', $payment->payment_method) == 'cash' ? 'selected' : '' }}>Cash</option>
                                            <option value="juice" {{ old('payment_method', $payment->payment_method) == 'juice' ? 'selected' : '' }}>Juice</option>
                                            <option value="bank_deposit" {{ old('payment_method', $payment->payment_method) == 'bank_deposit' ? 'selected' : '' }}>Bank deposit</option>
                                        </select>
                                        @error('payment_method')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="student-submit">
                                        <button type="submit" href="{{ route('payments.list-fees') }}" class="btn btn-primary">Update Payment</button>
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

@endsection
