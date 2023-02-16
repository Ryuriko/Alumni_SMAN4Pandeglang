@extends('layouts.main')

@section('container')
@include('admin.navbar')
<div id="content" class="p-4 p-md-4 pt-5 bg-secondary text-light" style="min-height: 100vh; max-height: 100vh; overflow: scroll;">
    <div class="row ps-5 pt-4">
        <div class="col-md-8 m-md-1">
            <h1 class="h1 text-light">Program Kerja IKA</h1>
            <hr class="bg-light">
            @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
            </div>
            @endif
            <form action="/ika/{{ App\Models\Alumni::find(1)->id }}" method="post">
                @method('put')
                @csrf
                <label for="body" class="form-label">Body</label>
                <div class="mb-3 text-bg-light rounded-3 p-2">
                    <input id="body" class="bg-light @error('body') is-invalid @enderror" type="hidden" name="body" value="{{ App\Models\Alumni::find(1)->body }}" autofocus>
                    <trix-editor input="body"></trix-editor>
                    @error('body')
                        <p class="text-dark">( {{ $message }} )</p>
                    @enderror
                </div>

                <button type="submit" class="btn btn-dark">Update</button>
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