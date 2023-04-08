<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ReceiptRequest;
use App\Models\Receipt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class ReceiptController extends Controller
{
    
    public function index()
    {
        $receipts = Receipt::orderBy('id', 'desc')->paginate(20);
          return view('admin.receipt.index',compact('receipts'));
    }
    public function create()
    {
          return view('admin.receipt.create');
    }

    public function store(ReceiptRequest $request)
    {
        Receipt::create([
            "sender_name" => $request->sender_name,
            'receiver_name' => $request->receiver_name,
            'receiver_contact' => $request->receiver_contact,
             'purpose' => $request->purpose, 
             'amount' => $request->amount,
             'amount_in_word' => $request->amount_in_word,
             'date' => $request->date,
             'remark' => $request->remark,
        ]);
        Session::flash('success','Receipt added Successfully');
        return Redirect::back();

    }

    public function edit($id)
    {
         $receipt = Receipt::findOrFail($id);
        return view('admin.receipt.edit',compact('receipt'));
    }

    public function update(ReceiptRequest $request, $id)
    {
        $receipt = Receipt::findOrFail($id);
        $receipt->update([
            "sender_name" => $request->sender_name,
            'receiver_name' => $request->receiver_name,
            'receiver_contact' => $request->receiver_contact,
             'purpose' => $request->purpose, 
             'amount' => $request->amount,
             'amount_in_word' => $request->amount_in_word,
             'date' => $request->date,
             'remark' => $request->remark,
        ]);
        Session::flash('success','Receipt Update Successfully');
        return to_route('admin.receipts.index');
    }

    public function destroy($id)
    {
        $receipt = Receipt::findOrFail($id)->delete();
    Session::flash('success','Receipt Delete Successfully!');
    return Redirect::back();
    }
}
