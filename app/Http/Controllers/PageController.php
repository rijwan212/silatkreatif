<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
//use Request;
use DB;
use CRUDBooster;
use App\Registrar;

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
        $data['category'] = DB::table('category')->where('id',$id)->first();
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

    public function postDaftarSilat(Request $request)
    {
        // validasi data
        $this->validate($request, array(
              'npd'         => 'required',
              'name'        => 'required',
              'birth'       => 'required',
              'address'     => 'required',
              'phone'       => 'required',
              'gender'      => 'required',
              'religion'    => 'required',
              'psb'         => 'required',
              'pst'         => 'required',
            ));
        // simpan ke database semua request
        \App\Registrar::create($request->all());
        // flash messages
        $request->session()->flash('status', 'Registrasi Berhasil!');
        // redirect ke halaman
        return redirect()->route('page.daftar-silat');
    }
}
