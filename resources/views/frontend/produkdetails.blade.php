 @extends('layouts.frontend')
 @section('content')
 <div class="card text-center">
  <div class="card-header">
    HOLAHALO CATALOG
  </div>
  <div class="card-body">
    <h5 class="card-title">Produk Details</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="/" class="btn btn-primary">Go Home</a>
  </div>
  <div class="card-footer text-muted">
  </div>
</div>
<br>

<div class="container">
  <div class="card">
    <div class="card-body">
      <div class="media">
        <img style="width: 500px;" src="{{url('uploads/produk',$produks->foto)}}" alt="">
        <div class="media-body">
          <h2 class="mt-0" style="padding-top: 50px; padding-left: 40px;"> {{$produks->nama}}</h2>
           <h6 style="padding-left: 40px;">{{$produks->kategori->nama}}</h6>
          <small><p style="padding-left: 40px;"><?php echo date('d F Y' ,strtotime($produks->created_at))?></p></small>
          <br>
           <h6 style="padding-top:10px; padding-left: 80px; "> {!!$produks->deskripsi!!}</h6>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
