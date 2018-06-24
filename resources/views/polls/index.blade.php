@extends('layout')

@section('content')

<section id="polls">
    <div class="container">
        <h1> List </h1>
        <ul class="list-group">
            @foreach($polls as $poll)
                <li class="list-group-item">
                    {{ $poll->name }}
                </li>
            @endforeach
        </ul>
    </div>
</section>   
@endsection
