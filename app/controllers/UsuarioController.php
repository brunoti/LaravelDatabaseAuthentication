<?php

class UsuarioController extends BaseController {

	public function index(){
		$title = "Home";
		$users = new User;
		if(Auth::check()):
			return View::make('admin.index')->with('title', $title)->with('usuario', Auth::user()->username)->with('usuarioLista',$users->get());
		else:
			return View::make('admin.login')->with('title','Login');
		endif;
	}

	public function store(){
		$title = "Cadastro";
		$users = new User;

		$users->username = Input::get('username');
		$users->email = Input::get('email');
		$users->password = Input::get('password') === Input::get('passwordconfirm') ? Hash::make(Input::get('password')) : die("Senhas não batem!");
		$users->save();

		return Redirect::route('usuario.index');
	}

	public function create(){
		$title = "Cadastro";

		return View::make('admin.form')->with('title',$title);
	}
}
