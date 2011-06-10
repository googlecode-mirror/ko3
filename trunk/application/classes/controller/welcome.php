<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {

	public function action_index()
	{
		//$user = ORM::factory('user', 1);
		//$this->response->body('欢迎：'.$user->name);
		$user = ORM::factory('user', $this->request->param('id', 1));
		$view = View::factory('welcome');
		$view->bind('user', $user);
		$this->response->body($view->render());
		
		
	}

} // End Welcome
