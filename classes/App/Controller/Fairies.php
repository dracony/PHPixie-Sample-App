<?php
namespace App\Controller;

class Fairies extends \App\Page {

	public function action_index() {
	
		//Show a list of fairies
		$this->view->subview = 'list';
		
		//Find all fairies and pass them to the view
		$this->view->fairies = $this->pixie->orm->get('fairy')->find_all();
	}
	
	public function action_view() {
	
		//Show the single fairy page
		$this->view->subview = 'view';
		
		//Get the ID of the fairy from URL parameters
		$id = $this->request->param('id');
		
		//Find a fairy by ID and pass her to the view
		$this->view->fairy = $this->pixie->orm->get('fairy', $id);
	}
	
	public function action_add() {
		
		//If the HTTP method is 'POST'
		//it means that the form got submitted
		//and we should process it
		if ($this->request->method == 'POST') {
			
			//Create a new fairy
			$fairy = $this->pixie-> orm->get('fairy');
			
			//Set her name from the form POST data
			$fairy->name = $this->request->post('name');
			
			//Set her interests from the form POST data
			$fairy->interests = $this->request->post('interests');
			
			//Save her
			$fairy->save();
			
			//And redirect the user back to the list
			return $this->redirect('/');
		}
		
		//Show the form
		$this->view->subview = 'add';
	}
	
	public function action_delete() {
		
		// Get id of a fairy to delete
		$id = $this->request->param('id');
		
		// Load a fairy
		$fairy = $this->pixie->orm->get('fairy', $id);
		
		// If a fairy is not loaded for whatever reason - redirect to the list
		if (!$fairy->loaded()) {
			return $this->redirect('/');
		}
		
		// Delete a fairy
		$fairy->delete();
		
		// Redirect back to the list
		$this->redirect('/');
	}
	
	public function action_edit() {
		
		$id = $this->request->param('id');
		$fairy = $this->pixie->orm->get('fairy', $id);

		if (!$fairy->loaded())
		{
			return $this->redirect($this->pixie->router->get('default')->url());
		}

		//If the HTTP method is 'POST'
		//it means that the form got submitted
		//and we should process it
		if ($this->request->method == 'POST')
		{

			//Set her name from the form POST data
			$fairy->name = $this->request->post('name');

			//Set her interests from the form POST data
			$fairy->interests = $this->request->post('interests');

			$validator = $this->pixie->validate->get($this->request->post());

			$validator->field('name')->rule('filled')->error('Name has to be filled');

			if ($validator->valid())
			{
				//Save her
				$fairy->save();

				//And redirect the user back to the list
				return $this->redirect('/');
			}

			$this->view->errors = $validator->errors();

		}

		$this->view->fairy = $fairy;

		//Show the form
		$this->view->subview = 'edit';
	}

}
