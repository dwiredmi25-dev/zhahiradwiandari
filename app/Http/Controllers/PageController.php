<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function index()
    {
       return view('Home', [
            'title' => 'Home Page',
            'message' => 'Selamat datang di halaman Home'
        ]);
    }

    public function about()
    {
        $jam = date('H');

        if ($jam < 12) {
            $salam = 'Selamat Pagi';
        } else {
            $salam = 'Selamat Malam';
        } 
        
        return view('about', [
            'title' => 'About Page',
            'salam' => $salam
        ]);
    }

    public function contact()
    {
        return view('contact', [
            'title' => 'Contact Page',
            'email' => 'admin@gmail.com'
        ]);
    }
}
