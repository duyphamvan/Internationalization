@extends('welcome')
@section('content')
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Stt</th>
                <th scope="col">Title</th>
                <th scope="col">Content</th>
                <th scope="col">Author</th>
                <th scope="col">Image</th>
            </tr>
            </thead>
            <tbody>
                <tr>

                    <td>{{1}}</td>
                    <td>{{$blog->title}}</td>
                    <td>{{$blog->content}}</td>
                    <td>{{$blog->author}}</td>
                    <td><img src="{{asset("storage/$blog->image")}}" alt="" width="200px" height="150px"></td>
                </tr>
            </tbody>
        </table>
    <a href="{{route('index')}}" class="btn btn-info">Back</a>
@endsection

