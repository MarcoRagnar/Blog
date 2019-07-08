@extends('layout')

@section('content')
<h1>{{ $post->title}}</h1>
<h1>{{ $post->content}}</h1>

<p>Added {{$post->created_at->diffForHumans()}}</p>

@if ((new Carbon\Carbon())->diffInMinutes($post->created_at) < 5 )
<strong>New!</strong>
@endif
@endsection('content')
