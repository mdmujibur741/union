<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UseFullLinkRequest;
use App\Models\UsefullLink;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class UsefullLinkController extends Controller
{
    
    public function index()
    {
        $useFullLinks = UsefullLink::orderBy('id','asc')->paginate(10);
          return view('admin.usefullLink.index', compact('useFullLinks'));
    }
    public function create()
    {
          return view('admin.usefullLink.create');
    }

    public function store(UseFullLinkRequest $request)
    {
        if($request->hasFile('image')){
            $image = $request->file('image')->store('image');
      }else{
            $image = null;
      }
            UsefullLink::create([
                'title' => $request->title,
                'type' => $request->type,
                'image' => $image,
                'link' => $request->link
            ]);
            Session::flash('success','Link Add Successfully!');
            return Redirect::back();
    }


    public function edit($id)
    {
        $types = ['URL', 'User Login'];
        $link = UsefullLink::findOrFail($id);
        return view('admin.usefullLink.edit',compact('link', 'types'));
    }


    public function update(UseFullLinkRequest $request, $id)
    {
        $link = UsefullLink::findOrFail($id);

      


        //    image
        if($request->hasFile('image')){
            if($link->image){
                 Storage::delete($link->image);
            }
            $image = $request->file('image')->store('image');
      }else{
            $image = $link->image;
      }


         $link->update([
            'title' => $request->title,
            'type' => $request->type,
            'image' => $image,
            'link' => $request->link,
         ]);
         Session::flash('success','Useful Link Data Update');
         return to_route('admin.usefulls.index');
    }


    public function destroy($id)
    {
        $link = UsefullLink::findOrFail($id);
        if($link->image){
            Storage::delete($link->image);
            
       }
       $link->delete();
       Session::flash('success','Link Data Deleted');
       return Redirect::back();
    }

}
