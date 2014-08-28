<?php

class SessionController extends BaseController {

	public function create (){
		$title = "Login";
		if(Auth::check()){
			return Redirect::route('usuario.index')->with('title','Bem-Vindo!');
		}
		return View::make('admin.login')->with('title', $title);
	}

	public function store(){
		$title = "Bem Vindo!";
		$users = new User;

		if (Auth::attempt(Input::only('email','password'))) {
			return View::make('admin.index')->with('title', $title)->with('usuario', Auth::user()->username)->with('usuarioLista',$users->get());
		}

		return Redirect::route('session.create')->with('title','Login');
	}

	public function destroy(){
		
		Auth::logout();
		return Redirect::to('login')->with('title','Login');

	}
}