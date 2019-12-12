@extends('layouts.base')

@section('content')
<div class="container">

    <div class="row">

      <div class="col-lg-3">
        <div class="list-group">
         @foreach($categories as $cat)
         <a href="{{asset('category/'.$cat->id)}}" class="list-group-item">{{$cat->name}}</a>
         @endforeach
        </div>

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

        <div class="row">
@foreach($products as $prod)
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              @if($prod->picture)
              <a href="#"><img class="card-img-top" src="{{asset('uploads/'.$prod->user_id.'/'.$prod->picture)}}" width="100%" alt=""></a>
              @else
               <a href="#"><img class="card-img-top" src="{{asset('uploads/no_photo.jpg')}}" width="100%" alt=""></a>
              @endif
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">{{$prod->nameProduct}}</a>
                </h4>
                <h5>{{$prod->price}}</h5>
                <p class="card-text">{!!$prod->description!!}</p>
              </div>
              <div class="card-footer">
                        <a href="#" data-id="{{$prod->id}}" class="btn btn-primary btn-sm my_modal">Открыть</a>
                        <a href="#" data-id="{{$prod->id}}" class="btn btn-primary btn-sm go">Перейти</a>
                        <a href="#" data-id="{{$prod->id}}" class="btn btn-primary btn-sm buy">Купить</a>
             </div>
            </div>
          </div>

@endforeach







   

        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
@endsection
