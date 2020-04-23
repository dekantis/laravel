@extends('base')
@section('main')
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h1 class="display-3">Изменить город</h1>

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
            <form method="post" action="{{ route('cms.cities.update', $city->id) }}">
                @method('PATCH')
                @csrf
                <div class="form-group">

                    <label for="first_name">Название города</label>
                    <input type="text" class="form-control" name="name" value={{ $city->name }} />
                </div>

                <div class="form-group">
                    <label for="last_name">ID страны</label>
                    <input type="text" class="form-control" name="country_id" value={{ $city->country_id }} />
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection
