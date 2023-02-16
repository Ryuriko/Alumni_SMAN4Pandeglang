@extends('layouts.main')

@section('container')
@include('layouts.navbar')
<div id="content" class="p-4 p-md-4 pt-5" style="max-height: 100vh; overflow: scroll;">
    <div class="row justify-content-center">
        @foreach($news as $new)
        @if($new->category == 'universitynews')
        <div class="col-md-3 m-md-2 card text-center p-0 text-bg-dark rounded-4 mb-4">
        <div class="px-5 py-2">
            <img src="https://i.ibb.co/zbHQXnH/agtslogo.png" class="card-img-top rounded-circle">
        </div>
        <div class="card-body border-top border-light">
            <h5 class="card-title">{{ $new->title }}</h5>
            <p class="card-text">{{ $new->excerpt }}</p>
            <a href="/universitynews/{{ $new->id }}" class="btn btn-info">See More</a>
        </div>
        </div>
        @endif
        @endforeach
    </div>
</div>
@endsection