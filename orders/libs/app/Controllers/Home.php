<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		include("../index.html");
		//return view('welcome_message');
	}

	//--------------------------------------------------------------------

}
