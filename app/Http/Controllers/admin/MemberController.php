<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MemberStoreRequest;
use App\Http\Requests\MemberUpdateRequest;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class MemberController extends Controller
{
    public function index()
    {
        $members = Member::orderBy('id','asc')->paginate(10);
          return view('admin.member.index',compact('members'));
    }

    public function create()
    {
         return view('admin.member.create');
    }

    public function store(MemberStoreRequest $request)
    {
        if($request->hasFile('image')){
            $image = $request->file('image')->store('image');
      }else{
            $image = null;
      }
          Member::create([
            'name'=> $request->name, 
            'designation' => $request->designation,
             'department' => $request->department,
              'branch' => $request->branch, 
              'mobile' => $request->mobile,
               'email' => $request->email,
                'image' => $image, 
                'sequence' => $request->sequence, 
                'status' => $request->status
          ]); 

          Session::flash('success','Member added Successfully');
          return Redirect::back();
    }


    public function edit($id)
    {
         $member = Member::findOrFail($id);
        return view('admin.member.index',compact('member'));
    }


    public function update(MemberUpdateRequest $request, $id)
    {
        $member = Member::findOrFail($id);

        // image Filter
        if($request->hasFile('image')){
            if($member->image){
                 Storage::delete($member->image);
                 
            }
            $image = $request->file('image')->store('image');
      }else{
            $image = $member->image;
      }
        $member->update([
            'name'=> $request->name, 
            'designation' => $request->designation,
             'department' => $request->department,
              'branch' => $request->branch, 
              'mobile' => $request->mobile,
               'email' => $request->email,
                'image' => $image, 
                'sequence' => $request->sequence, 
                'status' => $request->status
        ]);
        Session::flash('success','Member Data Update');
        return to_route('admin.members.index');
    }
}
