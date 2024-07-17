@extends('layouts.master')
@section('content')
{{-- message --}}
{!! Toastr::message() !!}
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">List of Fees</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">Paypal</a></li>
                        <li class="breadcrumb-item active">List fees</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card card-table">
                    <div class="card-body">
                        <div class="page-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>User ID</th>
                                                <th>Amount</th>
                                                <th>Currency</th>
                                                <th>Status</th>
                                                <th>Transaction ID</th>
                                                <th>Payment Method</th>
                                                <th class="text-end">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($payments as $payment)
                                                <tr>
                                                    <td>{{ $payment->id }}</td>
                                                    <td>{{ $payment->userid }}</td>
                                                    <td>{{ $payment->amount }}</td>
                                                    <td>{{ $payment->currency }}</td>
                                                    <td>
                                                        <div class="edit-delete-btn">
                                                            @if ($payment->status === 'paid')
                                                            <a class="text-success">{{ $payment->status }}</a>
                                                            @elseif ($payment->status === 'unpaid')
                                                            <a class="text-warning">{{ $payment->status }}</a>
                                                            @elseif ($payment->status === 'payment_rejected')
                                                            <a class="text-danger" >{{ $payment->status }}</a>
                                                            @else 
                                                            @endif
                                                        </div>
                                                    </td>                                                    </td>
                                                    <td>{{ $payment->transaction_id }}</td>
                                                    <td>{{ $payment->payment_method }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
