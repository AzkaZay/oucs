<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentsController extends Controller
{
    /** index page fees(testing) */
    public function indexPayments()
    {
        return view('payments.add-fees');
    }
    
    /** edit record */
    public function editFees()
    {
        return view('payments.edit-fees');
    }

    /** department list */
    public function feesList()
    {
        return view('payments.list-fees');
    }
}
