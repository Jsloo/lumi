<div>
    <div class="hero-area relative mt-[50px]">
        <!-- main menu area start -->
        @include('site.layouts.menu')
        <!-- main menu area end -->
        <!-- breadcroumb area start -->
        <div class="tractour-breadcroumb breadcroumb-bg text-center bg-[center_center] bg-cover relative h-[300px] bg-[url({{ asset('assets/site/img/breadcroumb/breadcroumb.jpg') }})] pt-[130px] pb-5 px-0 before:content-[''] before:absolute before:w-full before:h-full before:opacity-80 before:left-0 before:top-0 before:!bg-black">
            <div class="container relative">
                <div class="flex flex-wrap mx-[-12px]">
                    <div class="w-full flex-[0_0_auto] px-[12px] max-w-full">
                        <h2 class=" text-white text-[40px] font-semibold leading-[45px] capitalize mb-20 font-Montserrat sm:mb-[50px]">4 column shop</h2>
                        <h4 class=" text-white text-[17px] float-left font-OpenSans">
                            <a href="index.html" class=" text-[#ffab00] capitalize hover:text-[#ffab00]">home </a>/ 4 column shop
                        </h4>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcroumb area end -->
    </div>
    <!-- hero area end -->
    <!-- shop area start -->
    <div class="shop-area p-[100px_0]">
        <div class="container">
            <div class="flex flex-wrap mx-[-12px]">
                <div class="w-full flex-[0_0_auto] px-[12px] max-w-full">
                    <div class="sho-result float-left">
                        <p class=" mt-2.5">showing 1-8 of 12 results</p>
                    </div>

                    <div class="short-by float-right">
                        <select style="display: none;">
                            <option value="01">sort by popularity</option>
                            <option value="01">short by price: </option>
                            <option value="01">short by name: </option>
                            <option value="01">short by date: </option>
                        </select>
                        <div class="nice-select" tabindex="0"><span class="current">sort by popularity</span>
                            <ul class="list">
                                <li data-value="01" class="option focus">short by: </li>
                                <li data-value="01" class="option selected">short by price: </li>
                                <li data-value="01" class="option">short by name: </li>
                                <li data-value="01" class="option">short by date: </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
            <div class="h-3 sm:h-0"></div>
            <div class="flex flex-wrap mx-[-12px]">
                <div class="w-3/12 sm:w-full flex-[0_0_auto] max-w-full px-[12px]">
                    <div class="single-product-wrap text-center group">
                        <div class="product-img relative before:content-[''] before:absolute before:transition-[0.3s] before:duration-500 before:scale-0 before:inset-0 group-hover:before:scale-100 before:bg-[rgba(0,0,0,.80)]">
                            <a href="">
							<img src="{{ asset('assets/site/img/shop/product-1.jpg') }}" alt="product" class="img-fluid w-full" /></a>

                            <ul class="product-action group-hover:opacity-100 group-hover:visible absolute -translate-x-2/4 -translate-y-2/4 transition-all duration-[0.3s] invisible opacity-0 left-2/4 top-2/4">
                                <li class="inline-block mx-0 my-2.5 group/second"><a href="#" class=" text-[#ffab00] block border -rotate-45 text-[18px] h-[34px] leading-[30px] w-[34px] text-center rounded transition-all duration-[0.3s] mx-3 my-0 border-solid border-white bg-transparent group-hover/second:text-white group-hover/second:bg-[#ffab00]"><i class="fa fa-cart-plus rotate-45 -ml-1"></i></a></li>
                                <li class="inline-block mx-0 my-2.5 group/second"><a href="#" class=" text-[#ffab00] block border -rotate-45 text-[18px] h-[34px] leading-[30px] w-[34px] text-center rounded transition-all duration-[0.3s] mx-3 my-0 border-solid border-white bg-transparent group-hover/second:text-white group-hover/second:bg-[#ffab00]"><i class="fa fa-heart rotate-45 -ml-1"></i></a></li>
                            </ul>
                            <div class="sale-tag absolute p-[15px] right-0 top-0">
                                <span class="new text-white uppercase font-semibold w-10 h-10 leading-10 text-center text-[11px] relative z-[1] block mb-[7px] rounded-[100%] bg-[#ffab00]">new</span>
                            </div>
                        </div>
                        <div class="product-content p-[20px_0]">
                            <h4><a href="#" class="product-title text-[16px] leading-[26px] font-medium capitalize">yellow smart watch</a></h4>
                            <div class="product-price text-[16px] leading-[25px] font-normal mx-0 my-2.5 font-OpenSans">
                                <del class=" text-[#7e7e7e] mr-2">$88</del> $70.89
                            </div>
                            <div class="product-rating">
                                <i class="fa fa-star text-[#ffab00]"></i>
                                <i class="fa fa-star text-[#ffab00]"></i>
                                <i class="fa fa-star text-[#ffab00]"></i>
                                <i class="fa fa-star text-[#ffab00]"></i>
                                <i class="fa fa-star-half-o text-[#ffab00]"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-3/12 sm:w-full flex-[0_0_auto] max-w-full px-[12px]">
                    <div class="single-product-wrap text-center group">
                        <div class="product-img relative before:content-[''] before:absolute before:transition-[0.3s] before:duration-500 before:scale-0 before:inset-0 group-hover:before:scale-100 before:bg-[rgba(0,0,0,.80)]">
                            <a href="">
							<img src="{{ asset('assets/site/img/shop/product-2.jpg') }}" alt="product" class="img-fluid w-full" /></a>

                            <ul class="product-action group-hover:opacity-100 group-hover:visible absolute -translate-x-2/4 -translate-y-2/4 transition-all duration-[0.3s] invisible opacity-0 left-2/4 top-2/4">
                                <li class="inline-block mx-0 my-2.5 group/second"><a href="#" class=" text-[#ffab00] block border -rotate-45 text-[18px] h-[34px] leading-[30px] w-[34px] text-center rounded transition-all duration-[0.3s] mx-3 my-0 border-solid border-white bg-transparent group-hover/second:text-white group-hover/second:bg-[#ffab00]"><i class="fa fa-cart-plus rotate-45 -ml-1"></i></a></li>
                                <li class="inline-block mx-0 my-2.5 group/second"><a href="#" class=" text-[#ffab00] block border -rotate-45 text-[18px] h-[34px] leading-[30px] w-[34px] text-center rounded transition-all duration-[0.3s] mx-3 my-0 border-solid border-white bg-transparent group-hover/second:text-white group-hover/second:bg-[#ffab00]"><i class="fa fa-heart rotate-45 -ml-1"></i></a></li>
                            </ul>
                            <div class="sale-tag absolute p-[15px] right-0 top-0">
                                <span class="new text-white uppercase font-semibold w-10 h-10 leading-10 text-center text-[11px] relative z-[1] block mb-[7px] rounded-[100%] bg-[#ffab00]">sale</span>
                            </div>
                        </div>
                        <div class="product-content p-[20px_0]">
                            <h4><a href="#" class="product-title text-[16px] leading-[26px] font-medium capitalize">green protecting musk</a></h4>
                            <div class="product-price text-[16px] leading-[25px] font-normal mx-0 my-2.5 font-OpenSans">
                                $44.89
                            </div>
                            <div class="product-rating">
                                <i class="fa fa-star text-[#ffab00]"></i>
                                <i class="fa fa-star text-[#ffab00]"></i>
                                <i class="fa fa-star text-[#ffab00]"></i>
                                <i class="fa fa-star text-[#ffab00]"></i>
                                <i class="fa fa-star-half-o text-[#ffab00]"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-3/12 sm:w-full flex-[0_0_auto] max-w-full px-[12px]">
                    <div class="single-product-wrap text-center group">
                        <div class="product-img relative before:content-[''] before:absolute before:transition-[0.3s] before:duration-500 before:scale-0 before:inset-0 group-hover:before:scale-100 before:bg-[rgba(0,0,0,.80)]">
                            <a href=""><img src="{{ asset('assets/site/img/shop/product-3jpg') }}" alt="product" class="img-fluid w-full" /></a>
                            <ul class="product-action group-hover:opacity-100 group-hover:visible absolute -translate-x-2/4 -translate-y-2/4 transition-all duration-[0.3s] invisible opacity-0 left-2/4 top-2/4">
                                <li class="inline-block mx-0 my-2.5 group/second"><a href="#" class=" text-[#ffab00] block border -rotate-45 text-[18px] h-[34px] leading-[30px] w-[34px] text-center rounded transition-all duration-[0.3s] mx-3 my-0 border-solid border-white bg-transparent group-hover/second:text-white group-hover/second:bg-[#ffab00]"><i class="fa fa-cart-plus rotate-45 -ml-1"></i></a></li>
                                <li class="inline-block mx-0 my-2.5 group/second"><a href="#" class=" text-[#ffab00] block border -rotate-45 text-[18px] h-[34px] leading-[30px] w-[34px] text-center rounded transition-all duration-[0.3s] mx-3 my-0 border-solid border-white bg-transparent group-hover/second:text-white group-hover/second:bg-[#ffab00]"><i class="fa fa-heart rotate-45 -ml-1"></i></a></li>
                            </ul>
                        </div>
                        <div class="product-content p-[20px_0]">
                            <h4><a href="#" class="product-title text-[16px] leading-[26px] font-medium capitalize">single leg shocks</a></h4>
                            <div class="product-price text-[16px] leading-[25px] font-normal mx-0 my-2.5 font-OpenSans">
                                <del class=" text-[#7e7e7e] mr-2">$88</del> $70.89
                            </div>
                            <div class="product-rating">
                                <i class="fa fa-star text-[#ffab00]"></i>
                                <i class="fa fa-star text-[#ffab00]"></i>
                                <i class="fa fa-star text-[#ffab00]"></i>
                                <i class="fa fa-star text-[#ffab00]"></i>
                                <i class="fa fa-star-half-o text-[#ffab00]"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-3/12 sm:w-full flex-[0_0_auto] max-w-full px-[12px]">
                    <div class="single-product-wrap text-center group">
                        <div class="product-img relative before:content-[''] before:absolute before:transition-[0.3s] before:duration-500 before:scale-0 before:inset-0 group-hover:before:scale-100 before:bg-[rgba(0,0,0,.80)]">
                            <a href=""><img src="{{ asset('assets/site/img/shop/product-10.jpg') }}" alt="product" class="img-fluid w-full" /></a>
                            <ul class="product-action group-hover:opacity-100 group-hover:visible absolute -translate-x-2/4 -translate-y-2/4 transition-all duration-[0.3s] invisible opacity-0 left-2/4 top-2/4">
                                <li class="inline-block mx-0 my-2.5 group/second"><a href="#" class=" text-[#ffab00] block border -rotate-45 text-[18px] h-[34px] leading-[30px] w-[34px] text-center rounded transition-all duration-[0.3s] mx-3 my-0 border-solid border-white bg-transparent group-hover/second:text-white group-hover/second:bg-[#ffab00]"><i class="fa fa-cart-plus rotate-45 -ml-1"></i></a></li>
                                <li class="inline-block mx-0 my-2.5 group/second"><a href="#" class=" text-[#ffab00] block border -rotate-45 text-[18px] h-[34px] leading-[30px] w-[34px] text-center rounded transition-all duration-[0.3s] mx-3 my-0 border-solid border-white bg-transparent group-hover/second:text-white group-hover/second:bg-[#ffab00]"><i class="fa fa-heart rotate-45 -ml-1"></i></a></li>
                            </ul>
                        </div>
                        <div class="product-content p-[20px_0]">
                            <h4><a href="#" class="product-title text-[16px] leading-[26px] font-medium capitalize">single leg shocks</a></h4>
                            <div class="product-price text-[16px] leading-[25px] font-normal mx-0 my-2.5 font-OpenSans">
                                <del class=" text-[#7e7e7e] mr-2">$88</del> $70.89
                            </div>
                            <div class="product-rating">
                                <i class="fa fa-star text-[#ffab00]"></i>
                                <i class="fa fa-star text-[#ffab00]"></i>
                                <i class="fa fa-star text-[#ffab00]"></i>
                                <i class="fa fa-star text-[#ffab00]"></i>
                                <i class="fa fa-star-half-o text-[#ffab00]"></i>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="h-[30px] sm:h-0"></div>

            <div class="flex flex-wrap mx-[-12px]">
                <div class="w-3/12 sm:w-full flex-[0_0_auto] max-w-full px-[12px]">
                    <div class="single-product-wrap text-center group">
                        <div class="product-img relative before:content-[''] before:absolute before:transition-[0.3s] before:duration-500 before:scale-0 before:inset-0 group-hover:before:scale-100 before:bg-[rgba(0,0,0,.80)]">
                            <a href=""><img src="{{ asset('assets/site/img/shop/product-4jpg') }}" alt="product" class="img-fluid w-full" /></a>
                            <ul class="product-action group-hover:opacity-100 group-hover:visible absolute -translate-x-2/4 -translate-y-2/4 transition-all duration-[0.3s] invisible opacity-0 left-2/4 top-2/4">
                                <li class="inline-block mx-0 my-2.5 group/second"><a href="#" class=" text-[#ffab00] block border -rotate-45 text-[18px] h-[34px] leading-[30px] w-[34px] text-center rounded transition-all duration-[0.3s] mx-3 my-0 border-solid border-white bg-transparent group-hover/second:text-white group-hover/second:bg-[#ffab00]"><i class="fa fa-cart-plus rotate-45 -ml-1"></i></a></li>
                                <li class="inline-block mx-0 my-2.5 group/second"><a href="#" class=" text-[#ffab00] block border -rotate-45 text-[18px] h-[34px] leading-[30px] w-[34px] text-center rounded transition-all duration-[0.3s] mx-3 my-0 border-solid border-white bg-transparent group-hover/second:text-white group-hover/second:bg-[#ffab00]"><i class="fa fa-heart rotate-45 -ml-1"></i></a></li>
                            </ul>
                        </div>
                        <div class="product-content p-[20px_0]">
                            <h4><a href="#" class="product-title text-[16px] leading-[26px] font-medium capitalize">black dslr camera</a></h4>
                            <div class="product-price text-[16px] leading-[25px] font-normal mx-0 my-2.5 font-OpenSans">
                                $10.00
                            </div>
                            <div class="product-rating">
                                <i class="fa fa-star text-[#ffab00]"></i>
                                <i class="fa fa-star text-[#ffab00]"></i>
                                <i class="fa fa-star text-[#ffab00]"></i>
                                <i class="fa fa-star text-[#ffab00]"></i>
                                <i class="fa fa-star-half-o text-[#ffab00]"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-3/12 sm:w-full flex-[0_0_auto] max-w-full px-[12px]">
                    <div class="single-product-wrap text-center group">
                        <div class="product-img relative before:content-[''] before:absolute before:transition-[0.3s] before:duration-500 before:scale-0 before:inset-0 group-hover:before:scale-100 before:bg-[rgba(0,0,0,.80)]">
                            <a href=""><img src="{{ asset('assets/site/img/shop/product-5.jpg') }}" alt="product" class="img-fluid w-full" /></a>
                            <ul class="product-action group-hover:opacity-100 group-hover:visible absolute -translate-x-2/4 -translate-y-2/4 transition-all duration-[0.3s] invisible opacity-0 left-2/4 top-2/4">
                                <li class="inline-block mx-0 my-2.5 group/second"><a href="#" class=" text-[#ffab00] block border -rotate-45 text-[18px] h-[34px] leading-[30px] w-[34px] text-center rounded transition-all duration-[0.3s] mx-3 my-0 border-solid border-white bg-transparent group-hover/second:text-white group-hover/second:bg-[#ffab00]"><i class="fa fa-cart-plus rotate-45 -ml-1"></i></a></li>
                                <li class="inline-block mx-0 my-2.5 group/second"><a href="#" class=" text-[#ffab00] block border -rotate-45 text-[18px] h-[34px] leading-[30px] w-[34px] text-center rounded transition-all duration-[0.3s] mx-3 my-0 border-solid border-white bg-transparent group-hover/second:text-white group-hover/second:bg-[#ffab00]"><i class="fa fa-heart rotate-45 -ml-1"></i></a></li>
                            </ul>
                            <div class="sale-tag absolute p-[15px] right-0 top-0">
                                <span class="new text-white uppercase font-semibold w-10 h-10 leading-10 text-center text-[11px] relative z-[1] block mb-[7px] rounded-[100%] bg-[#ffab00]">-50%</span>
                                <span class="sale text-white uppercase font-semibold w-10 h-10 leading-10 text-center text-[11px] relative z-[1] block mb-[7px] rounded-[100%] bg-[#ffab00]">sale</span>
                            </div>
                        </div>
                        <div class="product-content p-[20px_0]">
                            <h4><a href="#" class="product-title text-[16px] leading-[26px] font-medium capitalize">single paper cup</a></h4>
                            <div class="product-price text-[16px] leading-[25px] font-normal mx-0 my-2.5 font-OpenSans">
                                <del class=" text-[#7e7e7e] mr-2">$5</del> $10.00
                            </div>
                            <div class="product-rating">
                                <i class="fa fa-star text-[#ffab00]"></i>
                                <i class="fa fa-star text-[#ffab00]"></i>
                                <i class="fa fa-star text-[#ffab00]"></i>
                                <i class="fa fa-star text-[#ffab00]"></i>
                                <i class="fa fa-star-half-o text-[#ffab00]"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-3/12 sm:w-full flex-[0_0_auto] max-w-full px-[12px]">
                    <div class="single-product-wrap text-center group">
                        <div class="product-img relative before:content-[''] before:absolute before:transition-[0.3s] before:duration-500 before:scale-0 before:inset-0 group-hover:before:scale-100 before:bg-[rgba(0,0,0,.80)]">
                            <a href=""><img src="{{ asset('assets/site/img/shop/product-6.jpg') }}" alt="product" class="img-fluid w-full" /></a>
                            <ul class="product-action group-hover:opacity-100 group-hover:visible absolute -translate-x-2/4 -translate-y-2/4 transition-all duration-[0.3s] invisible opacity-0 left-2/4 top-2/4">
                                <li class="inline-block mx-0 my-2.5 group/second"><a href="#" class=" text-[#ffab00] block border -rotate-45 text-[18px] h-[34px] leading-[30px] w-[34px] text-center rounded transition-all duration-[0.3s] mx-3 my-0 border-solid border-white bg-transparent group-hover/second:text-white group-hover/second:bg-[#ffab00]"><i class="fa fa-cart-plus rotate-45 -ml-1"></i></a></li>
                                <li class="inline-block mx-0 my-2.5 group/second"><a href="#" class=" text-[#ffab00] block border -rotate-45 text-[18px] h-[34px] leading-[30px] w-[34px] text-center rounded transition-all duration-[0.3s] mx-3 my-0 border-solid border-white bg-transparent group-hover/second:text-white group-hover/second:bg-[#ffab00]"><i class="fa fa-heart rotate-45 -ml-1"></i></a></li>
                            </ul>
                        </div>
                        <div class="product-content p-[20px_0]">
                            <h4><a href="#" class="product-title text-[16px] leading-[26px] font-medium capitalize">white smart watch</a></h4>
                            <div class="product-price text-[16px] leading-[25px] font-normal mx-0 my-2.5 font-OpenSans">
                                $77.09
                            </div>
                            <div class="product-rating">
                                <i class="fa fa-star text-[#ffab00]"></i>
                                <i class="fa fa-star text-[#ffab00]"></i>
                                <i class="fa fa-star text-[#ffab00]"></i>
                                <i class="fa fa-star text-[#ffab00]"></i>
                                <i class="fa fa-star-half-o text-[#ffab00]"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-3/12 sm:w-full flex-[0_0_auto] max-w-full px-[12px]">
                    <div class="single-product-wrap text-center group">
                        <div class="product-img relative before:content-[''] before:absolute before:transition-[0.3s] before:duration-500 before:scale-0 before:inset-0 group-hover:before:scale-100 before:bg-[rgba(0,0,0,.80)]">
                            <a href=""><img src="{{ asset('assets/site/img/shop/product-11.jpg') }}" alt="product" class="img-fluid w-full" /></a>
                            <ul class="product-action group-hover:opacity-100 group-hover:visible absolute -translate-x-2/4 -translate-y-2/4 transition-all duration-[0.3s] invisible opacity-0 left-2/4 top-2/4">
                                <li class="inline-block mx-0 my-2.5 group/second"><a href="#" class=" text-[#ffab00] block border -rotate-45 text-[18px] h-[34px] leading-[30px] w-[34px] text-center rounded transition-all duration-[0.3s] mx-3 my-0 border-solid border-white bg-transparent group-hover/second:text-white group-hover/second:bg-[#ffab00]"><i class="fa fa-cart-plus rotate-45 -ml-1"></i></a></li>
                                <li class="inline-block mx-0 my-2.5 group/second"><a href="#" class=" text-[#ffab00] block border -rotate-45 text-[18px] h-[34px] leading-[30px] w-[34px] text-center rounded transition-all duration-[0.3s] mx-3 my-0 border-solid border-white bg-transparent group-hover/second:text-white group-hover/second:bg-[#ffab00]"><i class="fa fa-heart rotate-45 -ml-1"></i></a></li>
                            </ul>
                        </div>
                        <div class="product-content p-[20px_0]">
                            <h4><a href="#" class="product-title text-[16px] leading-[26px] font-medium capitalize">white smart watch</a></h4>
                            <div class="product-price text-[16px] leading-[25px] font-normal mx-0 my-2.5 font-OpenSans">
                                $77.09
                            </div>
                            <div class="product-rating">
                                <i class="fa fa-star text-[#ffab00]"></i>
                                <i class="fa fa-star text-[#ffab00]"></i>
                                <i class="fa fa-star text-[#ffab00]"></i>
                                <i class="fa fa-star text-[#ffab00]"></i>
                                <i class="fa fa-star-half-o text-[#ffab00]"></i>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="h-[30px] sm:h-0"></div>

            <div class="flex flex-wrap mx-[-12px]">
                <div class="w-3/12 sm:w-full flex-[0_0_auto] max-w-full px-[12px]">
                    <div class="single-product-wrap text-center group">
                        <div class="product-img relative before:content-[''] before:absolute before:transition-[0.3s] before:duration-500 before:scale-0 before:inset-0 group-hover:before:scale-100 before:bg-[rgba(0,0,0,.80)]">
                            <a href=""><img src="{{ asset('assets/site/img/shop/product-7.jpg') }}" alt="product" class="img-fluid w-full" /></a>
                            <ul class="product-action group-hover:opacity-100 group-hover:visible absolute -translate-x-2/4 -translate-y-2/4 transition-all duration-[0.3s] invisible opacity-0 left-2/4 top-2/4">
                                <li class="inline-block mx-0 my-2.5 group/second"><a href="#" class=" text-[#ffab00] block border -rotate-45 text-[18px] h-[34px] leading-[30px] w-[34px] text-center rounded transition-all duration-[0.3s] mx-3 my-0 border-solid border-white bg-transparent group-hover/second:text-white group-hover/second:bg-[#ffab00]"><i class="fa fa-cart-plus rotate-45 -ml-1"></i></a></li>
                                <li class="inline-block mx-0 my-2.5 group/second"><a href="#" class=" text-[#ffab00] block border -rotate-45 text-[18px] h-[34px] leading-[30px] w-[34px] text-center rounded transition-all duration-[0.3s] mx-3 my-0 border-solid border-white bg-transparent group-hover/second:text-white group-hover/second:bg-[#ffab00]"><i class="fa fa-heart rotate-45 -ml-1"></i></a></li>
                            </ul>
                            <div class="sale-tag absolute p-[15px] right-0 top-0">
                                <span class="sale text-white uppercase font-semibold w-10 h-10 leading-10 text-center text-[11px] relative z-[1] block mb-[7px] rounded-[100%] bg-[#ffab00]">sale</span>
                            </div>
                        </div>
                        <div class="product-content p-[20px_0]">
                            <h4><a href="#" class="product-title text-[16px] leading-[26px] font-medium capitalize">smart drone with camera</a></h4>
                            <div class="product-price text-[16px] leading-[25px] font-normal mx-0 my-2.5 font-OpenSans">
                                <del class=" text-[#7e7e7e] mr-2">$88</del> $65.89
                            </div>
                            <div class="product-rating">
                                <i class="fa fa-star text-[#ffab00]"></i>
                                <i class="fa fa-star text-[#ffab00]"></i>
                                <i class="fa fa-star text-[#ffab00]"></i>
                                <i class="fa fa-star text-[#ffab00]"></i>
                                <i class="fa fa-star-half-o text-[#ffab00]"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-3/12 sm:w-full flex-[0_0_auto] max-w-full px-[12px]">
                    <div class="single-product-wrap text-center group">
                        <div class="product-img relative before:content-[''] before:absolute before:transition-[0.3s] before:duration-500 before:scale-0 before:inset-0 group-hover:before:scale-100 before:bg-[rgba(0,0,0,.80)]">
                            <a href=""><img src="{{ asset('assets/site/img/shop/product-8.jpg') }}" alt="product" class="img-fluid w-full" /></a>
                            <ul class="product-action group-hover:opacity-100 group-hover:visible absolute -translate-x-2/4 -translate-y-2/4 transition-all duration-[0.3s] invisible opacity-0 left-2/4 top-2/4">
                                <li class="inline-block mx-0 my-2.5 group/second"><a href="#" class=" text-[#ffab00] block border -rotate-45 text-[18px] h-[34px] leading-[30px] w-[34px] text-center rounded transition-all duration-[0.3s] mx-3 my-0 border-solid border-white bg-transparent group-hover/second:text-white group-hover/second:bg-[#ffab00]"><i class="fa fa-cart-plus rotate-45 -ml-1"></i></a></li>
                                <li class="inline-block mx-0 my-2.5 group/second"><a href="#" class=" text-[#ffab00] block border -rotate-45 text-[18px] h-[34px] leading-[30px] w-[34px] text-center rounded transition-all duration-[0.3s] mx-3 my-0 border-solid border-white bg-transparent group-hover/second:text-white group-hover/second:bg-[#ffab00]"><i class="fa fa-heart rotate-45 -ml-1"></i></a></li>
                            </ul>
                            <div class="sale-tag absolute p-[15px] right-0 top-0">
                                <span class="new text-white uppercase font-semibold w-10 h-10 leading-10 text-center text-[11px] relative z-[1] block mb-[7px] rounded-[100%] bg-[#ffab00]">new</span>
                                <span class="sale text-white uppercase font-semibold w-10 h-10 leading-10 text-center text-[11px] relative z-[1] block mb-[7px] rounded-[100%] bg-[#ffab00]">sale</span>
                            </div>
                        </div>
                        <div class="product-content p-[20px_0]">
                            <h4><a href="#" class="product-title text-[16px] leading-[26px] font-medium capitalize">big screen mobile phone</a></h4>
                            <div class="product-price text-[16px] leading-[25px] font-normal mx-0 my-2.5 font-OpenSans">
                                <del class=" text-[#7e7e7e] mr-2">$88</del> $70.89
                            </div>
                            <div class="product-rating">
                                <i class="fa fa-star text-[#ffab00]"></i>
                                <i class="fa fa-star text-[#ffab00]"></i>
                                <i class="fa fa-star text-[#ffab00]"></i>
                                <i class="fa fa-star text-[#ffab00]"></i>
                                <i class="fa fa-star-half-o text-[#ffab00]"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-3/12 sm:w-full flex-[0_0_auto] max-w-full px-[12px]">
                    <div class="single-product-wrap text-center group">
                        <div class="product-img relative before:content-[''] before:absolute before:transition-[0.3s] before:duration-500 before:scale-0 before:inset-0 group-hover:before:scale-100 before:bg-[rgba(0,0,0,.80)]">
                            <a href=""><img src="{{ asset('assets/site/img/shop/product-9.jpg') }}" alt="product" class="img-fluid w-full" /></a>
                            <ul class="product-action group-hover:opacity-100 group-hover:visible absolute -translate-x-2/4 -translate-y-2/4 transition-all duration-[0.3s] invisible opacity-0 left-2/4 top-2/4">
                                <li class="inline-block mx-0 my-2.5 group/second"><a href="#" class=" text-[#ffab00] block border -rotate-45 text-[18px] h-[34px] leading-[30px] w-[34px] text-center rounded transition-all duration-[0.3s] mx-3 my-0 border-solid border-white bg-transparent group-hover/second:text-white group-hover/second:bg-[#ffab00]"><i class="fa fa-cart-plus rotate-45 -ml-1"></i></a></li>
                                <li class="inline-block mx-0 my-2.5 group/second"><a href="#" class=" text-[#ffab00] block border -rotate-45 text-[18px] h-[34px] leading-[30px] w-[34px] text-center rounded transition-all duration-[0.3s] mx-3 my-0 border-solid border-white bg-transparent group-hover/second:text-white group-hover/second:bg-[#ffab00]"><i class="fa fa-heart rotate-45 -ml-1"></i></a></li>
                            </ul>
                            <div class="sale-tag absolute p-[15px] right-0 top-0">
                                <span class="new text-white uppercase font-semibold w-10 h-10 leading-10 text-center text-[11px] relative z-[1] block mb-[7px] rounded-[100%] bg-[#ffab00]">-50%</span>
                                <span class="sale text-white uppercase font-semibold w-10 h-10 leading-10 text-center text-[11px] relative z-[1] block mb-[7px] rounded-[100%] bg-[#ffab00]">off</span>
                            </div>
                        </div>
                        <div class="product-content p-[20px_0]">
                            <h4><a href="#" class="product-title text-[16px] leading-[26px] font-medium capitalize">single travelling bag</a></h4>
                            <div class="product-price text-[16px] leading-[25px] font-normal mx-0 my-2.5 font-OpenSans">
                                <del class=" text-[#7e7e7e] mr-2">$88</del> $70.89
                            </div>
                            <div class="product-rating">
                                <i class="fa fa-star text-[#ffab00]"></i>
                                <i class="fa fa-star text-[#ffab00]"></i>
                                <i class="fa fa-star text-[#ffab00]"></i>
                                <i class="fa fa-star text-[#ffab00]"></i>
                                <i class="fa fa-star-half-o text-[#ffab00]"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-3/12 sm:w-full flex-[0_0_auto] max-w-full px-[12px]">
                    <div class="single-product-wrap text-center group">
                        <div class="product-img relative before:content-[''] before:absolute before:transition-[0.3s] before:duration-500 before:scale-0 before:inset-0 group-hover:before:scale-100 before:bg-[rgba(0,0,0,.80)]">
                            <a href=""><img src="{{ asset('assets/site/img/shop/product-12.jpg') }}" alt="product" class="img-fluid w-full" /></a>
                            <ul class="product-action group-hover:opacity-100 group-hover:visible absolute -translate-x-2/4 -translate-y-2/4 transition-all duration-[0.3s] invisible opacity-0 left-2/4 top-2/4">
                                <li class="inline-block mx-0 my-2.5 group/second"><a href="#" class=" text-[#ffab00] block border -rotate-45 text-[18px] h-[34px] leading-[30px] w-[34px] text-center rounded transition-all duration-[0.3s] mx-3 my-0 border-solid border-white bg-transparent group-hover/second:text-white group-hover/second:bg-[#ffab00]"><i class="fa fa-cart-plus rotate-45 -ml-1"></i></a></li>
                                <li class="inline-block mx-0 my-2.5 group/second"><a href="#" class=" text-[#ffab00] block border -rotate-45 text-[18px] h-[34px] leading-[30px] w-[34px] text-center rounded transition-all duration-[0.3s] mx-3 my-0 border-solid border-white bg-transparent group-hover/second:text-white group-hover/second:bg-[#ffab00]"><i class="fa fa-heart rotate-45 -ml-1"></i></a></li>
                            </ul>
                            <div class="sale-tag absolute p-[15px] right-0 top-0">
                                <span class="new text-white uppercase font-semibold w-10 h-10 leading-10 text-center text-[11px] relative z-[1] block mb-[7px] rounded-[100%] bg-[#ffab00]">-50%</span>
                                <span class="sale text-white uppercase font-semibold w-10 h-10 leading-10 text-center text-[11px] relative z-[1] block mb-[7px] rounded-[100%] bg-[#ffab00]">off</span>
                            </div>
                        </div>
                        <div class="product-content p-[20px_0]">
                            <h4><a href="#" class="product-title text-[16px] leading-[26px] font-medium capitalize">single travelling bag</a></h4>
                            <div class="product-price text-[16px] leading-[25px] font-normal mx-0 my-2.5 font-OpenSans">
                                <del class=" text-[#7e7e7e] mr-2">$88</del> $70.89
                            </div>
                            <div class="product-rating">
                                <i class="fa fa-star text-[#ffab00]"></i>
                                <i class="fa fa-star text-[#ffab00]"></i>
                                <i class="fa fa-star text-[#ffab00]"></i>
                                <i class="fa fa-star text-[#ffab00]"></i>
                                <i class="fa fa-star-half-o text-[#ffab00]"></i>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="h-[50px]"></div>
            <div class="tractour-pagination" aria-label="page navigation example">
                <ul class="pagination justify-center flex pl-0">
                    <li class="page-item m-[0_5px] first:ml-0">
                        <a class="page-link bg-[#f1f1f1] border text-[#444444] block font-normal leading-tight relative text-center w-10 px-3 py-2 border-solid border-transparent focus:shadow-none ml-0 rounded-none" href="#">
                                <i class="fa fa-long-arrow-left"></i>
                            </a>
                    </li>
                    <li class="page-item m-[0_5px] first:ml-0 active">
                        <a class="page-link bg-[#f1f1f1] border text-[#444444] block font-normal leading-tight relative text-center w-10 -ml-px px-3 py-2 border-solid border-transparent focus:shadow-none" href="#">1</a>
                    </li>
                    <li class="page-item m-[0_5px] first:ml-0">
                        <a class="page-link bg-[#f1f1f1] border text-[#444444] block font-normal leading-tight relative text-center w-10 -ml-px px-3 py-2 border-solid border-transparent focus:shadow-none" href="#">2</a>
                    </li>
                    <li class="page-item m-[0_5px] first:ml-0">
                        <a class="page-link bg-[#f1f1f1] border text-[#444444] block font-normal leading-tight relative text-center w-10 -ml-px px-3 py-2 border-solid border-transparent focus:shadow-none" href="#">3</a>
                    </li>
                    <li class="page-item m-[0_5px] first:ml-0">
                        <a class="page-link bg-[#f1f1f1] border text-[#444444] block font-normal leading-tight relative text-center w-10 -ml-px px-3 py-2 border-solid border-transparent focus:shadow-none rounded-none" href="#">
                                <i class="fa fa-long-arrow-right"></i>
                            </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- shop area end -->
    <!-- quote sologan area start -->
    <div class="quote-sologan-area p-[100px_0] text-center  !bg-[#fbfbfb] ">
        <div class="container">
            <div class="flex flex-wrap mx-[-12px]">
                <div class="w-full flex-[0_0_auto] px-[12px] max-w-full">
                    <h2 class=" text-[40px] font-bold capitalize leading-[50px] font-Montserrat">delivering innovation sustainability goals.</h2>
                    <p class="text-[18px] w-[70%] text-[#363636] mt-[25px] mb-0 mx-auto md:w-3/5 sm:w-full">On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment</p>
                    <a href="#" class=" text-[#222222] text-[15px] font-semibold tracking-[1px] leading-[21px] uppercase px-5 py-2.5 border-0 font-OpenSans inline-block btn-type-3 mt-[30px]">get a quote</a>
                </div>
            </div>
        </div>
    </div>
    <!-- quote sologan area end -->
</div>
