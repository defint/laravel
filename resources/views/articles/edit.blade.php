<h1>Edit: {{ $article->title }}</h1>

<hr />

{!! Form::model($article,[
    'action' => ['ArticlesController@update',$article->id],
    'method' => 'PATCH'
]) !!}
<div>
    {!! Form::label('title','Title:') !!}
    {!! Form::text('title') !!}
</div>
<div>
    {!! Form::label('body','Body:') !!}
    {!! Form::textarea('body') !!}
</div>
<div>
    {!! Form::label('published_at','Publish on:') !!}
    {!! Form::input('date','published_at',\Carbon\Carbon::now()->format('Y-m-d')) !!}
</div>

{!! Form::submit('Create article') !!}
{!! Form::close() !!}

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif