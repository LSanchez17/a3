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
			
			$this->set('pID', $_POST['pID']);
			$this->set('title', $_POST['title']);
			$this->set('content', $_POST['content']);
			$this->set('date', $_POST['date']);
			$this->set('categoryID', $_POST['categoryID']);
			$this->set('task', 'update');
			
		
	}
	
	public function update($pID)
	{
            $this->postObject = new Post();

	    $post = $this->postObject->getPost($pID);
            
            $item1 = $this->set('title',$_POST['title']);
            $item2 = $this->set('date',$_POST['date']);
            $item3 = $this->set('categoryID',$_POST['categoryID']);
            $item4 = $this->set('content',$_POST['content']);
            
            $data = array($item1, $item2, $item3, $item4);
            $result = $this->postObject->addPost($data);

	}
	
}
