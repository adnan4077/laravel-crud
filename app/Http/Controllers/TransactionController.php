<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TransactionSubmitRequest;
use App\Transaction;

class TransactionController extends Controller
{
    /**
     * Display a listing of the Transactions.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $transactions=Transaction::all();
        return view('transaction.index')->with('transactions',$transactions);
    }

    /**
     * Show the form for editing the specified Transaction.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $transaction=Transaction::find($id);
        return view('transaction.edit')->with('transaction',$transaction);
    }

    /**
     * Update the specified Transaction in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TransactionSubmitRequest $request, $id)
    {
        
        $transaction=Transaction::find($id);
        $transaction->start_date =  date("Y-m-d",strtotime(str_replace('/', '-', $request->start_date)));
        $transaction->end_date =    date("Y-m-d",strtotime(str_replace('/', '-', $request->end_date )));
        $transaction->first_name =  $request->first_name;
        $transaction->last_name =   $request->last_name;
        $transaction->email =       $request->email;
        $transaction->telnumber =   $request->telnumber;
        $transaction->address1 =    $request->address1;
        $transaction->address2 =    $request->address2;
        $transaction->city =        $request->city;
        $transaction->country =     $request->country;
        $transaction->postcode =    $request->postcode;
        $transaction->product_name =$request->product_name;
        $transaction->cost =        $request->cost;
        $transaction->currency =    $request->currency;
        $transaction->transaction_date =date("Y-m-d",strtotime(str_replace('/', '-', $request->transaction_date )));
        $transaction->save();
        return redirect('/transactions');
    }

    /**
     * Remove the specified Transaction from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $transaction=Transaction::find($id);
        $transaction->delete();
        return redirect('/transactions');  
    }
}
