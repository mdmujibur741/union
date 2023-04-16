<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SliderRequest;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    public function index()
    {
        $sliders = Slider::orderBy('id','asc')->paginate(10);
          return view('admin.slider.index', compact('sliders'));
    }
    public function create()
    {
          return view('admin.slider.create');
    }

    public function store(SliderRequest $request)
    {
        if($request->hasFile('image')){
            $image = $request->file('image')->store('image');
      }else{
            $image = null;
      }
         Slider::create([
            'name' => $request->name,
             'image' => $image,
             'url' => $request->url,
             'meta_details' => $request->meta_details,
             'keywords' => $request->keywords, 
             'sequence' => $request->sequence,
             'status' => $request->status	
         ]);

         Session::flash('success','Slider Add Successfully!');
         return Redirect::back();
    }

    public function edit($id)
    {
        $displays = ['Not Display','Display'];
        $slider = Slider::findOrFail($id);
        return view('admin.slider.edit',compact('displays', 'slider'));
    }

    public function update(SliderRequest $request, $id)
    {
        $slider = slider::findOrFail($id);

           // image Filter
           if($request->hasFile('image')){
            if($slider->image){
                 Storage::delete($slider->image);
            }
            $image = $request->file('image')->store('image');
      }else{
            $image = $slider->image;
      }

        $slider->update([
            'name' => $request->name,
            'image' => $image,
            'url' => $request->url,
            'meta_details' => $request->meta_details,
            'keywords' => $request->keywords, 
            'sequence' => $request->sequence,
            'status' => $request->status	
        ]);

        Session::flash('success','Sliders Update Successfully!');
        return to_route('admin.sliders.index');
    }

    public function destroy($id)
    {
        $slider = Slider::findOrFail($id);
        if($slider->image){
            Storage::delete($slider->image);
            
       }
       $slider->delete();
       Session::flash('success','Slider Data Deleted');
       return Redirect::back();
    }
}
