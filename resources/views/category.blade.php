@extends('layouts.base')
@section('scripts')
@parent
<script src="{{asset('media/js/modal.js')}}"></script>
<script src="{{asset('ckeditor/ckeditor.js')}}"></script>
<script>
    CKEDITOR.replace("description");
</script>
@endsection
@section('styles')
  @parent
  <link href="{{asset('media/css/modal.css')}}" rel="stylesheet"/>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">

      <div class="col-lg-3">
        <div class="list-group">
         @foreach($categories as $cat)
         <a href="{{asset('category/'.$cat->id)}}" class="list-group-item">{{$cat->name}}</a>
         @endforeach
        </div>
      </div>

        <div class="col-md-9">
            <div class="card">
                <div class="card-header">{{$obj->name}}</div>

                <div class="row">
                   @foreach($products as $prod)
                   <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        @if($prod->picture)
                            <img class="card-img-top" src="{{asset('uploads/'.$prod->user_id.'/'.$prod->picture)}}" width="100%" alt="">
                        @else
                            <img class="card-img-top" src="{{asset('uploads/no_photo.jpg')}}" width="100%" alt="">
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
                   <p>
                       {!!$products->links()!!}
                   </p>
                </div>
                <!-- end row -->
            </div>
        </div>
    </div>
</div>

@endsection
