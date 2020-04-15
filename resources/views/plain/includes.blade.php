@extends('plain.layout')

@section('styles')
    <link href="/css/app.css">
@endsection

@section('content')
    <h1>Includes</h1>
    @php($a=3)
    @include('plain.blocks.nav.index')
    @include('plain.blocks.includes.check-overwrite', ['a' => 4])
    A final is: {{$a}} <br>
@endsection
