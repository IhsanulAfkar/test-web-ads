@extends('layouts.main')

@section('main')
    <div class="container mx-auto">
        <div class="flex w-full justify-between my-28 gap-24 pt-24">
            <div class="basis-1/2 flex flex-col justify-center">
                <p class="font-semibold text-[64px] text-[#479E10]">GRATIS</p>
                <p class="font-semibold text-[40px]">Burger Panen</p>
                <p class="text-[18px] mt-4">Hanya dengan Download Aplikasi Panenpanen.id dan Klaim Voucher gratis burger
                    panen
                    untuk pengguna baru
                </p>
                <div class="w-full flex justify-start mt-12">
                    <div class="bg-[#479E10] text-white rounded-full font-semibold py-3 px-6 hover:cursor-pointer ">
                        <div>
                            Download Aplikasi Sekarang
                        </div>
                    </div>
                </div>
            </div>
            <div class="basis-1/2 flex justify-center">
                <img src="assets/burger2.png" />
            </div>
        </div>
    </div>
    <div class="bg-cover" style="background-image: url('assets/wavy bg.png')">
        <div class="container mx-auto pt-60 pb-24">
            <div class="flex justify-center w-[60%] mx-auto gap-8 flex-wrap">
                <div id="semuaPromo"
                    class="p-4 bg-[#C5ECAF] font-semibold text-[#35770C] rounded-md hover:bg-[#C5ECAF] hover:text-[#35770C] hover:cursor-pointer"
                    onclick="toggleSelection(event)">
                    Semua Promo
                </div>
                <div id="cookPromo"
                    class="p-4 bg-[#EEEEEE] font-semibold text-[#747474] rounded-md hover:bg-[#C5ECAF] hover:text-[#35770C] hover:cursor-pointer"
                    onclick="toggleSelection(event)">
                    Promo Ready to Cook
                </div>
                <div id="eatPromo"
                    class="p-4 bg-[#EEEEEE] font-semibold text-[#747474] rounded-md hover:bg-[#C5ECAF] hover:text-[#35770C] hover:cursor-pointer"
                    onclick="toggleSelection(event)">
                    Promo Ready to Eat
                </div>
                <div id="kopiPromo"
                    class="p-4 bg-[#EEEEEE] font-semibold text-[#747474] rounded-md hover:bg-[#C5ECAF] hover:text-[#35770C] hover:cursor-pointer"
                    onclick="toggleSelection(event)">
                    Promo Kopi
                </div>
                <div id="burgerPromo"
                    class="p-4 bg-[#EEEEEE] font-semibold text-[#747474] rounded-md hover:bg-[#C5ECAF] hover:text-[#35770C] hover:cursor-pointer"
                    onclick="toggleSelection(event)">
                    Promo Burger Panen
                </div>
                <div id="cateringPromo"
                    class="p-4 bg-[#EEEEEE] font-semibold text-[#747474] rounded-md hover:bg-[#C5ECAF] hover:text-[#35770C] hover:cursor-pointer"
                    onclick="toggleSelection(event)">
                    Promo Catering
                </div>
            </div>
            <div class="mt-24 flex flex-wrap justify-between gap-24">
                @for ($i = 0; $i < 6; $i++)
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
                        <p class="text-black font-bold text-[20px] ">Rasakan Kelezatan Hidangan Premium Kami, Dalam Promo
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
        </div>
    </div>
    <script>
        const semuaPromo = document.getElementById('semuaPromo')
        const cookPromo = document.getElementById('cookPromo')
        const eatPromo = document.getElementById('eatPromo')
        const kopiPromo = document.getElementById('kopiPromo')
        const burgerPromo = document.getElementById('burgerPromo')
        const cateringPromo = document.getElementById('cateringPromo')
        const arrayOfPromo = [
            semuaPromo,
            cookPromo,
            eatPromo,
            kopiPromo,
            burgerPromo,
            cateringPromo,
        ]
        const hoverText = 'text-[#35770C]'
        const defaultText = 'text-[#747474]'
        const hoverBg = 'bg-[#C5ECAF]'
        const defaultBg = 'bg-[#EEEEEE]'
        const cleanActive = () => {
            semuaPromo.classList.remove(hoverText)
            semuaPromo.classList.remove(hoverBg)
            cookPromo.classList.remove(hoverText)
            cookPromo.classList.remove(hoverBg)
            eatPromo.classList.remove(hoverText)
            eatPromo.classList.remove(hoverBg)
            kopiPromo.classList.remove(hoverText)
            kopiPromo.classList.remove(hoverBg)
            burgerPromo.classList.remove(hoverText)
            burgerPromo.classList.remove(hoverBg)
            cateringPromo.classList.remove(hoverText)
            cateringPromo.classList.remove(hoverBg)

            semuaPromo.classList.add(defaultText)
            semuaPromo.classList.add(defaultBg)
            cookPromo.classList.add(defaultText)
            cookPromo.classList.add(defaultBg)
            eatPromo.classList.add(defaultText)
            eatPromo.classList.add(defaultBg)
            kopiPromo.classList.add(defaultText)
            kopiPromo.classList.add(defaultBg)
            burgerPromo.classList.add(defaultText)
            burgerPromo.classList.add(defaultBg)
            cateringPromo.classList.add(defaultText)
            cateringPromo.classList.add(defaultBg)
        }
        const toggleSelection = (e) => {
            cleanActive()
            if (e.target.id === 'semuaPromo') {
                semuaPromo.classList.remove(defaultBg)
                semuaPromo.classList.remove(defaultText)
                semuaPromo.classList.add(hoverBg)
                semuaPromo.classList.add(hoverText)
            }
            if (e.target.id === 'cookPromo') {
                cookPromo.classList.remove(defaultBg)
                cookPromo.classList.remove(defaultText)
                cookPromo.classList.add(hoverBg)
                cookPromo.classList.add(hoverText)
            }
            if (e.target.id === 'eatPromo') {
                eatPromo.classList.remove(defaultBg)
                eatPromo.classList.remove(defaultText)
                eatPromo.classList.add(hoverBg)
                eatPromo.classList.add(hoverText)
            }
            if (e.target.id === 'kopiPromo') {
                kopiPromo.classList.remove(defaultBg)
                kopiPromo.classList.remove(defaultText)
                kopiPromo.classList.add(hoverBg)
                kopiPromo.classList.add(hoverText)
            }
            if (e.target.id === 'burgerPromo') {
                burgerPromo.classList.remove(defaultBg)
                burgerPromo.classList.remove(defaultText)
                burgerPromo.classList.add(hoverBg)
                burgerPromo.classList.add(hoverText)
            }
            if (e.target.id === 'cateringPromo') {
                cateringPromo.classList.remove(defaultBg)
                cateringPromo.classList.remove(defaultText)
                cateringPromo.classList.add(hoverBg)
                cateringPromo.classList.add(hoverText)
            }
        }
    </script>
@endsection
