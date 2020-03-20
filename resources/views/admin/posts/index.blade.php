@extends('layouts.admin')
@section('content')

<h1>Posts</h1>

<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Photo</th>
            <th>Owner</th>
            <th>Category</th>
            <th>Title</th>
            <th>Body</th>
            <th>Post link</th>
            <th>Comments</th>
            <th>Created at</th>
            <th>Updated at</th>
        </tr>
    </thead>
    <tbody>

        @if($posts)

        @foreach($posts as $post)

        <tr>
            <td>{{$post->id}}</td>
            <td><img height="50" src="{{$post->photo ? $post->photo->file : 'http://placehold.it/400x400'}}" alt=""></td>
            <td><a href="{{route('admin.posts.edit', $post->id)}}">{{$post->user->name}}</a></td>
            <td>{{$post->category ? $post->category->name : 'Uncategorized' }}</td>
            <td>{{$post->title}}</td>
{{--            This down is helper--}}
            <td>{{str_limit($post->body, 30)}}</td>
            <td><a href="{{route('home.post', $post->slug)}}">View Post</a></td>
            <td><a href="{{route('admin.comments.show', $post->id)}}">View Comments</a></td>
            <td>{{$post->created_at->diffForHumans()}}</td>
            <td>{{$post->updated_at->diffForHumans()}}</td>
        </tr>
        @endforeach
        @endif
    </tbody>
</table>
<div class="row">
    <div class="col-sm-6 col-sm-offset-5">

        {{$posts->render()}}
        {{--        show pages numbers <<previous page <<1, 2,3 >> next page>> etc..--}}

    </div>
</div>

@stop