<?php

namespace App\Http\Controllers;

use App\Models\achievements;
use App\Models\album;
use App\Models\Tournaments;
use Illuminate\Http\Request;

class routeController extends Controller
{
    //

    public function loadHome()
    {
        $imageData=Tournaments::all();
        return view('welcome', compact('imageData'));
    }

    public function loadFacilities()
    {
        return view('facilities');
    }

    public function loadAchievements()
    {
       $events=achievements::all();
       
        return view('achievements',compact('events'));
    }

    public function loadContact()
    {
        return view('contact');
    }

    public function loadGallery()
    {
        $imageData=album::all();
        return view('gallery',compact('imageData'));
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


    // public function adtournament()
    // {
    //     return view('admin/tournament');
    // }


    // public function adgallery()
    // {
    //     return view('admin/gallery');
    // }


    public function adfaq()
    {
        return view('admin/faq');
    }


    public function adpart()
    {
        return view('admin/seeparticipate');
    }

    // public function adachievement()
    // {
    //     return view('admin/achivements');
    // }



}
