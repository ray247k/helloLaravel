@extends('layouts.master')

@section('content')
    <div class="col-sm-8 blog-main">
        <h1>{{ $post->title }}</h1>
        {{ $post->body }}

        <hr>

        <div class="comments">
            <ul class="list-group">
                @foreach($post->comments as $comment)
                    <b>
                        {{ $comment->created_at->diffForHumans() }} : &nbsp;
                    </b>
                    <li class="list-group-item">
                        {{ $comment->body }}
                   </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection