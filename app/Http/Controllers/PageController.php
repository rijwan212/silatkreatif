<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
//use Request;
use DB;
use CRUDBooster;
use App\Registrar;
use App\formsilat;
use App\formwork;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;

class PageController extends Controller
{

    public function getBeranda()
    {
        return view('page.beranda');
    }

    public function getSilatBetawi()
    {
        $data['posts'] = DB::table('posts')->orderby('id','desc')->take(all)->get();
        $posts = DB::table('posts')->paginate(6);
        return view('page.silat-betawi', ['posts' => $posts],$data);
    }

    public function getSilatBetawiId($id)
    {
        $data['post'] = DB::table('posts')->where('id',$id)->first();
        $data['category'] = DB::table('category')->where('id',$id)->first();
        return view('page.silat-betawi-show',$data);
    }

    public function getSeminar()
    {
        $data['seminar'] = DB::table('seminar')->orderby('id','content')->take(4)->get();
        $seminar = DB::table('seminar')->paginate(4);
        return view('page.seminar', ['seminar' => $seminar],$data);
    }

    public function getSeminarId()
    {
        $data['seminar'] = DB::table('seminar')->orderby('id','desc')->take(3)->first();
        return view('page.seminar-show2',$data);
    }

    public function getWorkshop()
    {
        $data['workshop'] = DB::table('workshop')->orderby('id','desc')->take(3)->get();
        return view('page.workshop',$data);
    }

    public function getWorkshopId()
    {
        $data['workshop'] = DB::table('workshop')->orderby('id','desc')->take(3)->first();
        return view('page.workshop-show3',$data);
    }

    public function getGaleriFoto()
    {
        $data['photos'] = DB::table('photos')->orderby('id','desc')->take(20)->get();
        $photos = DB::table('photos')->paginate(6);
        return view('page.galeri-foto', ['photos' => $photos],$data);
    }



    public function getGaleriVideo()
    {
        $data['video'] = DB::table('videos')->orderby('id','desc')->take(10)->get();
        $videos = DB::table('videos')->paginate(4);
        return view('page.galeri-video', ['videos' => $videos],$data);
    }

    public function getDaftarSilat()
    {
        return view('page.daftar-silat');
    }

    public function getDaftarSeminar()
    {
        return view('page.daftar-seminar');
    }

    public function getDaftarWorkshop()
    {
        return view('page.daftar-workshop');
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

    public function postDaftarSeminar(Request $request)
    {
        // validasi data
        $this->validate($request, array(
              'nama'         => 'required',
              'ttl'          => 'required',
              'alamat'       => 'required',
              'phone'        => 'required',
              'email'        => 'required',
              'asal'         => 'required',
              'ns'           => 'required',
              'seminar'      => 'required',
            ));
        // simpan ke database semua request
        \App\formsilat::create($request->all());
        // flash messages
        $request->session()->flash('status', 'Registrasi Berhasil!');
        // redirect ke halaman
        return redirect()->route('page.daftar-seminar');
    }

    public function postDaftarWorkshop(Request $request)
    {
        // validasi data
        $this->validate($request, array(
              'nama'         => 'required',
              'ttl'          => 'required',
              'alamat'       => 'required',
              'phone'        => 'required',
              'email'        => 'required',
              'asal'         => 'required',
              'st'       => 'required',
              'workshop'     => 'required',
            ));
        // simpan ke database semua request
        \App\formwork::create($request->all());
        // flash messages
        $request->session()->flash('status', 'Registrasi Berhasil!');
        // redirect ke halaman
        return redirect()->route('page.daftar-workshop');
    }
}
