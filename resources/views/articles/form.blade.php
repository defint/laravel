{!! Form::hidden('user_id',1) !!}

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

{!! Form::submit($submitTitle) !!}