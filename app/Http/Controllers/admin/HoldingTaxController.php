<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Holding;
use App\Models\HoldingTax;
use App\Models\HouseShopType;
use App\Models\Year;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class HoldingTaxController extends Controller
{
   public function index($id)
   {
       $taxList = HoldingTax::where('holding_id', $id)->orderBy('id', 'desc')->paginate(20);
      return view('admin.holding.holdingTax.index',compact('taxList','id'));
   }
   
     public function create($id)
    {
          $years = Year::all(); 
        return view('admin.holding.holdingTax.create',compact('id','years'));
    }


    public function store(Request $request)
    {
         $request->validate([
              'year_id' => 'required',
              'tax' => 'required',
              'holding_id' => 'required'
         ]);

         HoldingTax::create([
              'year_id' => $request->year_id,
              'tax' => $request->tax,
              'holding_id' => $request->holding_id,
              'user_id' => auth()->user()->id
         ]);

         Session::flash('success','Tax Add Successfully!');
         return Redirect::back();
    }


    public function edit($id)
    {
       $years = Year::all(); 
       $tax = HoldingTax::findOrFail($id);
       return view('admin.holding.holdingTax.edit',compact('tax','years'));
    }


    public function update(Request $request, $id)
    {
     // return "all done";
     $request->validate([
          'year_id' => 'required',
          'tax' => 'required',
     ]);

         $tax = HoldingTax::findOrFail($id);

         $tax->update([
          'year_id' => $request->year_id,
              'tax' => $request->tax,
         ]);
         Session::flash('success','Holding Tax Data Update');
         return to_route('admin.holding_tax.index',$tax->holding_id);
    }


   


    public function show($id)
    {
     # code...
    }

    public function destroy($id)
    {
        $holdingtax = HoldingTax::findOrFail($id)->delete();
        Session::flash('success','Holding Tax Delete Successfully!');
        return Redirect::back();
    }
    
}
