<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LogoRequest;
use App\Models\Logo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class LogoController extends Controller
{
    public function index()
    {
        $logos = Logo::orderBy('id','asc')->paginate(10);
          return view('admin.logo.index', compact('logos'));
    }
    public function create()
    {
          return view('admin.logo.create');
    }

    public function store(LogoRequest $request)
    {
        if($request->hasFile('image')){
            $image = $request->file('image')->store('image');
      }else{
            $image = null;
      }
         Logo::create([
            'caption' => $request->caption,
             'image' => $image,
             'url' => $request->url,
             'meta_details' => $request->meta_details,
             'keywords' => $request->keywords, 
             'sequence' => $request->sequence,
             'status' => $request->status	
         ]);

         Session::flash('success','Logo Add Successfully!');
         return Redirect::back();
    }

    public function edit($id)
    {
        $displays = ['Not Display','Display'];
        $logo = Logo::findOrFail($id);
        return view('admin.logo.edit',compact('displays', 'logo'));
    }

    public function update(LogoRequest $request, $id)
    {
        $logo = Logo::findOrFail($id);

           // image Filter
           if($request->hasFile('image')){
            if($logo->image){
                 Storage::delete($logo->image);
            }
            $image = $request->file('image')->store('image');
      }else{
            $image = $logo->image;
      }

        $logo->update([
            'caption' => $request->caption,
            'image' => $image,
            'url' => $request->url,
            'meta_details' => $request->meta_details,
            'keywords' => $request->keywords, 
            'sequence' => $request->sequence,
            'status' => $request->status	
        ]);

        Session::flash('success','Logo Update Successfully!');
        return to_route('admin.logos.index');
    }

    public function destroy($id)
    {
        $logo = Logo::findOrFail($id);
        if($logo->image){
            Storage::delete($logo->image);
            
       }
       $logo->delete();
       Session::flash('success','Logo Data Deleted');
       return Redirect::back();
    }
}
