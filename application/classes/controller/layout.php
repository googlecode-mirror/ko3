<?php defined('SYSPATH') or die('No direct script access.');
 
  class Controller_Layout extends Controller_Template 
  {
 
      public $template = 'layout';
      public $user;
      public $auth_required = FALSE;
      public $auth_role 	= array('login');
      public $secure_actions     = array();
 
 
      /**
       * The before() method is called before your controller action.
       * In our template controller we override this method so that we can
       * set up default values. These variables are then available to our
       * controllers if they need to be modified.
       */
      public function before()
      {
        parent::before();
 
        #Open session
        $this->session= Session::instance();
	
        #Check user auth and role
        $action_name = Request::instance()->action;
		if (($this->auth_required == TRUE || in_array( $action_name, $this->secure_actions) )
				AND Auth::instance()->logged_in($this->auth_role) == FALSE)
		{
			if (Auth::instance()->logged_in()){
			    Request::instance()->redirect('account/noaccess');
			}else{
			    Request::instance()->redirect('account/signin');
			}
		}
 
  	    if ($this->auto_render)
  	    {
  	    	// Initialize empty values
  	    	$this->template->title   = '';
  	    	$this->template->content = '';
 
  			$this->template->styles = array();
  			$this->template->scripts = array();   
 
          }
      }
 
      /**
       * The after() method is called after your controller action.
       * In our template controller we override this method so that we can
       * make any last minute modifications to the template before anything
       * is rendered.
       */
      public function after()
      {
		if ($this->auto_render)
		{
			$styles = array(
				'css/main.css',
			);
 
			$scripts = array(
				'js/jquery-1.3.2.min.js',
			);
 
			$this->template->styles 	= array_merge( $this->template->styles, $styles );
			$this->template->scripts 	= array_merge( $this->template->scripts, $scripts );
 
		}
		parent::after();
      }
  }

