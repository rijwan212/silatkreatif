@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col -md- 12">
			<h3>Crud laravel</h3>
			<div class="panel panel-default">
			<div class="panel-body">


			@if(Session::has('alert-success'))
				<div class="alert alert-success">
					{{Session::get('alert-success')}}
					
				</div>
			@endif
			<a href="{{route('crud.create')}}" class="btn btn-info pull-right"> Tambah data</a> <br><br>
			<table class="table table-striped">
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>Alamat</th>
					<th>Tanggal Lahir</th>
					<th>Pekerjaan</th>
					<th>Action</th>

				</tr>
				<?php $no=1; ?>
				@foreach($cruds as $crud)
				<tr>
					<td>{{$no++}}</td>
					<td>{{$crud->nama}}</td>
					<td>{{$crud->alamat}}</td>
					<td>{{$crud->tanggal_lahir}}</td>
					<td>{{$crud->pekerjaan}}</td>
					
					<td>
					<form method="POST" action="{{route('crud.destroy',$crud->id)}}" accept-charset="UTF-8">
						<input type="hidden" name="_method" value="DELETE">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<a href="{{route('crud.edit',$crud->id)}}" class="btn btn-primary"> edit </a>
						<input type="submit" class="btn btn-danger" onclick="return confirm('anda yakin hapus?');">

					</form>

					</td>
				</tr>
				
				@endforeach
			</table>
			
				
			</div>
			</div>
		</div>
	</div>
</div>
@endsection