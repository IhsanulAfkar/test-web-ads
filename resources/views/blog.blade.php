@extends('layouts.main')

@section('main')
    <div class="container mx-auto">
        <div class="mt-44 text-center w-full ">
            <p class="font-semibold text-[64px]">Berita Terbaru Dapur Panen</p>
            <p class="text-[24px] text-[#747474] mt-6">Berita mengenai informasi makanan dan produk kami</p>
            <div class="w-full rounded-sm bg-cover bg-no-repeat h-[450px] mt-16 p-8 flex items-end justify-start drop-shadow-xl"
                style="background-image: url('assets/makan8.png')">
                <div class="w-[40%] text-start">
                    <div class="flex gap-2 items-center text-[20px]">
                        <p>20 September 2022</p>
                        <div class="rounded-full w-[10px] h-[10px] bg-[#2E2F33]"></div>
                        <p>by <span class="font-semibold">Najwa Putri</span> </p>
                    </div>
                    <p class="text-[32px] font-semibold my-4">3 Makanan yang Bikin Kecerdasan Menurun, Penting Dihindari!
                    </p>
                    <p class="text-[18px] text-gray-400">Apa saja makanan yang dapat membuat kecerdasan
                        menurun?</p>
                </div>
            </div>
        </div>
        <div class="w-full">
            <div class="flex justify-between flex-wrap gap-24 my-28">
                @for ($i = 0; $i < 9; $i++)
                    <div
                        class="max-w-md flex flex-col justify-start gap-6 hover:bg-slate-400 hover:cursor-pointer rounded-2xl p-8">
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
        </div>
    </div>
@endsection
