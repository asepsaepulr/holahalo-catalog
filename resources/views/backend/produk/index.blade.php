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
    <a href="{{ route('produk.create') }}" class="btn btn-primary btn-rounded btn-fw right"><i class="mdi mdi-plus"></i> Tambah kategori</a>
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
        <h4 class="card-title">Data Produk</h4>
        <div class="table-responsive">
          <table class="table table-striped" id="table">
            <thead>
              <tr>
                <th>No</th>
                <th>Foto</th>
                <th>Nama Produk</th>
                <th>Kategori</th>
                <th>Deskripsi</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @php $no = 1; @endphp
              @foreach($produk as $data)
              <tr>
                <td>{{ $no++ }}</td>
                <td style="text-align: center;"><img src="{{url('uploads/produk',$data->foto)}}" alt="" width="50"></td>
                <td>{{$data->nama}}</td>
                <td><label class="badge badge-info">{{$data->kategori->nama}}</label></td>
                <td>{!!substr ($data->deskripsi,0,200) !!}.....</td>
                <td>
                  <div class="btn-group">
                    <a href="{{ route('produk.show', $data->id) }}"  class="btn btn-success btn-xs">Show</a>
                    <a href="{{ route('produk.edit', $data->id) }}"  class="btn btn-primary btn-xs">Edit</a>
                    <form action="{{ route('produk.destroy', $data->id) }}" class="lest-right"  method="post">
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