 @extends('page.layouts.master')
 @section('content')

    <section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">Daftar Silat</h1>
                            <p>Daftarkan Perguruan Silatmu</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#page-breadcrumb-->

    <section id="blog" class="padding-bottom">
        <div class="container">
            <div class="row">            
              <div class="col-md-8 col-md-offset-2">
                          <div class="panel panel-default">
                              <div class="panel-heading">Form Daftar Perguruan Silat</div>
                              @if (session('status'))
                                  <div class="alert alert-success">
                                      {{ session('status') }}
                                  </div>
                              @endif
                              <div class="panel-body">
                                  <form class="form-horizontal" role="form" method="POST" action="{{ route('page.daftar-silat.post') }}">
                                      {{ csrf_field() }}

                                      <div class="form-group{{ $errors->has('npd') ? ' has-error' : '' }}">
                                          <label for="npd" class="col-md-4 control-label">NPD</label>

                                          <div class="col-md-6">
                                              <input id="npd" type="text" class="form-control" name="npd" value="{{ old('npd') }}" required autofocus>

                                              @if ($errors->has('npd'))
                                                  <span class="help-block">
                                                      <strong>{{ $errors->first('npd') }}</strong>
                                                  </span>
                                              @endif
                                          </div>
                                      </div>

                                      <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                          <label for="name" class="col-md-4 control-label">Nama</label>

                                          <div class="col-md-6">
                                              <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                              @if ($errors->has('name'))
                                                  <span class="help-block">
                                                      <strong>{{ $errors->first('name') }}</strong>
                                                  </span>
                                              @endif
                                          </div>
                                      </div>

                                      <div class="form-group{{ $errors->has('birth') ? ' has-error' : '' }}">
                                          <label for="birth" class="col-md-4 control-label">Tanggal Lahir</label>

                                          <div class="col-md-6">
                                            <input id="birth" type="text" class="form-control" name="birth" value="{{ old('birth') }}" required autofocus>

                                              @if ($errors->has('birth'))
                                                  <span class="help-block">
                                                      <strong>{{ $errors->first('birth') }}</strong>
                                                  </span>
                                              @endif
                                          </div>
                                      </div>

                                      <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                                          <label for="address" class="col-md-4 control-label">Alamat</label>

                                          <div class="col-md-6">
                                              <textarea name="address" rows="8" cols="80" id="address" type="text" class="form-control" value="{{ old('address') }}" required></textarea>

                                              @if ($errors->has('address'))
                                                  <span class="help-block">
                                                      <strong>{{ $errors->first('address') }}</strong>
                                                  </span>
                                              @endif
                                          </div>
                                      </div>

                                      <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                                          <label for="phone" class="col-md-4 control-label">Telp</label>

                                          <div class="col-md-6">
                                              <input id="phone" type="text" class="form-control" name="phone" required>

                                              @if ($errors->has('phone'))
                                                  <span class="help-block">
                                                      <strong>{{ $errors->first('phone') }}</strong>
                                                  </span>
                                              @endif
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <label for="gender" class="col-md-4 control-label">Jenis Kelamin</label>

                                          <div class="col-md-6">
                                            <div class="radio">
                                              <label><input type="radio" name="gender" value="Laki-laki">Laki-laki</label>
                                              <label><input type="radio" name="gender" value="Perempuan">Perempuan</label>
                                            </div>
                                          </div>

                                          @if ($errors->has('gender'))
                                              <span class="help-block">
                                                  <strong>{{ $errors->first('gender') }}</strong>
                                              </span>
                                          @endif
                                      </div>

                                      <div class="form-group">
                                          <label for="religion" class="col-md-4 control-label">Agama</label>

                                          <div class="col-md-6">
                                            <select class="form-control" id="religion" name="religion">
                                              <option selected="selected">-- Pilih --</option>
                                              <option value="Islam">Islam</option>
                                              <option value="Kristen">Kristen</option>
                                              <option value="Hindu">Hindu</option>
                                              <option value="Buddha">Buddha</option>
                                              <option value="Konghucu">Konghucu</option>
                                            </select>
                                          </div>

                                          @if ($errors->has('religion'))
                                              <span class="help-block">
                                                  <strong>{{ $errors->first('religion') }}</strong>
                                              </span>
                                          @endif
                                      </div>

                                      <div class="form-group{{ $errors->has('psb') ? ' has-error' : '' }}">
                                          <label for="psb" class="col-md-4 control-label">PSB</label>

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
                                          <label for="pst" class="col-md-4 control-label">PST</label>

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
                                              <button type="submit" class="btn btn-success btn-block">
                                                  Daftar
                                              </button>
                                          </div>
                                      </div>
                                  </form>
                              </div>
                          </div>
                      </div>
            </div>
        </div>
    </section>
    <!--/#blog-->

  @endsection
