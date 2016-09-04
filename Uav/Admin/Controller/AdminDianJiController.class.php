<?php
namespace Admin\Controller;
use Think\Controller;
class AdminDianJiController extends Controller {
	public function adminDianJiIndex(){
		$this->show("开发进化中~~~~~");
	}

	public function adminAddDianJi()
	{
		$Status = new \Common\Controller\CommonController;
		$Status->checkAdminUserIsOnline("adminAddDianJi");
	}

	public function baoming(){
		$data['id'] = $_POST['item_no'];
		$data['item_no'] = $_POST['item_no'];
		$data['volts'] = $_POST['volts'];
		$data['prop'] = $_POST['prop'];
		$data['throttle'] = $_POST['throttle'];
		$data['amps'] = $_POST['amps'];

		$data['watts'] = $_POST['watts'];
		$data['thrust'] = $_POST['thrust'];
		$data['rpm'] = $_POST['rpm'];
		$data['efficiency'] = $_POST['efficiency'];
		$data['torque'] = $_POST['torque'];
		$data['oper_temperature'] = $_POST['oper_temperature'];
		$data['create_time'] = date('Y-m-d H:i:s',time());

		try {
			$Dianji = new \Common\Model\DianjiModel();
			$result = $Dianji->where("id="."'".$data['id']."'")->limit(1)->select();

			if (count($result) == 0) {
				$addResult = $Dianji->add($data);
// echo $Dianji->getLastSql();
				//验证是否申请成功
				if($addResult){
					echo 0;
				}
			}
			else{
				echo 2;
			}
		} catch (Exception $e) {
			echo 3;
		}
	}

}