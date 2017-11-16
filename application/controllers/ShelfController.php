<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ShelfController extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Shelf');
		$this->load->helper('url');
	}
	
	function index(){
		$this->load->view('index',array(
			'shelf' => $this->Shelf,
		));
	}
	
	function put(){
		$book = $this->input->post('book');
		if(!empty($book))
			$this->Shelf->put($book);
		$this->load->view('index',array(
			'shelf' => $this->Shelf,
		));
	}
	
	function get_and_read(){
		$book = $this->Shelf->get();
		$this->load->view('index',array(
			'shelf' => $this->Shelf,
			'book' => $book,
		));
	}
}