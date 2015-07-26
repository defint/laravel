@extends('app')

@section('title')
<title>Articles</title>
@stop


@section('content')
<div class="uk-block">
    @if(count($articles)>0)
    <div class="uk-container uk-width-medium-1-1 ">
        @foreach($articles as $article)
        <article class="uk-article">
            <div class="uk-article-title"> <a href="{{ action('ArticlesController@show', [$article->id]) }}">{{ $article->title }}</a></div>
            <p class="uk-article-meta">{{ $article->published_at }} | {{  App\User::find($article->user_id)->name }}</p>

            <a href="{{ action('ArticlesController@edit', [$article->id]) }}" class="uk-icon-small uk-icon-edit">Edit</a>
            <div>
                {{ $article->body }}
            </div>
        </article>
        @endforeach
    </div>
    @else
    <div class="uk-container-center uk-width-medium-1-2 uk-text-center">
        <h2>No available articles</h2>
    </div>
    @endif
</div>
@stop