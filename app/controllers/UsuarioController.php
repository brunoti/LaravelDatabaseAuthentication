<?php

class UsuarioController extends BaseController {

	public function index(){
		$title = "Home";
		$users = DB::table('users')->get();

		return $users;
		//return View::make('admin.index')->with('title',$title);
	}

}
