<h1>Articles</h1>
<hr />
@foreach($articles as $article)
    <article>
        <h3>
            <a href="{{ action('ArticlesController@show', [$article->id]) }}">{{ $article->title }}</a>
        </h3>
        <div>
            {{  $article->body }}
        </div>
    </article>
@endforeach