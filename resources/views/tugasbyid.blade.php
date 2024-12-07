@extends('index')

@section('content')
    <div class="container pt-5 mt-5">
        <div class="container border rounded p-3">
            <h3>{{ $post->judul }}</h3>
            <h5>{{ $post->sub_judul }}</h5>
            <p class="mb-5">{{ $post->deskripsi_tp }}</p>
            <a href="www/{{ $post->link_tp }}"></a>
            <h5>Link Dokumen TP: <a href="{{ $post->link_tp }}">{{ $post->link_tp }}</a></h5>
            <h5>Deadline TP: {{ $post->deadline_tp }}</h5>
            <small>Kategori: {{ $post->kategori }}</small>
            <br>
            <small>Tanggal Upload: {{ $post->updated_at }}</small>
        </div>
    </div>
@endsection
