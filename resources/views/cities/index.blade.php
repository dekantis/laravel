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
            <a style="margin: 19px;" href="{{ route('cms.cities.create')}}" class="btn btn-primary">New contact</a>
        </div>
        <div class="col-sm-12">
            <h1 class="display-3">Contacts</h1>
            <table class="table table-striped">
                <thead>
                <tr>
                    <td>ID</td>
                    <td>Название города</td>
                    <td>ID города</td>
                    <td colspan = 2>Actions</td>
                </tr>
                </thead>
                <tbody>
                @foreach($cities as $city)
                    <tr>
                        <td>{{$city->id}}</td>
                        <td>{{$city->name}}</td>
                        <td>{{$city->country_id}}</td>
                        <td>
                            <a href="{{ route('cms.cities.edit',$city->id)}}" class="btn btn-primary">Edit</a>
                        </td>
                        <td>
                            <form action="{{ route('cms.cities.destroy', $city->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div>
            </div>
@endsection
