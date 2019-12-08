@extends('back.admin')


@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <h1>{{ $post->title }}</h1>
                    <p>{!! $post->content !!}</p>
                </div>
            </div>
        </div>
    </div>

@endsection