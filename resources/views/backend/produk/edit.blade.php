@extends('layouts.app')
@section('css')

@endsection
@section('content') 
<div class="row">
    <div class="col-md-12 d-flex align-items-stretch grid-margin">
        <div class="row flex-grow">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit Kategori</h4>
                        <div class="card-title pull-right">
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('produk.update', $produk->id) }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            {{ method_field('put') }}

                            <div class="col-md-6">
                                <div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
                                    <label class="control-label">Nama Produk</label>  
                                    <input type="text" name="nama" class="form-control" value="{{ $produk->nama }}"  required>
                                    @if ($errors->has('nama'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nama') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                 <div class="form-group {{ $errors->has('id_kategori') ? ' has-error' : '' }}">
                                    <label class="control-label">Nama Kategori</label>  
                                    <select name="id_kategori" class="form-control">
                                        @foreach($kategori as $data)
                                        <option value="{{ $data->id }}" {{ $selectedkategori == $data->id ? 'selected="selected"' : '' }} >{{ $data->nama }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('id_kategori'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('id_kategori') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <center>
                                    <img src="{{url('uploads/produk/',$produk->foto)}}" width="160" alt="">
                                    <div class="form-group">
                                        <input type="file" class="dropify" name="foto" id="foto"/>
                                        <span class="text-danger">{{$errors->first('foto')}}</span>
                                        @if($produk->foto!='')
                                        &nbsp;&nbsp;&nbsp;
                                        @endif
                                    </div>
                                </center>
                                <div class="form-group {{ $errors->has('deskripsi') ? ' has-error' : '' }}">
                                    <label class="control-label">Deskripsi</label>
                                    <textarea id="text" type="ckeditor" name="deskripsi" class="ckeditor"required> {{ $produk->deskripsi}}
                                    </textarea>
                                    @if ($errors->has('deskripsi'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('deskripsi') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <button type="reset" class="btn btn-danger">Reset</button>
                                    <a href="{{ url()->previous() }}" class="btn btn-warning pull-right">Back</a>
                                </div>
                            </form>
                        </div>
                    </div>  
                </div>
                <script type="text/javascript" src="{{asset('ckeditor/ckeditor.js')}}"></script>
            </div>
        </div>



        @endsection