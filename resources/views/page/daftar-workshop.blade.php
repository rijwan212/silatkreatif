@extends('page.layouts.master')
 @section('content')

    <section id="page-breadcrumb">
    <div class="vertical-center sun">
        <div class="container">
            <div class="row">
                <div class="action">
                    <div class="col-sm-12">
                        <h1 class="title">Daftar Workshop</h1>
                        <p>Pendaftaran Peserta Workshop</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/#page-breadcrumb-->

<section id="blog" class="padding-bottom">

    <div class="col-sm-12 wow fadeInDown" align="center" data-wow-duration="1000ms" data-wow-delay="0ms">
        <img src="/images/log.png" class align="center"="img-responsive" alt="">



    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Pendaftaran Workshop Silatkreatif</div>
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('page.daftar-workshop.post') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
                                <label for="nama" class="col-md-4 control-label">Nama Peserta </label>

                                <div class="col-md-6">
                                    <input id="nama" type="text" class="form-control" name="nama" value="{{ old('nama') }}" required autofocus> @if ($errors->has('nama'))
                                    <span class="help-block">
                                                      <strong>{{ $errors->first('nama') }}</strong>
                                                  </span> @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('ttl') ? ' has-error' : '' }}">
                                <label for="ttl" class="col-md-4 control-label">Tempat Tanggal Lahir</label>

                                <div class="col-md-6">
                                    <input id="ttl" type="text" class="form-control" name="ttl" value="{{ old('ttl') }}" required autofocus> @if ($errors->has('ttl'))
                                    <span class="help-block">
                                                      <strong>{{ $errors->first('ttl') }}</strong>
                                                  </span> @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('alamat') ? ' has-error' : '' }}">
                                <label for="alamat" class="col-md-4 control-label">Alamat</label>

                                <div class="col-md-6">
                                    <textarea name="alamat" rows="8" cols="80" id="alamat" type="text" class="form-control" value="{{ old('alamat') }}" required > </textarea>

                                     @if ($errors->has('alamat'))
                                    <span class="help-block">
                                                      <strong>{{ $errors->first('alamat') }}</strong>
                                                  </span> @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                                <label for="phone" class="col-md-4 control-label">No.Tlpn/Hp (WhatsApp)</label>

                                <div class="col-md-6">
                                    <input id="phone"  type="text" class="form-control" name="phone" value="{{ old('phone') }}" required autofocus>

                                    @if ($errors->has('phone'))
                                    <span class="help-block">
                                                      <strong>{{ $errors->first('phone') }}</strong>
                                                  </span> @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label"> Email </label>

                                <div class="col-md-6">
                                    <input id="email" type="text" class="form-control" name="email" required> @if ($errors->has('email'))
                                    <span class="help-block">
                                                      <strong>{{ $errors->first('email') }}</strong>
                                                  </span> @endif
                                </div>
                            </div>



                            <div class="form-group">
                                <label for="st" class="col-md-4 control-label">peserta sebagai</label>

                                <div class="col-md-6">
                                    <select class="form-control" id="status" name="st">
                                        <option selected="selected">-- Pilih --</option>
                                        <option value="pesilat">Pesilat</option>
                                        <option value="atlet">Atlet silat</option>
                                        <option value="umum">Umum</option>
                                    </select>
                                </div>

                                @if ($errors->has('st'))
                                <span class="help-block">
                                                  <strong>{{ $errors->first('st') }}</strong>
                                              </span> @endif
                            </div>

                      
                            <div class="form-group{{ $errors->has('Workshop') ? ' has-error' : '' }}">
                                <label for="Workshop" class="col-md-4 control-label"> Tema workshop Yang Ikuti </label>

                                <div class="col-md-6">
                                    <input id="workshop" type="text" class="form-control" name="workshop" value="{{ old('workshop') }}" required autofocus> @if ($errors->has('workshop'))
                                    <span class="help-block">
                                                      <strong>{{ $errors->first('workshop') }}</strong>
                                                  </span> @endif
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
