<div class="prefinal">

	<div class="consultanos" id="contacto">
	   <h3>DEJANOS TU CONSULTA</h3>
	   <hr>
	   <form class="contact_form" action="{{ url('/contacto')}}" method="post" name="contact_form">
	   	 {{ csrf_field() }}
	   		<ul>
		        <li>
					<input id="nombre" type="text" name="nombre" class="form-control{{ $errors->has('nombre') ? ' is-invalid' : '' }}" value="{{ old('nombre') }}" required placeholder="*Nombre" />
		            @if ($errors->has('nombre'))
		            <span class="invalid-feedback">
		              <strong>{{ $errors->first('nombre') }}</strong>
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
					<textarea type="textarea" id="mensaje" class="form-control{{ $errors->has('long_description') ? ' is-invalid' : '' }}" rows="5" name="mensaje" required placeholder="*tu mensaje" />{{ old('mensaje') }}</textarea>
		            @if ($errors->has('mensaje'))
		            <span class="invalid-feedback">
		                <strong>{{ $errors->first('mensaje') }}</strong>
		            </span>
		            @endif  
				</li>
		        <li>
		         	<input type="submit" name="enviarcons" value="{{ __('enviar') }}" placeholder="ENVIAR" >
		        </li>
	      	</ul>
	   </form>
	</div>

	<div class="newsleterr">
		<h3>Sumate a nuestro newsletter</h3>
		<hr>
		<form class="contact_form" action="{{ url('/contacto/news')}}" method="post" name="contact_form">
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
					<input type="submit" name="enviarnews" value="{{ __('enviar') }}" placeholder="ENVIAR">
				</li>
			</ul>
		</div>	
		</form>

	</div>
	<div class="ubicanos">
		<h3>ACERCATE A NUESTRO LOCAL</h3>
		<hr>
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13136.066850016401!2d-58.3815704!3d-34.6037389!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x11bead4e234e558b!2sObelisco!5e0!3m2!1ses!2sar!4v1521055859994" width="100%" height="280px" frameborder="0" style="border: 4px solid #F2CD13" allowfullscreen></iframe>
	</div>
</div>
