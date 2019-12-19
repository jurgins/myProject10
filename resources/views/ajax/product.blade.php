<div class="row">
          <div class="col-lg-5">
           @if($obj->picture)
				<img src="{{asset('uploads/'.$obj->user_id.'/s_'.$obj->picture)}}" width="100%" class='my_pic'/>
			@else
				<img src="{{asset('uploads/no_photo.jpg')}}" width="100%"/>
			@endif
          </div>
          <div class="col-lg-7">
			<div>
				<a href="{{asset('category/'.$obj->category_id)}}">{{$obj->catalogs->name}}</a>
			</div>
            <h2 class="h2-responsive product-name">
              <strong>{{$obj->nameProduct}}</strong>
            </h2>
            <h4 class="h4-responsive">
              <span class="green-text">
                <strong>{{$obj->price}}</strong>
              </span>
            </h4>

			<div>
				{!!$obj->description!!}
			</div>

			<div class="text-center">
                <button class="btn btn-primary">Купить</button>
            </div>

		</div>
</div>
