@extends('layouts.main')

@section('title')
    contact
@endsection

@section('style')
    @vite('resources/css/home/preview_img.css')
@endsection


@section('contents')
    <section class=" w-full h-auto relative z-50">
        <div
            class="absolute inset-0 z-50  flex flex-col justify-center items-center gap-y-4  max-sm:gap-y-1 max-w-[1536px] ss:m-auto mx-4">
            <div class="flex flex-col sm:gap-y-8 border-4 border-[#03203E] md:p-12 p-6 ss:w-[60%] w-full">
                <p class="xl:text-8xl lg:text-6xl text-4xl capitalize text-white text-center font-[700] ss:tracking-[8px] tracking-widest"
                    data-aos="zoom-in" data-aos-duration="800" style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">
                    contact
                </p>
            </div>
        </div>

        <div class="relative w-full h-[500px] max-2xl:h-[400px] max-lg:h-[250px] max-md:h-[150px]">
            <img src="/images/contact/Head bar 1.png" alt="Banner Image" class="w-full h-full object-cover">
            <div class="absolute top-0 left-0 w-full h-full bg-[#03203E] opacity-50"></div>
        </div>
    </section>

    <div class="lg:pt-16 pt-[30px]">

        <section
            class="overflow-hidden flex justify-between items-start md:flex-row flex-col w-full lg:gap-8 md:gap-2 gap-4 max-w-[1536px] ml-auto 2xl:px-0 px-4 lg:h-[615px] md:h-[630px]">

            <!-- Contact Form -->
            <div class="w-full h-full p-4 flex flex-col justify-between ss:gap-6 gap-4 items-start border-2 border-[#03203E] flex-1"
                data-aos="fade-right" data-aos-duration="500">
                <div class="flex flex-col gap-2">
                    <span class="md:text-3xl text-2xl font-kanit text-[#03203E] tracking-widest capitalize">contact
                        us</span>
                    <div class="border-t-2 border-[#03203E] max-w-[3rem] w-full rounded-full"></div>


                    <p class="text-gray-600 ss:text-base text-sm ">Lorem ipsum dolor sit amet consectetur adipisicing
                        elit.
                        Quibusdam, delectus consequatur similique alias
                        perferendis fugiat natus doloribus earum ducimus deleniti,</p>
                </div>

                <div class="w-full flex flex-col gap-4">
                    <input type="text"
                        class="block font-kanit w-full px-4 py-2 text-sm text-gray-900 placeholder-gray-500 border border-gray-300 rounded-sm bg-white outline-none"
                        placeholder="NAME" />
                    <input type="email"
                        class="block font-kanit w-full px-4 py-2 text-sm text-gray-900 placeholder-gray-500 border border-gray-300 rounded-sm bg-white outline-none"
                        placeholder="E-MAIL" />
                    <input type="text"
                        class="block font-kanit w-full px-4 py-2 text-sm text-gray-900 placeholder-gray-500 border border-gray-300 rounded-sm bg-white outline-none"
                        placeholder="SUBJECT" />
                    <textarea cols="10" rows="6"
                        class="block font-kanit w-full px-4 py-2 text-sm text-gray-900 placeholder-gray-500 border border-gray-300 rounded-sm bg-white outline-none"
                        placeholder="MESSAGE"></textarea>
                </div>


                <div class="flex justify-center items-center md:justify-start w-full">
                    <div id="s-massage"
                        class="font-light uppercase bg-[#03203E] border-2 border-[#03203E] hover:border-[#c5a880] hover:bg-[#c5a880] text-white  text-center ss:text-base text-sm py-2 px-4 transition-all duration-300 ease-in-out">
                        send message
                    </div>
                </div>
            </div>

            <!-- Address -->
            <div class="w-full h-full bg-[#1671a0] md:border-r-[30px] lg:border-r-[60px] md:border-[#38a0d7] p-4 text-white rounded-sm flex flex-col lg:justify-between gap-y-8 flex-1"
                data-aos="fade-left" data-aos-duration="500">
                <div class="flex flex-col gap-2">
                    <span class="md:text-3xl text-2xl font-kanit tracking-widest capitalize">Address</span>
                    <div class="border-t-2 max-w-[3rem] w-full rounded-full"></div>
                </div>

                <div class="flex flex-col gap-y-6">
                    <div class="flex lg:gap-6 gap-4 justify-start items-start">
                        <div class="w-[30px] h-auto">
                            <img src="/images/contact/home.png" alt="" class="w-full h-full">
                        </div>
                        <div class="flex flex-col gap-2 w-[80%]">
                            <p class="lg:text-2xl text-lg capitalize">paradise beach luxury hotel</p>
                            <p class="ss:text-base text-sm font-kanit font-light">120 34-35 หมู่ 24 ตำบล ศิลา
                                อำเภอเมืองขอนแก่น ขอนแก่น 40000
                            </p>
                        </div>
                    </div>

                    <div class="flex lg:gap-6 gap-4 justify-start items-start">
                        <div class="w-[30px] h-auto">
                            <img src="/images/contact/email.png" alt="" class="w-full h-full">
                        </div>
                        <div class="flex flex-col gap-2 w-[80%]">
                            <p class="lg:text-2xl text-lg capitalize">e-mail</p>
                            <p class="ss:text-base text-sm font-kanit font-light">paradisebeach@gmail.com</p>
                        </div>
                    </div>

                    <div class="flex lg:gap-6 gap-4 justify-start items-start">
                        <div class="w-[30px] h-auto">
                            <img src="/images/contact/telephone.png" alt="" class="w-full h-full">
                        </div>
                        <div class="flex flex-col gap-2 w-[80%]">
                            <p class="lg:text-2xl text-lg capitalize">phone number</p>
                            <p class="ss:text-base text-sm font-kanit font-light">+668 888 0000</p>
                        </div>
                    </div>

                    <div class="flex lg:gap-6 gap-4 justify-start items-start">
                        <div class="w-[40px] h-auto">
                            <img src="/images/contact/1_0.png" alt="" class="w-full h-full">
                        </div>
                        <div class="flex flex-col gap-2 w-full">
                            <p class="lg:text-2xl text-lg capitalize">facebook</p>
                            <p class="ss:text-base text-sm font-kanit font-light">
                                www.facebook.com/paradisebeachsamui</p>
                        </div>
                    </div>

                    <div class="flex lg:gap-6 gap-4 justify-start items-start">
                        <div class="w-[30px] h-auto">
                            <img src="/images/contact/instagram (1).png" alt="" class="w-full h-full">
                        </div>
                        <div class="flex flex-col gap-2 w-[80%]">
                            <p class="lg:text-2xl text-lg capitalize">instagram</p>
                            <p class="ss:text-base text-sm font-kanit font-light">@Paradisebeachsamui</p>
                        </div>
                    </div>

                    <div class="flex lg:gap-6 gap-4 justify-start items-start">
                        <div class="w-[40px] h-auto">
                            <img src="/images/contact/2_0.png" alt="" class="w-full h-full">
                        </div>
                        <div class="flex flex-col gap-2 w-[80%]">
                            <p class="lg:text-2xl text-lg capitalize">X</p>
                            <p class="ss:text-base text-sm font-kanit font-light">@Paradisebeachsamui</p>
                        </div>
                    </div>

                </div>

            </div>

        </section>

        <section class="relative 2xl:h-[500px] lg:h-[400px] h-[250px] xl:mt-16 mt-[30px]">
            <div
                class="h-full absolute font-kanit inset-0 top-0 left-0 z-50 flex flex-col justify-center items-center gap-y-6 m-auto w-full">

                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3825.7658682734395!2d102.83243147514484!3d16.48738888425428!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31228ae99b598b43%3A0x56b4538d2ace7037!2z4Lij4Lix4Lia4LiX4Liz4LmA4Lin4LmH4Lia4LmE4LiL4LiV4LmMIOC4guC4reC4meC5geC4geC5iOC4mSBXWU5OU09GVCBTT0xVVElPTiBDTy4sTFRELg!5e0!3m2!1sth!2sth!4v1739169949749!5m2!1sth!2sth"
                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>
    </div>
@endsection

@section('script')
    @vite('resources/js/contact/swl.js')
    @vite('resources/js/home/swl.js')
@endsection
