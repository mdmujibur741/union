<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BannerRequest;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    public function index()
    {
        $banners = Banner::orderBy('id','asc')->paginate(10);
          return view('admin.banner.index', compact('banners'));
    }
    public function create()
    {
          return view('admin.banner.create');
    }

    public function store(BannerRequest $request)
    {
        if($request->hasFile('image')){
            $image = $request->file('image')->store('image');
      }else{
            $image = null;
      }
         Banner::create([
            'caption' => $request->caption,
             'image' => $image,
             'status' => $request->status	
         ]);

         Session::flash('success','Banner Add Successfully!');
         return Redirect::back();
    }

    public function edit($id)
    {
        $displays = ['Not Display','Display'];
        $banner = Banner::findOrFail($id);
        return view('admin.banner.edit',compact('displays', 'banner'));
    }

    public function update(BannerRequest $request, $id)
    {
        $banner = Banner::findOrFail($id);

           // image Filter
           if($request->hasFile('image')){
            if($banner->image){
                 Storage::delete($banner->image);
            }
            $image = $request->file('image')->store('image');
      }else{
            $image = $banner->image;
      }

        $banner->update([
            'caption' => $request->caption,
            'image' => $image,
            'status' => $request->status	
        ]);

        Session::flash('success','Banner Update Successfully!');
        return to_route('admin.banners.index');
    }

    public function destroy($id)
    {
        $banner = Banner::findOrFail($id);
        if($banner->image){
            Storage::delete($banner->image);
            
       }
       $banner->delete();
       Session::flash('success','Banner Data Deleted');
       return Redirect::back();
    }
}
