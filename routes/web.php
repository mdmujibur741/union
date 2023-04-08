<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\HoldingController;
use App\Http\Controllers\admin\HoldingTaxController;
use App\Http\Controllers\admin\HouseOrShopTypeController;
use App\Http\Controllers\admin\MemberController;
use App\Http\Controllers\admin\NoticeController;
use App\Http\Controllers\admin\NoticeTypeController;
use App\Http\Controllers\admin\ReceiptController;
use App\Http\Controllers\admin\SecretaryController;
use App\Http\Controllers\admin\ShopController;
use App\Http\Controllers\admin\ShopTaxController;
use App\Http\Controllers\admin\YearController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});



// =============================Important Note=============================//
// Some Reason Delete Method Not Working . That's Why I use Get Method//
// ==========================================================================//



Route::middleware('auth')->prefix('admin')->name('admin.')->group(function(){
          Route::resource('admin', AdminController::class)->except('show','destroy');
          Route::get('/admin/delete/{id}', [AdminController::class, 'destroy'])->name('admin.destroy');
          Route::resource('secretary', SecretaryController::class)->except('show','destroy');
          Route::get('secretary/delete/{id}', [SecretaryController::class, 'destroy'])->name('secretary.destroy');
          Route::resource('notice_types', NoticeTypeController::class)->except('show','destroy');
          Route::get('notice_types/delete/{id}', [NoticeTypeController::class, 'destroy'])->name('notice_types.destroy');
          Route::resource('notices', NoticeController::class)->except('show','destroy');
          Route::get('notices/delete/{id}', [NoticeController::class, 'destroy'])->name('notices.destroy');
          Route::resource('home_shop_types', HouseOrShopTypeController::class)->except('show','destroy');
          Route::get('home_shop_types/delete/{id}', [HouseOrShopTypeController::class, 'destroy'])->name('home_shop_types.destroy');
          Route::resource('holdings', HoldingController::class)->except('destroy');
          Route::get('holdings/delete/{id}', [HoldingController::class, 'destroy'])->name('holdings.destroy');
          Route::resource('shops', ShopController::class)->except('destroy');
          Route::get('shops/delete/{id}', [ShopController::class, 'destroy'])->name('shops.destroy');
          Route::resource('years',YearController::class)->except('destroy');
          Route::get('years/delete/{id}', [YearController::class, 'destroy'])->name('years.destroy');
         Route::resource('holding_tax',HoldingTaxController::class)->except('create','index','destroy');
         Route::get('holding_tax/index/{id}',[HoldingTaxController::class, 'index'])->name('holding_tax.index');
         Route::get('holding_tax/create/{id}',[HoldingTaxController::class, 'create'])->name('holding_tax.create');
         Route::get('holding_tax/delete/{id}', [HoldingTaxController::class, 'destroy'])->name('holding_tax.destroy');
         Route::resource('shop_tax',ShopTaxController::class)->except('create','index','destroy');
         Route::get('shop_tax/index/{id}',[ShopTaxController::class, 'index'])->name('shop_tax.index');
         Route::get('shop_tax/create/{id}',[ShopTaxController::class, 'create'])->name('shop_tax.create');
         Route::get('shop_tax/delete/{id}', [ShopTaxController::class, 'destroy'])->name('shop_tax.destroy');
         Route::resource('receipts', ReceiptController::class)->except('destroy');
         Route::get('receipts/destroy/{id}',[ReceiptController::class,'destroy'])->name('receipts.destroy');
         Route::resource('members',MemberController::class)->except('destroy');
}); 























Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';