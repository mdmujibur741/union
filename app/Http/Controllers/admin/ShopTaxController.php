<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\ShopTax;
use App\Models\Year;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class ShopTaxController extends Controller
{
    public function index($id)
    {
        $taxList = ShopTax::where('shop_id', $id)->orderBy('id', 'desc')->paginate(20);
       return view('admin.shop.shopTax.index',compact('taxList','id'));
    }
    
      public function create($id)
     {
           $years = Year::all(); 
         return view('admin.shop.shopTax.create',compact('id','years'));
     }
 
 
     public function store(Request $request)
     {
       // return $request;
          $request->validate([
               'year_id' => 'required',
               'tax' => 'required',
               'shop_id' => 'required'
          ]);
 
          ShopTax::create([
               'year_id' => $request->year_id,
               'tax' => $request->tax,
               'shop_id' => $request->shop_id,
               'user_id' => auth()->user()->id
          ]);
 
          Session::flash('success','Tax Add Successfully!');
          return Redirect::back();
     }
 
 
     public function edit($id)
     {
        $years = Year::all(); 
        $tax = ShopTax::findOrFail($id);
        return view('admin.shop.shopTax.edit',compact('tax','years'));
     }
 
 
     public function update(Request $request, $id)
     {
      // return "all done";
      $request->validate([
           'year_id' => 'required',
           'tax' => 'required',
      ]);
          $tax = ShopTax::findOrFail($id);
          $tax->update([
           'year_id' => $request->year_id,
               'tax' => $request->tax,
          ]);
          Session::flash('success','Holding Tax Data Update');
          return to_route('admin.holding_tax.index',$tax->shop_id);
     }
 
 
     public function destroy($id)
     {
          $shopTax = ShopTax::findOrFail($id)->delete();
          Session::flash('success','Shop Tax Data Deleted');
          return to_route('admin.holding_tax.index',$shopTax->shop_id);
     }
 
 
     public function show($id)
     {
      # code...
     }
}
