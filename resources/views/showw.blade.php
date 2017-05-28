 @extends('layout')
 @section('container')
<div class="container">
    <div class="row">
      @if (session('status'))
          <div class="alert alert-success">
              {{ session('status') }}
          </div>
      @endif
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Lihat pendaftar</div>
                <div class="panel-body">
                  <table class="table table-hover table-striped">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Nama Perguruan yg diminati</th>
                      <th>Nama</th>
                      <th>Tempat Tanggal Lahir </th>
                      <th>Alamat</th>
                      <th>Telepon</th>
                      <th>Jenis Kelamin</th>
                      <th>Agama</th>
                      <th>Pencak silat yang pernah diikuti</th>
                      <th>Tenaga dalam yang pernah diikuti</th>
                      <th>Dibuat</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
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
                      <td>
                        <a href="{{ route('editt', $daftar->id) }}" class="btn btn-default btn-sm">Edit</a>
                        <form class="" action="{{ route('destroy', $daftar->id) }}" method="POST">
                          <input type="hidden" name="_method" value="DELETE">
                          <input type="hidden" name="_token" value="{{ csrf_token() }}">
                          <input type="submit" value="Hapus" class="btn btn-danger btn-sm" onclick="return confirm('Apakah yakin ingin dihapus?');">
                        </form>
                      </td>
                    </tr>
                  </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection