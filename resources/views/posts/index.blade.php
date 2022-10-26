@extends('layouts.app2')

@section('content')
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
        <h1>Blog Posts</h1>
        @if(count($posts)>0)
            @foreach ($posts as $post)
            <div class="well">
                <h3><a href="/posts/{{$post->id}}">
                {{$post->title}}</a></h3>
                <small>Tanggal: 
                {{$post->created_at}}</small>
            </div>
            @endforeach
        @else
            <h3>Tidak ada data</h3>
        @endif
        <a href="{{ route('posts.create') }}">Create New Post</a>
        Halaman : {{ $posts->currentPage() }} <br />
        Jumlah Data : {{ $posts->total() }} <br />
        Data Per Halaman : {{ $posts->perPage() }} <br />
        <div class="d-flex">
            {{ $posts->links() }}
        </div>
        </div>
    </div>
@endsection

