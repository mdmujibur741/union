<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\NoticeType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Session;

class NoticeTypeController extends Controller
{
    public function index()
    {
        $noticeTypes = NoticeType::orderBy('id', 'desc')->paginate(20);
          return view('admin.noticeType.index',compact('noticeTypes'));
    }
    public function create()
    {
          return view('admin.noticeType.create');
    }

    public function store(Request $request)
    {
       $request->validate([
             'name' => 'required|unique:notice_types',
       ]);

        NoticeType::create([
            'name' => $request->name,
        ]);
        Session::flash('success','Notice Type Successfully!');
        return Redirect::back();

    }

    public function edit($id)
    {
        $noticeType = NoticeType::findOrFail($id);
        return view('admin.noticeType.edit',compact('noticeType'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
      ]);
        $noticeType = NoticeType::findOrFail($id);
        $noticeType->update([
            'name' => $request->name,
        ]);
        Session::flash('success','Notice update Successfully!');
        return to_route('admin.notice_types.index');
    }

    public function destroy($id)
    {
        
        $noticeType = NoticeType::findOrFail($id)->delete();
        Session::flash('success','Notice Delete Successfully!');
        return Redirect::back();
    }
}
