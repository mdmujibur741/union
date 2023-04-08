<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminStoreRequest;
use App\Http\Requests\AdminUpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class SecretaryController extends Controller
{
    public function index()
    {
      $secretaries = User::orderBy('id','asc')->where('status', 1)->paginate(20);   
      return view('admin.secretary.index',compact('secretaries'));
    }
    public function create()
    {
          return view('admin.secretary.create');
    }

    public function store(AdminStoreRequest $request)
    {
        if($request->hasFile('image')){
            $image = $request->file('image')->store('image');
      }else{
            $image = null;
      }
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'contact' => $request->contact,
                'address' => $request->address,
                'designation' => $request->designation,
                'image' => $image,
                'status' => 1,
            ]);
            Session::flash('success','Admin Add Successfully!');
            return Redirect::back();
    }


    public function edit($id)
    {
        $secretary = User::findOrFail($id);
        return view('admin.secretary.edit',compact('secretary'));
    }


    public function update(AdminUpdateRequest $request, $id)
    {
        $admin = User::findOrFail($id);

        // password filter
        if($request->password ==null){
            $password = $admin->password;
           }else{
             $password = bcrypt($request->password);
           }


        //    image

        if($request->hasFile('image')){
            if($admin->image){
                 Storage::delete($admin->image);
                 
            }
            $image = $request->file('image')->store('image');
      }else{
            $image = $admin->image;
      }


         $admin->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $password,
            'contact' => $request->contact,
            'address' => $request->address,
            'designation' => $request->designation,
            'image' => $image
         ]);
         Session::flash('success','Admin Data Update');
         return to_route('admin.admin.index');
    }


    public function destroy($id)
    {
        $admin = User::findOrFail($id);
        if($admin->image){
            Storage::delete($admin->image);
            
       }
       $admin->delete();
       Session::flash('success','Secretary Data Deleted');
       return Redirect::back();
    }

}
