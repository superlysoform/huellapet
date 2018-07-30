@extends('layouts.app')

@section('login')
<div class="login-user">
    <h3><strong>¡Hola Bienvenido!</strong></h3>
    <form method="POST" action="{{ route('login') }}" class="contact_form">
      {{ csrf_field() }}
        <ul>
            <li>
              <input id="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required placeholder="*Email" />
                @if ($errors->has('email'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
            </li>
            <li>
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="*Clave" >
                @if ($errors->has('password'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif 
            </li>
            <li>
                <label>Recordarme</label>
                <input type="checkbox" name="remember" value="ok">
            </li>
            <li>
                <a class="btn btn-link" href="{{ route('password.request') }}">{{ __('¿Olvidaste tu contraseña?') }}</a>
            </li>
        </ul>
        <input type="submit" name="login" value="login" class="boton"><br>
    </form>
</div>
@endsection
