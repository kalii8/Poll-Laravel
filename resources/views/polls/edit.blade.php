Edit view
<form action="{{ action('PollController@update', ['code' => $poll->code]) }}" method="post">
{{ csrf_field() }}
<div class="form-group prl-5">
{!! Form::label('name', 'Poll name') !!}
{!! Form::text('name', $poll->name) !!}
</div>

<div class="form-group prl-5">
{!! Form::label('description', 'description') !!}
{!! Form::text('description', $poll->description) !!}
</div>


<div class="form-group prl-5">
{!! Form::submit('Save') !!}
</div>

</form>