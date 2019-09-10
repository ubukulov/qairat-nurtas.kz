@extends('admin.layouts.admin')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('admin.post.create') }}" class="btn btn-primary"><i class="fa fa-edit"></i>&nbsp; Добавить</a>
            <table class="table">
                <thead>
                    <th>ID</th>
                    <th>Наименование</th>
                    <th>Действие</th>
                </thead>

                <tbody>
                    @foreach($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>
                        <td>
                            <a href="{{ route('admin.post.edit', ['id' => $post->id]) }}" class="btn btn-primary"><i class="fa fa-edit"></i>&nbsp; Ред.</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
@stop