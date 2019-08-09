@extends('layout')

@section('content')
<h1>{{ $post->title}}</h1>
<h1>{{ $post->content}}</h1>

<p>Added {{$post->created_at->diffForHumans()}}</p>

@if ((new Carbon\Carbon())->diffInMinutes($post->created_at) < 5 )
<strong>New!</strong>
@endif

<h4>Comments</h4>
<!--Esta parte del forelse se trae select en el show para mostrar los datos de la DB-->
@forelse ($post->comments as $comment)
<p>
    {{ $comment->content }}
</p>

<P class="text-muted">
     added {{ $comment->created_at->diffForHumans()}}
</P>

@empty

<p>No comments yet!</p>

@endforelse
<!--.FORELSE-->
@endsection('content')
