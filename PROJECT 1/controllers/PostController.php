<?php 
require_once'model/Post.php';
require_once'model/Category.php';
require_once'model/User.php';
require_once'model/Model.php';
require_once'controllers/BaseController.php';
require_once'controllers/helper.php';

class PostController extends BaseController{
	protected $model;

	function __construct(){
		$this->post_model = new Post();
	}
	public function list_post(){//index
		//L?y d? li?u:
		$posts = $this->post_model->all();
		//G?i d?n view:
		$this->view('post/list_post.php',['posts'=> $posts]);
	}

	public function detail_post(){
		$id = $_GET['id'];
		$user_model = new User();
		$category_model = new Category();
		$users = $user_model->all();
		$categories = $category_model->all();
		$post = $this->post_model->getId($id);
		$post = $this->post_model->getPost($id);
		$this->view('post/detail_post.php',['post'=> $post]);

		
	}
	public function add_post(){//create
		
		$user_model = new User();
		$category_model = new Category();

		$posts = $this->post_model->all();
		$users = $user_model->all();
		$categories = $category_model->all();

		$this->view('post/add_post.php',['posts'=> $posts,'categories' =>$categories,'users'=>$users]);
	}

	public function store_post(){//store
		$helper = new helper();
		$data = $_POST;
		$data['content'] = htmlspecialchars($data['content']);
		$data['thumbnail'] = $helper->file_upload("Upload", "thumbnail", 50000000, ["img","jpg","jpeg"]);
		// echo "<pre>";
		// 	print_r($data['thumbnail']);
		// echo "</pre>";
		// die();
		$result = $this->post_model->insert($data);


		if ($result) {
			setcookie("success","T?o m?i thành công",time()+3);
			$this->redirect('index.php?mod=post&act=list_post');
		}else{
			setcookie("fail","T?o m?i th?t b?i",time()+3);
			$this->redirect('index.php?mod=post&act=list_post');
		}

	}

	public function delete_post(){//destroy
		$id = $_GET['id'];
		$result =$this->post_model->delete($id);
		if ($result) {
			setcookie("success","Xóa thành công",time()+3);
			$this->redirect('index.php?mod=post&act=list_post');
		}else{
			setcookie("fail","Xóa th?t b?i",time()+3);
			$this->redirect('index.php?mod=post&act=list_post');
		}
	}

	public function edit_post(){//edit
		$user_model = new User();
		$category_model = new Category();

		$post = $this->post_model->all();
		$users = $user_model->all();
		$categories = $category_model->all();
		$id = $_GET['id'];
		$post = $this->post_model->getId($id);

		$this->view('post/edit_post.php',['post'=> $post,'categories' =>$categories,'users'=>$users]);
		
	}

	public function update_post(){//update
		$helper = new helper();
		$data = $_POST;
		$data['content'] = htmlspecialchars($data['content']);
		$data['thumbnail'] = $helper->file_upload("Upload", "thumbnail",5000000,["img","jpg","jpeg"]);
		$result = $this->post_model->update($data);
		if ($result) {
			setcookie("success","C?p nh?t thành công",time()+3);
			$this->redirect('index.php?mod=post&act=list_post');
		}else{
			setcookie("fail","C?p nh?t th?t b?i",time()+3);
			$this->redirect('index.php?mod=post&act=list_post');
		}
	}
}


?>