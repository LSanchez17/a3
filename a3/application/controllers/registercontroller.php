<?php

class RegisterController extends Controller{
	
	public $postObject;
	
	public function defaultTask(){
		
		$this->postObject = new Post();
		$this->set('task', 'add');
	
	
	}
	
	public function add()
        {
		
	  $this->postObject = new Post();
			
	  $data = array('uID'=>$_POST['uID'],'email'=>$_POST['email'],'password'=>$_POST['password'],'first_name'=>$_POST['first_name'],'last_name'=>$_POST['last_name']);
			
	
	  $result = $this->postObject->addPost($data);
			
	  $this->set('message', $result);
			
	}
}
