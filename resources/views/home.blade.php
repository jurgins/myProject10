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
                <div class="card-header">Кабинет пользователя</div>

                <div class="card-body">
                    <form action = "{{asset('home')}}" method="post" enctype="multipart/form-data">
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
                            <input type="text" class="form-control" id="nameProduct" name="nameProduct" placeholder="Название товара">
                            @error('nameProduct')
                            <span class="alert alert-dange" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="price">Цена</label>
                            <input type="text" class="form-control" id="price" placeholder="Цена" name="price">
                            @error('price')
                            <span class="alert alert-dange" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="description">Описание товара</label>
                            <textarea rows="3" type="text" class="form-control" id="description" name="description"></textarea>
                            @error('description')
                            <span class="alert alert-dange" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="descriptionKratk">Краткое описание товара</label>
                            <textarea rows="3"type="text" class="form-control" id="descriptionKratk"  name="descriptionKratk"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="category_id">Категории</label>
                            <select class="form-control" id="category_id" name="category_id">
                                <option selected>Категории</option>
                                @foreach($cats as $one)
                                <option value='{{$one->id}}'>{{$one->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class = "custom-file">
                            <input type="file" name="picture1" class="custom-file-input" id="picture1">
                            <label class="custom-file-label" for="picture1">Выберите изображения ...</label>
                        </div>
                            <div class="form-group">
                                <label for="comments">Комментарий</label>
                                <textarea rows="3" type="text" class="form-control" id="comments" name="comments"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Отправить</button>
                            </div>
                    </form>
                    <table class="table table-bordered table-striped" width="100%">
                        <tr>
                        <th width='200px'>Изображение</th>
                        <th>Название</th>
                        <th>Описание</th>
                        <th>Категория</th>
                        <th>Действие</th>
                    </tr>
                    @foreach($products as $one)
                    <tr>
                        <td>
                            @if($one->picture)
                            <img src="{{asset('uploads/'.$one->user_id.'/s_'.$one->picture)}}" alt="" width="100%">
                            @endif
                        </td>
                        <td>{{$one->nameProduct}}</td>
                        <td>
                            {!!$one->description!!}
                        </td>
                        <td>{{(isset($one->catalogs->name))?$one->catalogs->name:" "}}</td>
                        <td>
                            <a href="{{asset('home/edit/'.$one->id)}}" class="btn btn-block btn-success">Редактировать</a>
                            <a href="{{asset('home/delete/'.$one->id)}}" class="btn btn-block btn-default">Удалить</a>
                        </td>
                    </tr>
                    @endforeach
                    </table>
                    {!!$products->links()!!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
