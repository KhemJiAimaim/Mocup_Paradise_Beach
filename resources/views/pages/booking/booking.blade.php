@extends('layouts.main')

@section('title')
    booking
@endsection

@section('style')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
@endsection


@section('contents')
    <section class=" w-full h-auto relative z-50">
        <div
            class="absolute inset-0 z-50  flex flex-col justify-center items-center gap-y-4  max-sm:gap-y-1 max-w-[1536px] ss:m-auto mx-4">
            <div class="flex flex-col sm:gap-y-8 border-4 border-[#03203E] md:p-12 p-6 ss:w-[60%] w-full">
                <p class="xl:text-8xl md:text-6xl text-4xl capitalize text-white text-center font-[700] ss:tracking-[8px] tracking-widest"
                    data-aos="zoom-in" data-aos-duration="800" style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">
                    booking
                </p>
            </div>
        </div>

        <div class="relative w-full h-[500px] max-2xl:h-[400px] max-lg:h-[250px] max-md:h-[150px]">
            <img src="/images/Booking/Head-slide-5.jpg" alt="Banner Image" class="w-full h-full object-cover">
            <div class="absolute top-0 left-0 w-full h-full bg-[#03203E] opacity-50"></div>
        </div>
    </section>

    <section class="max-w-[1320px] mx-auto px-4 lg:py-16 py-[30px] flex flex-row xl:gap-6 gap-2">

        <div class=" w-full h-full flex flex-col xl:gap-12 gap-4 ">
            <div class="static z-50 xl:flex xl:flex-row xl:flex-nowrap grid grid-cols-2  w-full xl:mb-12 xl:gap-0 gap-2 " data-aos="fade-up" data-aos-duration="800">
                <div class="xl:border-2 border-b-2 border-[#03203E] p-2 flex flex-row justify-start items-center gap-4 relative cursor-pointer w-full"
                    id="open-dropdown">
                    <div class="lg:w-10 w-8 h-auto xx:block hidden">
                        <img src="/images/icon/user.png" alt="" class="w-full h-full opacity-50">
                    </div>
                    <div class="flex flex-col justify-start items-start ">
                        <p class="text-[#03203E] lg:text-xl text-base font-[500]">Guests</p>
                        <div class="text-gray-400 lg:text-base text-sm flex flex-row gap-2 py-2 w-full">
                            <p id="adults-count">0 Adults,</p>
                            <p id="children-count">0 children</p>
                        </div>
                    </div>

                    <!-- Dropdown -->
                    <div id="guest-dropdown"
                        class="w-[250px] absolute top-full -bottom-14 left-0 h-[180px] bg-white mt-6 hidden z-50"
                        style="box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px; border:1px solid #9ca3af">

                        <div class="absolute -top-3.5 left-6 transform -translate-x-1/2 w-4 h-auto">
                            <img src="/images/icon/triangle.png" alt="" class="">
                        </div>

                        <div class="flex flex-col gap-4 absolute w-full z-50 p-4 overflow-hidden">
                            <!-- Close button -->
                            <div
                                class="absolute z-50 top-2 right-2 w-5 h-5 hover:scale-105 transition-all duration-300 ease-out group cursor-pointer">
                                <img src="/images/icon/close-bold-svgrepo-com.png" alt="Close Icon"
                                    class="w-full h-full opacity-30 group-hover:opacity-80" id="close-dropdown">
                            </div>

                            <div class="flex flex-col gap-2">
                                <p class="w-full text-lg max-ss:text-base font-kanit text-[#03203E] tracking-widest">Select
                                    Guests</p>
                                <div class="border-t-2 border-[#03203E] w-full rounded-full"></div>
                            </div>

                            <!-- Adults Section -->
                            <div class="flex flex-row justify-start items-end gap-4 w-full">
                                <p class="text-lg max-ss:text-base w-full">Adults</p>
                                <div class="flex flex-row border border-[#03203E] justify-end items-center">
                                    <div class="w-8 h-auto bg-[#03203E] cursor-pointer" id="minus-adult">
                                        <img src="/images/icon/minus.png" alt="" class="w-full h-full">
                                    </div>
                                    <p id="adult-number" class="w-12 border-[#03203E] text-center text-lg">0</p>
                                    <div class="w-8 h-auto bg-[#03203E] cursor-pointer" id="plus-adult">
                                        <img src="/images/icon/plus.png" alt="" class="w-full h-full">
                                    </div>
                                </div>
                            </div>

                            <!-- Children Section -->
                            <div class="flex flex-row justify-start items-end gap-4 w-full">
                                <p class="text-lg max-ss:text-base w-full">Children</p>
                                <div class="flex flex-row border border-[#03203E] justify-end items-center">
                                    <div class="w-8 h-auto bg-[#03203E] cursor-pointer" id="minus-child">
                                        <img src="/images/icon/minus.png" alt="" class="w-full h-full">
                                    </div>
                                    <p id="child-number" class="w-12 border-[#03203E] text-center text-lg">0</p>
                                    <div class="w-8 h-auto bg-[#03203E] cursor-pointer" id="plus-child">
                                        <img src="/images/icon/plus.png" alt="" class="w-full h-full">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div
                    class="xl:border-y-2 xl:border-r-2 border-b-2 border-[#03203E] p-2 flex flex-row lg:justify-start justify-between items-center gap-4 w-full">
                    <div class="lg:w-10 w-8 h-auto xx:block hidden z-10">
                        <img src="/images/icon/calendar.png" alt="" class="w-full h-full opacity-50">
                    </div>
                    <div class="flex flex-col justify-start items-start cursor-pointer w-full">
                        <p class="text-[#03203E] lg:text-xl text-base font-[500]">Check in</p>
                        <div class="flex justify-start items-center">
                            <input type="text" id="checkin-datepicker"
                                class="block lg:text-base text-sm w-full bg-transparent text-gray-600 outline-none py-2 placeholder-gray-600"
                                placeholder="">
                        </div>
                    </div>
                </div>

                <div
                    class="xl:border-y-2 border-b-2 border-[#03203E] p-2 flex flex-row lg:justify-start justify-between items-center gap-4 w-full">
                    <div class="lg:w-10 w-8 h-auto xx:block hidden z-10">
                        <img src="/images/icon/calendar.png" alt="" class="w-full h-full opacity-50">
                    </div>
                    <div class="flex flex-col justify-start items-start cursor-pointer w-full">
                        <p class="text-[#03203E] lg:text-xl text-base font-[500]">Check out</p>
                        <div class="flex justify-start items-center">
                            <input type="text" id="checkout-datepicker"
                                class="block lg:text-base text-sm w-full bg-transparent text-gray-600 outline-none py-2 placeholder-gray-600"
                                placeholder="">
                        </div>
                    </div>
                </div>

                <div
                    class="xl:border-y-2 xl:border-r-2 border-[#03203E] flex justify-center xl:items-center items-end xl:px-4 xl:py-4">
                    <div class="cursor-pointer bg-[#03203E] text-white px-6 text-center py-2 border-2 border-[#03203E] uppercase text-base hover:border-[#c5a880] hover:bg-[#c5a880] font-[500] transition-all duration-200 ease-in-out rounded-sm w-full max-xl:w-[60%] max-ss:w-[80%] "
                        style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);">
                        search
                    </div>
                </div>
            </div>

            <div class="w-full block md:hidden"
            data-aos="fade-up" data-aos-duration="800">
            @include('pages.booking.bookingNow')
        </div>
            @php
                $img = ['/images/booking/Bookking-1.jpg', '/images/booking/Bookking-2.jpg', '/images/booking/Bookking-3.jpg'];
            @endphp

            @for ($i = 0; $i < 3; $i++)
                <div class="border-2 md:border-gray-400 border-transparent xl:px-4 xl:py-6 md:p-4 flex xl:flex-row flex-col xl:gap-8 gap-4 rounded-sm z-10"
                    data-aos="fade-up" data-aos-duration="800">
                    <div class="flex xl:flex-col ss:flex-row flex-col max-w-full xl:w-[70%] xl:gap-8 gap-4 items-start ">
                        <div class="w-full max-h-full lg:h-[230px] ss:h-[180px] h-[200px]">
                            <img src="{{ asset($img[$i % count($img)]) }}" alt=""
                                class="w-full h-full rounded-sm">
                        </div>
                        <div class="flex xl:flex-col flex-row gap-4 flex-wrap max-w-full xl:w-full ss:w-[70%]">
                            <div class="flex flex-row gap-2 justify-start items-end">
                                <div class="w-8 h-auto">
                                    <img src="/images/Room/bed.png" alt="" class="w-full h-full opacity-40">
                                </div>
                                <p class="text-gray-600 xl:text-base text-sm capitalize">
                                    1 King bed
                                </p>
                            </div>

                            <div class="flex flex-row gap-2 justify-start items-end">
                                <div class="w-8 h-auto">
                                    <img src="/images/Room/croissant.png" alt=""
                                        class="w-full h-full opacity-40">
                                </div>
                                <p class="text-gray-600 xl:text-base text-sm capitalize">
                                    breakfast in bed
                                </p>
                            </div>

                            <div class="flex flex-row gap-2 justify-start items-end">
                                <div class="w-8 h-auto">
                                    <img src="/images/Room/rescale.png" alt="" class="w-full h-full opacity-40">
                                </div>
                                <p class="text-gray-600 xl:text-base text-sm">
                                    Room Size: 32 sq.m
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col w-full xl:gap-8 gap-4">
                        <div class="flex flex-col gap-2 ">
                            <p class="xl:text-3xl ss:text-2xl text-xl font-kanit text-[#03203E] tracking-widest">Suoerior
                                room
                                double bed
                            </p>

                            <p class="text-gray-600 xl:text-base text-sm ">Lorem ipsum dolor sit amet consectetur
                                adipisicing
                                elit.
                                Quibusdam, delectus consequatur similique alias
                                perferendis Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Quibusdam, delectus consequatur similique alias
                                perferendis
                            </p>
                        </div>

                        <div class="border-t-2 border-[#03203E] w-full rounded-full"></div>

                        <div class="flex ss:flex-row flex-col justify-between gap-y-4">
                            <div class="flex flex-col gap-2">
                                <p class="text-gray-600 xl::text-xl text-lg underline underline-offset-8">Super Saver
                                    Bed
                                    and Breakfast</P>
                                <p class="text-gray-600 xl:text-base text-sm">- breakfast in bed</P>
                                <p class="text-gray-600 xl:text-base text-sm">- Super Saver Bed and Breakfast</P>
                            </div>
                            <div class="flex flex-col ss:justify-end ss:text-right">
                                <p class="text-gray-600 xl:text-xl text-lg font-[500]">3,500 THB</P>
                                <p class="text-gray-600 xl:text-base text-sm">Per night</P>
                                <p class="text-gray-600 xl:text-base text-sm">Including taxes & fees</P>
                                <div class="flex justify-center">
                                    <div
                                        class="cursor-pointer text-center bg-[#03203E] w-[150px] text-white px-6 py-2 border-2 border-[#03203E] uppercase xl:text-base text-sm hover:border-[#c5a880] hover:bg-[#c5a880] font-[500] transition-all duration-200 ease-in-out rounded-sm mt-4">
                                        book now
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="border-t-2 border-[#03203E] max-ss:hidden  border-transparent w-full rounded-full"></div>
                    </div>
                </div>
            @endfor

        </div>


        <div class="max-w-full xl:w-[40%] w-[70%] md:block hidden"
            data-aos="fade-up" data-aos-duration="800">
            @include('pages.booking.bookingNow')
        </div>

    </section>

    
@endsection

@section('script')
    @vite('resources/js/booking/datepicker.js')
    @vite('resources/js/booking/dropdown.js')
    @vite('resources/js/booking/yourstayM.js')
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
@endsection
