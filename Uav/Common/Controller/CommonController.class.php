<?php
namespace Common\Controller;
use Think\Controller;
class CommonController extends Controller {
	// 检查学生和教师是否在登录状态，否则跳转到登录页面
	// public function checkUserIsOnline($url)
	// {
	// 	if (isset($_SESSION['userId'])) {
	// 		$this->display($url);
	// 	}
	// 	else{
	// 		$this->success('登录失效','/index.php/Home/Home/index',2);
	// 	}
	// }

	// 检查管理员是否在登录状态，若失败则跳转到登录页面
	public function checkAdminUserIsOnline($successUrl)
	{
		// session_start();
		if (isset($_SESSION['adminUserId'])) {
			// if (isset($_SESSION['userId'])) {
				// $this->success('您已经登录学生端！请先退出','/index.php/Home/Home/index',2);
			// }
			// else{
				$this->display($successUrl);
			// }
		}
		else{
			$this->success('登录失效',"/index.php/Admin/AdminLogin/adminLogin",2);
		}
	}

	// // 展示session值
	// public function showSession(){
	// 	// session_start();
	// 	echo session_id()."<br>";
	// 	foreach ($_SESSION as $key => $value) {
	// 		echo $key.":".$value."\n";
	// 	}
	// 	echo "<br>";
	// 	echo "SESSION['adminUserId']:".$_SESSION['adminUserId'];
	// 	echo "<br>";
	// 	echo "SESSION['adminUserName']:".$_SESSION['adminUserName'];
	// 	echo "<br>";
	// 	echo "SESSION['userId']:".$_SESSION['userId'];
	// 	echo "<br>";
	// 	echo "<br>";
	// 	echo "<br>";
	// }

}
