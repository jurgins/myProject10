@extends('layouts.base')
@section('scripts')
@parent
<script src="{{asset('media/js/modal.js')}}"></script>
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
@include('includes.product')
                </div>
                <!-- end row -->
            </div>
        </div>
    </div>
</div>

@endsection
