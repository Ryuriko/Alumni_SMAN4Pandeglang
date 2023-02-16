@extends('layouts.main')

@section('container')
@include('layouts.navbar')
<div id="content" class="p-4 p-md-4 pt-5" style="min-height: 100vh; max-height: 100vh; overflow: scroll;">
    <div class="row justify-content-center pt-4">
        <h5 class="card-title fs-1 text-center col-md-8 m-md-1">Program Kerja IKA</h5>
        <div class="col-md-10 m-md-1 p-0">
        @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
            </div>
        @endif
        
        <div class="card-body">
            <p class="card-text">{!! $proker->body !!}</p>
        </div>


        </div>
    </div>
</div>
@endsection