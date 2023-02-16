@extends('layouts.main')

@section('container')
@include('alumni.navbar')
<div id="content" class="p-4 p-md-4 pt-5" style="max-height: 100vh; overflow: scroll;">
    <div class="row justify-content-center">
        @foreach($news as $new)
        @if($new->category == 'jobdesk')
        <div class="col-md-3 m-md-1 card text-center pt-2 p-0 bg-dark">
        <a href="/alumni/jobdesk/{{ $new->id }}" class="text-dark">
        <div class="card-body">
            <h5 class="card-title fw-bold">{{ $new->title }}</h5>
        </div>
        </a>
        </div>
        @endif
        @endforeach
    </div>
</div>
@endsection