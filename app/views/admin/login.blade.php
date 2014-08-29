@extends('layout.blank')

@section('content')

<div id="login" class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Por favor, insira seus dados:</h3>
				</div>
				<div class="panel-body">
				@if (isset($error))
					<div class='row'>
						<div class='col-lg-12'>
							<div class="alert alert-danger alert-dismissible" role="alert">
								<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
								Nome de usuário e/ou senha não encontrados!
		 					</div>
						</div>
					</div>
				@endif
				<form method="post" action="/session">
					<fieldset>
						<div class="form-group">
							<input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
						</div>
						<div class="form-group">
							<input class="form-control" placeholder="Password" name="password" type="password" value="">
						</div>
						<!-- Change this to a button or input when using this as a form -->
						<button type="submit" class="btn btn-success btn-block">Login</button>
						<a href="{{ URL::to('/cadastro') }}" class="btn btn-info btn-block">Cadastre-se!</a>
					</fieldset>
				</form>
			</div>
		</div>
	</div>
</div>
</div>

@stop