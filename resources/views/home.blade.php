@extends('layouts.app')

@section('content')
@php
if(isset($obj)){
$id='home/'.$obj->id;
} else {
$id='home';
}
@endphp
<form action="{{asset($id)}}" method="post">
{{csrf_field()}}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Create summary</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label"> <em>Title :</em></label>
                        <div class="col-sm-10">
                            <input type="text" name="title" class="form-control" placeholder="Title" minlength="1"
                            value="{{(isset($obj->title))?$obj->title:''}}"/>
                        </div>
                    </div>
<div class="form-group row">
    <label class="col-sm-2 col-form-label"> <em>Short description :</em></label>
    <div class="col-sm-10">
        <input type="text" minlength="5" name="description" class="form-control" placeholder="Short description"
        value="{{(isset($obj->description))?$obj->description:''}}"/>
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-2 col-form-label"> <em>Speciality number :</em></label>
    <div class="col-sm-10">
        <input minlength="1" type="text" name="number" class="form-control" placeholder="Speciality number"
        value="{{(isset($obj->number))?$obj->number:''}}"/>
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-2 col-form-label"> <em>Tags :</em></label>
    <div class="col-sm-10">
        <input minlength="1" type="text" name="tags" class="form-control" placeholder="Tags"
        value="{{(isset($obj->tags))?$obj->tags:''}}"/>
    </div>
</div>
 <div class="form-group row">
    <label class="col-sm-2 col-form-label"> <em>Text :</em></label>

    <div class="col-sm-10">
      <div class="form-group">
        <textarea class="form-control" id="area" rows="15" name="text" placeholder="Text">
         {{(isset($obj->text))?$obj->text:''}}
        </textarea>
    </div>
    <span>
                @error('text')
                  <div>
                     <strong>{{ $message }}</strong>
                  </div>
                @enderror
            </span>
    </div>
</div>
<p align="right">
    <button class="btn btn-primary" type="submit">Save</button>
</p>
                </div>
            </div>
        </div>
    </div>
</div>
</form>
@endsection
