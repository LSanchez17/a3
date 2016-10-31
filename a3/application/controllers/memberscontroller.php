<?php

class MembersController extends Controller{
	
	public $postObject;
   
   	public function view($uID){
	   
		$this->postObject = new Post();
		$userdata = $this->postObject->getUser($uID);	    
	  	$this->set('post',$userdata);
	   
   	}
	
	public function defaultTask(){
		
		$this->postObject = new Post();
		$users = $this->postObject->getAllUsers();
		$this->set('title', 'The User List');
		$this->set('posts',$users);
	
	}
	
	
}
