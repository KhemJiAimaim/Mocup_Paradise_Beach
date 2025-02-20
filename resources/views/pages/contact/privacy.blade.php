@extends('layouts.main')

@section('title')
    privacy policy
@endsection

@section('style')
    @vite('resources/css/home/preview_img.css')
@endsection


@section('contents')
<section class=" w-full h-auto relative z-50">
    <div
        class="absolute inset-0 z-50  flex flex-col justify-center items-center gap-y-4  max-sm:gap-y-1 max-w-[1536px] ss:m-auto mx-4">
        <div class="flex flex-col sm:gap-y-8 border-4 border-[#03203E] ss:p-6 p-2 w-[80%]">
            <p class="xl:text-8xl lg:text-6xl md:text-3xl text-2xl capitalize text-white text-center font-[700] ss:tracking-[8px] tracking-widest"
                data-aos="zoom-in" data-aos-duration="800" style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">
                    privacy policy
                </p>
            </div>
        </div>

        <div class="relative w-full h-[500px] max-2xl:h-[400px] max-lg:h-[250px] max-md:h-[150px]">
            <img src="/images/Gallery/Head-bar-1.png" alt="Banner Image" class="w-full h-full object-cover">
            <div class="absolute top-0 left-0 w-full h-full bg-[#03203E] opacity-50"></div>
        </div>
    </section>


    <div class="overflow-hidden max-w-[1320px] mx-auto lg:py-16 py-12 ">
        <div class="mx-4 block break-all">
            <div class="w-full h-full ss:p-8 p-4 flex flex-col ss:gap-6 gap-4 justify-end items-start border-2 border-[#03203E] "
                data-aos="fade-up" data-aos-duration="500">


                <div class="flex flex-col gap-2">
                    <span class=" w-full lg:text-3xl text-xl font-kanit text-[#03203E] tracking-widest ">
                        Welcome to www.paradisebeachluxuryhotel.com
                    </span>

                    <div class="border-t-2 border-[#03203E] max-w-[3rem] w-full rounded-full"></div>
                </div>

                <p class="text-gray-600 text-base max-ss:text-sm">Lorem ipsum dolor sit amet consectetur adipisicing
                    elit.
                    Quibusdam, delectus consequatur similique alias
                    perferendis fugiat natus doloribus earum ducimus deleniti, Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Possimus quibusdam sunt harum dignissimos voluptas nulla itaque tempore numquam, atque
                    velit exercitationem necessitatibus. Est magni accusantium cum reiciendis dolorum error fugit ipsum
                    pariatur
                    amet soluta odit, temporibus, illo modi voluptate. Quod, quis pariatur, deserunt rerum sunt ad
                    voluptatem
                    eos maiores aliquam sequi consectetur.
                </p>

                <div class="text-gray-600 text-base max-ss:text-sm list-disc list-inside flex flex-col gap-2">
                    <li>Now this is a story all about how, my life got flipped-turned upside down</li>
                    <li>Now this is a story all about how, my life got flipped-turned upside down</li>
                    <li>Now this is a story all about how, my life got flipped-turned upside down</li>
                </div>

                <p class="text-gray-600 text-base max-ss:text-sm ">Lorem ipsum dolor sit amet consectetur adipisicing
                    elit.
                    Quibusdam, delectus consequatur similique alias
                    perferendis fugiat natus doloribus earum ducimus deleniti, Lorem ipsum dolor sit amet consectetur
                    adipisicing elit.
                </p>

                <div class="text-gray-600 text-base max-ss:text-sm list-decimal list-inside flex flex-col gap-2">
                    <li>Now this is a story all about how, my life got flipped-turned upside down</li>
                    <li>Now this is a story all about how, my life got flipped-turned upside down</li>
                    <li>Now this is a story all about how, my life got flipped-turned upside down</li>
                </div>

                <h2 class="text-xl font-semibold text-gray-900 ">Requirements:</h2>
                <ul class="max-w-md space-y-1 text-gray-600 list-disc list-inside text-base max-ss:text-sm">
                    <li>
                        At least 10 characters (and up to 100 characters)
                    </li>
                    <li>
                        At least one lowercase character
                    </li>
                    <li>
                        Inclusion of at least one special character, e.g., ! @ # ?
                    </li>
                </ul>

                <p class="text-gray-600 text-base max-ss:text-sm">Lorem ipsum dolor sit amet consectetur adipisicing
                    elit.
                    Quibusdam, delectus consequatur similique alias
                    perferendis fugiat natus doloribus earum ducimus deleniti, Lorem ipsum dolor sit amet consectetur
                    adipisicing elit.
                </p>

                <p class="text-gray-600 text-base max-ss:text-sm"> "Lorem ipsum dolor sit amet consectetur adipisicing
                    elit. fugiat natus doloribus earum ducimus deleniti, Lorem ipsum dolor sit amet consectetur
                    adipisicing elit"
                </p>
                <p class="text-gray-600 text-base max-ss:text-sm"> "Lorem ipsum dolor sit amet consectetur adipisicing
                    elit."
                </p>
                <p class="text-gray-600 text-base max-ss:text-sm"> "Lorem ipsum dolor sit amet consectetur adipisicing
                    elit."
                </p>
                <p class="text-gray-600 text-base max-ss:text-sm"> "Lorem ipsum dolor sit amet consectetur adipisicing
                    elit."
                </p>



            </div>

        </div>

    </div>
@endsection

@section('script')
    @vite('resources/js/contact/swl.js')
@endsection
