<?php 

use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Diglactic\Breadcrumbs\Breadcrumbs;

use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Home
Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push('Home', route('home'));
});

Breadcrumbs::for('about', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('About Us', route('about'));
});

Breadcrumbs::for('contact', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Contact Us', route('contact'));
});

Breadcrumbs::for('category', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Category', route('category'));
});

Breadcrumbs::for('category.subcategory', function (BreadcrumbTrail $trail,Category $category) {
    $trail->parent('category');
    $trail->push($category->name, route('category.subcategory', $category));
});

Breadcrumbs::for('subcategory.products', function (BreadcrumbTrail $trail,SubCategory $subCategory) {
    $trail->parent('category.subcategory', $subCategory->category);
    $trail->push($subCategory->name, route('subcategory.products', $subCategory));
});

Breadcrumbs::for('products.details', function (BreadcrumbTrail $trail,Product $product) {
    $trail->parent('subcategory.products',$product->subCategory);
    $trail->push($product->name, route('products.details', $product));
});