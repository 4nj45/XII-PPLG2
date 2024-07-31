@extends('layout')
@section('content')

<h3 class="text-center my-4">Menu POST</h3>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <a class="btn btn-sm btn-info mb-2" href="{{ url('/home')}}">Kembali</a>
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <a class="btn btn-sm btn-success mb-2" href="{{ route('posts.create')}}">New Post</a>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Title</th>
                                <th scope="col">Content</th>
                                <th scope="col">Genre</th>
                                <th scope="col" style="width: 20%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                                <td class="text-center">{{$post->title}}</td>
                                <td class="text-center">{{$post->content}}</td>
                                <td class="text-center">{{$post->genre}}</td>
                                <td>
                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                        <a class="btn btn-sm btn-warning" href="{{ route('posts.show', $post->id)}}">Show</a>
                                        <a class="btn btn-sm btn-primary" href="{{ route('posts.edit', $post->id)}}">Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                    </form>

                                </td>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection