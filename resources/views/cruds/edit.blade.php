@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col -md- 12">
			<h3>Crud laravel</h3>
			<div class="panel panel-default">
			<div class="panel-body">

			<form action="{{route('crud.update', $cruds->id)}}" method="post">
			<input type="hidden" name="_method" value="PATCH">
			{{csrf_field()}}

			<div class="form-group{{ $errors->has('nama') ? 'has-error' : '' }}">
			<input type="text" name="nama" class="form-control" placeholder="Nama" value="{{$cruds->nama">
			{!! $errors-> first('nama', '<p class="help-block">:message</p>') !!}	
			</div>	

			<div class="form-group{{ $errors->has('alamat') ? ' has-error' : '' }}">
			<input type="text" name="phone" class="form-control" placeholder="Nomor telephone" value="{{$cruds->alamat">
			{{!! $errors->first('alamat','<p class="help-block">:message</p>!!}}
			</div>			

			<div class="form-group{{ $errors->has('tanggal_lahir') ? ' has-error' : '' }}">
			<input type="date" name="tanggal_lahir" class="form-control" placeholder="dd/mm/yy" value="{{$cruds->tanggal_lahir">
			{{!! $errors->first('tanggal_lahir','<p class="help-block">:message</p>!!}}
			</div>		

			<div class="form-group{{ $errors->has('tanggal_lahir') ? ' has-error' : '' }}">
			<select name="pekerjaan" id="pekerjaan" class="form-control" value="{{$cruds->pekerjaan">
				<option value=""> select one </option>
				<option value="pns"> pegawai negri sipil </option>
				<option value="guru"> guru </option>
				<option value="mhs"> mahasiswa </option>
				<option value="nelayan"> nelayan </option>
			</select>
			{{!! $errors->first('pekerjaan','<p class="help-block">:message</p>!!}}
			</div>			
				<div class="form-group">
					<input type="submit" class="btn btn-primary" value="simpan">
					
				</div>


			</form>
				
			</div>
			</div>
		</div>
	</div>
</div>
@endsection