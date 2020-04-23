@extends('base')

@section('main')
    <div class="row">
        <div class="col-sm-12">

            @if(session()->get('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
        </div>
        <div>
            <a style="margin: 19px;" href="{{ route('cms.countries.create')}}" class="btn btn-primary">Добавить страну</a>
        </div>
        <div class="col-sm-12">
            <h1 class="display-3">Список стран</h1>
            <table class="table table-striped">
                <thead>
                <tr>
                    <td>ID</td>
                    <td>Название страны</td>
                    <td>Название континента</td>
                    <td colspan = 2>Действия</td>
                </tr>
                </thead>
                <tbody>
                @foreach($countries as $country)
                    <tr>
                        <td>{{$country->id}}</td>
                        <td>{{$country->name}}</td>
                        <td>{{$country->continent_name}}</td>
                        <td>
                            <a href="{{ route('cms.countries.edit',$country->id)}}" class="btn btn-primary">Изменить</a>
                        </td>
                        <td>
                            <form action="{{ route('cms.countries.destroy', $country->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Удалить</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div>
            </div>
@endsection
