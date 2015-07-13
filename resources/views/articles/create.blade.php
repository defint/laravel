<h1>Create Article</h1>

<hr />

{!! Form::open(['url' => 'articles/']) !!}

@include('articles.form',['submitTitle' => 'Create article'])

{!! Form::close() !!}

@include('errors.list')