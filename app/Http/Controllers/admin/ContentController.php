<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Content;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function index()
    {
        $contents = Content::orderBy('id','asc')->paginate(10);
          return view('admin.content.index', compact('content'));
    }
    public function create()
    {
          return view('admin.content.create');
    }
}
