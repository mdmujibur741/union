<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\HoldingStoreRequest;
use App\Http\Requests\HoldingUpdateRequest;
use App\Models\Holding;
use App\Models\HouseShopType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\HoldingsImport;
use App\Exports\HoldingsExport;


class HoldingController extends Controller
{
    public function index()
    {
        $holdings = Holding::orderBy('id','asc')->paginate(20);
        return view('admin.holding.index', compact('holdings'));
    }

    public function create()
    {
        $types = HouseShopType::all();
        return view('admin.holding.create',compact('types'));
    }

    public function store(HoldingStoreRequest $request)
    {
       
           Holding::create([
             'name' => $request->name,
              'spouse_name' => $request->spouse_name, 
              'gender' => $request->gender,
              	'village' => $request->village,
               'profession' => $request->profession,
               'id_no' => $request->id_no,
               'holding_no' => $request->holding_no,
              	'word_no' => $request->word_no,
               'house_type' => $request->house_type,
              'yearly_tax' => $request->yearly_tax,
               'opinion'=> $request->opinion,
               'type_id'=> $request->type_id,
               'user_id' => auth()->user()->id
           ]);

           Session::flash('success','Admin Add Successfully!');
           return Redirect::back();
    }

    public function edit($id)
    {
        $holding = Holding::findOrFail($id);
        $genders = ['পুরুষ','মহিলা', 'অন্যান্য'];
        $house_type = ['পাকা', 'সেমিপাকা','কাচা','দালান'];
        $types = HouseShopType::all();
        return view('admin.holding.edit',compact('holding','types','house_type','genders'));
    }

    public function update(HoldingUpdateRequest $request, $id)
    {
        $holding = Holding::findOrFail($id);

        $holding->update([
            'name' => $request->name,
             'spouse_name' => $request->spouse_name, 
             'gender' => $request->gender,
                 'village' => $request->village,
              'profession' => $request->profession,
              'id_no' => $request->id_no,
              'holding_no' => $request->holding_no,
                 'word_no' => $request->word_no,
              'house_type' => $request->house_type,
             'yearly_tax' => $request->yearly_tax,
              'opinion'=> $request->opinion,
              'type_id'=> $request->type_id,
              'user_id' => auth()->user()->id
          ]);
          
    Session::flash('success','Holding Data Update');
    return to_route('admin.holdings.index');
    }


    public function destroy($id)
    {
        $holding = Holding::findOrFail($id)->delete();
        Session::flash('success','Holding Delete Successfully!');
        return Redirect::back();
    }


     // Excel File Import
     public function import (Request $request)
     {
       Excel::import(new HoldingsImport, $request->file('file'));
       Session::flash('success','Holding Import Successfully!');
       return Redirect::back();
     }
 
     // Excel File Export
     public function export()
     {
       return Excel::download(new HoldingsExport, 'Holding.csv');
     }

}
