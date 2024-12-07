@extends('index')

@section('content')
    <div class="container" style="margin-top: 100px">
        <div class=" d-flex justify-content-between flex-row">
            <a href="/tambah" class="btn btn-success" style="height:50%">Tambah</a>
            <form class="d-flex mb-5" style="width: 40%" action="" method="">
                <input class="form-control me-2" type="search" placeholder="cari tugas pendahuluan" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
        @if (isset($message) && $message === 'success')
            <div class="alert alert-success mt-4" role="alert">
                Tugas Pendahuluan Berhasil Ditambahkan
            </div>
        @endif
        <div>
            @foreach ($posts as $post)
                <x-post-item :$post />
            @endforeach
        </div>
    </div>
@endsection
