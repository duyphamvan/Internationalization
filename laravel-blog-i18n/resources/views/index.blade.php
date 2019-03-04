@extends('welcome')
@section('content')

@if(count($blogs)==0)
    <p>{!!__('language.post_not_exit')!!}</p>
@else
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Stt</th>
            <th scope="col">@lang('language.title')</th>
            <th scope="col">@lang('language.content')</th>
            <th scope="col">@lang('language.author')</th>
            <th scope="col">@lang('language.image')</th>
        </tr>
        </thead>
        <tbody>
        @foreach($blogs as $key =>$blog)
            <tr>
                <td>{{++$key}}</td>
                <td>{{$blog->title}}</td>
                <td>{{$blog->content}}</td>
                <td>{{$blog->author}}</td>
                <td><img src="{{asset("storage/$blog->image")}}" alt="" width="200px" height="150px"></td>
                <td><a href="{{route('delete', $blog->id)}}" class="btn btn-danger">Delete</a></td>
                <td><a href="{{route('edit', $blog->id)}}" class="btn btn-warning">Update</a></td>
                <td><a href="{{route('show', $blog->id)}}" class="btn btn-success">Show</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endif
<div class="links">
    <a href="{{route('add')}}" class="btn btn-info">@lang('language.create_post')</a>
    <a href="{!! route('user.change-language', ['en']) !!}" class="btn btn-success">English</a>
    <a href="{!! route('user.change-language', ['vi']) !!}" class="btn btn-success">Vietnam</a>
</div>

@endsection

