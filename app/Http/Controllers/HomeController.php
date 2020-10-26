<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Deskripsi;
use App\Lokasi;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home.index');
    }

    public function detail($id)
    {
      $data = Deskripsi::findOrFail($id);
      $judul = Lokasi::findOrFail($id);
      return view('home.detail-lok',['data' => $data,'judul' => $judul]);
    }
}
