<?php
require_once('model/User.php');
require_once('controllers/BaseController.php');

class UserController extends BaseController{
	public $model;

	public function __construct(){
		$this->model= new User();
	}
//index.php?mod=user&act=list_user
	public function list_user(){
		$users= $this->model->all();
		//require('views/user/list_user.php');
		$this->view('user/list_user.php', compact('users'));
	}

	public function detail_user(){
		$id= $_GET['id'];
		$user = $this->model->getId($id);
		//require('views/user/detail_user.php');
		 $this->view('user/detail_user.php', compact('user'));
		
	}

	public function delete_user(){
		$id = $_GET['id'];
		$this->model->delete($id);
		//header("Location: /lession%209%20MVC(1)/MVC/index.php?mod=user&act=list_user");
		$this->redirect('/PROJECT%201/index.php?mod=user&act=list_user');

	}

	public function add_user(){
		$users= $this->model->all();


		//require_once('views/user/add_user.php');
		$this->view('user/add_user.php', compact('users'));

	}

	public function store_user(){
		$id= $_POST['id'];
		$data= $_POST;
		$this->model->insert($data);
		// header('location:/lession%209%20MVC(1)/MVC/index.php?mod=user&act=list_user');
		$this->redirect('/PROJECT%201/index.php?mod=user&act=list_user');

	}

	public function edit_user(){
		$id= $_GET['id'];
		$user = $this->model->getId($id);
		//require('views/user/edit_user.php');
		$this->view('user/edit_user.php', compact('user'));
	}

	public function update_user(){
		$id= $_POST['id'];
		$data= $_POST;

		//update
		$this->model->update($data,$id);
		//header('location:/lession%209%20MVC(1)/MVC/index.php?mod=user&act=list_user');
		$this->redirect('/PROJECT%201/index.php?mod=user&act=list_user');


	}
	

}


?>