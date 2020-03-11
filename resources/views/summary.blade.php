@extends('layouts.app')
@section('scripts')
<script src="{{asset('ckeditor/ckeditor.js')}}">
</script>
<script>
 var options = {};
 CKEDITOR.replace('editor', options);
 </script>
@endsection
@section('content')
<div class="container">
<div class="card">
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
</br>
<form action="{{asset('comments/'.$obj->id)}}" method="post">
@csrf
<label><i><b>Add Comments:</b></i> </label>
<textarea class="form-control" id="editor" rows="5" name="body" placeholder="Text">
</textarea>
</br>
<p align="right">
    <button class="btn btn-primary" type="submit">+Add</button>
</p>
</form>
<label><i><b>Comments: </b></i></label>
@foreach($obj->comments()->orderBy('id', 'DESC')->get() as $one)
<div class="card">
<div class="card-header">
     {{$one->updated_at}}
</div>
   <div class="card-body">
      {!!$one->body!!}
      </div>
     </br>
   </div>
@endforeach


</div>
@endsection
