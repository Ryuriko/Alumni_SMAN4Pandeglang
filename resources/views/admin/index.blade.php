@extends('layouts.main')

@section('container')
@include('admin.navbar')
<div id="content" class="p-4 p-md-4 pt-5" style="min-height: 100vh; max-height: 100vh; overflow: scroll;">
    <div class="row justify-content-center pt-4">
        <div class="col-md-10 m-md-1 card p-0 border-top-0">
        <a class="btn btn-secondary" href="/admin/create">Create News</a>
        @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Hollaa</strong> {{ session('success') }}
            </div>
        @endif
        <table class="table table-dark table-striped">
            <thead class="text-center">
                <tr>
                <th scope="col">No</th>
                <th scope="col">Title</th>
                <th scope="col">Category</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($news as $new)
                <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $new->title }}</td>
                <td>{{ $new->category }}</td>
                <td>
                    <a class="btn btn-success rounded-5" href="/admin/{{$new->id}}/edit">Edit</a>

                    <form class="d-inline-block ms-md-1 border-0" action="/admin/{{ $new->id }}" method="post">
                        @method('delete')
                        @csrf                        
                        <button class="btn btn-danger rounded-5">Delete</button>
                    </form>
                </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>
</div>
@endsection