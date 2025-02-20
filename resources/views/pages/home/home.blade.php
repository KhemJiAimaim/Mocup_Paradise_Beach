@extends('layouts.main')

@section('title')
    home
@endsection

@section('style')
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    @vite('resources/css/home/swiper.css')
@endsection

@section('contents')
    {{-- @include('pages.home.swiper') --}}

    {{-- 1 banner --}}
    <section class="relative h-[600px] max-2xl:h-[500px] max-lg:h-[350px] max-md:h-[250px] ">
        <div class="relative w-full h-[550px] max-2xl:h-[450px] max-lg:h-[300px] max-md:h-[100px] max-sm:h-full">
            <img src="/images/Index/Head-slide-4.jpg" alt="Banner Image" class="w-full h-full object-cover">
            <div class="absolute top-0 left-0 w-full h-full bg-black opacity-10"></div>
        </div>

        <div
            class="absolute font-kanit right-0 bottom-0 max-sm:top-0 left-0 z-50  flex flex-col justify-center items-center gap-y-4 max-w-[1000px] m-auto bg-black bg-opacity-70 backdrop-blur-[2px] p-4 px-6 w-full rounded-sm">
            <div class="flex sm:flex-row  flex-col justify-between sm:items-end items-center w-full gap-4">
                <div class="flex flex-row xs:gap-4 gap-2 w-full">
                    <div class="mt-4 border-b border-white">
                        <label for="datepicker" class="block font-medium capitalize text-white text-base"> check
                            in
                            dete*</label>
                        <div class="flex justify-start items-center">
                            <div class="w-6 h-auto">
                                <img src="/images/index/icon-3.png" alt="">
                            </div>
                            <input type="text" id="datepicker"
                                class="mt-1 block  w-full bg-transparent text-white  outline-none px-3 py-2 placeholder-white"
                                placeholder="Check in">
                        </div>
                    </div>

                    <div class="mt-4 border-b border-white">
                        <label for="datepicker" class="block font-medium capitalize text-white text-base">
                            check out
                            dete*</label>
                        <div class="flex justify-start items-center">
                            <div class="w-6 h-auto">
                                <img src="/images/index/icon-3.png" alt="">
                            </div>
                            <input type="text" id="datepicker"
                                class="mt-1 block  w-full bg-transparent  shadow-sm text-white  outline-none px-3 py-2 placeholder-white"
                                placeholder="Check out">
                        </div>
                    </div>
                </div>

                <div class="relative flex space-x-4 w-full ss:px-4">
                    <!-- Rooms Menu -->
                    <div class="border rounded-sm p-2 flex justify-between items-center w-full ss:text-base text-sm shadow-md relative"
                        id="toggle-rooms">
                        <span class="capitalize text-center text-white">Rooms</span>
                        <div class="w-5 h-auto">
                            <img src="/images/icon/ep_arrow-up.png" alt=""
                                class="w-full h-full transition-transform duration-300 arrow-icon" id="arrow-icon-rooms">
                        </div>
                        <div class="dropdown-menu bg-white absolute top-full mt-2 left-0 border border-[#c5a880] w-[250px] h-auto hidden opacity-0 transition-opacity duration-300"
                            id="menu-rooms">
                            <p
                                class="text-white md:text-base text-sm font-[500] capitalize cursor-pointer px-4 py-2 bg-[#c5a880]">
                                Superior Room Double Bed
                            </p>
                            <hr>
                            <p
                                class="text-gray-600 md:text-base text-sm font-[500] capitalize cursor-pointer px-4 py-2 hover:bg-[#c5a880] hover:text-white">
                                Superior Room Twin Bed
                            </p>
                            <hr>
                            <p
                                class="text-gray-600 md:text-base text-sm font-[500] capitalize cursor-pointer px-4 py-2 hover:bg-[#c5a880] hover:text-white">
                                Standard Room Double Bed
                            </p>
                            <hr>
                            <p
                                class="text-gray-600 md:text-base text-sm font-[500] capitalize cursor-pointer px-4 py-2 hover:bg-[#c5a880] hover:text-white">
                                Standard Room Twin Bed
                            </p>
                        </div>
                    </div>

                    <!-- Guests Menu -->
                    <div class="border rounded-sm p-2 flex justify-between items-center w-full ss:text-base text-sm shadow-md relative"
                        id="toggle-guests">
                        <span class="capitalize text-center text-white">Guests</span>
                        <div class="w-5 h-auto">
                            <img src="/images/icon/ep_arrow-up.png" alt=""
                                class="w-full h-full transition-transform duration-300 arrow-icon" id="arrow-icon-guests">
                        </div>
                        <div class="dropdown-menu bg-white absolute top-full mt-2 ss:left-0 right-0 border border-[#c5a880] w-[250px] h-auto hidden opacity-0 transition-opacity duration-300"
                            id="menu-guests">
                            <p
                                class="text-white md:text-base text-sm font-[500] capitalize cursor-pointer px-4 py-2 bg-[#c5a880]">
                                1 Guest
                            </p>
                            <hr>
                            <p
                                class="text-gray-600 md:text-base text-sm font-[500] capitalize cursor-pointer px-4 py-2 hover:bg-[#c5a880] hover:text-white">
                                2 Guests
                            </p>
                            <hr>
                            <p
                                class="text-gray-600 md:text-base text-sm font-[500] capitalize cursor-pointer px-4 py-2 hover:bg-[#c5a880] hover:text-white">
                                3 Guests
                            </p>
                            <hr>
                            <p
                                class="text-gray-600 md:text-base text-sm font-[500] capitalize cursor-pointer px-4 py-2 hover:bg-[#c5a880] hover:text-white">
                                4+ Guests
                            </p>
                        </div>
                    </div>
                </div>

                <button
                    class="group border-2 border-[#c5a880] hover:border-[#03203E] hover:bg-[#03203E] rounded-sm p-2 bg-[#c5a880] items-center w-[30%] ss:text-base text-sm shadow-md cursor-pointer transition-all duration-200 ease-in-out">
                    <span
                        class="capitalize text-center text-white group-hover:scale-110 tracking-[2px] transition-all duration-300 ease-in-out">Search</span>
                </button>

            </div>
        </div>
    </section>

    {{-- 2 --}}
    <section class="max-w-[1536px] mx-auto px-4 overflow-hidden py-[30px] font-kanit">
        <div class="flex flex-col justify-center items-center gap-y-6" data-aos="zoom-in" data-aos-duration="500">
            <h1 class="capitalize text-[#03203E] text-3xl max-xl:text-xl tracking-[4px] text-center"
                style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);">
                paradise beach hotel | samui Island
            </h1>

            <div class="flex gap-2">
                @for ($i = 0; $i < 5; $i++)
                    <div class="w-6 h-auto">
                        <img src="/images/icon/star-svgrepo-com.png" alt="">
                    </div>
                @endfor
            </div>

            <p class="font-light ss:text-lg text-base text-center text-gray-600 ss:max-w-[80%] w-full">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum earum amet repellendus nobis vitae, ipsam
                ipsum sint est dicta. Quidem porro explicabo modi esse eius numquam quo praesentium, error deserunt!
            </p>

            <a href="{{ route('gallery.index') }}"
                class="uppercase font-light bg-[#03203E] border-2 border-[#03203E] hover:border-[#c5a880] hover:bg-[#c5a880] text-white text-center ss:text-base text-sm py-2 px-4 transition-all duration-300 ease-in-out">
                see photo gallery
            </a>
        </div>
    </section>

    {{-- 3 --}}
    <section class="max-w-[1536px] mx-auto overflow-hidden px-4 relative">

        <div class="flex md:flex-row flex-col items-center gap-6 lg:gap-y-8 gap-y-4 z-50">

            {{-- img --}}
            <div class="xl:w-[60%] lg:w-[70%] ss:w-[80%] w-full relative lg:h-[450px] h-[380px]" data-aos="fade-right"
                data-aos-duration="500">

                <div class="bg-[#03203E] w-[90%] lg:h-[400px] absolute h-[340px] z-[1]">
                </div>
                <div class="absolute right-0 w-[90%] ">
                    <div class="swiper swiper2 h-auto items-center pb-8 flex mx-auto">

                        <div class="swiper-wrapper items-center " style="background-color: transparent;">
                            @for ($i = 0; $i < 4; $i++)
                                <div class="swiper-slide w-auto flex-shrink-0" style="background-color: transparent;">
                                    <div
                                        class="w-full lg:h-[450px] h-[380px] right-0 cursor-pointer overflow-hidden rounded-sm flex justify-center">
                                        <div class="absolute bottom-0 right-0 w-full lg:h-[400px] h-[340px] z-50">
                                            <img src="/images/Index/Index-1.jpg" alt="" class="w-full h-full">
                                        </div>
                                    </div>
                                </div>
                            @endfor
                        </div>


                        <div class="flex justify-between absolute top-[60%] right-0 w-full">
                            <button id="prev-btn"
                                class="button-prev -translate-y-1/2 bg-white bg-opacity-70 p-1 rounded-sm shadow-md hover:hover:scale-105 max-w-12 w-8 h-auto z-50">
                                <img src="/images/icon/prev.png" alt="" class="w-full h-full">
                            </button>
                            <button id="next-btn"
                                class="button-next -translate-y-1/2 bg-white bg-opacity-70 p-1 rounded-sm shadow-md hover:scale-105 max-w-12 w-8 h-auto z-50">
                                <img src="/images/icon/next.png" alt="" class="w-full h-full">
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full flex flex-col ss:gap-6 gap-4 justify-center items-start" data-aos="fade-left"
                data-aos-duration="500">
                <div class="flex flex-col gap-2">
                    <span class="ss:text-3xl text-xl font-kanit text-[#03203E] tracking-widest capitalize">rooms</span>
                    <div class="border-t-2 border-gray-400 max-w-[3rem] w-full rounded-full"></div>
                </div>
                <p class="font-prata lg:text-5xl ss:text-3xl text-2xl text-gray-600 tracking-widest font-[700]">So quiet,
                    so
                    cosy, so comfy
                </p>
                <p class="text-gray-600 ss:text-base text-sm ">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Quibusdam, delectus consequatur similique alias
                    perferendis fugiat natus doloribus earum ducimus deleniti, sit repellendus vel mollitia. Fugiat
                    dignissimos
                    nisi labore animi eveniet.
                </p>

                <div class="flex justify-center items-center md:justify-start w-full">
                    <a href="{{ route('rooms.index') }}"
                        class="font-light uppercase bg-[#03203E] border-2 border-[#03203E] hover:border-[#c5a880] hover:bg-[#c5a880] text-white text-center ss:text-base text-sm py-2 px-4 transition-all duration-300 ease-in-out">
                        see our rooms
                    </a>
                </div>
            </div>
        </div>

    </section>

    {{-- 4 --}}
    <section class="overflow-hidden lg:pt-20 lg:pb-10 py-10">
        <div class="bg-[#db5717] w-full p-4 relative">

            <div class="border p-4 w-full">
                <div
                    class="w-full flex justify-between items-center max-w-[1536px] mx-auto  md:flex-row flex-col gap-6 lg:gap-y-8 gap-y-4">
                    <div class="w-full flex flex-col ss:gap-6 gap-4 justify-center items-start" data-aos="fade-left"
                        data-aos-duration="500">
                        <div class="flex flex-col gap-2">
                            <span class="ss:text-3xl text-xl font-kanit text-white tracking-widest capitalize">Eat &
                                drink</span>
                            <div class="border-t-2 border-white max-w-[3rem] w-full rounded-full"></div>
                        </div>
                        <p class="font-prata lg:text-6xl ss:text-4xl text-2xl text-white tracking-widest font-[700]">
                            Dine out... & miss out
                        </p>
                        <p class="text-white ss:text-base text-sm ">Lorem ipsum dolor sit amet consectetur adipisicing
                            elit.
                            Quibusdam, delectus consequatur similique alias
                            perferendis fugiat natus doloribus earum ducimus deleniti, sit repellendus vel mollitia. Fugiat
                            dignissimos
                            nisi labore animi eveniet. </p>
                        <div class="flex justify-center items-center md:justify-start w-full">
                            <a href="{{ route('eat_drink.index') }}"
                                class="font-light uppercase bg-transparent border-2 border-white hover:border-[#c5a880] hover:bg-[#c5a880] text-white text-center ss:text-base text-sm py-2 px-4 transition-all duration-300 ease-in-out">
                                see the restaurant
                            </a>
                        </div>
                    </div>

                    <div class="md:w-[40%] w-full">
                        <div class="swiper swiper3 absolute lg:-top-24 top-0  items-center" data-aos="fade-right"
                            data-aos-duration="500">
                            <div class="swiper-wrapper items-center">
                                @for ($i = 0; $i < 4; $i++)
                                    <div class="swiper-slide w-full relative z-50 flex justify-center m-0 p-0"
                                        style="background-color: transparent;">
                                        <div class=" w-full lg:h-[500px] h-[340px] relative">
                                            <img src="/images/Index/Index-2.jpg" alt=""
                                                class="w-full h-full shadow-md">
                                        </div>
                                    </div>
                                @endfor
                            </div>

                            <div class="flex justify-between  absolute top-[50%] w-full">
                                <button id="prev-btn"
                                    class="button-prev3 -translate-y-1/2 bg-white bg-opacity-70 p-1 rounded-sm shadow-md hover:hover:scale-105 max-w-12 w-8 h-auto z-50">
                                    <img src="/images/icon/prev.png" alt="" class="w-full h-full">
                                </button>
                                <button id="next-btn"
                                    class="button-next3 -translate-y-1/2 bg-white bg-opacity-70 p-1 rounded-sm shadow-md hover:scale-105 max-w-12 w-8 h-auto z-50">
                                    <img src="/images/icon/next.png" alt="" class="w-full h-full">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    {{-- 5 --}}
    <section class="bg-slate-50 overflow-hidden max-w-[1536px] mx-auto px-4">
        <div class="flex justify-between items-center flex-row max-ss:flex-col xl:gap-6 md:gap-4 gap-2">
            <div class="w-[50%] max-ss:w-full h-auto xl:px-8 flex justify-center items-center max-ss:order-2 md:block hidden"
                data-aos="fade-right" data-aos-duration="800">
                <div class="w-full xl:h-[600px] md:h-[350px] h-[200px]">
                    <img src="/images/Index/Index-3.jpg" alt="" class="w-full h-full">
                </div>
            </div>

            <div class="w-full flex flex-col xl:gap-6 gap-4 justify-start items-start max-ss:order-1" data-aos="fade-left"
                data-aos-duration="500">

                <div class="flex flex-col gap-y-6">
                    <div class="flex flex-col gap-2">
                        <span class="ss:text-3xl text-xl font-kanit text-[#03203E] tracking-widest capitalize">Spa &
                            Gym</span>
                        <div class="border-t-2 border-gray-400 max-w-[3rem] w-full rounded-full"></div>
                    </div>
                    <p
                        class="font-prata lg:text-5xl ss:text-3xl text-2xl text-gray-600 tracking-widest font-[700] capitalize">
                        Relax, renew, revive
                    </p>
                    <p class="text-gray-600 ss:text-base text-sm ">Lorem ipsum dolor sit amet consectetur adipisicing
                        elit.
                        Quibusdam, delectus consequatur similique alias
                        perferendis fugiat natus doloribus earum ducimus deleniti, sit repellendus vel mollitia. Fugiat
                        dignissimos
                        nisi labore animi eveniet. </p>

                    <div class="flex justify-center items-center md:justify-start w-full">
                        <a href="{{ route('spa.index') }}"
                            class="font-light w-52 uppercase bg-[#03203E] border-2 border-[#03203E] hover:border-[#c5a880] hover:bg-[#c5a880] text-white text-center ss:text-base text-sm py-2 px-4 transition-all duration-300 ease-in-out">
                            see the spa & gym
                        </a>
                    </div>
                </div>


                <div class="grid grid-cols-2 items-center xl:gap-4 md:gap-4 gap-2">
                    <div class="w-full xl:h-[600px] md:h-[350px] h-[250px]">
                        <img src="/images/Index/Gallery-1.jpg" alt="" class="w-full h-full object-cover">
                    </div>
                    <div class="w-full xl:h-[600px] md:h-[350px] h-[250px]">
                        <img src="/images/Index/Index-5.jpg" alt="" class="w-full h-full object-cover ">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- 6 --}}
    <section class="bg-slate-50 overflow-hidden lg:pt-20 lg:pb-10 pt-10 ">

        <div class="flex justify-between items-center md:flex-row flex-col w-full lg:gap-4 gap-2   h-full">

            <div class="relative z-50 w-full h-[300px] md:block hidden" data-aos="fade-right" data-aos-duration="500">
                <div class="absolute inset-0 top-[10%] w-full h-full z-30">
                    <img src="/images/Index/Bg-1.png" alt="" class="w-full h-full object-cover">
                </div>

                <div
                    class="bg-[#4ebfe9] bg-opacity-75 absolute p-2 z-40 top-0 md:right-4 flex justify-center items-center md:w-[350px] w-full h-full">
                    <div class="border w-full h-full flex justify-center items-center drop-shadow-md">
                        <img src="/images/Index/phone.png" alt=""
                            class="md:w-[280px]  md:h-[500px] w-[150px] h--[300px] drop-shadow-md">
                    </div>
                </div>
            </div>


            <div class="w-full relative p-4" data-aos="fade-left" data-aos-duration="500">
                <div class="max-w-[700px] flex flex-col md:gap-6 gap-4 justify-start items-start">
                    <div class="flex flex-col gap-2">
                        <span class="ss:text-3xl text-xl font-kanit text-[#03203E] tracking-widest capitalize">special
                            offers</span>
                        <div class="border-t-2 border-[#03203E] max-w-[3rem] w-full rounded-full"></div>
                    </div>

                    <p class="text-gray-600 ss:text-base text-sm ">Lorem ipsum dolor sit amet consectetur adipisicing
                        elit.
                        Quibusdam, delectus consequatur similique alias
                        perferendis fugiat natus doloribus earum ducimus deleniti, sit repellendus vel mollitia. Fugiat
                        dignissimos
                        nisi labore animi eveniet. </p>
                    <div class="lg:w-[60%] w-full">
                        <label for="search"
                            class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white uppercase">Enter your
                            Email
                            address </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                <div class="w-6 h-6">
                                    <img src="/images/icon/email.png" alt="" class="w-full h-full">
                                </div>
                            </div>
                            <input type="email"
                                class="block w-full pl-10 p-2 text-sm text-gray-600 border border-gray-300 rounded-sm bg-transparent outline-none"
                                placeholder="Enter your email address" required />
                        </div>
                    </div>
                    <p class="text-gray-600 ss:text-base text-sm ">Lorem ipsum dolor sit amet consectetur adipisicing
                        elit.
                        Quibusdam, </p>

                    <div class="flex flex-col gap-y-2">
                        <p class="capitalize text-[#03203E] ss:text-base text-sm font-[500]">
                            what for?
                        </p>
                        <div class="flex flex-row flex-wrap gap-4">
                            <div class="flex items-center">
                                <input id="default-checkbox" type="checkbox" value=""
                                    class="w-6 h-6 text-blue-600 bg-gray-100 border-gray-300 rounded-sm ">
                                <label for="default-checkbox"
                                    class="ms-2 ss:text-base text-sm text-gray-600 capitalize">rooms</label>
                            </div>
                            <div class="flex items-center">
                                <input id="default-checkbox" type="checkbox" value=""
                                    class="w-6 h-6 text-blue-600 bg-gray-100 border-gray-300 rounded-sm ">
                                <label for="default-checkbox"
                                    class="ms-2 ss:text-base text-sm text-gray-600 capitalize">restaurant
                                    & bar</label>
                            </div>
                            <div class="flex items-center">
                                <input id="default-checkbox" type="checkbox" value=""
                                    class="w-6 h-6 text-blue-600 bg-gray-100 border-gray-300 rounded-sm ">
                                <label for="default-checkbox"
                                    class="ms-2 ss:text-base text-sm text-gray-600 capitalize">spa &
                                    gym</label>
                            </div>
                        </div>

                    </div>

                    <div class="flex justify-center items-center md:justify-start w-full">
                        <div id="s-massage"
                            class="font-light uppercase bg-[#03203E] border-2 border-[#03203E] hover:border-[#c5a880] hover:bg-[#c5a880] text-white  text-center ss:text-base text-sm py-2 px-4 transition-all duration-300 ease-in-out">
                            send me offers
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>

    {{-- 7 --}}
    <section class="relative 2xl:h-[800px] lg:h-[600px] ss:h-[350px] h-[250px] lg:my-12 my-6" >
        <div class="relative w-full 2xl:h-[50%] lg:h-[40%] h-[30%] ">
            <img src="/images/Index/Head-slide-4.jpg" alt="Banner Image" class="w-full h-full object-cover">
            <div class="absolute top-0 left-0 w-full h-full bg-black/50 backdrop-blur-sm"></div>
        </div>

        <div
            class="h-full absolute font-kanit inset-0 top-0 left-0 z-50 flex flex-col justify-center items-center gap-y-6 max-w-[1536px] m-auto w-full py-4 ss:px-4" >

            <p class="text-white text-3xl max-xl:text-xl tracking-[4px] font-medium"
                style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);" data-aos="zoom-in" data-aos-duration="500"> How to
                find us </p>

            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3825.7658682734395!2d102.83243147514484!3d16.48738888425428!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31228ae99b598b43%3A0x56b4538d2ace7037!2z4Lij4Lix4Lia4LiX4Liz4LmA4Lin4LmH4Lia4LmE4LiL4LiV4LmMIOC4guC4reC4meC5geC4geC5iOC4mSBXWU5OU09GVCBTT0xVVElPTiBDTy4sTFRELg!5e0!3m2!1sth!2sth!4v1739169949749!5m2!1sth!2sth"
                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    {{-- 8 --}}
    <section class="pb-[30px] flex flex-col gap-4">
        <div class="flex flex-col justify-center items-center gap-4" data-aos="zoom-in" data-aos-duration="500">
            <p class=" text-[#03203E] text-3xl max-xl:text-xl tracking-[4px] font-prata capitalize font-bold"> what's
                nearby</p>
            <p class="font-light ss:text-lg text-base text-center text-gray-600 ss:max-w-[80%] w-full">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
            </p>
        </div>

        <div class="relative xl:h-[460px] ss:h-[380px] h-[350px]">
            <div class="relative w-full 2xl:h-[250px] lg:h-[200px] h-[200px] bg-[#865b30]"></div>

            <div
                class="h-full absolute font-kanit inset-0 z-50 flex flex-col justify-center items-center gap-y-6 max-w-[1536px] m-auto mt-2 ss:px-4 px-1">
                <div class="swiper swiper4 max-w-[1320px] mx-auto h-auto items-center relative pb-8">
                    <div class="swiper-wrapper items-center">
                        @for ($i = 0; $i < 2; $i++)
                            <div class="swiper-slide" style="background-color: transparent">
                                <div class="flex flex-col gap-4 justify-start items-center">
                                    <div class="max-w-full md:w-full w-[320px] h-[250px]">
                                        <img src="/images/Index/Index-6.jpg" alt="" class="w-full h-full">
                                    </div>
                                    <p class="ss:text-lg text-base text-[#03203E] capitalize"> central festival samui</p>
                                    <div class="border border-[#03203E] p-2 w-32 ss:text-lg text-base">
                                        0.7 km
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide" style="background-color: transparent">
                                <div class="flex flex-col gap-4 justify-start items-center">
                                    <div class="max-w-full md:w-full w-[320px] h-[250px]">
                                        <img src="/images/Index/Index-7.jpg" alt="" class="w-full h-full">
                                    </div>
                                    <p class="ss:text-lg text-base text-[#03203E] capitalize"> samui ariport</p>
                                    <div class="border border-[#03203E] p-2 w-32 ss:text-lg text-base">
                                        2.3 km
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide" style="background-color: transparent">
                                <div class="flex flex-col gap-4 justify-start items-center">
                                    <div class="max-w-full md:w-full w-[320px] h-[250px]">
                                        <img src="/images/Index/Index-8.jpg" alt="" class="w-full h-full">
                                    </div>
                                    <p class="ss:text-lg text-base text-[#03203E] capitalize"> night market</p>
                                    <div class="border border-[#03203E] p-2 w-32 ss:text-lg text-base">
                                        1.8 km
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide" style="background-color: transparent">
                                <div class="flex flex-col gap-4 justify-start items-center">
                                    <div class="max-w-full md:w-full w-[320px] h-[250px]">
                                        <img src="/images/Index/Index-7.jpg" alt="" class="w-full h-full">
                                    </div>
                                    <p class="ss:text-lg text-base text-[#03203E] capitalize">silver beach</p>
                                    <div class="border border-[#03203E] p-2 w-32 ss:text-lg text-base">
                                        0.3 km
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>

                <button id="prev-btn" style="left:10px"
                    class="button-prev4 absolute top-1/2 ss:left-0 left-4 -translate-y-1/2 bg-black bg-opacity-70 p-1 rounded-sm shadow-md hover:hover:scale-105 max-w-12 w-10 h-auto z-50">
                    <img src="/images/icon/prev.png" alt="" class="w-full h-full filter invert">
                </button>
                <button id="next-btn" style="right:10px"
                    class="button-next4 absolute top-1/2 ss:right-0 right-4 -translate-y-1/2 bg-black bg-opacity-70 p-1 rounded-sm shadow-md hover:scale-105 max-w-12 w-10 h-auto z-50">
                    <img src="/images/icon/next.png" alt="" class="w-full h-full filter invert">
                </button>
            </div>
        </div>

    </section>


    <!-- Popup แสดงวิดีโอ -->
    <div id="video-modal"
        class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center hidden z-[100] w-full">
        <div
            class="relative bg-transparent xl:w-[950px] sm:w-[700px] ss:w-[500px] w-[380px] h-[650px] max-xl:h-[500px] max-md:h-[350px] p-4">
            <!-- วิดีโอ -->

            <iframe id="video-frame" class="w-full h-full" frameborder="0" allow="autoplay; encrypted-media"
                allowfullscreen></iframe>
            <!-- ปุ่มปิด -->
            <div class="flex justify-center items-center cursor-pointer group mt-2" id="video-close">
                <p
                    class="border-2 flex justify-center items-center sm:w-10 sm:h-10 w-8 h-8 bg-white rounded-full text-black 
                group-hover:text-red-500 group-hover:border-red-500 transition-all duration-300 ease-in-out">
                    X
                </p>
            </div>
        </div>
    </div>

    <!-- Popup GALLERY -->
    <div id="image-popup" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden z-[100] ">
        <div
            class="relative bg-transparent  xl:w-[900px] sm:w-[700px] w-full 2xl:h-[600px] xl:h-[600px] md:h-[450px] xs:h-[400px] h-[260px] px-4">
            <div class="swiper mySwiper_img text-black ">
                <div class="swiper-wrapper  ">
                    <!-- ใส่รูปในแต่ละ slide -->
                    @for ($i = 0; $i < 2; $i++)
                        <div class="swiper-slide ">
                            <img src="/images/img/1111.png" alt="Image" class="w-full h-full ">
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/img/2222.png" alt="Image" class="w-full h-full">
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/img/3333.png" alt="Image" class="w-full h-full">
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/img/4444.png" alt="Image" class="w-full h-full">
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/img/5555.png" alt="Image" class="w-full h-full">
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/img/6666.png" alt="Image" class="w-full h-full">
                        </div>
                    @endfor
                </div>

                <div
                    class="swiper-button-next bg-[#03203E] bg-opacity-30 p-2 rounded-full shadow-md hover:bg-[#03203E] w-10 h-10 flex items-center justify-center">
                </div>
                <div
                    class="swiper-button-prev bg-[#03203E] bg-opacity-30 p-2 rounded-full shadow-md hover:bg-[#03203E] w-10 h-10 flex items-center justify-center">
                </div>
            </div>

            <div class="flex justify-center items-center cursor-pointer group mt-2" id="popup-close">
                <p
                    class="border-2 flex justify-center items-center sm:w-10 sm:h-10 w-8 h-8 bg-white rounded-full text-black group-hover:text-red-500 group-hover:border-red-500 transition-all duration-300 ease-in-out">
                    X</p>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    @vite('resources/js/home/swiper.js')
    @vite('resources/js/home/datepicker.js')
    @vite('resources/js/home/dropdown.js')
    @vite('resources/js/home/swl.js')
@endsection
