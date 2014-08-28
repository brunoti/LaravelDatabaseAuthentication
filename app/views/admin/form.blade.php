@extends('layout.login')

@section('content')

<div id="cadastro" class="container">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">Cadastro</h3>
		</div>
		<div class="panel-body">
			<form class="form-horizontal" method="post" action="/usuario">
				<fieldset>
					<div class="form-group">
						<label class="col-md-4 control-label" for="username">Nome</label>  
						<div class="col-md-6">
							<input id="username" name="username" type="text" required   class="form-control input-md">
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-4 control-label" for="email">E-Mail</label>  
						<div class="col-md-6">
							<input id="email" name="email" type="email" required   class="form-control input-md">
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-4 control-label" for="password">Senha</label>
						<div class="col-md-6">
							<input id="password" name="password" type="password"   class="form-control input-md">
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-4 control-label" for="passwordconfirm">Confirmar Senha</label>
						<div class="col-md-6">
							<input id="passwordconfirm" name="passwordconfirm" type="password"   class="form-control input-md">
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-8 col-md-offset-5">
							<button id="submit" type="submit" class="btn btn-success">Enviar</button>
							<button id="reset" type="reset" class="btn btn-danger">Resetar</button>
						</div>
					</div>

				</fieldset>
			</form>
		</div>
	</div>
</div>

@stop