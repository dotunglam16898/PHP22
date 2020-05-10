<?php
require_once('controllers/BaseController.php');
require_once "model/Post.php";
require_once "model/Category.php";
require_once "model/User.php";

class HomeController extends BaseController{
	public $post;
	function __construct(){
		$this->post = new Post();
	}
	public function vlog(){
		$posts = $this->post->select([""])->limit(3)->get();
		$this->view('frontend/about.html',[
			"posts" => $posts,



		]);
	}
	public function index(){
		$posts = $this->post->select([""])->limit(4)->get();
		$category = new Category();
		$user = new User();
		$categories = $category->select([""])->get();
		$users = $user->select([""])->get();
		
		// echo "<pre>";
		// 	print_r($categories);
		// echo "</pre>";
		// die();
		$this->view("frontend/index.html",[
			"posts" => $posts,
			"categories" => $categories,
			"users" => $users,
		]);
	}
	public function showCategory(){
		$id = $_GET['id'];
		$category = new Category();
		$posts = $this->post->select([""])->where1(["category_id" => $id])->get();
		// $category_class = $this->model->select(["name"])->where1(["id"=>$id])->get();
		$categories = $category->select([""])->get();
		$this->view("frontend/category_blog.php",[
			"posts" => $posts,
			"categories" => $categories,
			// "category_class"=>$category_class,
			"users" => $users,
		]);
		// echo "<pre>";
		// 	print_r($posts);
		// echo "</pre>";
		// die();

	}
	public function contact(){
		
		$posts = $this->post->select([""])->limit(2)->get();
		$category = new Category();
		$categories = $category->select([""])->get();
		$this->view("frontend/contact.html",[
			"posts" => $posts,
			"categories" => $categories,


		]);
	}

	public function viewPost(){  // Luot xem = 100  // đang test dở
		// $id= $_GET['id'];
		$posts = $this->post->select([""])->orderby("view_count")->limit(6)->get();
		$this->view("frontend/view_count.php",[
			"posts" => $posts,
		]);
		

	}

	public function newPost(){  // Bài viết mới nhất  // đang test dở
		$category = new Category();
		$user = new User();
		$categories = $category->select([""])->get();
		$users = $user->select([""])->get();
		$posts= $this->post->select([""])->orderby("created_at")->limit(4)->get();
		// echo "<pre>";
		// 	print_r($posts);
		// echo "</pre>";
		// die();
		$this->view("frontend/new_post.php",[
			"posts" => $posts,
			"categories" => $categories,
			"users" => $users,
		]);
	}
}


?>