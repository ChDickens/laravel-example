@extends('back.admin')


@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <form action="/admin-panel/posts/store" method="post">
                        {{ @csrf_field() }}
                        <div class="form-group">
                            <label for="">Тайтл</label>
                            <input type="text" name="title" class="form-control">
                        </div>
                        <div class="form-group">
                            <textarea name="content" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Создать</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection