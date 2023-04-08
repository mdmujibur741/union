<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Year;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class YearController extends Controller
{
    public function index()
    {
        $years = Year::orderBy('id', 'desc')->paginate(20);
          return view('admin.year.index',compact('years'));
    }
    public function create()
    {
          return view('admin.year.create');
    }

    public function store(Request $request)
    {
       $request->validate([
             'name' => 'required|unique:years',
       ]);

        Year::create([
            'name' => $request->name,
        ]);
        Session::flash('success','Year Add Successfully!');
        return Redirect::back();

    }

    public function edit($id)
    {
        $year = Year::findOrFail($id);
        return view('admin.year.edit',compact('year'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
      ]);
        $year = Year::findOrFail($id);
        $year->update([
            'name' => $request->name,
        ]);
        Session::flash('success','Year update Successfully!');
        return to_route('admin.years.index');
    }

    public function destroy($id)
    {
      
        $year = Year::findOrFail($id)->delete();
        Session::flash('success','Year Delete Successfully!');
        return Redirect::back();
    }
}
