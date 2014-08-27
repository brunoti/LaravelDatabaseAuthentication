<?php

class SessionController extends BaseController {

	public function create (){

		$title = "login";
		return View::make('admin.login')->with('title', $title);
	}
}