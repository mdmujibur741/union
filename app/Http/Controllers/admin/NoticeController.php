<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\NoticeStoreRequest;
use App\Http\Requests\NoticeUpdateRequest;
use App\Models\Notice;
use App\Models\NoticeType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class NoticeController extends Controller
{
    public function index()
    {
      $notices = Notice::orderBy('id','asc')->paginate(20);
          return view('admin.notice.index', compact('notices'));
    }
    public function create()
    {
         $notice_type = NoticeType::all();
          return view('admin.notice.create', compact('notice_type'));
    }

    public function store(NoticeStoreRequest $request)
    {
      if($request->hasFile('image')){
            $image = $request->file('image')->store('image');
      }else{
            $image = null;
      }
        Notice::create([
            'type_id' => $request->type_id ,
             'headline' => $request->headline, 
             'details' => $request->details,
            'sequence' => $request->sequence,
            'status' => $request->status,          
          'image' => $image,
        ]);

        Session::flash('success','Admin Add Successfully!');
        return Redirect::back();
    }

       public function edit($id)
       {
            $notice_type = NoticeType::all();
             $notice = Notice::findOrFail($id);
             return view('admin.notice.edit',compact('notice','notice_type'));
       }

    public function update(NoticeUpdateRequest $request, $id)
    {
              $notice = Notice::findOrFail($id);
              if($request->hasFile('image')){
                  if($notice->image){
                       Storage::delete($notice->image);
                       
                  }
                  $image = $request->file('image')->store('image');
            }else{
                  $image = $notice->image;
            }
              $notice->update([
                  'type_id' => $request->type_id ,
                  'headline' => $request->headline, 
                  'details' => $request->details,
                 'sequence' => $request->sequence,     
               'image' => $image,
              ]);

              Session::flash('success','Notice Update Successfully!');
              return to_route('admin.notices.index');
    }

    public function destroy($id)
    {
        
        $notice = Notice::findOrFail($id);
        if($notice->image){
            Storage::delete($notice->image);
            
       }
       $notice->delete();
       Session::flash('success','Secretary Data Deleted');
       return Redirect::back();
    }
}
