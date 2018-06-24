Create view
<form action="{{ action('PollOptionController@store', [$code]) }}" method="post">
FORM

{{ csrf_field() }}
<div class="form-group prl-5">
{!! Form::label('name', 'Poll name') !!}
{!! Form::text('name', '') !!}
</div>


<div class="form-group prl-5">
{!! Form::label('description', 'description') !!}
{!! Form::text('description', '$poll->description') !!}
</div>


{{-- <select name="poll_options[]">
    @foreach ($poll_options as $poll_option)
        <option value="{{ $poll_option->id }}">{{ $poll_option->name }}</option>
    @endforeach
</select> --}}

<div class="form-group prl-5">
{!! Form::submit('Save') !!}
</div>



</form>