<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Holding;
use Illuminate\Http\Request;

class HoldingController extends Controller
{
    public function holding()
    {
        $holdings = Holding::orderBy('id','asc')->paginate(20);
      
       //  return $holdings;
        return view('frontend.holding.index',compact('holdings'));
    }
}
