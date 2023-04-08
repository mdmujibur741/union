<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\HouseShopType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class HouseOrShopTypeController extends Controller
{
    public function index()
    {
         $houseShops = HouseShopType::orderBy('id', 'desc')->paginate(20);
         return view('admin.homeShopType.index',compact('houseShops'));
    }

    public function create()
    {
         return view('admin.homeShopType.create');
    }

    public function store(Request $request)
    {
         $request->validate([
                'type' => 'required',
                'title' => 'required'
         ]);
         HouseShopType::create([
             'type' => $request->type,
             'title' => $request->title
         ]);
         Session::flash('success','House Or Shop Data added Successfully');
         return Redirect::back();
    }

    public function edit($id)
    {
       $allType = ['holding', 'shop'];
        $type = HouseShopType::findOrFail($id);
        return view('admin.homeShopType.edit',compact('type','allType'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'type' => 'required',
            'title' => 'required'
     ]);

       $houseShop = HouseShopType::findOrFail($id);

       $houseShop->update([
        'type' => $request->type,
        'title' => $request->title
    ]);
       Session::flash('success','House Or Shop Data Update Successfully');
    return to_route('admin.home_shop_types.index');
    }

    public function destroy($id)
    {
        
        $houseShop = HouseShopType::findOrFail($id)->delete();
        Session::flash('success','House Shop Delete Successfully!');
        return Redirect::back(); 
    }
}
