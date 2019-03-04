@extends('welcome')
@section('content')
    <form action="{{route('update', $blog->id)}}" enctype="multipart/form-data" method="post">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Title</label>
            <input type="text" value="{{$blog->title}}" class="form-control" name="title" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Content</label>
            <input type="text" value="{{$blog->content}}" class="form-control" name="content" id="exampleInputPassword1" >
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Author</label>
            <input type="text" value="{{$blog->author}}"  class="form-control" name="author" id="exampleInputPassword1">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Image</label>
            <input type="file" value="{{asset("storage/$blog->image")}}" class="form-control" name="image" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection