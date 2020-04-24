<?php 
require_once'model/Post.php';
require_once'model/Category.php';
require_once'model/User.php';
require_once'controllers/BaseController.php';


class PostController{
	public $model;
	public $user;
	public $category;


	function __construct(){
		$this->post_model = new Post();
	}
	public function list_post(){//index
		//Lấy dữ liệu:
		$posts = $this->post_model->all();
		//Gọi đến view:
		// require_once 'views/post/list_post.php';
		$this->view('post/list_post.php', compact('posts'));
	}
	public function add_post(){//create
		$user_model = new User();
		$category_model = new Category();

		$posts = $this->post_model->all();
		$users = $user_model->all();
		$categories = $category_model->all();

		// require_once 'views/post/add_post.php';
		$this->view('post/add_post.php', compact('categories','users'))
	}
	public function store_post(){//store
		$data = $_POST;
		$data['content'] = htmlspecialchars($data['content']);
		$result = $this->post_model->add($data);


		if ($result) {
			setcookie("success","Tạo mới thành công",time()+3);
			header('Location:index.php?mod=post&act=list_post');
		}else{
			setcookie("fail","Tạo mới thất bại",time()+3);
			header('Location:index.php?mod=post&act=list_post');
		}

	}
	public function detail_post(){
		$id = $_GET['id'];
		$user_model = new User();
		$category_model = new Category();
		$users = $user_model->all();
		$categories = $category_model->all();
		$post = $this->post_model->getById($id);
		$post = $this->post_model->getPost($id);
		require_once('views/post/detail_post.php');
	}
	public function edit_post(){//edit
		$user_model = new User();
		$category_model = new Category();

		$post = $this->post_model->all();
		$users = $user_model->all();
		$categories = $category_model->all();
		$id = $_GET['id'];
		$post = $this->post_model->getById($id);

		require_once 'views/post/edit_post.php';
	}
	public function update_post(){//update
		$data = $_POST;
		$data['content'] = htmlspecialchars($data['content']);
		$result = $this->post_model->update($data);
		if ($result) {
			setcookie("success","Tạo mới thành công",time()+3);
			header('Location:index.php?mod=post&act=list_post');
		}else{
			setcookie("fail","Tạo mới thất bại",time()+3);
			header('Location:index.php?mod=post&act=list_post');
		}
	}
	public function delete_post(){//destroy
		$id = $_GET['id'];
		// $post = $this->post_model->getById($id);
		$result =$this->post_model->Delete($id);
		if ($result) {
			setcookie("success","Tạo mới thành công",time()+3);
			header('Location:index.php?mod=post&act=list_post');
		}else{
			setcookie("fail","Tạo mới thất bại",time()+3);
			header('Location:index.php?mod=post&act=list_post');
		}
	}
}


?>