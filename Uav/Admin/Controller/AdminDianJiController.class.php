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

	public function addDianJiStyle(){
		$data['item_no'] = $_POST['item_no'];
		$data['style'] = $_POST['style'];
		$data['kv'] = $_POST['kv'];
		$data['amps'] = $_POST['amps'];
		$data['volts'] = $_POST['volts'];
		$data['force'] = $_POST['force'];

		$data['bestAmps'] = $_POST['bestAmps'];
		$data['bestForce'] = $_POST['bestForce'];
		$data['oper_temperature'] = $_POST['oper_temperature'];
		$data['jiangSize'] = $_POST['jiangSize'];
		$data['create_time'] = date('Y-m-d H:i:s',time());

		try {
			$Dianji = new \Common\Model\DianjiModel();
			$result = $Dianji->where("item_no="."'".$data['item_no']."'")->limit(1)->select();

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