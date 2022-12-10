<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class routeController extends Controller
{
    //

    public function loadHome()
    {
        return view('welcome');
    }

    public function loadFacilities()
    {
        return view('facilities');
    }

    public function loadAchievements()
    {
        return view('achievements');
    }

    public function loadContact()
    {
        return view('contact');
    }

    public function loadGallery()
    {
        return view('gallery');
    }

    public function login()
    {
        return view('login');
    }

    public function registration()
    {
        return view('registration');
    }

    public function register()
    {
        return view('register');
    }

}
