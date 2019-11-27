 @extends('layouts.frontend')
 @section('content')
 <div class="card text-center">
  <div class="card-header">
    HOLAHALO CATALOG
</div>
<div class="card-body">
    <h5 class="card-title">Produk</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="/" class="btn btn-primary">Go Home</a>
</div>
<div class="card-footer text-muted">
</div>
</div>
<div class="container">
    <div class="row">
      <div class="col-md-12">
      </div>
  </div>
</div>
<div class="container mt-3">
    <div class="row">
      <!-- Sidebar -->
      <div class="col-md-4">
        <div class="card mb-3">
          <div class="card-header">
            <h4 class="text-mono text-center">Kategori</h4>
        </div>
        <div class="card-body">
           @foreach($kategori as $data)
           <ul>
               <li class="list-group">
                 <a href="{{url('/kategori/produks',$data->id)}}">{{$data->nama}}</a>
             </li>
         </ul>
         @endforeach
         <br />
     </div>
 </div>
</div>
<!-- Isi Content -->
<div class="col-md-8 mb-3">
    <div class="card">
      <div class="card-header">
        <h4 class="text-mono text-center">Produk</h4>
    </div>
    <div class="card-body">
        @foreach($produks as $data)
        <div class="media">
          <a href="{{url('/produks/produkdetails/'.$data->slug)}}">
            <img style="float:left; width: 200px;" src="{{url('uploads/produk',$data->foto)}}" class="img mr-4">
        </a>
        <div class="media-body">
            <h5 class="card-title">{{$data->nama}}</h5>
            <small><p><?php echo date('d F Y' ,strtotime($data->created_at))?></p></small>
            <p> {!!substr ($data->deskripsi,0,150) !!}.....</p>
            <a href="{{url('/produks/produkdetails/'.$data->slug)}}">Read More</a>
        </div>
    </div>
    <br>
    @endforeach
</div>
</div>
<br>
<ul class="link-btn">
    {{$produks->links() }}
</ul>
</div>
</div>
</div>
@endsection