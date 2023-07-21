<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', ['title' => 'home']);
    }
    public function produk()
    {
        return view('products', [
            'title' => 'produk',
            'list_products' => Products::getProducts()
        ]);
    }

    public function promo()
    {
        return view('promo', [
            'title' => 'promo'
        ]);
    }

    public function blog()
    {
        return view('blog', [
            'title' => 'blog'
        ]);
    }
    public function about()
    {
        return view('about', [
            'title' => 'about'
        ]);
    }
}
