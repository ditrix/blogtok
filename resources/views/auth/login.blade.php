@extends('layout.site')

@section('content')

<h1>login form</h1>
<form method="post" action="{{ route('auth.autentificate') }}" >
	@csrf
        <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Адрес почты"
                   required maxlength="255" value="{{ old('email') ?? '' }}">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="password" placeholder="Ваш пароль"
                   required maxlength="255" value="">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-info text-white">Войти</button>
        </div>
</form>
@endsection