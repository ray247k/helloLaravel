@extends('layouts.master')

@section('content')
    <main role="main">
        <h1>發表文章</h1>
        <form method="post" action="/posts">
            {{csrf_token()}}
            <div class="form-group">
                <label for="exampleInputEmail1">標題</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="文章標題">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">內文</label>
                <textarea type="text" class="form-control" id="body" name="body" placeholder="文章內文"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">送出</button>
        </form>
    </main>
@endsection