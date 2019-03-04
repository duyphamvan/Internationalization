@extends('home')
@section('title', 'List Task')
@section('content')
    <div class="col-12">
        <div class="row">
            <div class="col-12 text-center mt-4"><h1>@lang('language.list_task')</h1></div>
            <div class="btn-group dropright mb-5">
                <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Language
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class=" " href="{!! route('change-language', ['en']) !!}">English</a>
                    <a class="" href="{!! route('change-language', ['vi']) !!}">Tiếng Việt</a>
                </div>
            </div>
            <div class="col-12">
                @if (Session::has('success'))
                    <p class="text-success">
                        <i class="fa fa-check" aria-hidden="true"></i>{{ Session::get('success') }}
                    </p>
                @endif
            </div>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">@lang('language.task_title')</th>
                    <th scope="col">@lang('language.content')</th>
                    <th scope="col">@lang('language.image')</th>
                    <th scope="col">@lang('language.due_date')</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @if(count($tasks) == 0)
                    <tr><td colspan="4">Không có dữ liệu</td></tr>
                @else
                    @foreach($tasks as $key => $task)
                        <tr>
                            <th scope="row">{{ ++$key }}</th>
                            <td>{{ $task->title }}</td>
                            <td>{{ $task->content }}</td>
                            <td><img src="{{ asset("storage/$task->image") }}" alt="" width="200px" height="150px"></td>
                            <td>{{$task->dua_date}}</td>
                            <td><a href="{{ route('tasks.edit', $task->id) }}">@lang('language.edit')</a></td>
                            <td><a href="{{ route('tasks.destroy', $task->id) }}" class="text-danger" onclick="return confirm('Bạn chắc chắn muốn xóa?')">@lang('language.remove')</a></td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
            <a class="btn btn-primary" href="{{ route('tasks.create') }}">@lang('language.add')</a>
        </div>
    </div>
@endsection