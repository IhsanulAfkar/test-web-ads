window.onload = () => {
    const title = document.getElementById('title').getAttribute('data-value')
    if (title === 'home') {
        let title = document.getElementById('titleHome')
        title.classList.add('text-[#479E10]')
        title.classList.add('font-semibold')

    }
    if (title === 'produk') {
        let title = document.getElementById('titleProduk')
        title.classList.add('text-[#479E10]')
        title.classList.add('font-semibold')
    }
    if (title === 'promo') {
        let title = document.getElementById('titlePromo')
        title.classList.add('text-[#479E10]')
        title.classList.add('font-semibold')
    }
    if (title === 'blog') {
        let title = document.getElementById('titleBlog')
        title.classList.add('text-[#479E10]')
        title.classList.add('font-semibold')
    }
    if (title === 'about') {
        let title = document.getElementById('titleAbout')
        title.classList.add('text-[#479E10]')
        title.classList.add('font-semibold')
    }
    if (title === 'contact') {
        let title = document.getElementById('titleContact')
        title.classList.add('text-[#479E10]')
        title.classList.add('font-semibold')
    }
}

