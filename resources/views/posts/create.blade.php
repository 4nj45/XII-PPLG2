@extends('layout')

@section('content')

<h3 class="text-center my-4">Create New Post</h3>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <form action="{{ route('posts.store')}}" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                            <label class="font-weight-bold">Title</label>
                            <input class="form-control @error('title') is-invalid @enderror" type="text" name="title" value="{{ old('title')}}">
                        </div>
                        <div class="form-group mb-3">
                            <label class="font-weight-bold">Content</label>
                            <textarea class="form-control @error('content') is-invalid @enderror" name="content" rows="5" placeholder="Add Content">{{ old('content')}}</textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label class="font-weight-bold" >Genre</label>
                            <input type="text" class="form-control @error('genre') is-invalid @enderror" name="genre"  value="{{ old('genre')}}" placeholder="Add Genre">                                                   
                        </div>

                        <button class="btn btn-primary" type="submit">Simpan</button>
                    </form>
                </div>

            </div>
        </div>
    </div>

</div>

@endsection