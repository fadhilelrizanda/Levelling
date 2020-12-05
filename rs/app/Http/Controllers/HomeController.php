<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function daftar()
    {
        return view('halaman.daftar_pasien');
    }

    public function list()
    {
        return view('halaman.list');
    }

    public function prosesp()
    {
        return view('halaman.proses-pendaftaran');
    }

    public function edithalaman()
    {
        return view('halaman.edit_halaman');
    }

    public function hapus()
    {
        return view('halaman.hapus');
    }

    public function edit()
    {
        return view('halaman.edit');
    }
}
