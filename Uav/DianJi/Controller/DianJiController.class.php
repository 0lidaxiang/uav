<?php
namespace DianJi\Controller;
use Think\Controller;
class DianJiController extends Controller {
	public function dianJiIndex()
	{
		$this->display();
	}

	public function computeDianJi($result, $numberOfDianJi)
	{
		$batteryCapacity = $result['amps'];
		$voltage = $result['volts'] * 3.6;
		$power = $batteryCapacity * $voltage;
		$flyTime = $batteryCapacity / ($voltage * $power * $numberOfDianJi);

		$this->assign('flyTime' , number_format($flyTime ,2));
		$this->assign('item_no' , $result['item_no']);
		$this->assign('kv' , $result['kv']);
		$this->assign('amps' , $result['amps']);
		$this->assign('volts' , $result['volts']);//单位不是伏特
		$this->assign('power' , $power);
		$this->assign('force' , $result['force']);
		$this->assign('bestAmps' , $result['bestamps']);
		$this->assign('bestForce' , $result['bestforce']);
		$this->assign('oper_temperature' , $result['oper_temperature']);
		$this->assign('jiangSize' , $result['jiangsize']);

		$this->display('result');
	}

	public function computeDianJiStyle()
	{
		$numberOfDianJi = $_GET['numberOfDianJi'];
		$allUserBesyForce = $_GET['catchWeight'];

		$userBestForce = $allUserBesyForce / $numberOfDianJi;

		try {
			$Dianji = new \Common\Model\DianjiModel();
			//挑选最接近最佳拉力的结果
			$result = $Dianji->query("SELECT * FROM dianji WHERE ABS(bestForce-".$userBestForce.")=(SELECT MIN(ABS(bestForce-".$userBestForce.")) FROM dianji)");

			if (count($result) == 1) {
				// echo $Dianji->getLastSql();
				$this->computeDianJi($result[0], $numberOfDianJi);
			}
			else{
				echo "没有找到符合您条件的类型";
			}
		} catch (Exception $e) {
			echo "ERROR! \n Please Return!";
		}
	}

}