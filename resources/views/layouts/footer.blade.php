<footer>
    <div class="bg-[#03203E] flex flex-col justify-center items-center ">
        <div class="flex flex-col items-center py-6 max-w-[1000px] px-4 w-full mx-auto gap-4">

            <div class="flex flex-col gap-3 justify-center items-center lg:py-4">
                <h1
                    class="flex justify-center items-end font-prata uppercase text-white gap-4 text-xl max-xl:text-base font-semibold tracking-[8px]">
                    <span class="flex items-end" style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);">
                        <span class="text-2xl max-xl:text-xl">P</span>aradise
                    </span>
                    <span class="flex items-end" style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);">
                        <span class="text-2xl max-xl:text-xl">B</span>each
                    </span>
                </h1>

                <div class="border border-white rounded-full max-w-[50%] w-full mx-auto"></div>
                <h2 class="uppercase text-[12px] tracking-[8px] font-medium text-white "
                    style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);">
                    luxury hotel
                </h2>
            </div>

            <div class="flex justify-between w-full max-md:hidden">
                <a href="/"
                    class="{{ request()->routeIs('/') ? 'border-b-2 border-white' : '' }} uppercase text-white text-base max-lg:txet-sm relative hover:text-white cursor-pointer transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-700 before:absolute before:bg-white  before:origin-center before:h-[2px] before:w-0 hover:before:w-[50%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-700 after:absolute after:bg-white after:origin-center after:h-[2px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%]">
                    home
                </a>
                <a href="{{route("booking")}}"
                    class="{{ request()->routeIs('booking') ? 'border-b-2 border-white' : '' }} uppercase text-white text-base max-lg:txet-sm relative hover:text-white cursor-pointer transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-700 before:absolute before:bg-white  before:origin-center before:h-[2px] before:w-0 hover:before:w-[50%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-700 after:absolute after:bg-white after:origin-center after:h-[2px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%]">
                    booking
                </a>
                <a href="{{route("contact.t_c")}}"
                    class="{{ request()->routeIs('contact.t_c') ? 'border-b-2 border-white' : '' }} uppercase text-white text-base max-lg:txet-sm relative hover:text-white cursor-pointer transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-700 before:absolute before:bg-white  before:origin-center before:h-[2px] before:w-0 hover:before:w-[50%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-700 after:absolute after:bg-white after:origin-center after:h-[2px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%]">
                    term and conditions
                </a>
                <a href="{{route("contact.privacy")}}"
                    class="{{ request()->routeIs('contact.privacy') ? 'border-b-2 border-white' : '' }} uppercase text-white text-base max-lg:txet-sm relative hover:text-white cursor-pointer transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-700 before:absolute before:bg-white  before:origin-center before:h-[2px] before:w-0 hover:before:w-[50%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-700 after:absolute after:bg-white after:origin-center after:h-[2px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%]">
                    privacy policy
                </a>
                <a href="tel:0901234567" class="flex gap-2 ">
                    <div class="max-w-6 w-8 h-auto">
                        <img src="/images/index/icon-1.png" alt="" class="w-full h-wull ">
                    </div>
                    <p
                        class="text-base text-[#c5a880] relative hover:text-white cursor-pointer transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-700 before:absolute before:bg-white  before:origin-center before:h-[2px] before:w-0 hover:before:w-[50%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-700 after:absolute after:bg-white after:origin-center after:h-[2px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%]">
                        090-123-4567
                    </p>
                </a>

            </div>

            <div class="flex flex-col items-center w-full md:hidden">
                <div class="flex justify-between w-full items-center open_q_detail cursor-pointer">
                    <p class="text-[#CDB59D] font-[400] tracking-widest text-base text-left uppercase">
                        menu
                    </p>

                    <div class="w-[20px] h-auto">
                        <img src="/images/icon/Vector.png" alt="" class="w-full arrow-icon">
                    </div>
                </div>

                <div
                    class="transition-all duration-300 ease-in-out max-h-0 opacity-0 flex flex-col gap-4 justify-between w-full overflow-hidden q_detail pl-2 ">

                    <a href=""
                        class="{{ request()->routeIs('/') ? 'border-b-2 border-white' : '' }} w-full pt-2 uppercase text-white txet-sm relative hover:text-white cursor-pointer transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-700 before:absolute before:bg-white  before:origin-center before:h-[2px] before:w-0 hover:before:w-[50%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-700 after:absolute after:bg-white after:origin-center after:h-[2px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%]">
                        home
                    </a>
                    <a href="{{route("booking")}}"
                        class="{{ request()->routeIs('booking') ? 'border-b-2 border-white' : '' }} uppercase text-white txet-sm relative hover:text-white cursor-pointer transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-700 before:absolute before:bg-white  before:origin-center before:h-[2px] before:w-0 hover:before:w-[50%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-700 after:absolute after:bg-white after:origin-center after:h-[2px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%]">
                        booking
                    </a>
                    <a href="{{route("contact.t_c")}}"
                        class="{{ request()->routeIs('contact.t_c') ? 'border-b-2 border-white' : '' }} uppercase text-white txet-sm relative hover:text-white cursor-pointer transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-700 before:absolute before:bg-white  before:origin-center before:h-[2px] before:w-0 hover:before:w-[50%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-700 after:absolute after:bg-white after:origin-center after:h-[2px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%]">
                        term and conditions
                    </a>
                    <a href="{{route("contact.privacy")}}"
                        class="{{ request()->routeIs('contact.privacy') ? 'border-b-2 border-white' : '' }} uppercase text-white txet-sm relative hover:text-white cursor-pointer transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-700 before:absolute before:bg-white  before:origin-center before:h-[2px] before:w-0 hover:before:w-[50%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-700 after:absolute after:bg-white after:origin-center after:h-[2px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%]">
                        privacy policy
                    </a>
                    <a href="tel:0901234567" class="flex gap-2 ">
                        <div class="w-4 h-auto">
                            <img src="/images/index/icon-1.png" alt="" class="w-full h-wull ">
                        </div>
                        <p
                            class="w-full text-sm text-[#c5a880] relative hover:text-white cursor-pointer transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-700 before:absolute before:bg-white  before:origin-center before:h-[2px] before:w-0 hover:before:w-[50%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-700 after:absolute after:bg-white after:origin-center after:h-[2px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%]">
                            090-123-4567
                        </p>
                    </a>


                </div>

            </div>

            <div class="border border-[#c5a880] rounded-full w-full mx-auto px-4"></div>

            <div class="flex justify-between items-center w-full flex-row  max-md:hidden">
                <p class="uppercase text-white txet-sm">facilities :</p>
                <a href="" class="flex gap-2 justify-start items-end group">
                    <div class="w-8 h-8">
                        <img src="/images/Index/icon-5.png" alt="" class="w-full h-full">
                    </div>
                    <p
                        class="uppercase text-gray-400 txet-sm relative hover:text-white cursor-pointer transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-700 before:absolute before:bg-white  before:origin-center before:h-[2px] before:w-0 hover:before:w-[50%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-700 after:absolute after:bg-white after:origin-center after:h-[2px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%]">
                        beach</p>
                </a>
                <a href="" class="flex gap-2 justify-start items-end group">
                    <div class="w-8 h-8">
                        <img src="/images/Index/icon-6.png" alt="" class="w-full h-full">
                    </div>
                    <p
                        class="uppercase text-gray-400 txet-sm relative hover:text-white cursor-pointer transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-700 before:absolute before:bg-white  before:origin-center before:h-[2px] before:w-0 hover:before:w-[50%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-700 after:absolute after:bg-white after:origin-center after:h-[2px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%]">
                        bar</p>
                </a>
                <a href="" class="flex gap-2 justify-start items-end group">
                    <div class="w-8 h-8">
                        <img src="/images/Index/icon-7.png" alt="" class="w-full h-full">
                    </div>
                    <p
                        class="uppercase text-gray-400 txet-sm relative hover:text-white cursor-pointer transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-700 before:absolute before:bg-white  before:origin-center before:h-[2px] before:w-0 hover:before:w-[50%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-700 after:absolute after:bg-white after:origin-center after:h-[2px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%]">
                        urban</p>
                </a>
                <a href="" class="flex gap-2 justify-start items-end group">
                    <div class="w-8 h-8">
                        <img src="/images/Index/icon-8.png" alt="" class="w-full h-full">
                    </div>
                    <p
                        class="uppercase text-gray-400 txet-sm relative hover:text-white cursor-pointer transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-700 before:absolute before:bg-white  before:origin-center before:h-[2px] before:w-0 hover:before:w-[50%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-700 after:absolute after:bg-white after:origin-center after:h-[2px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%]">
                        hidden gems</p>
                </a>
                <a href="" class="flex gap-2 justify-start items-end group">
                    <div class="w-8 h-8">
                        <img src="/images/Index/icon-9.png" alt="" class="w-full h-full">
                    </div>
                    <p
                        class="uppercase text-gray-400 txet-sm relative hover:text-white cursor-pointer transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-700 before:absolute before:bg-white  before:origin-center before:h-[2px] before:w-0 hover:before:w-[50%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-700 after:absolute after:bg-white after:origin-center after:h-[2px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%]">
                        SPA</p>
                </a>
            </div>

            <div class="flex flex-col items-center w-full md:hidden">
                <div class="flex justify-between w-full items-center open_q_detail cursor-pointer">
                    <p class="text-[#CDB59D] font-[400] tracking-widest text-base text-left uppercase">
                        facilities :
                    </p>

                    <div class="w-[20px] h-auto">
                        <img src="/images/icon/Vector.png" alt="" class="w-full arrow-icon">
                    </div>
                </div>

                <div
                    class="transition-all duration-300 ease-in-out max-h-0 opacity-0 flex flex-col gap-4 justify-between w-full overflow-hidden q_detail pl-2 ">
                    <a href="" class="pt-2 flex gap-2 justify-start items-end group">
                        <div class="w-8 h-8">
                            <img src="/images/Index/icon-5.png" alt="" class="w-full h-full">
                        </div>
                        <p
                            class="w-full uppercase text-gray-400 txet-sm relative hover:text-white cursor-pointer transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-700 before:absolute before:bg-white  before:origin-center before:h-[2px] before:w-0 hover:before:w-[50%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-700 after:absolute after:bg-white after:origin-center after:h-[2px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%]">
                            beach</p>
                    </a>
                    <a href="" class="flex gap-2 justify-start items-end group">
                        <div class="w-8 h-8">
                            <img src="/images/Index/icon-6.png" alt="" class="w-full h-full">
                        </div>
                        <p
                            class="w-full uppercase text-gray-400 txet-sm relative hover:text-white cursor-pointer transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-700 before:absolute before:bg-white  before:origin-center before:h-[2px] before:w-0 hover:before:w-[50%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-700 after:absolute after:bg-white after:origin-center after:h-[2px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%]">
                            bar</p>
                    </a>
                    <a href="" class="flex gap-2 justify-start items-end group">
                        <div class="w-8 h-8">
                            <img src="/images/Index/icon-7.png" alt="" class="w-full h-full">
                        </div>
                        <p
                            class="w-full uppercase text-gray-400 txet-sm relative hover:text-white cursor-pointer transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-700 before:absolute before:bg-white  before:origin-center before:h-[2px] before:w-0 hover:before:w-[50%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-700 after:absolute after:bg-white after:origin-center after:h-[2px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%]">
                            urban</p>
                    </a>
                    <a href="" class="flex gap-2 justify-start items-end group">
                        <div class="w-8 h-8">
                            <img src="/images/Index/icon-8.png" alt="" class="w-full h-full">
                        </div>
                        <p
                            class="w-full uppercase text-gray-400 txet-sm relative hover:text-white cursor-pointer transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-700 before:absolute before:bg-white  before:origin-center before:h-[2px] before:w-0 hover:before:w-[50%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-700 after:absolute after:bg-white after:origin-center after:h-[2px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%]">
                            hidden gems</p>
                    </a>
                    <a href="" class="flex gap-2 justify-start items-end group">
                        <div class="w-8 h-8">
                            <img src="/images/Index/icon-9.png" alt="" class="w-full h-full">
                        </div>
                        <p
                            class="w-full uppercase text-gray-400 txet-sm relative hover:text-white cursor-pointer transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-700 before:absolute before:bg-white  before:origin-center before:h-[2px] before:w-0 hover:before:w-[50%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-700 after:absolute after:bg-white after:origin-center after:h-[2px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%]">
                            SPA</p>
                    </a>

                </div>

            </div>

            <div class="border border-[#c5a880] rounded-full w-full mx-auto px-4"> </div>

            <div class="flex justify-center items-center gap-4">
                <div class="md:w-12 w-8 h-auto hover:scale-90 transition-all duration-300 ease-in-out cursor-pointer">
                    <img src="/images/icon/facebook_0.png" alt="" class="w-full h-full">
                </div>
                <div class="md:w-12 w-8 h-auto hover:scale-90 transition-all duration-300 ease-in-out cursor-pointer">
                    <img src="/images/icon/twitter.png" alt="" class="w-full h-full">
                </div>
                <div class="md:w-12 w-8 h-auto hover:scale-90 transition-all duration-300 ease-in-out cursor-pointer">
                    <img src="/images/icon/instagram (1)_0.png" alt="" class="w-full h-full filter"  >
                </div>
            </div>

        </div>

    </div>

    <div class="relative w-full p-1 bg-[#1b2131] flex justify-center items-center">
        <p class="text-sm font-[300] uppercase text-white">
            COPYRIGHT © 2025 paradise.com
        </p>
    </div>
</footer>

@vite('resources/js/footer/dropdown.js')

