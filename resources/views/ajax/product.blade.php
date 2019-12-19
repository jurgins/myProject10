<h2>{{$obj->nameProduct}}</h2>
@if($obj->picture)
	<img src="{{asset('uploads/'.$obj->user_id.'/'.obj->picture)}}" width="100%" class='my_pic'/>
@else
	<img src="{{asset('uploads/no_photo.jpg')}}" />
@endif