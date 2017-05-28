<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\pendaftaran1;
use App\daftar;
use Illuminate\Support\Facades\Input;

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
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
 {
        // validasi data
        $this->validate($request, array(
                'npd'                => 'required',
                'nama'               => 'required',
                'ttl'                => 'required|max:255',
                'alamat'             => 'required',
                'telephon'           => 'required|numeric',
                'jenis_kelamin'      => 'required',
                'agama'              => 'required',
                'psb'                => 'required',
                'pst'                => 'required',

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
        \App\daftar::create($request->all());

        // flash messages
        $request->session()->flash('status', 'Data berhasil disimpan!');

        // redirect ke halaman
        return redirect()->route('index');
    }

     public function create()
    {
        return view('createe');
    }

     public function edit($id)
    {
        $daftar = daftar::findOrFail($id);
        return view('edit-helperr', compact('daftar'));
    }

     public function update(Request $request, $id)
    {
        $daftar = daftar::findOrFail($id);
        $daftar->update($request->all());
        return redirect()->route('index')->with('status','Data berhasil diperbarui.');
    }


     public function destroy($id)
    {
        $daftar = daftar::findOrFail($id)->delete();
        return redirect()->route('index')->with('status','Data berhasil dihapus.');
    }

      public function show($id)
    {
        $daftar = daftar::findOrFail($id);
        return view('show', compact('daftar'));
    }

     public function index()
    {
        // variable dari semua model mahasiswa
        $semuadaftar = daftar::all();
        // passing variable ke view
        return view('indexx')->withSemuadaftar($semuadaftar);
    }
}

