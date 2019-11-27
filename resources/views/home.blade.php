@extends('layouts.app')
@section('content')
<div class="row" style="margin-top: 20px;">
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="col-xl-4 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
        <div class="card card-statistics">
            <div class="card-body">
              <div class="clearfix">
                <div class="float-left">
                  <i class="mdi mdi-book text-success icon-lg"></i>
              </div>
              <div class="float-right">
                  <p class="mb-0 text-right">Kategori</p>
                  <div class="fluid-container">
                    <h3 class="font-weight-medium text-right mb-0">{{$kategori->count()}}</h3>
                </div>
            </div>
        </div>
        <p class="text-muted mt-3 mb-0">
            <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"></i> Total seluruh kategori
        </p>
    </div>
</div>
</div>
<div class="col-xl-4 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
    <div class="card card-statistics">
        <div class="card-body">
          <div class="clearfix">
            <div class="float-left">
              <i class="mdi mdi-poll-box text-danger icon-lg"></i>
          </div>
          <div class="float-right">
              <p class="mb-0 text-right">Produk</p>
              <div class="fluid-container">
                <h3 class="font-weight-medium text-right mb-0">{{$produk->count()}}</h3>
            </div>
        </div>
    </div>
    <p class="text-muted mt-3 mb-0">
        <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"></i> Total seluruh produks
    </p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection
