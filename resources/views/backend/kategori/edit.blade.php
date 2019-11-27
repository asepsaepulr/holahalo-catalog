@extends('layouts.app')
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
						<form action="{{ route('kategori.update',$kategori->id) }}" method="post" >
							<input name="_method" type="hidden" value="PATCH">
							@csrf
							<div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
								<div class="col-md-6">
									<label class="control-label">Nama Kategori</label>	
									<input type="text" name="nama" class="form-control" value="{{ $kategori->nama }}"  required>
									@if ($errors->has('nama'))
									<span class="help-block">
										<strong>{{ $errors->first('nama') }}</strong>
									</span>
									@endif
								</div>
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-primary">Edit</button>
								<a href="{{route('kategori.index')}}" class="btn btn-warning pull-right">Back</a>
							</div>
						</form>
					</div>
				</div>	
			</div>
		</div>
	</div>
	@endsection