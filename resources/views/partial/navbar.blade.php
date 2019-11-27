 <nav class="navbar navbar-expand-lg navbar-light bg-light">
   <img src="{{asset('img/holahalo1.png')}}" style="width: 30px;">
  <a class="navbar-brand" href="#">HOLAHALO Catalog</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  @php
  $kategori = App\Kategori::all();
  @endphp
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
       <b> <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a></b>
      </li>
      <li class="nav-item">
        <b><a class="nav-link" href="{{url('produks')}}">Produk</a></b>
      </li> 

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <b> Kategori</b>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
         @foreach($kategori as $data)
         <a class="dropdown-item" href="{{url('/kategori/produks',$data->id)}}">{{$data->nama}}</a>
         @endforeach
       </div>
     </li>
   </ul>
   @if (Route::has('login'))
   <div class="top-right">
    <ul class="navbar-nav mr-auto">
    @auth
    <li class="nav-item active">
       <b> <a class="nav-link" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a></b>
      </li>
    @else
     
      <li class="nav-item active">
       <b> <a class="nav-link" href="{{ route('login') }}">Login <span class="sr-only">(current)</span></a></b>
      </li>
       @if (Route::has('register'))
       <li class="nav-item active">
       <b> <a class="nav-link" href="{{ route('register') }}">Register <span class="sr-only">(current)</span></a></b>
      </li>
       @endif
    @endauth
    </ul>
  </div>
  @endif
</div>
</nav>