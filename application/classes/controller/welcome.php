<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {

	public function action_index()
	{
		$abc = "f";
		//$user = ORM::factory('user', 1);
		//$this->response->body('欢迎：'.$user->name);
		$user = ORM::factory('user', $this->request->param('id', 1));
		$view = View::factory('welcome');
		$view->bind('user', $user);
		//echo Debug::vars($user);
		//echo Debug::source(__FILE__, __LINE__);
		//echo Debug::path(APPPATH);	
		//

		//
		Cookie::set('key_name','1625');
		Session::instance()->set('username', 'ffffffffffffffffffffffff');
	

		//设置Cooki1
		//Cookie::set('user_id', $user_id);
		//设置 Session
		//Session::instance()->set('key_name', 'value');
		//Session::instance()->set('user_id', $user_id);

		//取cookie session
		//echo Cookie::get('key_name');
		echo Session::instance()->get('username');
			
		$this->response->body($view->render());

		
		
	}

} // End Welcome
