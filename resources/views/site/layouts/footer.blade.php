<div class="footer-area black-bg p-[100px_0]">
    <div class="container">
        <div class="flex flex-wrap mx-[-12px]">
            <div class="xl:w-4/12 lg:w-4/12 md:w-4/12 sm:w-6/12 flex-[0_0_auto] max-w-full px-[12px]">
                <div class="footer-widget sm:mx-0 sm:my-[15px] widget-1">
                    <div class="footer-logo mb-10">
                        <a href="#">
                            <img src="{{ asset('assets/site/img/lumiLogo.png')  }}" alt="footer-logo" class="img-fluid" />
                        </a>
                    </div>
                    <p class=" text-[#777777] mb-5">We are committed to providing top-quality safety products and services to ensure a safer environment for all.</p>
                    <p class=" text-[#777777]">Your safety is our priority.</p>
                </div>
            </div>
            <div class="xl:w-4/12 lg:w-4/12 md:w-4/12 sm:w-6/12 flex-[0_0_auto] max-w-full px-[12px]">
                <div class="footer-widget sm:mx-0 sm:my-[15px] widget-2">
                    <h3
                        class=" font-medium text-black capitalize relative text-[20px] mb-5 pb-5 after:content-[''] after:absolute after:w-20 after:h-1 after:left-0 after:bottom-0 after:bg-[#ffab00]">
                        <strong>popular</strong> Product</h3>
                    <ul class="footer-popu-link">
                        @forelse (\App\Models\Category::all() as $category)
                            <li class=" block mb-[15px] last:mb-0">
                                <a class=" text-[#757575] capitalize font-semibold text-[15px] font-OpenSans"
                                    href="{{ route('category.subcategory',$category->slug) }}">{{ $category->name }} <i class="fa fa-arrow-circle-o-right float-right"></i>
                                </a>
                            </li>
                        @empty
                            
                        @endforelse
                       
                    </ul>
                </div>
            </div>

            <div class="xl:w-4/12 lg:w-4/12 md:w-4/12 sm:w-12/12 flex-[0_0_auto] max-w-full px-[12px]">
                <div class="footer-widget sm:mx-0 sm:my-[15px] widget-3">
                    <h3
                        class=" font-medium text-black capitalize relative text-[20px] mb-5 pb-5 after:content-[''] after:absolute after:w-20 after:h-1 after:left-0 after:bottom-0 after:bg-[#ffab00]">
                        <strong>contact</strong> info</h3>
                    <div class="office-address  border-b-[1px] border-solid border-[#dee2e6]  mb-5 pb-5">
                        <h4>
                            <a class="text-[18px] text-black font-semibold block capitalize mb-5 font-Montserrat"
                                href="#">office one</a>
                        </h4>
                        <p class=" text-[#757575]">25, Jln TTC 26B, Taman Teknologi Cheng, 75260 Cheng, Malacca</p>
                    </div>
                    <ul class="footer-social">
                        <li class=" inline-block mr-1.5 mb-1.5">
                            <a class=" !bg-[#da421f]  text-[16px] text-white text-center block w-10 h-10 leading-10 rounded-[2px] bg-[#ffab00]"
                                href="#">
                                <i class="fa fa-pinterest-p"></i>
                            </a>
                        </li>
                        <li class=" inline-block mr-1.5 mb-1.5">
                            <a class=" !bg-[#00bff3]  text-[16px] text-white text-center block w-10 h-10 leading-10 rounded-[2px] bg-[#ffab00]"
                                href="#">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </li>
                        <li class=" inline-block mr-1.5 mb-1.5">
                            <a class=" !bg-[#1b78c7]  text-[16px] text-white text-center block w-10 h-10 leading-10 rounded-[2px] bg-[#ffab00]"
                                href="#">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </li>
                        <li class=" inline-block mr-1.5 mb-1.5">
                            <a class=" !bg-[#67b807]  text-[16px] text-white text-center block w-10 h-10 leading-10 rounded-[2px] bg-[#ffab00]"
                                href="#">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="footer-copyright px-0 py-[33px] bg-black">
    <div class="container">
        <div class="flex flex-wrap mx-[-12px]">
            <div class="w-full flex-[0_0_auto] px-[12px] max-w-full">
                <div class="copy-right text-center text-[15px] text-white leading-7 capitalize font-OpenSans">
                    copyright @ 2024 LumiBright 
                    | all rights reserved.
                </div>
            </div>
        </div>
    </div>
</div>