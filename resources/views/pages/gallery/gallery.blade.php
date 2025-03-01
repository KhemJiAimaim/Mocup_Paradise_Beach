@extends('layouts.main')

@section('title')
    gallery
@endsection

@section('style')
    @vite('resources/css/gallery/preview_img.css')
@endsection


@section('contents')
    <section class=" w-full h-auto relative z-50">
        <div
            class="absolute inset-0 z-50  flex flex-col justify-center items-center gap-y-4  max-sm:gap-y-1 max-w-[1536px] ss:m-auto mx-4">
            <div class="flex flex-col sm:gap-y-8 border-4 border-[#03203E] md:p-12 p-6 ss:w-[60%] w-full">
                <div class="xl:text-8xl lg:text-6xl text-4xl capitalize text-white text-center font-[700] ss:tracking-[8px] tracking-widest animate__animated animate__zoomIn" style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">
                    gallery
                </div>
            </div>
        </div>

        <div class="relative w-full h-[500px] max-2xl:h-[400px] max-lg:h-[250px] max-md:h-[150px]">
            <img src="/images/gallery/Head-slide-3.jpg" alt="Banner Image" class="w-full h-full object-cover">
            <div class="absolute top-0 left-0 w-full h-full bg-[#03203E] opacity-50"></div>
        </div>
    </section>

    @php
        $img = [
            '/images/gallery/Gallery-1.jpg',
            '/images/gallery/Gallery-2.jpg',
            '/images/gallery/Gallery-3.jpg',
            '/images/gallery/Gallery-4.jpg',
            '/images/gallery/Gallery-5.jpg',
            '/images/gallery/Gallery-6.jpg',
            '/images/gallery/Gallery-7.jpg',
            '/images/gallery/Gallery-8.jpg',
            '/images/gallery/Gallery-9.jpg',
            '/images/gallery/Gallery-10.jpg',
            '/images/gallery/Gallery-11.jpg',
            '/images/gallery/Gallery-12.jpg',
            '/images/gallery/Gallery-13.jpg',
            '/images/gallery/Gallery-14.jpg',
            '/images/gallery/Gallery-15.jpg',
            '/images/gallery/Gallery-16.jpg',
        ];
    @endphp

    <div class="lg:py-16 py-[30px]">
        <section class="max-w-[1536px] m-auto px-4">
            {{-- GALLERY --}}

            <div
                class="max-w-[1536px] m-auto grid grid-cols-2 md:grid-cols-4 md:gap-4 gap-2 image-gallery transition-all ease-in-out duration-300">
                @for ($i = 0; $i < 4; $i++)
                    <div class="grid md:gap-4 gap-2">
                        @for ($j = 0; $j < 4; $j++)
                            @php
                                $index = $i * 4 + $j;
                            @endphp
                            <div class="h-auto max-w-full z-50 relative cursor-pointer image-container" data-aos="zoom-in"
                                data-aos-duration="500">
                                <img src="{{ $img[$index] }}" alt="Image"
                                    class="w-full h-full rounded-sm hover:opacity-70 gallery-image object-cover">
                                <div
                                    class="absolute inset-0 text-white rounded-md bg-gradient-to-b from-[#224e4e] to-[#012020] opacity-0 hover:opacity-70 flex justify-center items-center transition-opacity duration-300">
                                    <img src="/images/icon/eye.png" alt="View Icon"
                                        class="w-auto h-auto max-w-12 max-h-12 opacity-100 view-icon">
                                    VIEW
                                </div>
                            </div>
                        @endfor
                    </div>
                @endfor
            </div>
        </section>

        <section class="bg-slate-50 overflow-hidden lg:pt-20 lg:pb-[30px] pt-[30px] ">

            <div class="flex justify-between items-center md:flex-row flex-col w-full lg:gap-4 gap-2  h-full">

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
                    <div class="max-w-[700px] flex flex-col ss:gap-6 gap-4 justify-start items-start">
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
                        <div class="w-[50%]">
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
    </div>

    <!-- Popup GALLERY -->
    <div id="image-popup"
        class="fixed inset-0 flex flex-col gap-2 items-center justify-center bg-black bg-opacity-50 hidden z-[100]">

        <div
            class="relative bg-transparent xl:w-[900px] sm:w-[700px] w-full 2xl:h-[600px] xl:h-[600px] md:h-[450px] xs:h-[400px] h-[260px] px-4">
            <div class="swiper mySwiper_img text-black ">
                <div class="swiper-wrapper  ">
                    <!-- ใส่รูปในแต่ละ slide -->
                    @for ($i = 0; $i < 4; $i++)
                        @for ($j = 0; $j < 4; $j++)
                            @php
                                $index = ($i * 4 + $j) % count($img);
                            @endphp
                            <div class="swiper-slide ">
                                <img src="{{ $img[$index] }}" alt="Image" class="w-full h-full">
                            </div>
                        @endfor
                    @endfor
                </div>

                <div
                    class="swiper-button-next bg-[#03203E] bg-opacity-30 p-2 rounded-full shadow-md hover:bg-[#03203E] w-10 h-10 flex items-center justify-center">
                </div>
                <div
                    class="swiper-button-prev bg-[#03203E] bg-opacity-30 p-2 rounded-full shadow-md hover:bg-[#03203E] w-10 h-10 flex items-center justify-center">
                </div>
            </div>

            <div class="flex absolute justify-end items-end cursor-pointer group right-2 top-2 z-[101]" id="popup-close">
                <div class="md:w-12 md:h-12 w-8 h-8 cursor-pointer border-2 flex justify-end items-end bg-white rounded-full md:p-2 mx-4
                     group-hover:border-[#03203E] transition-all duration-300 ease-in-out"
                    id="close-cate">
                    <img src="/images/icon/close-bold-svgrepo-com.png" alt="Close Icon" class="w-full h-full">
                </div>
            </div>

        </div>
    </div>
@endsection



@section('script')
    @vite('resources/js/gallery/swiper.js')
    @vite('resources/js/home/swl.js')
@endsection
