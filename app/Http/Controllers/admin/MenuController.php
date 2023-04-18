<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MenuRequest;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class MenuController extends Controller
{
    public function index()
    {
      $menus = Menu::orderBy('id','asc')->paginate(20);   
      return view('admin.menu.index',compact('menus'));
    }
    public function create()
    {
        $parents = Menu::select('id','menu')->get();
        $structure = ['যোগাযোগ', 'ইউপি সদস্যবৃন্দ' ,'নোটিশ' ,'ফটো গ্যালারী' ,'ভিডিও গ্যালারী' ,'হোল্ডিং তথ্য সমূহ' ,'পটভূমি' ,'চাম্বল বাজার' ,'অন্যান্য'];
          return view('admin.menu.create',compact('parents','structure'));
    }

    public function store(MenuRequest $request)
    {
       			
       Menu::create([
        'menu' => $request->menu,
        'parent_id' => $request->parent_id,
         'page_structure' => $request->page_structure,
          'sequence' => $request->sequence, 
       ]);
       Session::flash('success','Latest Update Add Successfully!');
       return Redirect::back();
    }

    public function edit($id)
    {
        $parents = Menu::select('id','menu')->get();
        $structure = ['যোগাযোগ', 'ইউপি সদস্যবৃন্দ' ,'নোটিশ' ,'ফটো গ্যালারী' ,'ভিডিও গ্যালারী' ,'হোল্ডিং তথ্য সমূহ' ,'পটভূমি' ,'চাম্বল বাজার' ,'অন্যান্য'];
        $menu = Menu::findOrFail($id);
        return view('admin.menu.edit',compact('structure','parents', 'menu'));
    }

    public function update(MenuRequest $request, $id)
    {
        $menu = Menu::findOrFail($id);


   

        $menu->update([
            'menu' => $request->menu,
        'parent_id' => $request->parent_id,
         'page_structure' => $request->page_structure,
          'sequence' => $request->sequence, 
           ]);

           Session::flash('success','Menu Update Data Successfully!');
           return Redirect::back();
    }


    public function destroy($id)
    {
        $menu = Menu::findOrFail($id);
      
       $menu->delete();
       Session::flash('success','Menu Data Deleted');
       return Redirect::back();
    }
}
