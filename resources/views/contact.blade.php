@extends('layouts.app')




@section('content')

    <h1>Content Page</h1>

    @if(count($persons))
        <ul>
        @foreach($persons as $person)
            <li>{{$person}}</li>
            @endforeach
        </ul>
    @endif


@stop


@section('footer')
    <script>
        // alert('Bye Sir');
    </script>

@stop