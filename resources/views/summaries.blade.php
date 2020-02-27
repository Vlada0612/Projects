@extends('layouts.app')
@section('scripts')
    @parent
    <script src="{{asset('js/datalist.js')}}">
    </script>
@endsection
@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
        <form method="get" action="{{asset('search')}}">
        @csrf
        <div class="row">
        <div class="col-md-7">
        <input id="searchId" class="form-control" type="search" placeholder="Search" list="mydata"/>
        </div>
        <div class="col-md-5">
        <button class="btn btn-primary">
        Search
        </button>
        </div>
        </div>
        </form>
        </br>
        <div id="summaryList">
        @include('includes.summaries')
        </div>
        </div>
    </div>
</div>
@endsection
