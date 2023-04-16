<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\UsefullLink;
use Illuminate\Http\Request;

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
}
