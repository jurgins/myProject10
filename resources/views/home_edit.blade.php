@extends('layouts.base')
@section('scripts')
@parent
<script src="{{asset('ckeditor/ckeditor.js')}}"></script>
<script>
    CKEDITOR.replace("description");
</script>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Форма редактирования товара</div>

                <div class="card-body">
                    <form action = "{{asset('home/edit/'.$obj->id)}}" method="post" enctype="multipart/form-data">
                        {!!csrf_field()!!}
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="name">Имя</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Имя">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="phone">Телефон</label>
                                <input type="text"  class="form-control" id="phone" name="phone" placeholder="Телефон">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nameProduct">Название товара</label>
                            <input type="text" class="form-control" id="nameProduct" name="nameProduct" value="{{$obj->nameProduct}}" placeholder="Название товара">
                            @error('nameProduct')
                            <span class="alert alert-dange" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="price">Цена</label>
                            <input type="text" class="form-control" id="price" placeholder="Цена" name="price" value="{{$obj->price}}">
                            @error('price')
                            <span class="alert alert-dange" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="description">Описание товара</label>
                            <textarea rows="3" type="text" class="form-control" id="description" name="description">{!!$obj->description!!}</textarea>
                            @error('description')
                            <span class="alert alert-dange" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="descriptionKratk">Краткое описание товара</label>
                            <textarea rows="3"type="text" class="form-control" id="descriptionKratk"  name="descriptionKratk">{{$obj->descriptionKratk}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="category_id">Категории</label>
                            <select class="form-control" id="category_id" name="category_id">
                                <option selected>Категории</option>
                                @foreach($cats as $one)
                                <option value='{{$one->id}}'
                                    {{($one->id==$obj->category_id)?'selected':''}}>{{$one->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class = "custom-file">
                            <div class="row">
                                <div class="col-md-4">
                                   @if($obj->picture)
                                   <img src="{{asset('uploads/'.$obj->user_id.'/s_'.$obj->picture)}}" width="100%" />
                                   @endif
                                </div>
                                <div class="col-md-8">
                                    <input type="file" name="picture1" class="custom-file-input" id="picture1">
                                    <label class="custom-file-label" for="picture1">Выберите изображения ...</label>
                                </div>
                            </div>
                        </div>
                            <div class="form-group">
                                <label for="comments">Комментарий</label>
                                <textarea rows="3" type="text" class="form-control" id="comments" name="comments"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Отправить</button>
                            </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
