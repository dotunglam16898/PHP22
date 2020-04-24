<?php
require_once('model/Category.php');
require_once('controllers/BaseController.php');

class CategoryController extends BaseController{
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
		// require_once('views/category/list.php');
		$this->view('category/list.php', compact('categories'));
		// $this->view('category/list.php', [
		// 	'categories' => $categories

		// ]);
	}

	//index.php?mod=category&act=detail&id=1
	public function detail(){
		$id= $_GET['id'];
		$category = $this->model->getId($id);

		 //require_once('views/category/detail.php');
		$this->view('category/detail.php', compact('category'));

	}
//index.php?mod=category&act=edit&id=1
	public function edit(){
		$id= $_GET['id'];
		$category = $this->model->getId($id);

		 //require_once('views/category/edit.php');
		$this->view('category/edit.php', compact('category'));

	}
	//index.php?mod=category&act=update
	public function update(){
		$id= $_POST['id'];
		$data= $_POST;

		//update
		$this->model->update($data,$id);
		// header('location:/lession%209%20MVC(1)/MVC/index.php?mod=category&act=list');
		$this->redirect("/lession%2010MVC(2)fix/MVC/index.php?mod=category&act=list");



		//echo "update";

	}
	public function delete(){
		$id= $_GET['id'];
		$this->model->delete($id);
		// header('location:/lession%209%20MVC(1)/MVC/index.php?mod=category&act=list');
		$this->redirect("/lession%2010MVC(2)fix/MVC/index.php?mod=category&act=list");
		
	}

	public function add(){
		$categories = $this->model->all();


		 // require_once('views/category/add.php');
		$this->view('category/add.php', compact('categories'));

	}

	public function store(){
		$id= $_POST['id'];
		$data= $_POST;
		$this->model->insert($data);
		// header('location:/lession%209%20MVC(1)/MVC/index.php?mod=category&act=list');
		$this->redirect("/lession%2010MVC(2)fix/MVC/index.php?mod=category&act=list");

	}

}


?>