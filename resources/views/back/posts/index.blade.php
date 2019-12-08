@extends('back.admin')


@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                <table class="table">
                    <thead>
                    <tr>
                        <td>id</td>
                        <td>title</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td>
                                <a href="{{ route('post.show', $post->id) }}">
                                    {{ $post->title }}
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>

@endsection