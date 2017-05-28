  @extends('layout')
 @section('container')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Mahasiswa</div>
                <div class="panel-body">
                    {{ Form::model($daftar, array('route' => array('update', $mahasiswa->id), 'method' => 'PUT','class' => 'form-horizontal')) }}

                         <div class="form-group{{ $errors->has('npd') ? ' has-error' : '' }}">
                            <label for="npd" class="col-md-4 control-label">Nama perguruan yang diminati </label>

                            <div class="col-md-6">
                                <input id="npd" type="text" class="form-control" name="npd" value="{{ old('npd') }}" required autofocus>

                                @if ($errors->has('npd'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('npd') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
                            <label for="nama" class="col-md-4 control-label">Nama</label>

                            <div class="col-md-6">
                                <input id="nama" type="text" class="form-control" name="nama" value="{{ $daftar->nama }}" required autofocus>

                                @if ($errors->has('nama'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nama') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('npd') ? ' has-error' : '' }}">
                            {{ Form::label('npd', 'NPD', array('class' => 'col-md-4 control-label')) }}

                            <div class="col-md-6">
                              {{ Form::text('npd', null, array('class' => 'form-control')) }}

                                @if ($errors->has('npd'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('npd') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('ttl') ? ' has-error' : '' }}">
                            <label for="ttl" class="col-md-4 control-label">tempat tanggal lahir</label>

                            <div class="col-md-6">
                                <input id="nama" type="text" class="form-control" name="ttl" value="{{ $daftar->ttl }}" required autofocus>

                                @if ($errors->has('ttl'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ttl') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('alamat') ? ' has-error' : '' }}">
                            <label for="alamat" class="col-md-4 control-label">Alamat</label>

                            <div class="col-md-6">
                                {{-- <textarea name="alamat" rows="8" cols="80" id="alamat" type="text" class="form-control" value="{{ $daftar->alamat }}" required></textarea> --}}
                                {{ Form::text('alamat', null, array('class' => 'form-control')) }}

                                @if ($errors->has('alamat'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('alamat') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('telephon') ? ' has-error' : '' }}">
                            <label for="telephon" class="col-md-4 control-label">Telepon</label>

                            <div class="col-md-6">
                                <input id="telephon" type="text" class="form-control" name="telephon" value="{{ $daftar->telephon }}" required>

                                @if ($errors->has('telephon'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('telephon') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="jenis_kelamin" class="col-md-4 control-label">Jenis Kelamin</label>

                            <div class="col-md-6">
                                {{ Form::radio('jenis_kelamin', 'Laki-laki') }}
                                {{ Form::label('Laki-laki') }}
                                <br>
                                {{ Form::radio('jenis_kelamin', 'Perempuan') }}
                                {{ Form::label('Perempuan') }}
                            </div>

                            @if ($errors->has('jenis_kelamin'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('jenis_kelamin') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            {{ Form::label('agama', 'Agama', array('class' => 'col-md-4 control-label')) }}

                            <div class="col-md-6">
                              {{ Form::select('agama', array('Pilih' => '-- Pilih --', 'Islam' => 'Islam', 'Kristen' => 'Kristen', 'Hindu' => 'Hindu', 'Buddha' => 'Buddha', 'Konghucu' => 'Konghucu'), null, array('class' => 'form-control')) }}
                            </div>

                            @if ($errors->has('agama'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('agama') }}</strong>
                                </span>
                            @endif
                        </div>

                         <div class="form-group{{ $errors->has('psb') ? ' has-error' : '' }}">
                            <label for="psb" class="col-md-4 control-label">Pencak silat yang pernah diikuti</label>

                            <div class="col-md-6">
                                <input id="psb" type="text" class="form-control" name="psb" value="{{ old('psb') }}" required autofocus>

                                @if ($errors->has('psb'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('psb') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('pst') ? ' has-error' : '' }}">
                            <label for="pst" class="col-md-4 control-label">Tenaga dalam yang pernah diikuti</label>

                            <div class="col-md-6">
                                <input id="pst" type="text" class="form-control" name="pst" value="{{ old('pst') }}" required autofocus>

                                @if ($errors->has('pst'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('pst') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Perbarui
                                </button>
                            </div>
                        </div>
                      {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
