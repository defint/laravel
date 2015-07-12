<h1>Create Article</h1>

<hr />

{!! Form::open() !!}
    <div>
        {!! Form::label('title','Title:') !!}
        {!! Form::text('title') !!}
    </div>
    <div>
        {!! Form::label('body','Body:') !!}
        {!! Form::textarea('body') !!}
    </div>

    {!! Form::submit('Create article') !!}
{!! Form::close() !!}