<?php
namespace App;

class Page extends \PHPixie\Controller {
	
	//This will be our main view
	protected $view;
	
	//This method will execute before
	//every action inside the controller
	public function before() {
	
		//Initialize the main view
		$this->view = $this->pixie->view('main');
	}
	
	//This method will execute after
	//every action inside the controller
	public function after() {
		
		//Render the view and output it
		$this->response->body = $this->view->render();
	}
	
}