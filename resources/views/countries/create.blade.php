@extends('base')

@section('main')
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h1 class="display-3">Добавление города</h1>
            <div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div><br />
                @endif
                <form method="post" action="{{ route('cms.cities.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="name">Название города</label>
                        <input type="text" class="form-control" name="name"/>
                    </div>

                    <div class="form-group">
                        <label for="country_id">ID страны</label>
                        <input type="text" class="form-control" name="country_id"/>
                    </div>
                    <button type="submit" class="btn btn-primary-outline">Добавить город</button>
                </form>
            </div>
        </div>
    </div>
@endsection
