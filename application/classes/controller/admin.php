<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Admin extends Controller_Layout {
 
        public $auth_role 	   = array('login','admin'); //required role for secured pages
	public $secure_actions     = array('post','edit','delete'); //secured pages
 
	function action_index(){ }
 
        function action_view(){ }
 
        function action_post(){ }
 
        function action_edit(){ }
 
        function action_delete(){ }
}

