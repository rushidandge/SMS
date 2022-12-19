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
        return view('auth/login');
    }

    public function registration()
    {
        return view('registration');
    }

    public function register()
    {
        return view('auth/register');
    }

    public function admin()
    {
        return view('admin/dashboard');
    }


    public function adtournament()
    {
        return view('admin/tournament');
    }


    public function adgallery()
    {
        return view('admin/gallery');
    }


    public function adfaq()
    {
        return view('admin/faq');
    }


    public function adpart()
    {
        return view('admin/seeparticipate');
    }

    public function adachivement()
    {
        return view('admin/achivements');
    }



}
