<?php
class Shelf extends CI_Model {
	private $books = array();
	const file_name = FCPATH.'/shelf.txt';
	
	function __construct(){
		
		if(!file_exists(self::file_name)){
			$file = fopen(file_name, 'w'); 
			if(!$file)
				throw new Exception('Error opening file: '+self::file_name);
			fclose($file); 
		}
		$this->books = file(self::file_name,FILE_IGNORE_NEW_LINES);
	}
	
	function count(){
		return count($this->books);
	}
	
	function get(){
		if(empty($this->books)){
			return false;
		}
		$book = array_pop($this->books);
		$this->save();
		return $book;
	}
	
	function put($book){
		array_push($this->books,$book);
		$this->save();
	}
	function save(){
		$content = implode("\n",$this->books);
		file_put_contents(self::file_name,$content);
	}
}