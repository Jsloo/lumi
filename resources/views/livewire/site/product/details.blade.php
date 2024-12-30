<div>
    <div class="blog-area p-[100px_0]">
        <div class="container">
            <div class="flex flex-wrap mx-[-12px]">
                <div class="w-6/12 sm:w-full flex-[0_0_auto] max-w-full px-[12px]">

                    <div class="flex flex-wrap justify-center mx-[-12px]">
                        <div class="w-full flex-[0_0_auto] max-w-full px-[12px] col-sm-12 text-center">
                            <div class="blog-details">
                                <div class="img-date-wrape inline-block relative">
                                    <img 
                                        src="{{ secure_asset('storage/' . $product->image) }}" 
                                        alt="blog-img" 
                                        class="img-fluid max-w-[400px] h-auto w-full rounded-[4px_4px_0_0]"
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                    

                </div>
                <div class="w-6/12 sm:w-full flex-[0_0_auto] max-w-full px-[12px]">
                    <div class="flex flex-wrap mx-[-12px]">
                        <div class="w-full flex-[0_0_auto] max-w-full px-[12px] col-sm-12">
                            <div class="blog-details">
                                <div class="blog-content pt-[15px] pb-[30px] px-[15px]">
                                    <h3>
                                        <a class="text-[24px] leading-[36px] font-semibold text-[#222222] capitalize font-Montserrat" href="#">
                                            {{ $product->name }}
                                        </a>
                                    </h3>                                    
                                    <span class=" w-[100px] h-[5px] block mx-0 my-3 bg-[#ffab00]"></span>
                                    <p class=" text-[15px] text-[#363636]">
                                        {!! $product->description !!}
                                        {{-- <iframe id="description-iframe" srcdoc="{!! $product->description !!}" style="width: 100%; border: none;"></iframe> --}}
                                    </p>
                                </div>                                
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    document.addEventListener("DOMContentLoaded", () => {
    const iframe = document.getElementById('description-iframe');
    const htmlContent = `{!! $product->description !!}`;

    if (!iframe) {
        console.error("Iframe element not found!");
        return;
    }

    iframe.contentDocument.open();
    iframe.contentDocument.write(htmlContent);
    iframe.contentDocument.close();

    setTimeout(() => {
        try {
            const contentHeight = iframe.contentWindow.document.body.scrollHeight;
            iframe.style.height = contentHeight + "px";
            console.log("Height adjusted to:", contentHeight);
        } catch (error) {
            console.error("Error adjusting iframe height:", error);
        }
    }, 100);
});

</script>
@endpush