<?php
//开启session
	session_start();
	require_once("tpl.class.php");
	require_once("db.php");
	@$u_num=$_SESSION['u_num'];
	if($u_num==""){
		echo "<script>alert('您还没有登陆，请登陆！');window.location='index.php';</script>";die;
	}else{
		$smarty->assign("u_num",$u_num);
	}

	//退出系统
	if(isset($_GET['logout'])){
		echo "<script>window.location='index.php';</script>";
		session_destroy();
	}

	$smarty->assign("u_name",$u_name);
//展示
	$smarty->display("show.tpl");
?>