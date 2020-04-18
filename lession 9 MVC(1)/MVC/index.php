<?php
$mod = $_GET['mod'];
$act = $_GET['act'];

//echo $mod.$act;
switch ($mod) {
	case 'category':
	require('controllers/CategoryController.php');
	$controller_obj = new  CategoryController();

	switch ($act) {
		case 'list':
		$controller_obj->list();
		break;

		case 'detail':
		$controller_obj->detail();
		break;	

		case 'edit':
		$controller_obj->edit();
		break;

		case 'update':
		$controller_obj->update();
		break;

		case 'delete':
		$controller_obj->delete();
		break;

		case 'add':
		$controller_obj->add();

		break;

		case 'store':
		$controller_obj->store();
		break;

		default:
		echo "ko ton tai action category";
		break;
	}
	break;


	case'user';
	require('controllers/UserController.php');
	$controller_user = new UserController();
	switch ($act) {
		case 'list_user':
		$controller_user->list_user();
		break;

		

		case 'detail_user':
		$controller_user->detail_user();
		break;

		case 'delete_user':
		$controller_user->delete_user();
		break;

		case 'add_user':
		$controller_user->add_user();
		break;

		case 'store_user':
		$controller_user->store_user();
		break;

		case 'edit_user':
		$controller_user->edit_user();
		break;

		case 'update_user':
		$controller_user->update_user();
		break;


		default:
		echo "ko ton tai action user";
		break;




		
	}


	case 'post':
	require('controllers/PostController.php');
	$controller_post= new PostController();

	switch ($act) {
		case 'list_post':
		$controller_post->list_post();
		break;

		case 'detail_post':
		$controller_post->detail_post();
		break;

		case 'delete_post':
		$controller_post->delete_post();
		break;

		case 'add_post':
		$controller_post->add_post();
		break;

		case 'store_post':
		$controller_post->store_post();
		break;

		case 'update_post':
		$controller_post->update_post();
		break;

		case 'edit_post':
		$controller_post->edit_post();
		break;
		
		default:
		// echo "ko ton tai action post";
		break;
	}
	break;




	default:
	
	break;
}
?>