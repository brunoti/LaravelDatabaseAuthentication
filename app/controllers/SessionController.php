<?php

class SessionController extends BaseController {

	public function create (){
		$title = "Login";
		if(Auth::check()){
			return Redirect::route('usuario.index')->with('title','Bem-Vindo!');
		}

		return View::make('admin.form')->with('title', $title);
	}

	public function store(){
		$users = new User;
		$data = array('title' => 'Login');

		if (Auth::attempt(Input::only('email','password'))) {
			return View::make('admin.index')->with('title', $title)->with('usuario', Auth::user()->username)->with('usuarioLista',$users->get());
		}
		else{
			$data['error'] = true;
		}

		return View::make('admin.login')->with($data);
	}

	public function destroy(){
		
		Auth::logout();
		return Redirect::to('login')->with('title','Login');

	}
}