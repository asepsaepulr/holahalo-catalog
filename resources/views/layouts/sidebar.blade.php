<ul class="nav">
  <li class="nav-item nav-profile">
    <div class="nav-link">
      <div class="user-wrapper">
        <div class="profile-image">
          <img src="{{asset('img/laki.png')}}" alt="profile image">
        </div>
        <br>
        <br>
        <div class="text-wrapper">
          <p class="profile-name">{{Auth::user()->name}}</p>
          <div>
            <small class="designation text-muted" style="text-transform: uppercase;letter-spacing: 1px;"></small>
            <span class="status-indicator online"></span>
          </div>
        </div>
      </div>
    </div>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{url('/home')}}">
      <i class="menu-icon mdi mdi-television"></i>
      <span class="menu-title">Dashboard</span>
    </a>
    <a class="nav-link" data-toggle="collapse" href="#ui-laporan" aria-expanded="false" aria-controls="ui-laporan">
      <i class="menu-icon mdi mdi-content-copy"></i>
      <span class="menu-title">Data produks</span>
      <i class="menu-arrow"></i>
    </a>
    <div class="collapse" id="ui-laporan">
      <ul class="nav flex-column sub-menu">
        <li class="nav-item">
          <a class="nav-link"  href="{{Route('kategori.index')}}"><i class="nav-icon fa fa-circle-o text-primary"></i>Kategori</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{Route('produk.index')}}" ><i class="nav-icon fa fa-circle-o text-danger"></i>Produk</a>
        </li>
      </ul>
    </div>
  </li>
</ul>