@extends('layouts.main')

@section('title')
    eat & drink
@endsection

@section('style')
    @vite('resources/css/home/swiper.css')
    {{-- @vite('resources/css/room/room.css') --}}
@endsection


@section('contents')
    <section class=" w-full h-auto relative z-50">
        <div
            class="absolute inset-0 z-50  flex flex-col justify-center items-center gap-y-4  max-sm:gap-y-1 max-w-[1536px] md:m-auto mx-4">
            <div class="flex flex-col sm:gap-y-8 border-4 border-[#03203E] md:p-12 p-6 md:w-[60%] w-full">
                <p class="xl:text-8xl text-4xl capitalize text-white text-center font-[700] ss:tracking-[8px] tracking-widest"
                    data-aos="zoom-in" data-aos-duration="800" style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">
                    Eat & Drink
                </p>
            </div>
        </div>

        <div class="relative w-full h-[500px] max-2xl:h-[400px] max-lg:h-[250px] max-md:h-[150px]">
            <img src="/images/Drink/Head-slide-2.jpg" alt="Banner Image" class="w-full h-full object-cover object-bottom">
            <div class="absolute top-0 left-0 w-full h-full bg-[#03203E] opacity-50"></div>
        </div>
    </section>

    <div class="lg:py-16 py-[30px]">
        <div class="flex flex-col justify-center items-center gap-y-6 px-4" data-aos="zoom-in" data-aos-duration="500">
            <h1 class="uppercase text-[#03203E] xl:text-4xl md:text-2xl text-xl tracking-[4px] text-center"
                style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);">
                paradise seafood restaurant & bar
            </h1>

            <p class="font-light lg:text-lg text-base text-center text-gray-600 lg:max-w-[70%] w-full">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum earum amet repellendus nobis vitae,
                ipsam
                ipsum sint est dicta. Quidem porro explicabo modi esse eius numquam quo praesentium
            </p>
        </div>

        <section class="w-full overflow-hidden md:mt-16 mt-[30px] relative">
            <div
                class="absolute inset-0 z-50 flex flex-col justify-center items-start gap-y-4  max-sm:gap-y-1 max-w-[1320px] 2xl:m-auto xl:mx-12 mx-4">
                <div class="flex flex-col sm:gap-y-8 md:border-l-[50px] border-l-[20px] border-[#db5717] ss:p-12 p-6 xl:w-[60%] md:w-[80%] my-4   bg-slate-50 top-1/2 left-1/2"
                    data-aos="zoom-in" data-aos-duration="800">

                    <div
                        class="w-full h-auto flex flex-col xl:gap-12 lg:gap-8 gap-4 justify-start items-start lg:p-6 md:p-2 ">
                        <div class="flex flex-col gap-2">
                            <span class="ss:text-3xl text-2xl font-kanit text-[#03203E] tracking-widest capitalize">see the
                                sea restaurant</span>
                            <div class="border-t-2 border-gray-400 max-w-[3rem] w-full rounded-full"></div>
                        </div>

                        <p
                            class="xl:text-6xl capitalize ss:text-3xl text-2xl font-prata text-gray-600 font-[700] ss:tracking-[8px] tracking-widest">
                            romantic mood & gentle jazz
                        </p>

                        <p class="text-gray-400 ss:text-lg text-base ">Lorem ipsum dolor sit amet consectetur
                            adipisicing
                            elit.
                            Quibusdam, delectus consequatur similique alias
                            perferendis Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Quibusdam, delectus consequatur similique alias
                            perferendis
                        </p>

                    </div>

                </div>
            </div>
            <div class="relative w-full h-[700px] max-2xl:h-[650px] max-lg:h-[450px]">
                <img src="/images/Drink/Drink-1.jpg" alt="Banner Image" class="w-full h-full object-cover">
                <div class="absolute top-0 left-0 w-full h-full bg-black opacity-20"></div>
        </section>

        <section class="z-50 px-4 max-w-[1536px] m-auto overflow-hidden ">
            <div class="max-w-[1320px] m-auto" data-aos="fade-up" data-aos-duration="500">

                {{-- 1 --}}
                <div 
                    class="flex md:flex-row flex-col justify-between gap-4 lg:gap-y-8 gap-y-4 z-50 border-0 lg:mt-16 mt-[30px] md:border-r-[6px] border-[#db5717] items-center">

                    {{-- img --}}
                    <div
                        class="xl:w-[80%] lg:w-[70%] ss:w-[80%] w-full relative xl:h-[550px] lg:h-[450px] h-[380px] items-center ">

                        <div class="bg-[#db5717] absolute left-0 top-0 w-[90%] xl:h-[500px] lg:h-[400px] h-[340px] z-[1]">
                        </div>

                        <div class="absolute bottom-0 right-0 w-[90%] xl:h-[500px] lg:h-[400px] h-[340px] ">
                            <div class="swiper swiper-room h-auto items-center flex mx-auto">

                                <div class="swiper-wrapper items-center " style="background-color: transparent;">
                                    @for ($j = 0; $j < 4; $j++)
                                        <div class="swiper-slide w-auto flex-shrink-0"
                                            style="background-color: transparent;">
                                            <div
                                                class="w-full h-full cursor-pointer overflow-hidden rounded-sm flex justify-center">
                                                <div class="absolute bottom-0 right-0 w-full h-full z-50">
                                                    <img src="/images/Drink/Drink-2.jpg" alt="" class="w-full h-full">
                                                </div>
                                            </div>
                                        </div>
                                    @endfor
                                </div>


                                <div class="flex justify-between absolute top-[50%] right-0 w-full">
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

                    <div
                        class="w-full h-auto flex flex-col xl:gap-12 lg:gap-8 gap-4 justify-start items-start lg:p-[30px] md:p-4">
                        <div class="flex flex-col gap-2">
                            <span class="ss:text-3xl text-xl font-kanit text-[#03203E] tracking-widest ">Spa days & Spa
                                breaks</span>
                            <div class="border-t-2 border-gray-400 max-w-[3rem] w-full rounded-full"></div>
                        </div>
                        <p
                            class="xl:text-6xl ss:text-3xl text-2xl font-prata text-gray-600 font-[700] ss:tracking-[8px] tracking-widest">
                            wellness retreats
                        </p>

                        <p class="text-gray-600 ss:text-lg text-base ">Lorem ipsum dolor sit amet consectetur
                            adipisicing
                            elit.
                            Quibusdam, delectus consequatur similique alias
                            perferendis Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Quibusdam,
                        </p>

                    </div>
                </div>

                {{-- 2 --}}
                <div 
                    class="flex md:flex-row flex-col justify-between gap-4 lg:gap-y-8 gap-y-4 z-50 border-0 lg:mt-16 mt-[30px] md:border-l-[6px] border-[#db5717] items-center">

                    <div
                        class="w-full h-auto flex flex-col xl:gap-12  justify-start items-start lg:p-[30px] md:p-4 md:order-1 order-2">
                        <div class="flex flex-col gap-2">
                            <span class="ss:text-3xl text-xl font-kanit text-[#03203E] tracking-widest">Gym
                                Membership</span>
                            <div class="border-t-2 border-gray-400 max-w-[3rem] w-full rounded-full"></div>
                        </div>
                        <p
                            class="xl:text-6xl ss:text-3xl text-2xl font-prata text-gray-600 font-[700] ss:tracking-[8px] tracking-widest">
                            exercise class
                        </p>
                        <p class="text-gray-600 ss:text-lg text-base ">Lorem ipsum dolor sit amet consectetur
                            adipisicing
                            elit.
                            Quibusdam, delectus consequatur similique alias
                        </p>

                    </div>

                    {{-- img --}}
                    <div
                        class="xl:w-[80%] lg:w-[70%] ss:w-[80%] w-full relative xl:h-[550px] lg:h-[450px] h-[380px] flex justify-center items-center md:order-2 order-1">
                        <div class="bg-[#db5717] left-0 top-0 absolute w-[90%] xl:h-[500px]  lg:h-[400px] h-[340px] z-[1]">
                        </div>

                        <div class="absolute bottom-0 right-0 w-[90%] xl:h-[500px]  lg:h-[400px] h-[340px]">
                            <div class="swiper swiper-room h-auto items-center flex mx-auto">

                                <div class="swiper-wrapper items-center " style="background-color: transparent;">
                                    @for ($j = 0; $j < 4; $j++)
                                        <div class="swiper-slide w-auto flex-shrink-0"
                                            style="background-color: transparent;">
                                            <div
                                                class="w-full h-full cursor-pointer overflow-hidden rounded-sm flex justify-center">
                                                <div class="absolute bottom-0 right-0 w-full h-full z-50">
                                                    <img src="/images/Drink/Drink-3.jpg" alt="" class="w-full h-full">
                                                </div>
                                            </div>
                                        </div>
                                    @endfor
                                </div>


                                <div class="flex justify-between absolute top-[50%] right-0 w-full">
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
                </div>
            </div>
        </section>

        <section class="relative" data-aos="fade-up" data-aos-duration="500">
            <div class="swiper swiper-5 px-4 max-w-[1536px] m-auto overflow-hidden md:pt-20 pt-10">
                <div class="swiper-wrapper items-center">
                    {{-- 1 --}}
                    <div class="swiper-slide">
                        <a href="{{ route('eat_drink.index') }}"
                            class="relative group transition-all duration-300 ease-in-out w-full">
                            <div class="absolute inset-0 z-50 flex justify-center items-center m-4 border-2">
                                <div
                                    class="bg-[#162250] group-hover:border-[#c5a880] group-hover:bg-[#c5a880] transition-all duration-300 ease-in-out flex flex-col justify-center items-center gap-2 p-4 w-full absolute shadow-lg top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                    <p class="text-white lg:text-2xl text-xl capitalize"> Eat & Drink</p>
                                    <div class="border max-w-[50%] w-full"></div>
                                </div>
                                <img src="/images/Room/Gallery-2.jpg" alt="" class="w-full h-full object-cover">
                            </div>
                            <div class="relative w-full h-[500px] max-2xl:h-[400px] max-lg:h-[250px] max-md:h-[350px]">
                                <img src="/images/Room/Gallery-2.jpg" alt="Banner Image" class="w-full h-full object-cover">
                                <div class="absolute top-0 left-0 w-full h-full bg-white/30 backdrop-blur-sm"></div>
                            </div>
                        </a>
                    </div>
                    {{-- 2 --}}
                    <div class="swiper-slide">
                        <a href="{{ route('rooms.index') }}"
                            class="relative group transition-all duration-300 ease-in-out w-full">
                            <div class="absolute inset-0 z-50 flex justify-center items-center m-4 border-2">
                                <div
                                    class="bg-[#162250] group-hover:border-[#c5a880] group-hover:bg-[#c5a880] transition-all duration-300 ease-in-out flex flex-col justify-center items-center gap-2 p-4 w-full absolute shadow-lg top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                    <p class="text-white lg:text-2xl text-xl capitalize">rooms</p>
                                    <div class="border max-w-[50%] w-full"></div>
                                </div>
                                <img src="/images/Room/Gallery-12.jpg" alt="" class="w-full h-full object-cover">
                            </div>
                            <div class="relative w-full h-[500px] max-2xl:h-[400px] max-lg:h-[250px] max-md:h-[350px]">
                                <img src="/images/Room/Gallery-12.jpg" alt="Banner Image" class="w-full h-full object-cover">
                                <div class="absolute top-0 left-0 w-full h-full bg-white/30 backdrop-blur-sm"></div>
                            </div>
                        </a>
                    </div>

                    {{-- 3 --}}
                    <div class="swiper-slide">
                        <a href="{{ route('gallery.index') }}"
                            class="relative group transition-all duration-300 ease-in-out w-full">
                            <div class="absolute inset-0 z-50 flex justify-center items-center m-4 border-2">
                                <div
                                    class="bg-[#162250] group-hover:border-[#c5a880] group-hover:bg-[#c5a880] transition-all duration-300 ease-in-out flex flex-col justify-center items-center gap-2 p-4 w-full absolute shadow-lg top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                    <p class="text-white lg:text-2xl text-xl capitalize"> photo & gallery</p>
                                    <div class="border max-w-[50%] w-full"></div>
                                </div>
                                <img src="/images/Room/Gallery-11.jpg" alt="" class="w-full h-full object-cover">
                            </div>
                            <div class="relative w-full h-[500px] max-2xl:h-[400px] max-lg:h-[250px] max-md:h-[350px]">
                                <img src="/images/Room/Gallery-11.jpg" alt="Banner Image" class="w-full h-full object-cover">
                                <div class="absolute top-0 left-0 w-full h-full bg-white/30 backdrop-blur-sm"></div>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
            <button id="prev-btn" style="left:10px"
                class="button-prev5 absolute top-[60%] ss:left-0 left-4 -translate-y-1/2 bg-black bg-opacity-70 p-1 rounded-sm shadow-md hover:hover:scale-105 max-w-12 w-10 h-auto z-50">
                <img src="/images/icon/prev.png" alt="" class="w-full h-full filter invert">
            </button>
            <button id="next-btn" style="right:10px"
                class="button-next5 absolute top-[60%] ss:right-0 right-4 -translate-y-1/2 bg-black bg-opacity-70 p-1 rounded-sm shadow-md hover:scale-105 max-w-12 w-10 h-auto z-50">
                <img src="/images/icon/next.png" alt="" class="w-full h-full filter invert">
            </button>
        </section>

        <section class="lg:pt-20 pt-10 flex flex-col gap-4">
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
                    <div class="swiper swiper4 max-w-[1320px] mx-auto h-auto items-center relative">
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
    </div>
@endsection

@section('script')
    @vite('resources/js/room/swiper.js')
@endsection
