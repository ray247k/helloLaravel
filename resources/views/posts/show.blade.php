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

        <hr>

        <div class="card">
            <div class="card-block">

                <form method="post" action="/posts">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <textarea type="text" class="form-control" id="body" name="body" placeholder="留言內容"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">留言</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection