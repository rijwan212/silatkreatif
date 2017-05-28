@extends('layouts.master')
 
@section('content')
 
<div class="row">
 
    <div class="col-lg-12">
 
        <h1 class="page-header">
 
            Halaman
 
            Form Sederhana
 
        </h1>
 
        {{ Form::open(array('url' => 'formsederhana')) }}
 
            <div class="form-group">
 
                        {{ Form::label('nama', 'Nama') }}
 
                                    {{ Form::text('nama', null, array('class' => 'form-control','placeholder'=>'masukkan nama')) }}
 
            </div>
 
             <div class="form-group">
 
                        {{ Form::label('jeniskelamin', 'Jenis Kelamin') }}
 
                {{ Form::select('jeniskelamin', array('L' => 'Laki - Laki', 'P' => 'Perempuan'), null, array('class' => 'form-control','placeholder'=>'Pili Jenis Kelamin')) }}
 
            </div>
 
            <div class="form-group">
 
                {{ Form::label('alamat', 'Alamat') }}
 
                {{ Form::textarea('alamat', null, array('class' => 'form-control','placeholder'=>'masukkan alamat')) }} 
 
            </div>
 
            {{ Form::submit('Kirim', array('class' => 'form-control')) }}
 
        {{ Form::close() }}
 
    </div>
 
</div>
 
@stop
 
// Hilangkan spasi antara < dan div, /div, h1, /h1