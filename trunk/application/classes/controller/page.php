
<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Page extends Controller {
	public function action_index()
	{
	    $route = '11';
	    $this->response->body('欢迎：'.$route);
	}
	public function action_about()
	{
		//$this->response->body(View::factory('page/about'));
		$view = View::factory('page/about');
		$view->places = array('Rome', 'Paris', 'London', 'New York', 'Tokyo');
		//$view->user = $this->user;
		// The view will have $places and $user variables
		$this->response->body($view);
	}

}
