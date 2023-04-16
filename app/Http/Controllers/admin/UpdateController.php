<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateRequest;
use App\Models\Update;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
    public function index()
    {
      $updates = Update::orderBy('id','asc')->paginate(20);   
      return view('admin.update.index',compact('updates'));
    }
    public function create()
    {
          return view('admin.update.create');
    }

    public function store(UpdateRequest $request)
    {
        if($request->hasFile('image')){
            $image = $request->file('image')->store('image');
      }else{
            $image = null;
      }
       Update::create([
        'headline' => $request->headline,
        'details' => $request->details,
         'image' => $image, 
         'meta_details' => $request->meta_details,
          'sequence' => $request->sequence, 
          'status'=> $request->status
       ]);
       Session::flash('success','Latest Update Add Successfully!');
       return Redirect::back();
    }

    public function edit($id)
    {
        $displays = ['Not Display','Display'];
        $update = Update::findOrFail($id);
        return view('admin.update.edit',compact('update','displays'));
    }

    public function update(UpdateRequest $request, $id)
    {
        $update = Update::findOrFail($id);


        if($request->hasFile('image')){
            if($update->image){
                 Storage::delete($update->image);
                 
            }
            $image = $request->file('image')->store('image');
      }else{
            $image = $update->image;
      }

        $update->update([
            'headline' => $request->headline,
            'details' => $request->details,
             'image' => $image, 
             'meta_details' => $request->meta_details,
              'sequence' => $request->sequence, 
              'status'=> $request->status
           ]);

           Session::flash('success','Latest Update Data Successfully!');
           return Redirect::back();
    }


    public function destroy($id)
    {
        $update = Update::findOrFail($id);
        if($update->image){
            Storage::delete($update->image);
            
       }
       $update->delete();
       Session::flash('success','Update Data Deleted');
       return Redirect::back();
    }

}
