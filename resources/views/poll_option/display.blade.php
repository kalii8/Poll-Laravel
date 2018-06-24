@extends('layout')

@section('content')

 <div class="form-group prl-5">

{!! Form::text('name', $poll->name) !!}
</div>
<div class="form-group prl-5">

{!! Form::text('description', $poll->description) !!}
</div>

</div>

    

@endsection