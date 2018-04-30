@extends('contrib.app')
@section('title','')
@section('breadcumbs')
<div id="navigation">
		<ul class="breadcrumb">
				<li><a href="{{ url('contributor/dashboard') }}">Dashboard</a></li>
        <li><a href="{{ url('contributor/lessons') }}">Kelola Tutorial</a></li>
        <li>Buat tutorial</li>
		</ul>
</div>
@endsection
@section('content')
<div class="row">
  <div class="col-md-12">
		@if($errors->all())
		 <div class="alert\ alert-danger">
				 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				 <h4><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></h4>
				 @foreach($errors->all() as $error)
				 <?php echo $error."</br>";?>
				 @endforeach
		 </div>
		 @endif
		 @if(Session::has('success'))
				 <div class="alert alert-success alert-dismissable">
						 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						 <h4>	<i class="icon fa fa-check"></i> Alert!</h4>
						 {{ Session::get('success') }}
				 </div>
		 @endif

		@if(Session::has('success-delete'))
			<div class="alert alert-info alert-dismissable">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4>	<i class="icon fa fa-check"></i> Alert!</h4>
					{{ Session::get('success-delete') }}
			</div>
		@endif
		@if(Session::has('no-delete'))
			<div class="alert alert-danger alert-dismissable">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></h4>
					{{ Session::get('no-delete') }}
			</div>
		@endif
		<div class="box-white">
	    <div class="form-title">
	      <h3>Buat Tutorial</h3>
	    </div>
	    <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
				{{ csrf_field() }}
	      <div class="form-group">
	        <label class="col-sm-2 control-label">Judul</label>
	        <div class="col-sm-10">
	          <input type="text"  required class="form-control" placeholder="Contoh:Tutorial Administrasi Server dengan ubuntu 12.04" name="title" value="{{ old('title') }}">
	        </div>
	      </div>
	      <div class="form-group">
	        <label class="col-sm-2 control-label">Pilih Kategori</label>
	        <div class="col-sm-10">
	          <select class="form-control" required name="category_id">
	            <option value="">-</option>
							<?php foreach ($categories as $key => $row): ?>
		            <option value="{{ $row->id }}">{{ $row->title }}</option>
							<?php endforeach; ?>
	          </select>
	        </div>
	      </div>
	      <div class="form-group">
	        <label class="col-sm-2 control-label">Upload gambar</label>
	        <div class="col-sm-10">
	          <input type="file" name="image" required class="form-control">
	        </div>
	      </div>
	      <div class="form-group">
	        <label class="col-sm-2 control-label">Description</label>
	        <div class="col-sm-10">
	        <textarea class="form-control" rows="8" cols="80"  name="description" placeholder="Contoh: Active Directory Domain Controller merupakan salah satu keunggulan server windows.">{{ old('description') }}</textarea>
	        </div>
	      </div>
	      <div class="form-group">
	        <div class="col-sm-offset-2 col-sm-10 text-right">
	          <a href="{{ url('contributor/lessons') }}" class="btn btn-danger">Batal</a>
						<button type="submit" class="btn btn-info">Submit</button>
	        </div>
	      </div>
	    </form>
		</div>
  </div>
</div>
@endsection()
