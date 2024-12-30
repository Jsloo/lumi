<div>
     <div class="contactus-area p-[100px_0]">
        <div class="container">
            <div class="flex flex-wrap mx-[-12px]">
                <div class="w-6/12 sm:w-full flex-[0_0_auto] max-w-full px-[12px]">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3986.721315243321!2d102.228442975677!3d2.2576682579841347!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d1effc5735c091%3A0xbc73596e0e5f806a!2sLumi%20Bright%20(Melaka)%20Sdn.%20Bhd.!5e0!3m2!1szh-CN!2smy!4v1735458871854!5m2!1szh-CN!2smy" 
                            width="100%" 
                            height="100%" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
                <div class="w-6/12 sm:w-full flex-[0_0_auto] max-w-full px-[12px]">
                    <div class="contact-info-detail sm:mt-[30px]">
                        <h2 class=" font-semibold leading-[30px] capitalize text-[30px]">more information</h2>
                        <p class=" mx-0 my-5">Looking for assistance or have inquiries? We’re here to help! Connect with us through the details below.</p>
                        <ul class="contact-text-info">
                            <li class=" block mb-5">
                                <strong class=" capitalize text-[18px]"><span class=" text-[#ffab00] inline-block text-[18px] leading-[30px] text-center transition-all duration-[0.3s] mr-2.5"><i class="fa fa-map-marker"></i></span> location</strong>
                                <p class=" mt-2.5">25, Jln TTC 26B, Taman Teknologi Cheng, 75260 Cheng, Malacca</p>
                            </li>

                            <li class=" block mb-5">
                                <strong class=" capitalize text-[18px]"><span class=" text-[#ffab00] inline-block text-[18px] leading-[30px] text-center transition-all duration-[0.3s] mr-2.5"><i class="fa fa-envelope"></i></span> email</strong>
                                <p class=" mt-2.5">melaka@lumibright.com</p>
                            </li>
                            <li class=" block mb-5">
                                <strong class=" capitalize text-[18px]"><span class=" text-[#ffab00] inline-block text-[18px] leading-[30px] text-center transition-all duration-[0.3s] mr-2.5"><i class="fa fa-phone"></i></span> call us</strong>
                                <p class=" mt-2.5">06-337 3151 <br> 016-213 6008</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="flex flex-wrap mx-[-12px]">
                <div class="w-full flex-[0_0_auto] max-w-full px-[12px] text-center pt-[50px]">
                    <div class="contact-info">
                        <h2 class=" font-semibold leading-[30px] capitalize text-[30px]">Get In Touch</h2>
                        <p class=" mx-0 my-5">Feel free to reach out to us with any questions or requests – we're here to help!</p>
                        <form class="contact-form" wire:submit.prevent="submit">
                            <div class="flex flex-wrap mx-[-12px]">
                                <div class="w-6/12 sm:w-full flex-[0_0_auto] max-w-full px-[12px] mb-5">
                                    <input wire:model="name" class="form-control shadow-none text-[#777777] h-[50px]  rounded-none border-0 bg-[#f4f4f4] block w-full text-[1rem] font-normal leading-normal px-3 py-1.5" type="text" name="name" placeholder="Name">
                                    @error('name') <!-- Show error for 'name' field -->
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="w-6/12 sm:w-full flex-[0_0_auto] max-w-full px-[12px] mb-5">
                                    <input wire:model="email" class="form-control shadow-none text-[#777777] h-[50px] rounded-none border-0 bg-[#f4f4f4] block w-full text-[1rem] font-normal leading-normal px-3 py-1.5" type="email" name="email" placeholder="E-mail">
                                    @error('email') <!-- Show error for 'email' field -->
                                        <span class="text-red-500 text-sm ">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="flex flex-wrap mx-[-12px]">
                                <div class="w-6/12 sm:w-full flex-[0_0_auto] max-w-full px-[12px] mb-5">
                                    <input wire:model="phone" class="form-control shadow-none text-[#777777] h-[50px] rounded-none border-0 bg-[#f4f4f4] block w-full text-[1rem] font-normal leading-normal px-3 py-1.5" type="tel" name="phone" placeholder="Phone">
                                    @error('phone') <!-- Show error for 'phone' field -->
                                        <span class="text-red-500 text-sm ">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="w-6/12 sm:w-full flex-[0_0_auto] max-w-full px-[12px] mb-5">
                                    <input wire:model="subject" class="form-control shadow-none text-[#777777] h-[50px] rounded-none border-0 bg-[#f4f4f4] block w-full text-[1rem] font-normal leading-normal px-3 py-1.5" type="text" name="subject" placeholder="Subject">
                                    @error('subject') <!-- Show error for 'subject' field -->
                                        <span class="text-red-500 text-sm ">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="w-full sm:w-full flex-[0_0_auto] max-w-full px-[12px] mb-5">

                                    <textarea wire:model="request" class="form-control shadow-none text-[#777777] h-[133px] mb-5 rounded-none border-0 bg-[#f4f4f4] min-h-[calc(1.5em_+_0.75rem_+_2px)] block w-full text-[16px] font-normal leading-normal px-3 py-1.5" name="message" cols="30" rows="8" placeholder="Request"></textarea>
                                    @error('request') <!-- Show error for 'request' field -->
                                        <span class="text-red-500 text-sm ">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
        
                            <button type="submit" class="btn btn-type-3">Submit Request</button>
                        </form>
                        
                        <p class="form-message"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact us area end -->
    <!-- quote sologan area start -->
    
</div>
