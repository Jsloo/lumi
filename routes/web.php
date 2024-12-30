<?php

use App\Livewire\Admin\Category\Lists as CategoryLists;
use App\Livewire\Admin\Contact\Lists as ContactLists;
use App\Livewire\Admin\Post\Lists as PostLists;
use App\Livewire\Admin\Product\Lists as ProductLists;
use App\Livewire\Admin\Session\Login;
use App\Livewire\Admin\SubCategory\Lists as SubCategoryLists;
use App\Livewire\Site\About;
use App\Livewire\Site\Category\Lists as SiteCategoryLists;
use App\Livewire\Site\Contact;
use App\Livewire\Site\Home;
use App\Livewire\Site\Product\Details;
use App\Livewire\Site\Product\Lists as SiteProductLists;
use App\Livewire\Site\SubCategory\Lists as SiteSubCategoryLists;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use PSpell\Config;

Route::get('/', Home::class)->name('home');

Route::get('/categories', SiteCategoryLists::class)->name('category');
Route::get('/{category:slug}/sub-category', SiteSubCategoryLists::class)->name('category.subcategory');
Route::get('/{subcategory:slug}/products', SiteProductLists::class)->name('subcategory.products');
Route::get('/{product:slug}/details', Details::class)->name('products.details');
Route::get('/about-us', About::class)->name('about');
Route::get('/contact-us', Contact::class)->name('contact');


Route::prefix('admin')->name('admin.')->group(function (){
    Route::middleware('guest')->group(function () {
        Route::get('login', Login::class)->name('login');
    });
    
    Route::middleware('auth')->group(function () {
        // Route::prefix('products')->name('products.')->group(function () {
        //     Route::get('/', ProductLists::class)->name('lists');
        // });
        Route::prefix('products1')->name('products.')->group(function () {
            Route::get('/', ProductLists::class)->name('lists');
        });
        Route::prefix('category')->name('category.')->group(function () {
            Route::get('/', CategoryLists::class)->name('lists');
        });
        Route::prefix('sub-category1')->name('sub-category.')->group(function () {
            Route::get('/', SubCategoryLists::class)->name('lists');
        });
        Route::prefix('posts')->name('posts.')->group(function () {
            Route::get('/', PostLists::class)->name('lists');
        });
        Route::prefix('contact')->name('contact.')->group(function () {
            Route::get('/', ContactLists::class)->name('lists');
        });
        Route::get('logout', function (Request $request) {
            Auth::guard('web')->logout();
    
            $request->session()->invalidate();
    
            $request->session()->regenerateToken();
          
            return redirect('/admin/login');
        })->name('logout');
    });

});