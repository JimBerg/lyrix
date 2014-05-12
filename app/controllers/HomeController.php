<?php

class HomeController extends BaseController {

	protected $layout = 'layout/master';
	public function index()
	{
        $user = User::all();
		return View::make('home/index')->with('user', $user);
	}

}
