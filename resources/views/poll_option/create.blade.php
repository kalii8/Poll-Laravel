@extends('layout')

@section('content')

{{ $option->text }}
   <form action="{{ action('PollOptionController@store', [$code]) }}" method="post">     
   {{ csrf_field() }}
        <div class="form-group prl-5">
        
            {!! Form::label('option_text', 'description') !!}
            {!! Form::text('option_text', 'XXXXX') !!}
        </div>
        
        <div class="form-group prl-5">
            {!! Form::submit('Save') !!}
        </div>
          
    </form>

    

@endsection