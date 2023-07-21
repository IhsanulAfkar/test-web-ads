@extends('layouts.main')

@section('main')
    <img src="assets/vector4.png" class="absolute right-0 -z-10" width="1000" />
    <div class="container mx-auto">
        <div class="w-full flex justify-center items-stretch pt-28">
            <div class=" basis-1/2 h-[550px] flex justify-center flex-col gap-8">
                <p class="font-semibold text-black text-[40px]">Nikmati Produk Pilihan Terbaik dari Kami</p>

                <div class="flex justify-start">
                    <div class="bg-[#479E10] text-white rounded-full font-semibold py-3 px-6 hover:cursor-pointer">
                        Langganan Sekarang
                    </div>
                </div>

            </div>
            <div class="basis-1/2 relative flex justify-center">
                <img src="assets/tomat.png" class="absolute top-[-100px] left-[50px]" />
                <img src="assets/kiwi.png" class="absolute top-[30%] left-[-80px]" />
            </div>
        </div>
        <div class="w-full my-80">
            <div class="text-center">
                <p class="font-semibold text-[48px]">Produk Kami</p>
            </div>
            <div class="flex flex-wrap justify-start gap-12 mt-28">
                @foreach ($list_products as $p)
                    <div class="max-w-md flex flex-col justify-between">
                        <img src="assets/{{ $p['img'] }}" class="drop-shadow-2xl mx-auto" width="388" />
                        <div>
                            <p class="font-bold text-[32px] mt-20">{{ $p['title'] }}</p>
                            <p class="text-[#575757] text-lg mt-4">{{ $p['desc'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="w-full my-28 flex justify-between gap-28">
            <div class="w-full basis-1/2 ">
                <img src="assets/catering2.png" class="mx-auto" />
            </div>
            <div class="basis-1/2 flex flex-col gap-12">
                <p class="text-[48px] font-semibold">Pesan catering, solusi makan bebas pusing</p>
                <p class="text-[18px]">Kami mengerti bahwa di kantor atau sekolah, makanan bukanlah hanya kebutuhan, tetapi
                    juga faktor penting
                    dalam produktivitas dan kesehatan. Oleh karena itu, kami menawarkan layanan catering yang dapat memenuhi
                    kebutuhan nutrisi dan selera Anda, serta mempermudah Anda dalam menyediakan makanan berkualitas untuk
                    karyawan atau siswa Anda.</p>
                <div class="flex justify-start">
                    <div class="bg-[#479E10] text-white rounded-full font-semibold py-3 px-6 hover:cursor-pointer">
                        <div>
                            Langganan Sekarang
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
