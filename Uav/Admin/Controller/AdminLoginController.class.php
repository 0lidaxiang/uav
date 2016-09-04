<?php
namespace Admin\Controller;
use Think\Controller;
class AdminLoginController extends Controller {
	public function adminLogin(){
		// $this->display();
		if (isset($_SESSION['adminUserId'])) {
			$this->success('已经成功登录管理后台！正在跳转到主页',"/index.php/Admin/AdminDianJi/adminAddDianJi",2);
		}
		else{
			$this->display("adminLogin");
		}
	}

	public function logout(){
		unset($_SESSION['adminUserId']);
		unset($_SESSION['adminUserName']);
		// session_destroy();
		echo "<script>location.href='/index.php/Admin/AdminLogin/adminLogin';</script>";
	}

	public function login(){
		$userId = $_POST['userId'];
		$password = $_POST['password'];

		try {
			$Admin = new \Common\Model\AdminModel();
			$result = $Admin->where("id="."'".$userId."'")->limit(1)->select();

			if (count($result) >0) {
				//验证是否允许登录
				if (strcmp($result[0]['login_status'],"admit") === 0) {
	          // 验证密码是否正确
					if (strcmp($password,$result[0]['password']) === 0) {
						// 检查是否存在该session变量
						if (!isset($_SESSION['adminUserId'])) {
							session_start();
							$_SESSION['adminUserId'] = $result[0]["id"];
							$_SESSION['adminUserName'] = $result[0]["name"];
						}
						echo 0;
					}
					else{
						echo 1;
					}
				}
				else if(strcmp($result[0]['login_status'],"checking") === 0){
	          // 表示登录资格正在被审核中
					echo 5;
				}
				else if(strcmp($result[0]['login_status'],"abuse") === 0){
						//表示被拒绝登录
					echo 4;
				}
			}
			else{
				echo 12;
			}
		} catch (Exception $e) {
			echo 3;
		}
	}

}