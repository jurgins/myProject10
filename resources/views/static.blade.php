@extends('layouts.base')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{isset($obj->name)?$obj->name:'404'}}</div>

                <div class="card-body">
                    <div>
                        {!! isset($obj->body)?$obj->body:'404 pages' !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
