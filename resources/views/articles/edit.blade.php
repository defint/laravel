<h1>Edit: {{ $article->title }}</h1>

<hr />

{!! Form::model($article,[
    'action' => ['ArticlesController@update',$article->id],
    'method' => 'PATCH'
]) !!}

@include('articles.form',['submitTitle' => 'Edit article'])

{!! Form::close() !!}

@include('errors.list')