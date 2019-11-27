@extends('layouts.app')
@section('css')

@endsection
@section('js')
<script type="text/javascript">
	$(document).on('click', '.pilih', function (e) {
		document.getElementById("kategori_nama").value = $(this).attr('data-kategori_nama');
		document.getElementById("id_kategori").value = $(this).attr('data-id_kategori');
		$('#myModal').modal('hide');
	});
	$(function () {
		$("#lookup, #lookup2").dataTable();
	});
</script>
<script type="text/javascript">
	$(document).ready(function() {
		$('.js-example-basic-multiple').select2();
	});
</script>
@endsection
@section('content')	
<div class="row">
	<div class="col-md-12 d-flex align-items-stretch grid-margin">
		<div class="row flex-grow">
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Tambah Produk</h4>
						<div class="card-title pull-right">
						</div>
					</div>
					<div class="card-body">
						<form action="{{ route('produk.store') }}" method="post" enctype="multipart/form-data">
							@csrf
							<input type="hidden" name="status" class="form-control" value="Unpublish" required>
							<div class="col-md-6">
								<div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
									<label class="control-label">Nama Produk</label>	
									<input type="text" name="nama" class="form-control"  required>

									@if ($errors->has('nama'))
									<span class="help-block">
										<strong>{{ $errors->first('nama') }}</strong>
									</span>
									@endif
								</div>
								<div class="form-group{{ $errors->has('id_kategori') ? ' has-error' : '' }}">
									<label for="id_kategori" class="col-md-4 control-label">Kategori</label>
									
									<div class="input-group">
										<input id="kategori_nama" type="text" class="form-control" readonly="" required>
										<input id="id_kategori" type="hidden" name="id_kategori" value="{{ old('id_kategori') }}" required readonly="">
										<span class="input-group-btn">
											<button type="button" class="btn btn-info btn-secondary" data-toggle="modal" data-target="#myModal"><b>Cari</b> <span class="fa fa-search"></span></button>
										</span>
									</div>
									@if ($errors->has('id_kategori'))
									<span class="help-block">
										<strong>{{ $errors->first('id_kategori') }}</strong>
									</span>
									@endif
								</div>
							</div>

							<div class="form-group {{$errors->has('foto') ? 'has-error' : '' }}">
								<label class="control-label">Foto</label>
								<input type="file" id="foto" name="foto" class="dropify" accept="image/*" required>
								@if ($errors->has('foto'))
								<span class="help-block"><strong>{{ $errors->first('foto') }}</strong></span>
								@endif
							</div>
							
							<div class="form-group {{ $errors->has('deskripsi') ? ' has-error' : '' }}">
								<label class="control-label">Deskripsi</label>
								<textarea id="text" type="ckeditor" name="deskripsi" class="ckeditor" required ></textarea>	
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

	<!-- Modal -->
	<div class="modal fade bd-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
		<div class="modal-dialog modal-lg" role="document" >
			<div class="modal-content" style="background: #fff;">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Cari</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<table id="lookup" class="table table-bordered table-hover table-striped">
						<thead>
							<tr>
								<th>Nama Kategori</th>
							</tr>
						</thead>
						<tbody>
							@foreach($kategori as $data)
							<tr class="pilih" data-id_kategori="<?php echo $data->id; ?>" data-kategori_nama="<?php echo $data->nama; ?>" >
								<td class="py-3">
									{{$data->nama}}
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>  
				</div>
			</div>
		</div>
	</div>
	@endsection