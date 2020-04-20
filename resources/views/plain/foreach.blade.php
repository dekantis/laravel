@extends('layouts.layout')

@section('content')
    <h1>Foreach</h1>
    @include('plain.blocks.nav.index')

    @php($newsList = [
        'Первая новость',
        'Вторая новость',
        'Третья новость',
        'Четвертая новость',
    ])

    <h2>News: </h2>
    <ul>
        @foreach($newsList as $news)
            <li>
                @if($loop->first) Breaking News: @endif
                @if($loop->last) Last News: @endif
            </li>
        @endforeach
    </ul>
@endsection
