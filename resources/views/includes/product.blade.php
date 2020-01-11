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
                        <!-- <a href="#" data-id="{{$prod->id}}" class="btn btn-primary btn-sm go">Перейти</a> -->
                        <a href="#html" data-id="{{$prod->id}}" id="good-{{$prod->id}}-{{$prod->price}}" class="btn btn-primary btn-sm buy addCart"><span class="glyphicon glyphicon-list"></span>Add to cart</a>
                    </div>
                    </div>
                  </div>
                   @endforeach
                   <p>
                       {!!$products->links()!!}
                   </p>