<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PhotoRequest;
use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller
{
    public function index()
    {
        $photos = Photo::orderBy('id','asc')->paginate(10);
          return view('admin.photo.index', compact('photos'));
    }
    public function create()
    {
          return view('admin.photo.create');
    }

    public function store(PhotoRequest $request)
    {
        if($request->hasFile('image')){
            $image = $request->file('image')->store('image');
      }else{
            $image = null;
      }
         Photo::create([
            'name' => $request->name,
            'image' => $image,
            'sequence' => $request->sequence,
            'status' => $request->status 
         ]);

         Session::flash('success','Photo Add Successfully!');
         return Redirect::back();
    }

    public function edit($id)
    {
        $displays = ['Not Display','Display'];
         $photo = Photo::findOrFail($id);
         return view('admin.photo.edit',compact('photo','displays'));
    }

    public function update(PhotoRequest $request, $id)
    {
        $photo = Photo::findOrFail($id);
        // image Filter
        if($request->hasFile('image')){
            if($photo->image){
                 Storage::delete($photo->image);
            }
            $image = $request->file('image')->store('image');
      }else{
            $image = $photo->image;
      }
        $photo->update([
            'name' => $request->name,
            'image' => $image,
            'sequence' => $request->sequence,
            'status' => $request->status 
        ]);
        Session::flash('success','Photo Update Successfully!');
        return to_route('admin.photos.index');
    }

    public function destroy($id)
    {
        $photo = Photo::findOrFail($id);
        if($photo->image){
            Storage::delete($photo->image);
            
       }
       $photo->delete();
       Session::flash('success','Photo Data Deleted');
       return Redirect::back();
    }
}
