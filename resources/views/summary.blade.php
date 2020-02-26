@extends('layouts.app')
@section('content')
<div class="container card">
<div class="form-group row">
   <h3 class="col-sm-12 card-header" align="center">
    <i><u> {{$obj->title}}</i></u>
   </h3>
</div>
<div class="form-group row">
    <div class="col-sm-12" align="center">
    {{$obj->number}}, {{$obj->tags}}
    </div>
</div>
<div class="form-group row">
    <div class="col-sm-12" align="center">
    {{$obj->description}}
    </div>
</div>
</br>
 <div class="form-group row">
    <div class="col-sm-12" align="justify">
      <div class="form-group">
      {{$obj->text}}
    </div>
    </div>
</div>
</br>
@if(!auth::guest())
@if(auth::user()->id==$obj->userId)
<div class="row">
<div class="col-md-11" align="right">
<a class="btn btn-danger" href="{{asset('summary/delete/'.$obj->id)}}">Delete</a>
</div>
<div class="col-md-1" align="right">
    <a class="btn btn-primary" href="{{asset('summary/edit/'.$obj->id)}}">Edit</a>
</div>
</div>
@endif
@endif
</br>
</div>
@endsection
