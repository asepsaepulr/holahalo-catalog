  @section('js')
<script type="text/javascript">
  $(document).ready(function() {
    $('#table').DataTable({
      "iDisplayLength": 10
    });

  } );
</script>

@stop
@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-lg-2">
    <a href="{{ route('kategori.create') }}" class="btn btn-primary btn-rounded btn-fw right"><i class="mdi mdi-plus"></i> Tambah kategori</a>
  </div>
  <div class="col-lg-12">
    @if (Session::has('message'))
    <div class="alert alert-{{ Session::get('message_type') }}" id="waktu2" style="margin-top:10px;">{{ Session::get('message') }}</div>
    @endif
  </div>
</div>
<div class="row" style="margin-top: 20px;">
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Data Kategori</h4>
        <div class="table-responsive">
          <table class="table table-striped" id="table">
            <thead>
              <tr>
                <th>No</th>
                <th>Kategori</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @php $no = 1; @endphp
              @foreach($kategori as $data)
              <tr>
                <td>{{ $no++ }}</td>
                <td>{{$data->nama}}</td>
                <td>
                  <div class="btn-group">
                  <a href="{{ route('kategori.edit', $data->id) }}"  class="btn btn-primary btn-xs">Edit</a>
                  <form action="{{ route('kategori.destroy', $data->id) }}" class="lest-right"  method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit"  onclick="return confirm('Anda yakin ingin menghapus data ini?')" class="btn btn-danger btn-xs">Delete</button>
                  </form>
                </div>
                </td>
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