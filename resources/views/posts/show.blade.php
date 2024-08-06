@extends('layout')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow-sm rounded pt-4 pb-4">
                <div class="card-body">
                    <h3>{{ $post->title}}</h3>
                <p>{{ $post->content}}</p>
                <p>{{ $post->genre}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection