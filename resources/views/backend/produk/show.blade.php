@extends('layouts.app')
@section('css')

@endsection
@section('content')
<div class="col-md-12 d-flex align-items-stretch grid-margin">
    <div class="row flex-grow">
        <div class="col-12">
            <div class="card">
                <div class="widget-title"> <span class="icon"> <i class="fa fa-box"></i> </span>
                </div>
                <div class="row">
                    <div class="col-sm-5">
                       <img src="{{url('ImageProduks/original',$produk->foto)}}" style="width: 400px;">
                   </div>
                   <div class="col-xs-6 col-md-7 col-sm-4 ">
                    <h2>{{ $produk->nama }}</h2>
                     <font color=grey>
                        By : {{Auth::user()->nama}} 
                    </font>
                    <div class="post-share-option">
                        <div class="text">Category</div>
                        <ul class="left-option">
                         <li>{{$produk->kategori->nama}}</li>        
                     </ul>
                 </div>
                 <div class="post-share-option">
                    <div class="text">Deskripsi</div>
                    <ul class="left-option">
                        {!!$produk->deskripsi!!}            
                    </ul>
                </div>
                <a href="{{ url()->previous() }}" class="btn btn-warning pull-right">Back</a>
            </div>
            
        </div>
        </div>
    </div>
</div>
</div>
</div>

@endsection