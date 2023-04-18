<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContentRequest;
use App\Models\Content;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class ContentController extends Controller
{
    public function index()
    {
        $contents = Content::orderBy('id','asc')->paginate(10);
          return view('admin.content.index', compact('contents'));
    }
    public function create()
    {
         $menu = Menu::select('id', 'menu')->get(); 
        return view('admin.content.create',compact('menu'));
    }

    public function store(ContentRequest $request)
    {
         Content::create([
               'menu_id' => $request->menu_id,
               'title' => $request->title,
               'content' => $request->content
         ]);

         Session::flash('success','Content Added Successfully!');
         return Redirect::back();
    }

    public function edit($id)
    {
        $menu = Menu::select('id', 'menu')->get(); 
        $content = Content::findOrFail($id);
        return view('admin.content.edit', compact('content','menu'));
    }

    public function update(ContentRequest $request, $id)
    {
        $content = Content::findOrFail($id);
        $content->update([
            'menu_id' => $request->menu_id,
            'title' => $request->title,
            'content' => $request->content
        ]);
       
        Session::flash('success','Content Update Successfully!');
        return to_route('admin.contents.index');
    }

    public function destroy($id)
    {
        $content = Content::findOrFail($id);
        $content->delete();
        Session::flash('success','Content Delete Successfully!');
        return Redirect::back();
    }
}
