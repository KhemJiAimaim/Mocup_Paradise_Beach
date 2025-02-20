<nav
    class="w-full z-[99] mx-auto bg-slate-50 text-[#03203E] max-lg:bg-[#03203E]  items-center  transition-all duration-100 max-lg:fixed shadow-md">
    <div class=" flex flex-col items-center ">
        <div id="navbar"
            class=" max-w-[1536px] m-auto w-full grid grid-cols-3 transition-all duration-300 ease-in-out px-4 ">

            <a href="/" class="max-w-20 w-24 h-auto flex justify-center items-center rounded-full">
                <img src="/images/index/Logo.png" alt=""
                    class="w-full h-wull rounded-full shadow-md max-lg:hidden">
            </a>

            <div class="flex flex-col gap-3 justify-center items-center lg:py-4 max-lg:hidden">
                <h1
                    class="flex justify-center items-end font-prata uppercase text-[#03203E] gap-4 text-4xl max-xl:text-xl font-semibold tracking-[8px]">
                    <span class="flex items-end" style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);">
                        <span class="text-5xl max-xl:text-3xl">P</span>aradise
                    </span>
                    <span class="flex items-end" style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);">
                        <span class="text-5xl max-xl:text-3xl">B</span>each
                    </span>
                </h1>

                <div class="border border-[#03203E] rounded-full max-w-[80%] w-full mx-auto"></div>
                <h2 class="uppercase text-base tracking-[8px] font-medium"
                    style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);">
                    luxury hotel
                </h2>
            </div>

            <div class="flex justify-end items-center gap-4 rounded-full max-lg:hidden ">
                <div class="max-w-8 w-10 h-auto pb-1 hover:scale-105 transition-transform duration-300 cursor-pointer">
                    <img src="/images/index/1-th.png" alt="" class="w-full h-wull rounded-full shadow-md ">
                </div>
                <div
                    class="max-w-8 w-10 h-auto pb-1 border-b-2 border-[#c5a880] hover:scale-105 transition-transform duration-300 cursor-pointer">
                    <img src="/images/index/2-En.png" alt="" class="w-full h-wull rounded-full shadow-md">
                </div>
                <a href="tel:0901234567"
                    class="flex gap-2 cursor-pointer hover:scale-105 transition-transform duration-300">
                    <div class="max-w-6 w-8 h-auto">
                        <img src="/images/index/icon-1.png" alt="" class="w-full h-wull">
                    </div>
                    <p class="text-base text-[#c5a880]">
                        090-123-4567
                    </p>
                </a>
            </div>

        </div>

        <div class="flex justify-between items-center w-full lg:hidden p-4 py-2">
            <a href="/" class="max-w-16 w-12 h-auto rounded-full border p-.5 bg-white">
                <img src="/images/index/Logo.png" alt="" class="w-full h-wull rounded-full">
            </a>

            <button data-collapse-toggle="navbar-dropdown" type="button"
                class="mobile-menu-button inline-flex items-center w-12 h-10 justify-center"
                aria-controls="navbar-dropdown" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="ham hamRotate ham1" viewBox="0 0 100 100" width="80"
                    onclick="this.classList.toggle('active')">
                    <path class="line top"
                        d="m 30,33 h 40 c 0,0 9.044436,-0.654587 9.044436,-8.508902 0,-7.854315 -8.024349,-11.958003 -14.89975,-10.85914 -6.875401,1.098863 -13.637059,4.171617 -13.637059,16.368042 v 40" />
                    <path class="line middle" d="m 30,50 h 40" />
                    <path class="line bottom"
                        d="m 30,67 h 40 c 12.796276,0 15.357889,-11.717785 15.357889,-26.851538 0,-15.133752 -4.786586,-27.274118 -16.667516,-27.274118 -11.88093,0 -18.499247,6.994427 -18.435284,17.125656 l 0.252538,40" />
                </svg>
            </button>
        </div>

        {{-- MENU --}}
        <div id="navbar-menu"
            class="top-32 bg-[#03203E] w-full m-auto py-2 max-lg:hidden font-kanit transition-transform duration-300 px-4">
            <div class="flex max-w-[1280px] mx-auto justify-between  items-center gap-8 ">

                <div class="max-w-[50%] w-full flex flex-row justify-between lg:text-base  font-[300]">

                    <a href="/" class="flex justify-center min-w-[100px] basis-20">
                        <div id="text_menu" style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);"
                            class="{{ request()->is('/') ? 'border-b-2 border-white' : '' }} uppercase w-6 h-auto relative text-white hover:text-white cursor-pointer transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-700 before:absolute before:bg-white  before:origin-center before:h-[2px] before:w-0 hover:before:w-[50%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-700 after:absolute after:bg-white after:origin-center after:h-[2px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%]">
                            <img src="/images/index/icon-2.png" alt="" class="w-full h-full">
                        </div>

                    </a>

                    <a href="/rooms" class="flex justify-center basis-20">
                        <div style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);"
                            class="{{ request()->routeIs('rooms*') ? 'border-b-2 border-white' : '' }} uppercase relative text-white hover:text-white cursor-pointer transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-700 before:absolute before:bg-white  before:origin-center before:h-[2px] before:w-0 hover:before:w-[50%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-700 after:absolute after:bg-white after:origin-center after:h-[2px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%]">

                            ROOM
                        </div>
                    </a>
                    <a href="/spa_and_gym" class="flex justify-center basis-20">
                        <div style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);"
                            class="{{ request()->routeIs('spa*') ? 'border-b-2 border-white' : '' }} uppercase relative text-white hover:text-white cursor-pointer transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-700 before:absolute before:bg-white  before:origin-center before:h-[2px] before:w-0 hover:before:w-[50%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-700 after:absolute after:bg-white after:origin-center after:h-[2px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%]">
                            spa & gym
                        </div>
                    </a>
                    <a href="/gallery" class="flex justify-center basis-20"
                        style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">
                        <div
                            class="{{ request()->is('gallery') ? 'border-b-2 border-white' : '' }} uppercase relative text-white hover:text-white cursor-pointer transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-700 before:absolute before:bg-white  before:origin-center before:h-[2px] before:w-0 hover:before:w-[50%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-700 after:absolute after:bg-white after:origin-center after:h-[2px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%]">

                            GALLERY
                        </div>
                    </a>
                    <a href="/contact" class="flex justify-center basis-20"
                        style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">
                        <div
                            class="{{ request()->is('contact*') ? 'border-b-2 border-white' : '' }} uppercase relative text-white hover:text-white cursor-pointer transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-700 before:absolute before:bg-white  before:origin-center before:h-[2px] before:w-0 hover:before:w-[50%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-700 after:absolute after:bg-white after:origin-center after:h-[2px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%]">

                            CONTACT
                        </div>
                    </a>

                </div>

                <a href="{{ route('booking') }}"
                    class=" {{ request()->is('booking') ? 'bg-gradient-to-r from-[#c5a880] to-[#c5a880] ' : '' }}  px-6 py-2 text-base bg-gradient-to-r from-[#3c5590] to-[#7994d9] hover:bg-gradient-to-r hover:from-[#c5a880] hover:to-[#c5a880] rounded-md uppercase text-white flex justify-center items-center transition-all duration-300 ease-in-out shadow-md">
                    <p class="tracking-[2px]">Booking</p>
                </a>


            </div>
        </div>

    </div>
