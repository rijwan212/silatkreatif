<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Session;
use Request;
use DB;
use CRUDBooster;

class PageController extends Controller
{

    public function getBeranda()
    {
        return view('page.beranda');
    }

    public function getSilatBetawi()
    {
        $data['posts'] = DB::table('posts')->orderby('id','desc')->take(9)->get();
        return view('page.silat-betawi',$data);
    }

    public function getSilatBetawiId($id)
    {
        $data['post'] = DB::table('posts')->where('id',$id)->first();
        return view('page.silat-betawi-show',$data);
    }

    public function getSeminar()
    {
        $data['posts'] = DB::table('posts')->orderby('id','desc')->take(3)->get();
        return view('page.seminar',$data);
    }

    public function getWorkshop()
    {
        $data['posts'] = DB::table('posts')->orderby('id','desc')->take(3)->get();
        return view('page.workshop',$data);
    }

    public function getGaleriFoto()
    {
        return view('page.galeri-foto');
    }

    public function getGaleriVideo()
    {
        return view('page.galeri-video');
    }

    public function getDaftarSilat()
    {
        return view('page.daftar-silat');
    }
}
