
<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Home extends Controller_Website {
 
    public function action_index()
    {
        $this->page_title = 'Home';
 
        //$this->template->content = View::factory('pages/home');
    }
 
}

