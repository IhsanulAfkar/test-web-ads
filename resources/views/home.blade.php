@extends('layouts.main')

@section('main')
    <div class="container mx-auto">
        <div class="w-full flex justify-center items-stretch mt-28">
            <div class=" basis-1/2 flex justify-center flex-col gap-8">
                <p class="font-semibold text-black text-[40px]">Sajikan hidangan terbaikmu, Bersama DapurPanen</p>
                <p class="text-[#575757] text-lg">Kualitas terbaik selalu jadi prioritas kami. Berkomitmen memberikan
                    pengalaman
                    terbaik, produk aman, halal, dan legal, serta memenuhi standar pelanggan. Tepat waktu dan mutu produk
                    kami
                    jadi fokus utama untuk kepuasan pelanggan.</p>
                <div class="flex justify-start">
                    <div class="bg-[#479E10] text-white rounded-full font-semibold py-3 px-6 hover:cursor-pointer">
                        Langganan Sekarang
                    </div>
                </div>

            </div>
            <div class="basis-1/2 relative flex justify-center">
                <img src="assets/vector1.png" />
                <img src="assets/makan3.png" class="absolute top-[-20px] left-[-10px]" />
                <img src="assets/makan2.png" class="absolute top-[-20px] right-[30px]" />
                <img src="assets/makan1.png" class="absolute bottom-[-70px] left-[50px] drop-shadow-2xl" />
                <img src="assets/kopi.png" class="absolute bottom-[70px] right-[0px] drop-shadow-2xl" />
            </div>
        </div>
        <div class="my-44">
            <p class="mt-44 font-semibold text-[32px] text-center mb-24">Pelanggan Kami</p>
            <div class="flex justify-around">
                <div>
                    <img src="assets/tempo.png" />
                </div>
                <div>
                    <img src="assets/jumatberkah.png" />
                </div>
            </div>
        </div>
        <div class="my-44 w-full flex justify-center items-stretch gap-14">
            <div class="basis-1/3 flex justify-start gap-4">
                <div class="flex flex-col gap-4">
                    <img src="assets/makan4.png" />
                    <img src="assets/makan6.png" />
                </div>
                <div>
                    <img src="assets/makan5.png" />
                </div>
            </div>
            <div class=" basis-2/3 flex justify-between flex-col">
                <p class="font-semibold text-black text-[40px] mb-2">Tentang Kami</p>
                <p class="text-[#575757] text-lg">Kami menyediakan berbagai macam pilihan menu yang sudah matang, siap masak
                    untuk memudahkan anda dalam memilih makanan yang diinginkan. Kami berkomitmen untuk menggunakan
                    bahan-bahan
                    berkualitas dan segar untuk menjaga kualitas dan rasa dari setiap hidangan yang kami sajikan. Selain
                    itu,
                    kami juga menyediakan layanan catering untuk berbagai acara seperti pesta ulang tahun, pernikahan, dan
                    acara
                    bisnis. Kami dapat menyesuaikan menu sesuai dengan kebutuhan dan preferensi pelanggan untuk memastikan
                    bahwa
                    setiap acara berjalan dengan sukses.</p>
                <div class="flex justify-start">
                    <a href="/about"
                        class="bg-[#479E10] text-white rounded-full font-semibold py-3 px-6 hover:cursor-pointer">
                        Lihat Selengkapnya
                    </a>
                </div>
            </div>
        </div>
        <div class="w-full">
            <div class="text-center">
                <p class="font-semibold text-[48px]">Produk Kami</p>
            </div>
            <div class="flex justify-between gap-20 my-28">
                <div class="flex flex-col justify-between">
                    <img src="assets/makan1.png" class="drop-shadow-2xl mx-auto" width="388" />
                    <div>
                        <p class="font-bold text-[32px] mt-20">Ready to Cook</p>
                        <p class="text-[#575757] text-lg mt-4">Dapur Panen hadir dengan solusi praktis memasak dengan produk
                            siap
                            masak
                            dari bahan-bahan dan bumbu segar berkualitas. Buat hidangan spesial di rumah dengan mudah.</p>
                    </div>
                </div>
                <div class="flex flex-col justify-between">
                    <img src="assets/makan7.png" class="drop-shadow-2xl mx-auto" width="388" />
                    <div>
                        <p class="font-bold text-[32px] mt-20">Ready to Eat</p>
                        <p class="text-[#575757] text-lg mt-4">Nikmati hidangan spesial praktis dari Dapur Panen dengan
                            produk
                            siap
                            saji berkualitas tinggi, aman dikonsumsi, dan terjaga kebersihannya.</p>
                    </div>
                </div>
                <div class="flex flex-col justify-between">
                    <img src="assets/catering.png" class="drop-shadow-2xl mx-auto" width="300" />
                    <div>
                        <p class="font-bold text-[32px] mt-20">Catering</p>
                        <p class="text-[#575757] text-lg mt-4">Berbagai hidangan lezat dan berkualitas tinggi tersedia dalam
                            produk
                            catering kami, yang siap memenuhi kebutuhan acara Anda dengan beragam pilihan menu.</p>
                    </div>
                </div>

            </div>
            <div class="w-full flex justify-center">
                <a href="/produk"
                    class="bg-[#479E10] text-white rounded-full font-semibold py-3 px-6 hover:cursor-pointer flex gap-2">
                    <div>
                        Lihat Selengkapnya
                    </div>
                    <img src="assets/arrow.png" />
                </a>
            </div>
        </div>
    </div>
    <div class="bg-[#EDF5E7] mt-20 pb-8">
        <div class="container mx-auto">
            {{-- Section --}}
            <div class="w-full pt-36">
                <div class="text-center">
                    <p class="font-semibold text-[48px]">Promo Menarik</p>
                </div>
                <div class="flex justify-between gap-24 my-28">
                    @for ($i = 0; $i < 3; $i++)
                        <div class="flex flex-col justify-start gap-6 bg-white rounded-2xl p-8 max-w-md">
                            <div class="w-full rounded-xl">
                                <img src="assets/image 6.png" class="w-full" />
                            </div>

                            <div class="flex  gap-2">
                                <div>
                                    <img src="assets/calendar.png" width="24" />
                                </div>
                                <p class="text-[16px] text-slate-500">Berlaku hingga 31 May 2023</p>
                            </div>
                            <p class="text-black font-bold text-[20px] ">Rasakan Kelezatan Hidangan Premium Kami, Dalam
                                Promo
                                Catering Khusus!
                            </p>
                            <div class="flex justify-end mt-8">
                                <div class="bg-[#479E10] text-white rounded-full py-3 px-6 hover:cursor-pointer flex gap-2">
                                    <div>
                                        Selengkapnya
                                    </div>
                                    <img src="assets/arrow.png" />
                                </div>
                            </div>
                        </div>
                    @endfor

                </div>
                <div class="w-full flex justify-center">
                    <a href="/promo" class="text-[#479E10] text-[16px] hover:underline font-semibold hover:cursor-pointer">
                        Lihat Semua Promo
                    </a>
                </div>
            </div>
            <div class="w-full pt-36 relative">
                <div class="text-center">
                    <p class="font-semibold text-[48px]">Kata Mereka</p>
                </div>
                <div id="scroll-images" class="flex justify-between gap-24 my-28 overflow-x-hidden flex-nowrap">
                    <div id="right"
                        class="absolute right-0 top-[30%] p-4 rounded-full bg-white z-20 w-[40px] hover:cursor-pointer hover:bg-[#EEEEEE]">
                        <img src="assets/vector2.png" class="w-full" />
                    </div>
                    <div id="left"
                        class="absolute left-0 top-[30%] p-4 rounded-full bg-white z-20 w-[40px] hover:cursor-pointer hover:bg-[#EEEEEE]">
                        <img src="assets/vector3.png" class="w-full" />
                    </div>
                    @for ($i = 0; $i < 5; $i++)
                        <div class="flex flex-none max-w-md flex-col justify-start gap-6 w-full">
                            <div class="bg-white rounded-2xl p-10 relative">
                                <p class="font-bold text-[28px]">Murah, Cepet bree</p>
                                <p class="text-[18px] text-[#575757] mt-2">Udah enak murah dan praktis lagi buat makan siang
                                    di
                                    kampus sama temen2
                                    hehehe ^^</p>
                                <div class="absolute w-0 h-0 bottom-[-40px] left-1/2 -translate-x-1/2"
                                    style="width: 0; 
                            height: 0; 
                            border-left: 40px solid transparent;
                            border-right: 40px solid transparent;
                            
                            border-top: 40px solid white;">
                                </div>
                            </div>
                            <div class="flex flex-col justify-center mt-8 gap-6">
                                <div class='w-[150px] rounded-full p-1 mx-auto'>
                                    <img src='assets/foto.png' class='rounded-full' />
                                </div>
                                <div class="font-semibold text-2xl text-center mt-2">
                                    M Ihsanul
                                </div>
                                <div class="text-[#575757] text-2xl text-center">
                                    Mahasiswa
                                </div>

                            </div>
                        </div>
                    @endfor

                </div>
            </div>
        </div>
    </div>
    @vite('resources/js/scroll.js')
    <div class="container mx-auto mb-24">
        <div class="w-full pt-28">

            <div class="text-center">
                <p class="font-semibold text-[48px]">Blog Terbaru Kami</p>
            </div>
            <div class="flex justify-between gap-24 my-28">
                @for ($i = 0; $i < 3; $i++)
                    <div class="flex flex-col justify-start gap-6 hover:bg-slate-400 hover:cursor-pointer rounded-2xl p-8">
                        <div class="w-full rounded-xl">
                            <img src="assets/image 6.png" class="w-full" />
                        </div>

                        <div class="flex  gap-2">
                            <div>
                                <img src="assets/calendar.png" width="24" />
                            </div>
                            <p class="text-[16px] text-slate-500">20 September 2023</p>
                        </div>
                        <p class="text-black font-bold text-[20px] ">3 Makanan yang Bikin Kecerdasan Menurun, Penting
                            Dihindari
                        </p>
                        <p>
                            <span class="text-[#575757]">by</span>
                            <span class="font-semibold">Najwa Putri</span>
                        </p>
                    </div>
                @endfor
            </div>
            <div class="flex justify-center">
                <a href="/blog" class="bg-[#479E10] text-white rounded-full py-3 px-6 hover:cursor-pointer flex gap-2">
                    <div>
                        Lihat Semuanya
                    </div>
                    <img src="assets/arrow.png" />
                </a>
            </div>
        </div>
    </div>
@endsection
