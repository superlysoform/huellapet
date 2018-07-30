@extends('layouts.app')

@section('registro')
<!-- Formulario html -->

    <div class="newsleterr" onclick="contraer(this)">
      <h3><strong>CREAR CUENTA</strong></h3>

      <form class="contact_form" method="POST" enctype="multipart/form-data" action="">
         {{ csrf_field() }}
      <ul>
        <li>
           <input id="nombre" type="text" name="nombre" class="form-control{{ $errors->has('nombre') ? ' is-invalid' : '' }}" name="nombre" value="{{ old('nombre') }}" required autofocus placeholder="*Nombre" />
            @if ($errors->has('nombre'))
            <span class="invalid-feedback">
              <strong>{{ $errors->first('nombre') }}</strong>
            </span>
            @endif      
        </li>
        <li>
          <input id="apellido" type="text" class="form-control{{ $errors->has('apellido') ? ' is-invalid' : '' }}" name="apellido" value="{{ old('apellido') }}" required autofocus placeholder="*Apellido"/>
          @if ($errors->has('apellido'))
          <span class="invalid-feedback">
            <strong>{{ $errors->first('apellido') }}</strong>
          </span>
          @endif
        </li>
        <li>
          <input id="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required placeholder="*Email" />
            @if ($errors->has('email'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
            @endif
        </li>
        <li>
          <select name="nacionalidad" placeholder="Nacionalidad" id="nacionalidad" class="form-control{{ $errors->has('nacionalidad') ? ' is-invalid' : '' }}" required />
            <option value=1>Argentina</option>
            <option value=2>Uruguay</option>
            <option value=3>Brasil</option>
            <option value=4>Otro..</option>
          </select>
          @if ($errors->has('nacionalidad'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('nacionalidad') }}</strong>
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
        <li>
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="*Confirmar Clave">
        </li>
        <li>
           
           <input id="imagen" type="file" name="imagen" class="form-control{{ $errors->has('imagen') ? ' is-invalid' : '' }}" required />
           @if ($errors->has('imagen'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('imagen') }}</strong>
            </span>
            @endif
        </li>
        <li>
            <input type="submit" name="registro" value="{{ __('Registro') }}"  class="boton"><br>
      </li>
      </ul>
      </form>
      <p class="legales">Al registrarme, declaro que soy mayor de edad y acepto los Términos y condiciones y las Políticas de Huella Pet.</p>
    </div>
@endsection
<script src="{{ asset('js/formulario.js')}}" type="text/javascript"></script>