@extends('layouts.frontend')
@section('content')
<!doctype html>
<html lang="en">
<body>
 <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('dist/slider/5.jpg')}}" class="d-block w-100 h-50" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{asset('dist/slider/6.jpg')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{asset('dist/slider/7.jpg')}}" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="card">
  <div class="card-body">
    <center>
      <h2>HOLAHALO CATALOG</h2>
      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    </center>
    <div class="container">
      <div class="row">
        @foreach($produks as $data)
        <div class="col-md-4 col-sm-12 mb-3">
          <div class="card"><a href="{{url('/produks/produkdetails/'.$data->slug)}}">
            <figure>  <img src="{{url('uploads/produk/',$data->foto)}}" class="card-img-top" alt="..."> </figure>
          </a>
          <div class="card-body">
            <div class="card-title"><h4>{{$data->nama}}</h4></div>
            <small><p><?php echo date('d F Y' ,strtotime($data->created_at))?></p></small>
            {!!substr ($data->deskripsi,0,100) !!}.....
            <a href="{{url('/produks/produkdetails/'.$data->slug)}}">Read More</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    <ul class="link-btn">
      {{$produks->links() }}
    </ul>
  </div>
</div>
</div>
</body>
</html>
@endsection