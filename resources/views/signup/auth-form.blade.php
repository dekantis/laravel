{!! Form::open() !!}
    <div class="form-group">
        {!! FORM::label('login', 'Введите логин') !!}
        {!! FORM::text('login', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('email', 'Ваш email') !!}
        {!! Form::text('email', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('password', 'Введите пароль') !!}
        {!! Form::text('password', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('repeat_password', 'Повторите пароль') !!}
        {!! Form::text('repeat_password', null, ['class' => 'form-control']) !!}
    </div>

    {!! Form::submit('Submit', ['class' => 'btn btn-info']) !!}
{!! FORM::close()  !!}
