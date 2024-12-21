<?php

use App\Livewire\Admin\Category\Lists as CategoryLists;
use App\Livewire\Admin\Post\Lists as PostLists;
use App\Livewire\Admin\Product\Lists as ProductLists;
use App\Livewire\Admin\Session\Login;
use App\Livewire\Admin\SubCategory\Lists as SubCategoryLists;
use App\Livewire\Site\Home;
use App\Livewire\Site\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', Home::class)->name('home');
Route::get('/produt', Product::class)->name('product');

Route::prefix('admin')->name('admin.')->group(function (){
    Route::middleware('guest')->group(function () {
        Route::get('login', Login::class)->name('login');
    });
    
    Route::middleware('auth')->group(function () {
        Route::prefix('products')->name('products.')->group(function () {
            Route::get('/', ProductLists::class)->name('lists');
        });
        Route::prefix('category')->name('category.')->group(function () {
            Route::get('/', CategoryLists::class)->name('lists');
        });
        Route::prefix('sub-category')->name('sub-category.')->group(function () {
            Route::get('/', SubCategoryLists::class)->name('lists');
        });
        Route::prefix('posts')->name('posts.')->group(function () {
            Route::get('/', PostLists::class)->name('lists');
        });

        Route::get('logout', function (Request $request) {
            Auth::guard('web')->logout();
    
            $request->session()->invalidate();
    
            $request->session()->regenerateToken();
          
            return redirect('/admin/login');
        })->name('logout');
    });

});