@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

                @foreach($objs as $one)
                <div class="card">
                <div class="card-header"> <i><b>
                {{$one->title}} </b></i></div>
                <div class="card-body"><a href="{{asset('summary/'.$one->id)}}" class="btn">
                {!!$one->description!!}</a></div>
                </div>
             @endforeach

        </div>
    </div>
</div>
@endsection
