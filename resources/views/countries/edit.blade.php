@extends('base')
@section('main')
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h1 class="display-3">Изменить страну</h1>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                <br />
            @endif
            <form method="post" action="{{ route('cms.countries.update', $country->id) }}">
                @method('PATCH')
                @csrf
                <div class="form-group">

                    <label for="name">Название страны</label>
                    <input type="text" class="form-control" name="name" value={{ $country->name }} />
                </div>

                <div class="form-group">
                    <label for="continent_name">Название континента</label>
                    <input type="text" class="form-control" name="continent_name" value={{ $country->continent_name }} />
                </div>
                <button type="submit" class="btn btn-primary">Обновить</button>
            </form>
        </div>
    </div>
@endsection
