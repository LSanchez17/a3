<?php

class AddPostController extends Controller{
	
	public $postObject;
	
	public function defaultTask(){
		
		$this->postObject = new Post();
		$this->set('task', 'add');
	
	
	}
	
	public function add(){
		
			$this->postObject = new Post();
			
			$data = array('title'=>$_POST['post_title'],'date'=>$_POST['date'],'categoryID'=>$_POST['categoryID'],'content'=>$_POST['post_content']);
			
	
			$result = $this->postObject->addPost($data);
			
			$this->set('message', $result);
			
		
	}
	
	public function edit($pID){
		
			$this->postObject = new Post();

			$post = $this->postObject->getPost($pID);
			
			$this->set('pID', $post['pID']);
			$this->set('title', $post['title']);
			$this->set('content', $post['content']);
			$this->set('date', $post['date']);
			$this->set('categoryID', $post['categoryID']);
			$this->set('task', 'update');
			
		
	}
	
	public function update($pID)
	{
	//Am I to set this like edit function, since we are running the 
    //update task at the same time?	
	}
	
}
