<?php
require_once('model/Category.php');

class CategoryController{
	public $model;
	function __construct(){
		$this->model = new Category();
		//echo "category controller";
	}
	
	//index.php?mod=category&act=list
	public function list(){
		//lay du lieu
		$categories = $this->model->all();
		// var_dump($categories);
		// die();
		//goi den views
		require_once('views/category/list.php');
	}

	//index.php?mod=category&act=detail&id=1
	public function detail(){
		$id= $_GET['id'];
		$category = $this->model->getId($id);

		require_once('views/category/detail.php');
	}
//index.php?mod=category&act=edit&id=1
	public function edit(){
		$id= $_GET['id'];
		$category = $this->model->getId($id);

		require_once('views/category/edit.php');
	}
	//index.php?mod=category&act=update
	public function update(){
		$id= $_POST['id'];
		$data= $_POST;

		//update
		$this->model->update($data,$id);
		header('location:/lession%209%20MVC(1)/MVC/index.php?mod=category&act=list');



		//echo "update";

	}
	public function delete(){
		$id= $_GET['id'];
		$this->model->delete($id);
		header('location:/lession%209%20MVC(1)/MVC/index.php?mod=category&act=list');
		
	}

	public function add(){
		


		require_once('views/category/add.php');

	}

	public function store(){
		$id= $_POST['id'];
		$data= $_POST;
		$this->model->insert($data);
		header('location:/lession%209%20MVC(1)/MVC/index.php?mod=category&act=list');

	}

}


?>