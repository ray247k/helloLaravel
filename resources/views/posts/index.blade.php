@extends('layouts.master')

@section('content')
    <main role="main">

        <section class="jumbotron text-center">
            <div class="container">
                <h1 class="jumbotron-heading">Lay out 使用 yield的內容</h1>
                <p class="lead text-muted">section的content就是這堆東西，這是posts的首頁</p>
                <p>
                    <a href="#" class="btn btn-primary my-2">安安</a>
                    <a href="#" class="btn btn-secondary my-2">你好</a>
                </p>
            </div>
        </section>

    </main>
@endsection