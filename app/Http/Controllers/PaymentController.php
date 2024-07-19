<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;

class PaymentController extends Controller
{
    // Show the payment form
    public function showPaymentForm()
    {
        return view('payments.payment-form');
    }

    // Show the payment details
    public function show($id)
    {
        $payment = Payment::findOrFail($id);
        return view('payments.payment-show', compact('payment'));
    }

    // Show the form to edit fees
    public function editFees($id)
    {
        $payment = Payment::findOrFail($id);
        return view('payments.edit-fees', compact('payment'));
    }

    // List all fees
    public function feesList()
    {
        $payments = Payment::all();
        return view('payments.list-fees', compact('payments'));
    }

    // Process payment
    public function processPayment(Request $request)
    {
        $request->validate([
            'userid' => 'required',
            'amount' => 'required|numeric',
            'currency' => 'required',
            'status' => 'required',
            'transaction_id' => 'required',
            'payment_method' => 'required',
        ]);

        Payment::create([
            'userid' => $request->userid,
            'amount' => $request->amount,
            'currency' => $request->currency,
            'status' => $request->status,
            'transaction_id' => $request->transaction_id,
            'payment_method' => $request->payment_method,
        ]);

        return redirect()->route('payments.list-fees')->with('success', 'Payment successfully processed.');
    }

    // Update payment record
    public function update(Request $request, $id)
    {
        $request->validate([
            'userid' => 'required|string',
            'amount' => 'required|numeric',
            'currency' => 'required|string',
            'status' => 'required|string',
            'transaction_id' => 'required|string',
            'payment_method' => 'required|string',
        ]);

        $payment = Payment::findOrFail($id);
        $payment->update($request->all());

        return redirect()->route('payments.list-fees')->with('success', 'Payment updated successfully');
    }

    // Delete payment record
    public function destroy($id)
    {
        $payment = Payment::findOrFail($id);
        $payment->delete();

        return redirect()->route('payments.list-fees')->with('success', 'Payment deleted successfully');
    }

    // Check payment status
    public function paymentStatus()
    {
        // Implement logic to check payment status
    }
}
