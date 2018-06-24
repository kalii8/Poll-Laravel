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
                <a href="{{ action('PollController@edit', ['code' => $poll->code]) }}">Edit</a>
                <a href="{{ action('PollOptionController@create', ['code' => $poll->code]) }}">Add</a>
                <a href="{{ action('PollOptionController@display', ['code' => $poll->code]) }}">Display</a>
                
            
                 
                 
                
            @endforeach
        </ul>
    </div>
</section>   
@endsection
