<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ShopStoreRequest;
use App\Http\Requests\ShopUpdateRequest;
use App\Models\Shop;
use Illuminate\Http\Request;
use App\Models\HouseShopType;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class ShopController extends Controller
{
    public function index()
    {
      $shops = Shop::orderBy('id','asc')->paginate(20);   
      return view('admin.shop.index',compact('shops'));
    }
    public function create()
    {
          $types = HouseShopType::all();
          return view('admin.shop.create',compact('types'));
    }

    public function store(ShopStoreRequest $request)
    {
        
          Shop::create([
            'organization' => $request->organization,
            'name' =>$request->name,
            'father' =>$request->father,
            'address' =>$request->address,
            'mobile' =>$request->mobile,
            'budget' =>$request->budget,
            'annually_tax' =>$request->annually_tax,
            'opinion' =>$request->opinion,
            'type_id' =>$request->type_id,
            'user_id' =>auth()->user()->id,
        ]);
        Session::flash('success','Shop Add Successfully!');
        return Redirect::back();

    }

    public function edit($id)
    {
      $types = HouseShopType::all();
         $shop = Shop::findOrFail($id);
         return view('admin.shop.edit',compact('types', 'shop'));
    }

    public function update(ShopUpdateRequest $request, $id)
    {
        $shop = Shop::findOrFail($id);

        $shop->update([
          'organization' => $request->organization,
          'name' =>$request->name,
          'father' =>$request->father,
          'address' =>$request->address,
          'mobile' =>$request->mobile,
          'budget' =>$request->budget,
          'annually_tax' =>$request->annually_tax,
          'opinion' =>$request->opinion,
          'type_id' =>$request->type_id,
        ]);

        Session::flash('success','Shop Update Successfully!');
        return Redirect::route('admin.shops.index');
    }

    public function destroy($id)
    {
        $Shop = Shop::findOrFail($id)->delete();
        Session::flash('success','Shop Delete Successfully!');
        return Redirect::back();
    }
}
