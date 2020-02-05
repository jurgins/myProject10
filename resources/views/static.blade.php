@extends('layouts.'.$print)

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @if($print == 'base')
                <a href="?print=ok" target="_blank">Версия для печати</a>
            @endif
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
