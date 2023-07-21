@extends('layouts.about')

@section('main')
    <div class="container mx-auto">
        <div class="mt-28 w-full h-[400px] flex justify-between gap-28">
            <div class="basis-1/2 flex flex-col justify-center">
                <p class="font-semibold text-[40px]">Kami hanya akan memberikan hidangan <span class="text-[#479E10]">terbaik
                        dan
                        berkualitas</span> untukmu.</p>
            </div>
            <div class="basis-1/2 flex flex-col justify-center">
                <p class="w-[80%] mx-auto text-[20px]">
                    Lorem ipsum dolor sit amet consectetur. Sodales fermentum aenean nisi dui purus accumsan sit amet vel.
                </p>
            </div>
        </div>
    </div>
    <div class="w-full ">
        <img src="assets/sayur.png" class="w-full" />
    </div>
    <div class="container mx-auto">
        <div class="my-28 w-full flex justify-between gap-28">
            <div class="basis-1/2 flex flex-col justify-start">
                <p class="font-semibold text-[40px]">Pelayanan terbaik dengan harga terjangkau</p>
            </div>
            <div class="basis-1/2 flex flex-col justify-center gap-8">
                <p class="w-[80%] mx-auto text-[20px] font-semibold">
                    Lorem ipsum dolor sit amet consectetur. Sodales fermentum aenean nisi dui purus accumsan sit amet vel.
                </p>
                <p class="w-[80%] mx-auto text-[20px]">Lorem ipsum dolor sit amet consectetur. Ultrices nisi ornare non nunc
                    sit. Sem turpis sit tellus sed
                    fringilla suspendisse. Faucibus in in velit mauris amet tempor tempor. Vestibulum at amet vivamus
                    ridiculus nibh aenean purus vitae. Enim urna adipiscing massa dictum faucibus. Nulla porttitor cras
                    fermentum justo. Nisl in purus non adipiscing placerat.
                    Velit risus mattis dolor nam vitae vulputate augue. Scelerisque tortor viverra in libero malesuada augue
                    viverra. Consequat vehicula fringilla et velit habitant tincidunt mollis sem quis. Sit cras auctor
                    rutrum feugiat. Faucibus ante at tempor laoreet. Pharetra risus libero bibendum posuere consequat
                    consequat nibh. Feugiat cras nunc eget cras gravida in nam aliquet imperdiet. Suspendisse egestas
                    pulvinar ut pulvinar est ligula. Sollicitudin dui nibh eu tellus. Condimentum amet integer elit in cras.
                </p>
            </div>
        </div>
        <div class="my-44">
            <p class="mt-24 font-semibold text-[32px] text-center mb-24">Pelanggan Kami</p>
            <div class="flex justify-around">
                <div>
                    <img src="assets/tempo.png" />
                </div>
                <div>
                    <img src="assets/den.png" />
                </div>
                <div>
                    <img src="assets/jumatberkah.png" />
                </div>
            </div>
        </div>
    </div>
    <div class="bg-[#EDF5E7] w-full">
        <div class="container mx-auto">
            <div class="w-full py-28 flex justify-between gap-28">
                <div class="w-full basis-1/2 ">
                    <img src="assets/catering2.png" class="mx-auto" />
                </div>
                <div class="basis-1/2 flex flex-col gap-12">
                    <p class="text-[48px] font-semibold">Pesan catering, solusi makan bebas pusing</p>
                    <p class="text-[18px]">Kami mengerti bahwa di kantor atau sekolah, makanan bukanlah hanya kebutuhan,
                        tetapi
                        juga faktor penting
                        dalam produktivitas dan kesehatan. Oleh karena itu, kami menawarkan layanan catering yang dapat
                        memenuhi
                        kebutuhan nutrisi dan selera Anda, serta mempermudah Anda dalam menyediakan makanan berkualitas
                        untuk
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

    </div>
@endsection
