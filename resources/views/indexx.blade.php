 @extends('layout')
 @section('container')
<div class="container">
    <div class="row">
      @if (session('status'))
          <div class="alert alert-success">
              {{ session('status') }}
          </div>
      @endif
        <div>
            <div class="panel panel-default">
                <div class="panel-heading">Daftar Peserta</div>
                <div class="panel-body">
                  <table class="table table-hover table-striped">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Nama Perguruan yg diminati</th>
                      <th>Nama</th>
                      <th>Tempat Tanggal Lahir </th>
                      <th>Alamat</th>
                      <th>Telephon</th>
                      <th>Jenis Kelamin</th>
                      <th>Agama</th>
                      <th>Pencak silat yang pernah diikuti</th>
                      <th>Tenaga dalam yang pernah diikuti</th>
                      <th>Dibuat</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach ($semuadaftar as $daftar)
                    <tr>
                      <td>{{ $daftar->id }}</td>
                      <td>{{ $daftar->npd }}</td>
                      <td>{{ $daftar->nama }}</td>
                      <td>{{ $daftar->ttl }}</td>
                      <td>{{ $daftar->alamat }}</td>
                      <td>{{ $daftar->telepon }}</td>
                      <td>{{ $daftar->jenis_kelamin }}</td>
                      <td>{{ $daftar->agama }}</td>
                      <td>{{ $daftar->psb }}</td>
                      <td>{{ $daftar->pst }}</td>
                      <td>{{ $daftar->created_at->format('M d, Y') }}</td>
                      <td><a href="{{ route('show', $daftar->id) }}" class="btn btn-success btn-sm">View</a></td>
                    </tr>
                  @endforeach
                  </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
