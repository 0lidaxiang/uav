<?php
namespace Admin\Controller;
use Think\Controller;
class AdminDianJiController extends Controller {
	public function adminDianJiIndex(){
		$this->display('adminDianJiIndex');
	}

	public function adminAddDianJi()
	{
		$Status = new \Common\Controller\CommonController;
		$Status->checkAdminUserIsOnline("adminAddDianJi");
	}

	public function addDianJiStyle(){
		$data['id'] = $_POST['dianJiId'];
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
			$result = $Dianji->where("id="."'".$data['id']."'")->limit(1)->select();

			if (count($result) == 0) {
				$addResult = $Dianji->add($data);
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

	public function adminModifyDianJi(){
		$dianJiId = $_GET['dianJiId'];
		$this->assign('dianJiId' , $dianJiId);
		$this->display('adminModifyDianJi');
	}
	public function modifyDianJi(){
		$data['id'] = $_POST['dianJiId'];
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
			$result = $Dianji->where("id="."'".$data['id']."'")->limit(1)->save($data);

			if (count($result) == 1) {
				echo 10;
			}
			else{
				echo 20;
			}
		} catch (Exception $e) {
			echo 30;
		}
	}

	public function delteDianJi(){
		$data['dianJiId'] = $_POST['dianJiId'];

		try {
			$Dianji = new \Common\Model\DianjiModel();
			$result = $Dianji->where("id="."'".$data['dianJiId']."'")->limit('1')->delete();

			if ($result == 1) {
				echo 10;
			}
			else{
				echo 20;
			}
		} catch (Exception $e) {
			echo 30;
		}
	}

	public function createDianJiId(){
		$uniqid = uniqid(mt_rand(1,100000000000), true);
		$id = substr($uniqid,0,10);
		$DianJi = new \Common\Model\DianjiModel();
		$result = $DianJi->where("id = ".$id)->select();
		if (count($result) > 0) {
			echo 1;
		}else{
			echo $id;
		}
	}

}