<div class="main-menu-area absolute top-[-50px] w-full z-[2]">
    <div class="container">
        <div class="main-menu-border  !bg-[#fbfbfb] ">
            <div class="flex flex-wrap mx-[-12px]">
                <div class="w-full flex-[0_0_auto] max-w-full px-[12px]">
                    <div class="main-menu-wraper relative">
                        <div class="main-menu flex items-center justify-center">
                            <nav id="mobile-menu" style="display: block;">
                                <ul>
                                    <li class="{{  Route::is('home') ? 'active' : null  }}">
                                        <a href="{{ route('home') }}">home</a>
                                    </li>
                                    <li class="{{  Route::is('about') ? 'active' : null  }}">
                                        <a href="{{ route('about') }}">About Us</a>
                                    </li>
                                    <li class="{{  Route::is('contact') ? 'active' : null  }}">
                                        <a href="{{ route('contact') }}">Contact Us</a>
                                    </li>
                                    <li>
                                        <a href="#">Blog <i class="fa fa-angle-down"></i>
                                        </a>
                                        <ul class="sub-menu text-left">
                                            <li>
                                                <a href="blog-2-col.html">blog 2 column</a>
                                            </li>
                                            <li>
                                                <a href="blog-3-col.html">blog 3 column</a>
                                            </li>
                                            <li>
                                                <a href="#">masonry blog</a>
                                                <ul class="sub-menu text-left">
                                                    <li>
                                                        <a href="masonry-blog-3-col.html">masonry blog 1</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">blog left sidebar</a>
                                                <ul class="sub-menu text-left">
                                                    <li>
                                                        <a href="blog-2-col-left.html">blog left sidebar 1</a>
                                                    </li>
                                                    <li>
                                                        <a href="masonry-blog-2-col-left.html">blog left sidebar
                                                            2</a>
                                                    </li>
                                                    <li>
                                                        <a href="blog-1-col-left.html">blog left sidebar 3</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">blog right sidebar</a>
                                                <ul class="sub-menu text-left">
                                                    <li>
                                                        <a href="blog-2-col-right.html">blog right sidebar 1</a>
                                                    </li>
                                                    <li>
                                                        <a href="masonry-blog-2-col-right.html">blog right
                                                            sidebar
                                                            2</a>
                                                    </li>
                                                    <li>
                                                        <a href="blog-1-col-right.html">blog right sidebar 3</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="blog-no-sidebar.html">blog no sidebar</a>
                                            </li>
                                            <li>
                                                <a href="blog-details.html">blog details</a>
                                            </li>
                                            <li>
                                                <a href="#">blog details sidebar</a>
                                                <ul class="sub-menu text-left">
                                                    <li>
                                                        <a href="blog-details-left-sidebar.html">details left
                                                            sidebar</a>
                                                    </li>
                                                    <li>
                                                        <a href="blog-details-right-sidebar.html">details right
                                                            sidebar</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="{{  Route::is('product') ? 'active' : null  }}">
                                        <a href="{{ route('category') }}">Product <i class="fa fa-angle-down"></i>
                                        </a>
                                        <ul class="sub-menu text-left">
                                            @forelse (\App\Models\Category::all() as $category)
                                                
                                                    <li class="{{  Route::is('product') ? 'active' : null  }}">
                                                        <a href="{{ route('category.subcategory',$category->slug) }}">{{ $category->name }}</a>
                                                        <ul class="sub-menu text-left">
                                                            @forelse ($category->subCategories as $subCategory)
                                                                <li>
                                                                    <a href="{{ route('subcategory.products',$subCategory->slug) }}">{{ $subCategory->name }}</a>
                                                                </li>
                                                            @empty      
                                                            @endforelse                                                      
                                                        </ul>
                                                    </li>
                                                
                                            @empty
                                                
                                            @endforelse
                                        </ul>
                                    </li>
                                    {{-- <li>
                                        <a href="cart.html">
                                            <i class="fa fa-cart-plus"></i>
                                        </a>
                                    </li> --}}
                                </ul>
                            </nav>
                        </div>
                        <div class="mobile-menu"></div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>