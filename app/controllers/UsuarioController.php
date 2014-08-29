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
		
		$validator = Validator::make(
			array(
				'firstname' => 'required|min:5',
				'lastname' => 'required|min:5',
				'password' => 'required|min:5|confirmed',
				'email' => 'required|min:5|email'
				)
			);	

		$users->firstname = Input::get('firstname');
		$users->lastname = Input::get('lastname');
		$users->email = Input::get('email');
		$users->email = Input::get('email');

		$users->save();

		return Redirect::route('usuario.index');
	}

	public function create(){
		$title = "Cadastro";

		return View::make('admin.form')->with('title',$title);
	}
}
