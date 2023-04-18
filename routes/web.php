<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\BannerController;
use App\Http\Controllers\admin\ContentController;
use App\Http\Controllers\admin\HoldingController;
use App\Http\Controllers\admin\HoldingTaxController;
use App\Http\Controllers\admin\HouseOrShopTypeController;
use App\Http\Controllers\admin\LogoController;
use App\Http\Controllers\admin\MemberController;
use App\Http\Controllers\admin\MenuController;
use App\Http\Controllers\admin\NoticeController;
use App\Http\Controllers\admin\NoticeTypeController;
use App\Http\Controllers\admin\PhotoController;
use App\Http\Controllers\admin\ReceiptController;
use App\Http\Controllers\admin\SecretaryController;
use App\Http\Controllers\admin\ShopController;
use App\Http\Controllers\admin\ShopTaxController;
use App\Http\Controllers\admin\SliderController;
use App\Http\Controllers\admin\UpdateController;
use App\Http\Controllers\admin\UsefullLinkController;
use App\Http\Controllers\admin\VideoController;
use App\Http\Controllers\admin\YearController;
use App\Http\Controllers\frontend\BlogController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HoldingController as FrHoldingController;
use App\Http\Controllers\frontend\ShopController as FrShopController;

Route::get('/', function () {
    return view('frontend.home.index');
});

Route::get('/blog', [BlogController::class, 'blog'])->name('web.blog');
Route::get('/holding', [FrHoldingController::class, 'holding'])->name('web.holding');
Route::get('/shop',[FrShopController::class, 'shop'])->name('web.shop');

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
          Route::post('holding/import',[HoldingController::class, 'import'])->name('holdings.import');
          Route::get('holding/export',[HoldingController::class, 'export'])->name('holdings.export');
          Route::get('holdings/delete/{id}', [HoldingController::class, 'destroy'])->name('holdings.destroy');
          Route::resource('shops', ShopController::class)->except('destroy','show');
          Route::post('shops/import',[ShopController::class,'import'])->name('shops.import');
          Route::get('shops/export',[ShopController::class,'export'])->name('shops.export');
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
         Route::get('members/destroy/{id}', [MemberController::class,'destroy'])->name('members.destroy');
         Route::resource('updates', UpdateController::class)->except('destroy');
         Route::get('updates/destroy/{id}', [UpdateController::class,'destroy'])->name('updates.destroy');
         Route::resource('photos', PhotoController::class)->except('destroy');
         Route::get('photos/destroy/{id}', [PhotoController::class,'destroy'])->name('photos.destroy');
         Route::resource('videos', VideoController::class)->except('destroy');
         Route::get('videos/destroy/{id}', [VideoController::class,'destroy'])->name('videos.destroy');
         Route::resource('logos', LogoController::class)->except('destroy');
         Route::get('logos/destroy/{id}', [LogoController::class,'destroy'])->name('logos.destroy');
         Route::resource('banners', BannerController::class)->except('destroy');
         Route::get('banners/destroy/{id}', [BannerController::class,'destroy'])->name('banners.destroy');
         Route::resource('sliders', SliderController::class)->except('destroy');
         Route::get('sliders/destroy/{id}', [SliderController::class,'destroy'])->name('sliders.destroy');
         Route::resource('usefulls', UsefullLinkController::class)->except('destroy');
         Route::get('usefulls/destroy/{id}', [UsefullLinkController::class,'destroy'])->name('usefulls.destroy');
         Route::resource('menus', MenuController::class)->except('destroy');
         Route::get('menus/destroy/{id}', [MenuController::class,'destroy'])->name('menus.destroy');
         Route::resource('contents', ContentController::class)->except('destroy');
         Route::get('contents/destroy/{id}', [ContentController::class,'destroy'])->name('contents.destroy');


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
