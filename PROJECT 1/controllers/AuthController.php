

<?php
require_once 'model/User.php';
require_once 'controllers/BaseController.php';
class AuthController extends BaseController{
	protected $user;
	public function __construct(){
		$this->user = new User();
	}

	public function login(){
		if (!isset($_POST['btn_submit'])) {
			$this->view('auth/login.php'); 
		}else{
			$email = $_POST['email'];
			$password = $_POST['password'];

			//kiem tra dieu kien
			//C1: kiem tra dong thoi ca email va password
			$users = $this->user->where(['email' => $email, 'password' => md5($password)]);
			if (count($users) == 0 ) {
				setcookie('error','Đăng nhập không thành công!',time()+3);
				$this->redirect('/PROJECT%201/index.php?mod=auth&act=login');
				// echo "Dang nhap khong thanh cong";
				exit();
			}else{
				//Dang nhap thanh cong
				$user = $users[0];
				$_SESSION['name'] = $user['name'];
				setcookie('success','Đăng nhập thành công!',time()+3);
				//$this->redirect('/PROJECT%201/index.php');
				$this->redirect('/PROJECT%201/views/admin/blank.php');
			}

		}
	}

	// public function login(){
	// 	if (!isset($_POST['btn_submit'])) {    //  /lession%2011MVC(2)fix/MVC/views/auth/login.php
	// 		if (isset($_SESSION['user'])) {
	// 			// $this->redirect('/lession%2011MVC(2)fix/MVC/index.php?mod=home&act=index');
	// 		}else{
	// 			$this->view('auth/login.php');
	// 		}
	// 	}else{
	// 		$email = $_POST['email'];
	// 		$password = $_POST['password'];

	// 		$users = $this->user->where(['email' => $email , 'password' => md5($password)]);
	// 		if (count($users) == 0) {
	// 			setcookie("error","Ðang nhap không thành công",time()+3,"/","",0);
	// 			$this->redirect('/PROJECT%201/index.php?mod=auth&act=login');
	// 			exit();
	// 		}else{
	// 			$user = $users[0];
	// 			// $_SESSION['name'] = $user['name'];
	// 			$_SESSION['user'] = $user;
	// 			setcookie("success","Ðang nh?p thành công",time()+3,"/","",0);
	// 			$this->redirect('/PROJECT%201/views/admin/blank.php');
	// 		}
	// 	}
	// }
	

	public function logout(){
		unset($_SESSION['name']);
		$this->view('auth/login.php');
	}


	public function register(){   //  /lession%2011MVC(2)fix/MVC/views/auth/register.php
		if (empty($_POST)) {
			$this->view('auth/register.php');
		}else{
			$data = $_POST;
			//kiem tra user da ton tai ko
			$users = $this->user->where("email", $data['email']);
			if (count($users) !== 0) {
				
				setcookie("error","Email". $data['email'] . " Đã tồn tại ",time()+1 );
				$this->redirect('/PROJECT%201/index.php?mod=auth&act=register');
			}else if ($data['password'] !== $data['repassword']) {

				setcookie("error","Mật khẩu nhập lại không đúng!", time()+1);
				$this->redirect('/PROJECT%201/index.php?mod=auth&act=register');
			}else {
				$data['password'] = md5($data['password']);

				$data_insert = [
					'name' => $data['name'],
					'email' => $data['email'],
					'password' => $data['password']

				];
				$insert= $this->user->insert($data_insert);
				if ($insert) {
					setcookie("success", "Dang ky thanh cong!",time()+1);
					$this->redirect('/PROJECT%201/index.php?mod=auth&act=login');
				}else{
					setcookie("error","Dang ky that bai!", time()+1);
					$this->redirect('/PROJECT%201/index.php?mod=auth&act=register');
				}
			}
		}
	}
}
?>