  @foreach($objs as $one)
                <div class="card">
                <div class="card-header"> <i><b>
                {{$one->title}} </b></i></div>
                <div class="card-body"><a href="{{asset('summary/'.$one->id)}}" class="btn">
                {!!$one->description!!}</a></div>
                </div>
  @endforeach
