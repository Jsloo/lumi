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
                                    <li>
                                        <a href="#">pages <i class="fa fa-angle-down"></i>
                                        </a>
                                        <ul class="sub-menu text-left">
                                            <li>
                                                <a href="about.html">About</a>
                                            </li>
                                            <li>
                                                <a href="services.html">services</a>
                                            </li>
                                            <li>
                                                <a href="blocks-services.html">blocks services</a>
                                            </li>
                                            <li>
                                                <a href="contact.html">Contact</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">project <i class="fa fa-angle-down"></i>
                                        </a>
                                        <ul class="sub-menu text-left">
                                            <li>
                                                <a href="project-3-col.html">project 1</a>
                                            </li>
                                            <li>
                                                <a href="project-3-col-masonry.html">project 2</a>
                                            </li>
                                            <li>
                                                <a href="project-4-col.html">project 3</a>
                                            </li>
                                            <li>
                                                <a href="project-4-col-slider.html">project 4</a>
                                            </li>
                                        </ul>
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
                                        <a href="#">Product <i class="fa fa-angle-down"></i>
                                        </a>
                                        <ul class="sub-menu text-left">
                                            <li class="{{  Route::is('product') ? 'active' : null  }}">
                                                <a href="{{ route('product') }}">Category 1</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="cart.html">
                                            <i class="fa fa-cart-plus"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="mobile-menu"></div>

                        <div
                            class="search-area absolute text-white z-[999] border -mt-4 md:mt-0 sm:mt-0 rounded-[10px] border-solid border-[#c3c3c375] right-[30px] md:right-0 sm:right-0 top-[45%]">
                            <!-- search form -->
                            <div
                                class="header-search-bar after:content-['\f002'] after:absolute after:z-[1] after:text-[#222] after:right-[15px] after:top-[5px] after:font-Awesome leading-[30px]">
                                <form action="index.html" class=" relative z-[9]">
                                    <input type="search" placeholder="keywords ..."
                                        class=" cursor-pointer h-10 indent-[-9999px] transition-all duration-[0.2s] ease-[ease] delay-[0s] w-10 px-[15px] py-[5px] border-0 focus:border focus:indent-[0] focus:w-[200px]  focus:cursor-text focus:border-solid focus:border-[#ddd] focus:bg-white bg-transparent">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>