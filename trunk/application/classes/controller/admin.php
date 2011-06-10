
<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin extends Controller {
	public function action_index()
	{
	    $route = '11';
	    $this->response->body('欢迎：'.$route);
	}
	public function action_hello()
	{
	   $this->response->body(View::factory('hello'));
	}

}
