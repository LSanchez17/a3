<?php

class RegisterController extends Controller{
	
	private $userObject;
	
	public function defaultTask(){
		
		$userObject = new Users();
		$this->set('task', 'add');
	
	
	}
	
	public function add()
        {
		
	  $this->userObject = new Users();
          $password = $_POST['password'];
          $passhash = password_hash($password, PASSWORD_DEFAULT);
 			
	  $data = array('uID'=>$_POST['uID'],'email'=>$_POST['email'],'password'=>$passhash,'first_name'=>$_POST['first_name'],'last_name'=>$_POST['last_name']);

      	  $result = $this->userObject->addUser($data);
			
	  $this->set('message', $result);
			
	}
}
