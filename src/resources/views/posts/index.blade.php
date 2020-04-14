@extends('layouts.app')

@section('content')

<section class='container'>
<section>
    記事数: {{ $posts->count() }}
</section>

<section>
@foreach ($posts as $post)
    <hr />
    <article>
    {{ $post->title }}<br />
    {!! nl2br(e($post->content)) !!}<br />
    {{ $post->created_at }}<br />
    {{ $post->user->name }}<br />
    </article>
@endforeach
</section>
</section>

@endsection