</nav>


{{-- mobile --}}
<div class="m-nav inset-0 shadow-md overflow-hidden z-[1000] flex justify-end fixed bg-[#1b2131]/50 backdrop-blur-sm ">
    <div class="w-[50%] max-sm:w-[80%] h-full bg-slate-50 p-2 px-4 flex flex-col ">
        <div class="flex justify-end">
            <div class="w-6 h-6 cursor-pointer hover:scale-110 transition-opacity duration-200" id="close-cate">
                <img src="/images/icon/close-bold-svgrepo-com.png" alt="Close Icon" class="w-full h-full">
            </div>
        </div>
        <div class="flex flex-col gap-y-8 flex-grow mt-4">
            {{-- MENU --}}
            <div class="w-full flex justify-start flex-col text-base gap-y-2 font-normal">
                <a href="/"
                    class="{{ request()->is('/') ? 'bg-[#03203E] text-white ' : '' }} uppercase flex justify-start p-2 rounded-md hover:text-white hover:bg-[#03203E]">
                    <div class="">
                        HOME
                    </div>
                </a>
                <hr>
                <a href="/rooms"
                    class="{{ request()->is('room*') ? 'bg-[#03203E] text-white' : '' }} uppercase flex justify-start p-2 rounded-md hover:text-white hover:bg-[#03203E]">
                    <div class="">

                        ROOM
                    </div>
                </a>
                <hr>
                <a href="/spa_and_gym"
                    class="{{ request()->is('spa*') ? 'bg-[#03203E] text-white' : '' }} uppercase flex justify-start p-2 rounded-md hover:text-white hover:bg-[#03203E]">
                    <div class="">
                        spa & gym
                    </div>
                </a>

                <hr>

                <a href="/gallery"
                    class="{{ request()->is('gallery') ? 'bg-[#03203E] text-white ' : '' }} uppercase flex justify-start p-2 rounded-md hover:text-white hover:bg-[#03203E] ">
                    <div class="">

                        GALLERY
                    </div>
                </a>
                <hr>
                <a href="/contact"
                    class="{{ request()->is('contact*') ? 'bg-[#03203E] text-white ' : '' }} uppercase flex justify-start p-2 rounded-md hover:text-white hover:bg-[#03203E] ">
                    <div class="">

                        CONTACT
                    </div>
                </a>
                <hr>
                <a href="{{ route('booking') }}" style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);"
                    class="{{ request()->is('booking') ? 'bg-gradient-to-r from-[#c5a880] to-[#c5a880] ' : '' }} w-full text-base p-2 bg-gradient-to-r from-[#3c5590] to-[#7994d9] hover:bg-gradient-to-l group cursor-pointer rounded-md uppercase text-white flex justify-center items-center">
                    <p class="tracking-[2px] transition-all duration-300 ease-in-out">booking</p>

                </a>

            </div>

        </div>
    </div>
</div>

@vite('resources/js/navbar/navbarM.js')
@vite('resources/js/navbar/navbar.js')
