<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\VideoRequest;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::orderBy('id','asc')->paginate(10);
          return view('admin.video.index', compact('videos'));
    }
    public function create()
    {
          return view('admin.video.create');
    }

    public function store(VideoRequest $request)
    {
        if($request->hasFile('image')){
            $image = $request->file('image')->store('image');
      }else{
            $image = null;
      }
        Video::create([
            'title' => $request->title,
            'image' => $image,
             'youtube' => $request->youtube	
        ]);

        Session::flash('success','Video Add Successfully!');
        return Redirect::back();
    }

    public function edit($id)
    {
         $video = Video::findOrFail($id);
         return view('admin.video.edit',compact('video'));
    }


    public function update(VideoRequest $request, $id)
    {
       
        $video = Video::findOrFail($id);

         //    image
         if($request->hasFile('image')){
            if($video->image){
                 Storage::delete($video->image);
            }
            $image = $request->file('image')->store('image');
      }else{
            $image = $video->image;
      }

      $video->update([
        'title' => $request->title,
        'image' => $image,
         'youtube' => $request->youtube	
    ]);
    Session::flash('success','Video Update Successfully!');
    return to_route('admin.videos.index');
    }

    public function destroy($id)
    {
        $video = Video::findOrFail($id);
        if($video->image){
            Storage::delete($video->image);
            
       }
       $video->delete();
       Session::flash('success','Video Data Deleted');
       return Redirect::back();
    }
}
