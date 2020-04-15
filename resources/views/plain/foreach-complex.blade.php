@extends('plain.layout')

@section('content')
    <h1>Foreach Complex</h1>
    @include('plain.blocks.nav.index')

    @php($newsList = [
        [
            'title' => 'Новость <b>1</b>',
            'url' => 'https://vk.com',
            'tags' => [
                'breaking',
                'stub',
                'new',
                'hot'
            ],
        ],
        [
            'title' => 'Новость <b>2</b>',
            'url' => 'https://fb.com',
            'tags' => [
                'Serena',
                'Sharapova',
                'Facebook',
            ],
        ],
    ])
    <h2> News: </h2>
    @foreach($newsList as $news)
        <li>
            {!! $news['title'] !!}
            Tags:
            @forelse($news['tags'] as $tag)
                @if($loop->parent->first && $loop->first) <b>First</b> @endif
                {{$tag}}
            @empty
                No Tags
            @endforelse
        </li>
    @endforeach
@endsection
