@extends('welcome')
@section('content')
    <form action="{{route('store')}}" enctype="multipart/form-data" method="post">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">@lang('language.title')</label>
            <input type="text" class="form-control" name="title" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">@lang('language.content')</label>
            <input type="text" class="form-control" name="content" id="exampleInputPassword1">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">@lang('language.author')</label>
            <input type="text" class="form-control" name="author" id="exampleInputPassword1">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">@lang('language.image')</label>
            <input type="file" class="form-control" name="image" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{!! route('user.change-language', ['en']) !!}" class="btn btn-success">English</a>
        <a href="{!! route('user.change-language', ['vi']) !!}" class="btn btn-success">Vietnam</a>
    </form>
@endsection