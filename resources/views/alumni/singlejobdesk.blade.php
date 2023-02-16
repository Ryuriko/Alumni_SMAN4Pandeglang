@extends('layouts.main')

@section('container')
@include('alumni.navbar')
<div id="content" class="p-4 p-md-4 pt-5" style="max-height: 100vh; overflow: scroll;">
    <div class="row justify-content-center pt-4">
        <h5 class="card-title fs-1 text-center col-md-8 m-md-1">{{ $new->title }}</h5>
        @if($new->category != 'jobdesk' )
        <div class="col-md-8 m-md-1 card p-0 border-top-0">
        <img src="https://cdn.pixabay.com/photo/2022/08/01/18/35/ocean-7358753_960_720.jpg" class="card-img-top">
        @else
        <div class="col-md-8 m-md-1 p-0 border-top-0">
        @endif
        <div class="card-body">
            <p class="card-text">{!! $new->body !!}</p>
        </div>
        </div>
    </div>
</div>
@endsection