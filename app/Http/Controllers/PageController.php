<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    public function getBeranda()
    {
        return view('beranda');
    }

    public function getSilatBetawi()
    {
        return view('silatbetawi');
    }

    public function getSeminar()
    {
        return view('seminar');
    }

    public function getWorkshop()
    {
        return view('workshop');
    }

    public function getGaleriFoto()
    {
        return view('foto');
    }

    public function getGaleriVideo()
    {
        return view('video');
    }

    public function getDaftarSilat()
    {
        return view('indexx');
    }
}
