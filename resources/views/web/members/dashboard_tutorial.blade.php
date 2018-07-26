@extends('web.app')
@section('title','Dashboard Tutorial | ')
@section('content')
@push('css')


@endpush
<style>
@media (max-width:768px) {
    .section-content{
      min-height: 300px;
      padding-top: 50px;
      padding-bottom: 50px;
    }
}
@media (min-width:768px) {
    .section-content{
      min-height: 460px;
      padding-top: 50px;
      padding-bottom: 50px;
    }
}
  .item {
    padding: 25px;
    border-bottom: 1px solid #eee;
  }
  .item a{
    color: #666;
  }
.card {
    margin-bottom: 15px;
    border-radius: 5px;
    
    
}
.card:hover {
    text-decoration: none;
    -webkit-box-shadow: 4px 4px 13px 0px rgba(0,0,0,0.18);
    -moz-box-shadow: 4px 4px 13px 0px rgba(0,0,0,0.18);
    box-shadow: 4px 4px 13px 0px rgba(0,0,0,0.18);
}
.card a {
    text-decoration: none;
}
.card-img {
    width: 100%;
    height: 150px;
    background-size: cover;
    background-position: center center;
}
.card-body {
    height: 100px;
    padding: 15px;
    padding-bottom: 15px;
    background-color: #FAFAFA;
}
.card-info {
    padding-bottom: 15px;
    position: absolute;
    left: 20;
    bottom: 0;
}
</style>
<div class="container section-content">
  <div class="col-sm-12" style="margin-top: 20px;">
      <h4>Tutorial yang sudah di miliki</h4>
      <?php
           if(!count($last) == 0) {
                foreach ($last as $key => $last): ?>  
                  <div class="col-md-3">
                    <div class="card" >
                      <a href="{{ url('lessons/'.$last->slug)}}">
                          <?php if (!empty($last->image)) {?>
                            <div class="card-img" style="background-image: url('{{ asset($last->image)}}');"></div>
                          <?php } else {?>
                            <div class="card-img" style="background-image: url('{{ asset('template/web/img/no-image-available.png')}}');"></div>
                          <?php }?>
                          <div class="card-body"><p class="card-title">{{ $last->title }}</p></div>           
                      </a>
                    </div>
                  </div>

              <?php endforeach; 
              }else{ ?>
               <div class="alert alert-danger" role="alert">
               Belum ada tutorial yang anda beli 
               </div>

              <?php } ?>
    </div>
</div>
 
@endsection
