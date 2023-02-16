@extends('layouts.main')

@section('container')
@include('admin.navbar')
<div id="content" class="p-4 p-md-4 pt-5 bg-secondary text-light" style="min-height: 100vh; max-height: 100vh; overflow: scroll;">
    <div class="row ps-5 pt-4">
        <div class="col-md-8 m-md-1">
            @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Hollaa</strong> {{ session('success') }}
            </div>
            @endif
            <h1 class="h1 text-light">Create News</h1>
            <hr class="bg-light">
            <form action="/admin" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}" autofocus>
                    @error('title')
                        <div class="invalid-feedback text-light">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                    <select class="form-select @error('category') is-invalid @enderror" name="category">
                        <option selected></option>
                        <option value="agtsnews">Agts News</option>
                        <option value="universitynews">University News</option>
                        <option value="schoolarsnews">Schoolars News</option>
                        <option value="jobnews">Job News</option>
                        <option value="jobdesk">Jobdesk AGTS</option>
                    </select>
                    @error('category')
                        <p class="text-light">{{ $message }}</p>
                    @enderror
                </div>

                <label for="body" class="form-label">Body</label>
                <div class="mb-3 text-bg-light rounded-3 p-2">
                    <input id="body" class="bg-light @error('body') is-invalid @enderror" type="hidden" name="body" value="{{ old('body') }}">
                    <trix-editor input="body"></trix-editor>
                    @error('body')
                        <p class="text-dark">( {{ $message }} )</p>
                    @enderror
                </div>

                <button type="submit" class="btn btn-dark">Submit</button>
            </form>
        </div>
    </div>
</div>

<script>
    const title = document.querySelector('#title');

    function imgPreview() {
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }

    }
</script>
@endsection