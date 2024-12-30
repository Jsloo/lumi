<div>
    <!-- hero area end -->
    <!-- shop area start -->
    <div class="shop-area pt-[50px] pb-[100px]">
        <div class="container">
            <div class="flex flex-wrap mx-[-12px]">
                <div class="w-full flex-[0_0_auto] px-[12px] max-w-full">
                    <div class="single-sid-wdg mb-[30px] p-[30px] bg-[#fbfbfb]">
                        <h4 class="sid-wdg-title text-[20px] font-normal capitalize mb-5"><strong class=" font-bold text-[#222]">search</strong> here
                        <span class=" w-[100px] h-[5px] block mx-0 my-3 bg-[#ffab00]"></span></h4>
                        <input wire:model.live="search" class="h-[58px] shadow-none text-[#777777] w-full p-5 rounded-none border-0 bg-white focus:border focus:border-solid focus:border-white focus:!bg-white" type="text" placeholder="type to search here...">
                        <button class="submit-btn text-[#222222] text-[14px] font-semibold tracking-[1px] leading-[25px] inline-block absolute cursor-pointer px-[30px] py-[15px] rounded-none border-0 right-0 top-0 bg-white" type="submit"><i class="fa fa-search"></i></button>
                    </div>

                </div>

            </div>
            <div class="h-3 sm:h-0"></div>
            <div class="flex flex-wrap mx-[-12px]">

                @forelse ($subCategories as $subCategory)
                    <a href="{{ route('subcategory.products',$subCategory->slug) }}">
                        <div class="w-3/12 sm:w-full flex-[0_0_auto] max-w-full px-[12px]">
                            <div class="single-product-wrap text-center group">
                                <div class="product-img relative">
                                    
                                    <img src="{{ secure_asset('storage/' . $subCategory->image) }}" alt="product" class="img-fluid w-full" />
                                    
                                </div>
                                <div class="product-content p-[20px_0]">
                                    <h4><a href="{{ route('subcategory.products',$subCategory->slug) }}" class="product-title text-[16px] leading-[26px] font-medium capitalize">{{ $subCategory->name }}</a></h4>
                                </div>
                            </div>
                        </div>
                    </a>
                @empty
                    
                @endforelse
                

                

            </div>
            <div class="h-[30px] sm:h-0"></div>


            <div class="h-[50px]"></div>
            <x-site.pagination :items="$subCategories" />
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
