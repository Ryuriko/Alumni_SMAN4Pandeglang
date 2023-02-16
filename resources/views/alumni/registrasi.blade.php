@extends('layouts.main')

@section('container')
@include('alumni.navbar')
<div id="content" class="p-4 p-md-4 pt-5" style="max-height: 100vh; overflow: scroll;">
    <div class="row mt-md-4 justify-content-center">
        <div class="col-md-9 m-md-1 p-0">
                    <h1 class="h1 text-center">Registrasi Belum Dibuka!</h1>
            <!-- <hr class="bg-light">
            <form action="/alumni" method="post">
                @csrf
                <div class="mb-3">
                    <label for="nama" class="form-label text-light">Nama</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ auth()->user()->name }}" autofocus>
                    @error('nama')
                        <div class="invalid-feedback text-light">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                <label for="sekbid" class="form-label text-light">Seksi Bidang</label>
                    <select class="form-select @error('sekbid') is-invalid @enderror" name="sekbid">
                        <option selected></option>
                        <option value="agtsnews">Teklap</option>
                        <option value="universitynews">Peralatan</option>
                        <option value="schoolarsnews">Acara</option>
                    </select>
                    @error('sekbid')
                        <p class="text-light">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit" class="btn btn-dark">Submit</button>
            </form> -->
        </div>
    </div>
</div>
@endsection