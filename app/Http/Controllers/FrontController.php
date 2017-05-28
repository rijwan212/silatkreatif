<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\pendaftaran1;
use App\Mahasiswa;
use Illuminate\Support\Facades\Input;


use DB;

class FrontController extends Controller
{
        
   public function getIndex() {

   return view('beranda');
   } 

   public function getSB() {
 	

   $data['silat'] = DB::table('silat')->orderby('id','desc')->take(9)->get();
   return view('silatbetawi',$data);
  }

   public function getWS() {
   return view('workshop');
    }

   public function getSM() {

   $data['posts'] = DB::table('posts')->orderby('id','desc')->take(3)->get();
   return view('seminar',$data);
    }

    public function getDetail($id) {

   $data['silat'] = DB::table('silat')->where('id',$id)->first();
    return view('detail',$data);
  }

   public function getFS() {
   return view('festival');
    }

    public function getST($id) {
    $data['silat'] = DB::table('silat')->where('id',$id)->first();
   return view('situs',$data);
    }

    public function getSS($id) {
   $data['posts'] = DB::table('posts')->where('id',$id)->first();
   return view('situsseminar',$data);
    }





   public function getFT() {
   return view('foto');
    }

   public function getVD() {
   return view('video');
    }

   public function getUK() {
   return view('unjuk');
    }

  public function getFM() {
   return view('form');
 }

  public function store(Request $request)
 {
        // validasi data
        $this->validate($request, array(
                'nim'            => 'required|numeric',
                'nama'           => 'required|max:255',
                'alamat'         => 'required',
                'telepon'        => 'required|numeric',
                'jenis_kelamin'  => 'required',
                'agama'          => 'required',

            ));

        // simpan ke database request tertentu
        /*
        $mahasiswa = new Mahasiswa;
        $mahasiswa->nim = $request->nim;
        $mahasiswa->nama = $request->nama;
        $mahasiswa->alamat = $request->alamat;
        $mahasiswa->telepon = $request->telepon;
        $mahasiswa->jenis_kelamin = $request->jenis_kelamin;
        $mahasiswa->agama = $request->agama;
        $mahasiswa->save();
        */

        // simpan ke database semua request
        \App\Mahasiswa::create($request->all());

        // flash messages
        $request->session()->flash('status', 'Data berhasil disimpan!');

        // redirect ke halaman
        return redirect()->route('index');
    }

     public function create()
    {
        return view('create');
    }

     public function edit($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        return view('edit-helper', compact('mahasiswa'));
    }

     public function update(Request $request, $id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->update($request->all());
        return redirect()->route('index')->with('status','Data berhasil diperbarui.');
    }


     public function destroy($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id)->delete();
        return redirect()->route('index')->with('status','Data berhasil dihapus.');
    }

      public function show($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        return view('show', compact('mahasiswa'));
    }

     public function index()
    {
        // variable dari semua model mahasiswa
        $semuamahasiswa = Mahasiswa::all();
        // passing variable ke view
        return view('index')->withSemuamahasiswa($semuamahasiswa);
    }
}

