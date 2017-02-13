<?php
namespace DianJi\Controller;
use Think\Controller;
class DianJiController extends Controller {
	public function dianJiIndex()
	{
		$this->display();
	}

	public function computeDianJi($result, $numberOfDianJi, $batteryCapacity)
	{
		$voltage = $result['volts'] * 3.6;
		$power = $batteryCapacity * $voltage;
		$flyTime = $batteryCapacity / ($voltage * $power * $numberOfDianJi);
		$allPower = $power * $numberOfDianJi;
		$efficiency = number_format($result['force'] / $power);
		$adviseAmps = ((int)($result['amps'] / 10) + 1) * 10 ;

		$this->assign('batteryCapacity' , $batteryCapacity);
		$this->assign('allAmps' , $result['amps'] * $numberOfDianJi);
		$this->assign('allPower' , $allPower);
		$this->assign('flyTime' , number_format($flyTime ,2));
		$this->assign('safeForce' , $result['force'] * $numberOfDianJi * 0.5);
		$this->assign('efficiency' , $efficiency);

		$this->assign('dianJiStyle' , $result['dianjistyle']);
		$this->assign('item_no' , $result['item_no']);
		$this->assign('amps' , $result['amps']);
		$this->assign('kv' , $result['kv']);
		$this->assign('oper_temperature' , $result['oper_temperature']);
		$this->assign('jiangSize' , $result['jiangsize']);
		$this->assign('adviseAmps' , $adviseAmps);

		$this->display('result');
	}

	public function computeDianJiStyle()
	{
		$numberOfDianJi = $_GET['numberOfDianJi'];
		$batteryCapacity = $_GET['batteryCapacity'];
		$allUserBesyForce = $_GET['catchWeight'];

		$userBestForce = $allUserBesyForce / $numberOfDianJi;

		try {
			$Dianji = new \Common\Model\DianjiModel();
			//挑选最接近最佳拉力的结果
			$result = $Dianji->query("SELECT * FROM dianji WHERE ABS(bestForce-".$userBestForce.")=(SELECT MIN(ABS(bestForce-".$userBestForce.")) FROM dianji)");

			if (count($result) == 1) {
				// echo $Dianji->getLastSql();
				$this->computeDianJi($result[0], $numberOfDianJi, $batteryCapacity);
			}
			else{
				echo "没有找到符合您条件的类型";
			}
		} catch (Exception $e) {
			echo "ERROR! \n Please Return!";
		}
	}

}