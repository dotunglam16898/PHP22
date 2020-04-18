<?php
require('model/User.php');

class UserController {
	public $model;

	public function __construct(){
		$this->model= new User();
	}

	public function list_user(){
		$users= $this->model->all();
		require('views/user/list_user.php');
	}

	public function detail_user(){
		$id= $_GET['id'];
		$user = $this->model->getId($id);
		require('views/user/detail_user.php');

	}

	public function delete_user(){
		$id = $_GET['id'];
		$this->model->delete($id);
		header("Location: /lession%209%20MVC(1)/MVC/index.php?mod=user&act=list_user");

	}

	public function add_user(){
		


		require_once('views/user/add_user.php');

	}

	public function store_user(){
		$id= $_POST['id'];
		$data= $_POST;
		$this->model->insert($data);
		header('location:/lession%209%20MVC(1)/MVC/index.php?mod=user&act=list_user');

	}

	public function edit_user(){
		$id= $_GET['id'];
		$user = $this->model->getId($id);
		require('views/user/edit_user.php');
	}

	public function update_user(){
		$id= $_POST['id'];
		$data= $_POST;

		//update
		$this->model->update($data,$id);
		header('location:/lession%209%20MVC(1)/MVC/index.php?mod=user&act=list_user');

	}
	

}


?>