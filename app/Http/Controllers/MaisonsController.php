<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MaisonsController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function about()
    {
        return view('about');
    }
    public function services()
    {
        return view('services');
    }
    public function portfolio()
    {
        return view('portfolio');
    }
    public function contact()
    {
        return view('contact');
    }
    public function portifoliodetails()
    {
        return view('portifoliodetails');
    }
    public function membership()
    {
        return view('membership');
    }
    public function maisonsAdmin()
    {
        return view('maisonsAdmin');
    }
    public function login()
    {
        return view('login');
    }
}
