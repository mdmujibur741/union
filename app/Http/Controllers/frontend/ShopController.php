<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Shop;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function shop()
    {
        $shops = Shop::orderBy('id','asc')->paginate(20);
        return view('frontend.shop.index',compact('shops'));
    }
}
