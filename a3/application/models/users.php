<?php
class Post extends Model{
	
	function getUser($uID){
		
		$sql =  'SELECT uID, email, first_name, last_name FROM users WHERE uID = ?';
		
		// perform query
		$results = $this->db->getrow($sql, array($pID));
		
		$post = $results;
	
		return $post;
	
	}
		
	public function getAllUsers($active = 0){
		
		if($limit = 0){
			
			$numusers = ' LIMIT '.$limit;
		}
		
		$sql =  'SELECT uID, email, first_name, last_name FROM users'.$numusers;
		
		// perform query
		$results = $this->db->execute($sql);
		
		while ($row=$results->fetchrow()) {
			$posts[] = $row;
		}

		return $posts;
	
	}
	
	public function addUser($data){
		
		$sql='INSERT INTO users (uID,email,password,first_name,last_name) VALUES (?,?)'; 
		$this->db->execute($sql,$data);
		$message = 'Post added.';
		return $message;
		
	}
	
}