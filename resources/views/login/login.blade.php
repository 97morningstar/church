 @extends('layout.app')

 @section('title')
 - Eventos
 @endsection

  @section('top_style')
  <header class="top_panel_wrap top_panel_style_3 scheme_original">
                    <div class="top_panel_wrap_inner top_panel_inner_style_3 top_panel_position_above">
 @endsection

 @section('body_class')

 @endsection

  @section('pop')

<div id="" class="g_tint_light">
	<a href="#" class=""></a>
	<div class="form_wrap center">
		<div class="r">
			<form action="/login" method="POST" name="login_form" class="login_form">
				{!! csrf_field() !!}
				<div class="login_field iconed_field icon-user">
					<input type="email" name="email"  id="log" value="" placeholder="Usuario o Correo Electrónico">
				</div>
				<br>
				<div class="password_field iconed_field icon-lock">
					<input type="password" id="password" name="password" value="" placeholder="Contraseña">
				</div>
				<br>
				<div class="popup_form_field remember_field">
					<input type="checkbox" value="forever" id="rememberme" name="rememberme">
					<label for="rememberme">Recuérdame</label>
					<a href="#" class="forgot_password">Olvidaste?</a>
				</div>
				<br>
				<div class="submit_field">
					<input type="submit" class="submit_button" value="Entrar">
				</div>
			</form>
		</div>
		<br>
		<div class="form_right">
			<div class="login_socials_title">Pase de administradores</div>
				<div>Por favor contacta a uno de los líderes si necesitas un pase de administrador. Bendiciones.</div>
			<div class="result message_block"></div>
		</div>
		<br>
	</div>
</div>
@endsection