<nav class="fixed top-0 w-full border-b-2 flex justify-between items-center py-4 px-16 bg-white z-10">
    <div class="basis-1/3">
        <img src="assets/logo.png" width="247" />
    </div>
    <div id="title" data-value="{{ $title }}" class="basis-1/3 flex gap-4 justify-evenly text-[#747474]">
        <a href="/">
            <p id="titleHome" class="hover:cursor-pointer">Home</p>
        </a>
        <a href="/produk">
            <p id="titleProduk" class="hover:cursor-pointer">Produk</p>
        </a>
        <a href="/promo">
            <p id="titlePromo" class="hover:cursor-pointer">Promo</p>
        </a>
        <a href="/blog">
            <p id="titleBlog" class="hover:cursor-pointer">Blog</p>
        </a>
        <a href="/about">
            <p id="titleAbout" class="hover:cursor-pointer">About us</p>
        </a>
    </div>
    <div class="basis-1/3 flex justify-end">
        <div class="bg-[#479E10] rounded-full py-3 px-6 text-white font-semibold hover:cursor-pointer">
            <p>Download App</p>
        </div>
    </div>

</nav>
