@extends('contrib.app')
@section('title','')
@section('breadcumbs')
<div id="navigation">
		<ul class="breadcrumb">
				<li><a href="{{ url('contributor') }}">Dashboard</a></li>
        <li>Informasi Akun</li>
		</ul>
</div>
@endsection
@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="box-white">
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

        <ul class="nav nav-tabs" style="margin-bottom: 20px;">
          <li class="active"><a href="{{ url('contributor/account/informasi') }}">Informasi Akun</a></li>
          <li class=""><a href="{{ url('contributor/account/profile') }}">Halaman Kontributor</a></li>
        </ul>

        <div class="tab-content" >
        <div class="col-md-12" >
        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
          <label class="col-sm-2 control-label">Email</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" name="email" value="{{ $contrib->email }}" >
          </div>
        </div>
        <hr>
        <div class="form-group @if ($errors->has('current_password')) has-error @endif">
          <label class="col-sm-3 control-label">Password Lama</label>
          <div class="col-sm-9">
            <input type="password" class="form-control" name="current_password">
            @if ($errors->has('current_password')) <p class="help-block">{{ $errors->first('current_password') }}</p> @endif
          </div>
        </div>
        <div class="form-group  @if ($errors->has('password')) has-error @endif">
          <label class="col-sm-3 control-label">Password Baru</label>
          <div class="col-sm-9">
            <input type="password" class="form-control" name="password">
            @if ($errors->has('password')) <p class="help-block">{{ $errors->first('password') }}</p> @endif
          </div>
        </div>
        <div class="form-group  @if ($errors->has('password_confirmation')) has-error @endif">
          <label class="col-sm-3 control-label">Konfirmasi Password</label>
          <div class="col-sm-9">
            <input type="password" class="form-control"  name="password_confirmation">
            @if ($errors->has('password_confirmation')) <p class="help-block">{{ $errors->first('password_confirmation') }}</p> @endif
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10 text-right">
            <button type="submit" class="btn btn-danger">Batal</button>
            <button type="submit" class="btn btn-info">Save</button>
          </div>
        </div>
      </form>
        </div>
        
          </div>
        </div>
    </div>
  </div>
</div>
@endsection()
