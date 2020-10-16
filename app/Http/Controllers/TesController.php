<?php

namespace App\Http\Controllers;

use App\SitePlace;
use App\TypePlace;
use Illuminate\Http\Request;

class MapController extends Controller
{


    public function admin()
    {
        return view('home.tes')->withMessage('Admin');
    }

    public function user()
    {
        return view('home.tes')->withMessage('User');
    }
}
